<?php
require_once("backend.php");

$login_error = NULL;
if (in_array('logout', array_keys($_GET))) {
    User::logout();
}

if (in_array('login', array_keys($_POST))) {
    $user = User::findByEmail($_POST['email']);
    if (!$user) {
        $login_error = "Benutzername nicht bekannt.";
    } else {
        if ($user->validate($_POST['password'])) {
            $user->login();
            header("Location: index.php", true, 302);       
        } else {
            $login_error = sprintf("Passwort falsch. <a class='btn btn-outline-danger' href='registered.php?uid=%s&pw_reset=%s'>Passwort vergessen?</a>",
            $user->uid, $user->getPasswordResetRequestToken());
        }
    }
}


include("base_layout.php");

?>
<style>
html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.sr-only {
    display: none;
}
</style>
<body class="text-center">
<form class="form-signin" method="post">
<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" class="mb-4" viewBox="0 0 16 16" role="img">
      <title>BlastenBlaster</title>
  <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6"  fill="currentColor"/>
  <path d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z" fill="currentColor"/>
</svg>
      <h1 class="h3 mb-3 font-weight-normal">Bitte melden Sie sich an</h1>
      <?php
      if ($login_error) {
      ?>
      <p class="text-danger">Fehler: <?=$login_error?></p>
      <?php
      }
      ?>
      <label for="inputEmail" class="sr-only">Email</label>
      <input name="email" type="email" id="inputUsername" class="form-control" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only">Passwort</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Passwort" required>
      <button name="login" class="btn btn-lg btn-primary btn-block" type="submit">Anmelden</button>
    <p></p><a href="register.php">noch keinen Account? Hier kostenlos registrieren.</a></p>
      
    </form>
    </body>
</html>