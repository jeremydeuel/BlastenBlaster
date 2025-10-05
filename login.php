<?php
require_once("backend.php");

$login_error = NULL;
if (in_array('logout', array_keys($_GET))) {
    User::logout();
}

if (in_array('login', array_keys($_POST))) {
    $user = User::findByEmail($_POST['email']);
    if (!$user) {
        $login_error = $_['unknown user'];
    } else {
        if ($user->validate($_POST['password'])) {
            $user->login();
            header("Location: index.php", true, 302);       
        } else {
            $login_error = sprintf($_['wrong password'],
            $user->id, $user->getPasswordResetRequestToken());
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
<img src="/assets/blastenblaster.png" width="56" height="56" />

      <h1 class="h3 mb-3 font-weight-normal"><?php echo $_['please login'];?></h1>
      <?php
      if ($login_error) {
      ?>
      <p class="text-danger"><?php echo $_['error'];?>: <?=$login_error?></p>
      <?php
      }
      ?>
      <label for="inputEmail" class="sr-only"><?php echo $_['email'];?></label>
      <input name="email" type="email" id="inputUsername" class="form-control" placeholder="<?php echo $_['email'];?>" required autofocus>
      <label for="inputPassword" class="sr-only"><?php echo $_['password'];?></label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="<?php echo $_['password'];?>" required>
      <button name="login" class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $_['login'];?></button>
    <p></p><a href="register.php"><?php echo $_['register now'];?></a></p>
      
    </form>
    </body>
</html>