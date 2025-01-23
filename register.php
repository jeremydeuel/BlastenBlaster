<?php
require_once("backend.php");
$register_error = null;
global $base_url;
if (in_array('register', array_keys($_POST))) {
    if (!preg_match("/^[a-zA-Z][a-zA-Z-_0-9]{2,}$/",$_POST['username'])) {
        $register_error = "Der Benutzername muss mindestens 3 Zeichen lang sein und darf weder Space noch Sonderzeichen enthalten.";
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $register_error = "Bitte geben Sie eine gültige Emailadresse ein.";
    }
    if (!$register_error) {
        // check if username or password already exist
        if ($user = User::findByEmail($_POST['email'])) {
            $register_error = "Diese Emailadresse wird bereits verwendet. <a class='btn btn-outline-primary' href='registered.php?uid=".$user->uid."&pw_reset=".$user->getPasswordResetRequestToken()."'>Passwort zurücksetzen</a>";
        } elseif ($user = User::findByUsername($_POST['username'])) {
            $register_error = "Dieser Username wird bereits verwendet. Bitte wählen Sie einen anderen Benutzernamen.";
        }
    }
    if (!$register_error) {
        try {
            $user = new User(0, htmlspecialchars($_POST['username']),htmlspecialchars($_POST['email']), date("Ymd") . bin2hex(random_bytes(128)) , 0, "");
            $user->create();
            $headers = 'From: blaster@deuel.ch' . "\r\n" . 'Reply-To: blaster@deuel.ch' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
            sleep(10);
            mail($user->email, 'BlastenBlaster - Registriert', iconv ( 'utf-8', 'ISO-8859-2', sprintf("Hallo %s,". "\r\n" . "\r\n" .
                "Sie haben sich auf der BlastenBlaster-Homepage registriert. Bitte bestätigen Sie Ihre Emailadresse mit diesem Link:" . "\r\n" .
                "%s/registered.php?uid=%s&key=%s". "\r\n" . "\r\n" .
                "Besten Dank und bis bald". "\r\n" .
                "Ihr BlastenBlaster Team". "\r\n" . "\r\n" .
                "--" . "\r\n" .
                "Wenn Sie sich nicht registriert haben, dann hat Ihnen jemand einen Streich gespielt. Sie können in diesem Fall dieses Email ignorieren.". "\r\n",
                $user->username, $base_url, $user->uid ,$user->getPasswordResetToken())), $headers);
            header("Location: registered.php?uid=" . $user->uid, true, 302); 
            exit();      
        } catch (Exception $e) {
            $register_error = $e->getMessage();
        }
    }
}

include("base_layout.php");
?>
<style>
.container {
  max-width: 960px;
}

.border-top { border-top: 1px solid #e5e5e5; }
.border-bottom { border-bottom: 1px solid #e5e5e5; }
.border-top-gray { border-top-color: #adb5bd; }

.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }

.lh-condensed { line-height: 1.25; }

</style>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" class="mb-4" viewBox="0 0 16 16" role="img">
      <title>BlastenBlaster</title>
  <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6"  fill="currentColor"/>
  <path d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z" fill="currentColor"/>
</svg>        <h2>Registrieren</h2>
        <p class="lead">Mit diesem Formular können Sie sich für den BlastenBlaster registrieren. Ein Account wird benötigt, um Ihren Fortschritt zu speichern und Ihren Highscore im Leaderboard anzuzeigen.</p>
      </div>

      <div class="row  justify-content-md-center">
        
        <div class="col-lg-6 col-sm-12">
          <h4 class="mb-3">Benutzerdaten</h4>
          <form class="needs-validation" novalidate method="post">
            <?php
            if ($register_error) {
            ?>
            <p class="small text-danger">Fehler: <?=$register_error;?></p>
            <?php
            }
            ?>
            <div class="mb-3">
              <label for="username">Benutzername <span class="text-muted">(wird öffentlich angezeigt)</span></label>
              <div class="input-group">
                <input type="text" class="form-control" id="username" placeholder="Username" required name="username" <?php 
              if (in_array('username', array_keys($_POST))) { 
              print("value=\"" . htmlspecialchars($_POST['username'])."\""); 
              } 
              ?>>
                <div class="invalid-feedback" style="width: 100%;">
                  Bitte geben Sie einen Benutzernamen ein.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com" <?php 
              if (in_array('email', array_keys($_POST))) { 
              print("value=\"" . htmlspecialchars($_POST['email'])."\""); 
              } 
              ?>>
              <div class="invalid-feedback">
                Bitte geben Sie eine gültige Emailadresse ein
              </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="register">Registrieren</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>