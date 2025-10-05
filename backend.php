<?php
/*
 * BlastenBlaster Backend
 * by Jeremy Deuel <jeremy.deuel@usz.ch>
 * Version 1.0 28. September 2024
 *
 * Create database first by running
 * sqlite3 blaster.db < setup_database.sql
 *
 * Test-Run by php -S localhost:8080
 * then open http://localhost:8080
 */
require_once('secrets.php'); 

session_start();

function getUserLanguage(): string
{
    // 1. Check if the header exists. If not, return a safe default.
    if (!isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        return 'en';
    }

    $acceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $languages = [];

    // Split the string by commas to separate individual language preference groups
    $langParts = explode(',', $acceptLanguage);

    foreach ($langParts as $part) {
        // Trim whitespace and split by semicolon to separate the code from the 'q' factor
        $subParts = explode(';', trim($part));

        // The first subPart is the language/locale code (e.g., "en" or "en-US")
        $langCode = strtolower(trim($subParts[0]));

        $quality = 1.0; // Default quality value if 'q' is not specified

        // Check for the 'q=' factor in the remaining subParts
        if (count($subParts) > 1) {
            foreach ($subParts as $subPart) {
                // Check if the part starts with 'q='
                if (strpos(trim($subPart), 'q=') === 0) {
                    // Extract the float value after 'q='
                    $quality = (float)substr(trim($subPart), 2);
                    break;
                }
            }
        }

        // Store the language and its quality. We track the highest quality seen for a language.
        if (!isset($languages[$langCode]) || $quality > $languages[$langCode]) {
            $languages[$langCode] = $quality;
        }
    }

    // 3. Sort languages by quality (descending)
    arsort($languages);

    // 4. Return the key (language code) of the first element (highest quality)
    if (!empty($languages)) {
        return key($languages);
    }

    // 5. Final fallback
    return 'en';
}
global $lang;
if (array_key_exists('lang', $_GET)) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
} else {
  if (array_key_exists('lang',$_SESSION)) {
      $lang = $_SESSION['lang'];
  } else {
      $lang = getUserLanguage();
  }
}


global $_;
switch(strtolower(substr($lang,0,2))) {
    case 'de':
        $_ = require 'lang/lang.de.php';
        break;
    case 'fr':
        $_ = require 'lang/lang.fr.php';
        break;
    case 'es':
        $_ = require 'lang/lang.es.php';
        break;
    case 'it':
        $_ = require 'lang/lang.it.php';
        break;
    default:
        $_ = require 'lang/lang.en.php';
        break;
}
 
$db = new PDO(DB_CONNECTION, DB_USER, DB_PASSWORD);
$base_url = BASE_URL;
class User {
    
    static $currentUser = NULL;

    public int $id;
    public string $password;
    public string $username;
    public string $email;
    public int $proficiency;

    function __construct($id, $password, $username, $email, $proficiency) {
        $this->id = $id;
        $this->password = $password;
        $this->username = $username;
        $this->email = $email;
        $this->proficiency = $proficiency;
    }
    
    function getPasswordResetToken() {
        return hash('sha256',hash('sha256', "Token to do the password reset. Only sent by mail, never on the website." . INSTANCE_KEY . $this->password . date("Ymd") . $this->username));
    }

    function getPasswordResetRequestToken() {
        return hash('sha256',hash('sha256', "Token to request the password reset. Basically to prevent CSRF. Not secret." . INSTANCE_KEY . date('Ymd') . $this->username));
    }

    function checkPasswordResetRequestToken($token) {
        return $token == $this->getPasswordResetRequestToken();
    }

    function checkPasswordResetToken($token) {
        return $token == $this->getPasswordResetToken();
    }

    static public function checkPasswordComplexity($pwd, &$errors) {
        $errors_init = $errors;

        if (strlen($pwd) < 8) {
            $errors .= $_['pw_to_short'];
        }

        if (!preg_match("#[0-9]+#", $pwd)) {
            $errors .= $_['pw_no_number'];
        }

        if (!preg_match("#[a-zA-Z]+#", $pwd)) {
            $errors .= $_['pw_no_letter'];
        }

        return ($errors == $errors_init);
    }
    
    function validate($password) {
        return password_verify($password, $this->password);
    }
    
