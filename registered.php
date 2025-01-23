<?php
require_once("backend.php");
$registered_error = null;
$show_form = false;
$username = "";
$key = "";
$title = "invalid";
$message = "invalid";
if (in_array('uid', array_keys($_GET))|in_array('uid', array_keys($_POST))) {
    // check if uid has been sent with GET or POST. if not, this site shows an error.
    $uid = in_array('uid', array_keys($_GET)) ? $_GET['uid'] : $_POST['uid'];
    $user = User::get($uid);
    if (!$user) {
        // uid has to be a valid user. If not, show an error message.
        $title = "Registrierung fehlgeschlagen.";
        $message = "Bitte versuchen Sie es noch einmal.";
    } else if (in_array('key', array_keys($_GET))|in_array('key', array_keys($_POST))) {
            // check if a key (pw reset token) has been sent. This can only have been received via email, thus proves the user's identity.
            $key = in_array('key', array_keys($_GET)) ? $_GET['key'] : $_POST['key'];
            if ($user->checkPasswordResetToken($key)) {
                $show_form = true;
                $title = "Hallo " . htmlspecialchars($user->username);
                $message = "Mit diesem Formular setzen Sie ein neues Passwort. Das Passwort muss mindestens 8 Zeichen lang sein und mindestens eine Zahl, einen Buchstaben und ein Sonderzeichen enthalten.";
                if (in_array('register', array_keys($_POST))) {
                    $password = $_POST['password1'];
                    if ($password != $_POST['password2']) {
                        $registered_error = "Bitte geben Sie zweimal das gleiche Passwort ein.";
                    } else if (strlen($password) < 1) {
                        $registered_error = "Bitte geben Sie ein Passwort ein.";
                    } else if (User::checkPasswordComplexity($password, $registered_error)) {
                        //password is valid
                        $user->setPassword($password);
                        $user->save();
                        $user->login();
                        $title = "Passwort zurückgesetzt";
                        $message = "Ihr Passwort wurde zurückgesetzt.<br /><a class='btn btn-primary' href='index.php'>Weiter zum BlastenBlaster</a>";
                        $show_form = false;
                    }
                }
            } else {
                //link not valid, show error and offer to send a new key.
                $title = "Link abgelaufen";
                $message = "Link abgelaufen.<br /><a class='btn btn-primary' href='?uid=".$user->uid."&pw_reset=".$user->getPasswordResetRequestToken()."'>Neuen Link per Email senden</a>";
            }
        } else if (in_array('pw_reset', array_keys($_GET))|in_array('pw_reset', array_keys($_POST))) {
            $key = in_array('pw_reset', array_keys($_GET)) ? $_GET['pw_reset'] : $_POST['pw_reset'];
            global $base_url;
            if ($user->checkPasswordResetRequestToken($key)) {
                    $title = "Passwort zurücksetzen";
                    $message = "Wir haben Ihnen eine Email mit einem Link gesendet, mit welchem Sie ihr Passwort zurücksetzen können.";
                    $headers = 'From: jeremy@deuel.ch' . "\r\n" . 'Reply-To: jeremy@deuel.ch' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
                    sleep(10);
                    mail($user->email, 'BlastenBlaster - Passwort zurücksetzen', iconv ( 'utf-8', 'ISO-8859-2', sprintf("Hallo %s,". "\r\n" . "\r\n" .
                        "Sie haben auf unserer Website angegeben, dass Sie Ihr Passwort zurücksetzen möchten. Wenn Sie dies tun möchten, klicken Sie bitte auf diesen Link" . "\r\n" .
                        "%s/registered.php?uid=%s&key=%s". "\r\n" . "\r\n" .
                        "Besten Dank und bis bald". "\r\n" .
                        "Ihr BlastenBlaster Team". "\r\n" . "\r\n" .
                        "--" . "\r\n" .
                        "Wenn Sie Ihr Passwort nicht zurücksetzen möchten, sollten Sie diese Nachricht ignorieren.". "\r\n",
                        $user->username, $base_url, $user->uid ,$user->getPasswordResetToken())), $headers);
             } else {
                    $title = "Link abgelaufen";
                    $message = "Bitte versuchen Sie es noch einmal.";
                }
        } else {
            $title = "Vielen Dank!";
            $message = "Vielen Dank für Ihre Registrierung. Sie erhalten in den nächsten Minuten eine Email mit einem Bestätigungs-Link. Mit diesem können Sie Ihr Passwort setzen. Bitte beachten Sie, dass dieser Link nur heute gültig ist. ";
        }
} else {
    $title = "Login nötig";
    $message = "Es macht keinen Sinn, diese Seite direkt aufzurufen.";
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
</svg>        <h2><?=$title?></h2>
        <p class="lead"><?=$message?></p>
      </div>
<?php if ($show_form) { ?>
      <div class="row  justify-content-md-center">
        
        <div class="col-lg-6 col-sm-12">
          <h4 class="mb-3">Passwort setzen</h4>
          <form class="needs-validation" novalidate method="post">
          <input type="hidden" name="uid" value="<?=$user->uid;?>" />
          <input type="hidden" name="key" value="<?=$key;?>" />
            <?php
            if ($registered_error) {
            ?>
            <p class="small text-danger">Fehler: <?=$registered_error;?></p>
            <?php
            }
            ?>
            <div class="mb-3">
              <label for="pw1">Passwort</label>
              <div class="input-group">
                <input type="password" class="form-control" id="pw1" placeholder="neues Passwort" required name="password1" />
              </div>
            </div>

            <div class="mb-3">
              <label for="p12">Passwort wiederholen</label>
              <div class="input-group">
                <input type="password" class="form-control" id="pw2" placeholder="neues Passwort wiederholen" required name="password2" />
              </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="register">Passwort ändern</button>
          </form>
        </div>
      </div>
      <?php } ?>

    </div>
  </body>
</html>