    function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }
    
    function create() {
        global $db;
        assert($this->id == 0); #prevent re-creation
        $stmt = $db->prepare("INSERT INTO users (password, email, proficiency, username) VALUES (:password, :email, :proficiency, :username);");
        $stmt->bindParam(':username', $this->username, PDO::PARAM_STR);
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
        $stmt->bindParam(':proficiency', $this->proficiency, PDO::PARAM_INT);
        $stmt->execute();
        $stmt = $db->prepare('SELECT id FROM users WHERE password=:password AND email=:email;');
        $stmt->bindParam(':email',$this->email, PDO::PARAM_STR);
        $stmt->bindParam(':password',$this->password, PDO::PARAM_STR);
        $stmt->execute();
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        assert(is_array($r));
        $this->id = $r['id'];
    }
    
    function save() {
        global $db;
        if ($this->id==0) {
            return $this->create();
        }
        $stmt = $db->prepare("UPDATE users SET password=:password, username=:username, email=:email, proficiency=:proficiency WHERE id=:id;");
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindParam(':username', $this->username, PDO::PARAM_STR);
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
        $stmt->bindParam(':proficiency', $this->proficiency, PDO::PARAM_INT);
        $stmt->execute();
    }
    
    function login() {
        $_SESSION['user']=$this->id;
        User::$currentUser=$this;
    }
        
    function addScore($score,$proficiency) {
        global $db;
        $stmt = $db->prepare("INSERT INTO scores (uid, score, date) VALUES (:uid, :score, current_timestamp())");
        $stmt->bindParam(':uid', $this->id, PDO::PARAM_INT);
        $stmt->bindParam(':score', $score, PDO::PARAM_INT);
        $stmt->execute();
        if ($proficiency > 0) {
            $this->proficiency = $proficiency;
            $this->save();
        }
            
    }
    
    function getCellNumber($year=NULL) {
        global $db;
        if (is_null($year)) $year=date('Y');
        $stmt = $db->prepare("SELECT count(*) as cnt FROM guesses WHERE uid=:uid AND date > '".$year."-01-01' AND date < '".($year+1)."-01-01';");
        $stmt->bindParam(':uid', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['cnt'];
    }

    static function get($id) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM users WHERE id=:id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            return new User($r['id'], $r['password'], $r['username'], $r['email'],$r['proficiency']);
        } else {
            return NULL;
        }
    }
    
    static function leaders() {
        global $db;
        $stmt = $db->prepare("SELECT uid, username, scores.score AS best_score, scores.date AS earliest_date FROM scores INNER JOIN users ON scores.uid=users.id ORDER BY best_score DESC, earliest_date ASC");
        $stmt->execute();
        $opt = array();
        $done = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if (!in_array($row['uid'], $done)) {
            array_push($opt,array(
            'username' => $row['username'],
            'date' => $row['earliest_date'],
            'proficiency' => $row['best_score']));
            array_push($done, $row['uid']);
            if (count($done)>9) break;
        }
        
        }
        return $opt;
    }
    
    static function current() {

        if (!is_null(User::$currentUser)) {

            return User::$currentUser;
        }
        if (array_key_exists('user',$_SESSION)) {
            User::$currentUser=User::get($_SESSION['user']);
            return User::$currentUser;
        }

        return NULL;
    }
    
    static function logout() {
        session_unset();
        User::$currentUser = null;
    }

    static function findByEmail($email) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM users WHERE email=:email LIMIT 1");
        $email = strtolower($email);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $r = $stmt->execute();
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            return new User($r['id'], $r['password'], $r['username'], $r['email'], $r['proficiency']);
        } else {
            return NULL;
        }
    }

    static function findByUsername($username) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM users WHERE username=:username LIMIT 1");
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $r = $stmt->execute();
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            return new User($r['id'], $r['password'], $r['username'], $r['email'], $r['proficiency']);
        } else {
            return NULL;
        }
    }
}

class Cell {

    public int $id;
    public string $path;
    public string $type;
    public float $confidence;

    function __construct($id, $path, $type, $confidence) {
        $this->id = $id;
        $this->path = $path;
        $this->type = $type;
        $this->confidence = $confidence;
    }
    
    function create() {
        global $db;
        $stmt = $db->prepare("INSERT INTO cells (path, type, confidence) VALUES (:path, :type, :confidence);");
        $stmt->bindParam(':path', $this->path, PDO::PARAM_STR);
        $stmt->bindParam(':type', $this->type, PDO::PARAM_STR);
        $stmt->bindParam(':confidence', $this->confidence, PDO::PARAM_STR);
        $stmt->execute();
        $this->id = $db->lastInsertId();

    }
    
    function save() {
        global $db;
        if ($this->id==0) {
            return $this->create();
        }
        $stmt = $db->prepare("UPDATE cells SET path=:path, type=:type, confidence=:confidence WHERE id=:id;");
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindParam(':path', $this->path, PDO::PARAM_STR);
        $stmt->bindParam(':type', $this->type, PDO::PARAM_STR);
        $stmt->bindParam(':confidence', $this->confidence, PDO::PARAM_STR);
        $stmt->execute();
    }
        
    static function get($id) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM cells WHERE id=:id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            return new Cell($r['id'], $r['path'], $r['type'], $r['confidence']);
        } else {
            return NULL;
        }
    }

    static function exists($path) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM cells WHERE path=:path");
        $stmt->bindParam(':path', $path, PDO::PARAM_STR);
        $stmt->execute();
        $r = $stmt->fetch(SQLITE3_ASSOC);
        if ($r) {
            return new Cell($r['id'], $r['path'], $r['type'], $r['confidence']);
        } else {
            return NULL;
        }
    }

    static function get_random_cell($types) {
        global $db;
        $types = str_split($types);
        $select = [];
        foreach ($types as $type) {
            if ((ord($type) > 96 & ord($type) <123) | ord($type) == 32) {
                $select[] = $type;
            }
        }
        if (empty($select)) {
            $stmt = $db->prepare(sprintf("SELECT id, path, type, confidence FROM cells WHERE confidence=1 ORDER BY RAND() LIMIT 1",join("','",$select)));
        } else {
            $stmt = $db->prepare(sprintf("SELECT id, path, type,  confidence FROM cells WHERE type IN ('%s') AND confidence=1 ORDER BY RAND() LIMIT 1",join("','",$select)));
        }
        $stmt->execute();
        $cell = $stmt->fetch(PDO::FETCH_ASSOC);
        return new Cell($cell['id'], $cell['path'], $cell['type'], $cell['confidence']);
    }
    
    static function get_random_competition_cell($types) {
        if (User::current()->proficiency < 3) { //send only "good" random cells if user has proficiency <=3
            # Dont send weird cells if user is not proficient.
            return Cell::get_random_cell($types);
        }
        
        global $db;
        $types = str_split($types);
        $select = [];
        foreach ($types as $type) {
            if ((ord($type) > 96 & ord($type) <123) | ord($type) == 32) {
                $select[] = $type;
            }
        }
        if (empty($select)) {
            $stmt = $db->prepare(sprintf("SELECT id, path, type, confidence FROM cells ORDER BY RAND() LIMIT 1",join("','",$select)));
        } else {
            $stmt = $db->prepare(sprintf("SELECT id, path, type,  confidence FROM cells WHERE type IN ('%s') ORDER BY RAND() LIMIT 1",join("','",$select)));
        }
        $stmt->execute();
        $cell = $stmt->fetch(PDO::FETCH_ASSOC);
        return new Cell($cell['id'], $cell['path'], $cell['type'], $cell['confidence']);
    }

    public function json() {
        return json_encode(array(
            'cid' => $this->id,
            'type' => $this->type,
            'confidence' => $this->confidence,
            'path' => $this->path
        ));
    }
    
    public function competition_json() {
        return json_encode(array(
            'cid' => $this->id,
            'path' => $this->path
        ));
    }
}

function add_guess($cid, $uid, $type, $proficiency=0) {
    global $db;
    $stmt = $db->prepare("INSERT INTO guesses (cid, uid, type, proficiency, date) VALUES (:cid, :uid, :type, :proficiency, current_timestamp())");
    $stmt->bindParam(':cid', $cid, PDO::PARAM_INT);
    $stmt->bindParam(':uid', $uid, PDO::PARAM_INT);
    $stmt->bindParam(':type', $type, PDO::PARAM_STR);
    $stmt->bindParam(':proficiency', $proficiency, PDO::PARAM_INT);
    $stmt->execute();        
}


function highscore() {
    global $db;
    return ($db->query("SELECT users.username AS username, date, score FROM scores ORDER BY score, date DESC DISTINCT username LEFT_JOIN users ON scores.uid=users.id ORDER BY score DESC LIMIT 10;")->fetchAll(PDO::FETCH_ASSOC));
}

?>
