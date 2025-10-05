<?php
require_once("backend.php");
require_once('mail.php');
$register_error = null;
if (in_array('register', array_keys($_POST))) {
    if (!preg_match("/^[a-zA-Z][a-zA-Z-_0-9]{2,}$/",$_POST['username'])) {
        $register_error = $_['username rules'];
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $register_error = $_['email invalid'];
    }
    if (!$register_error) {
        // check if username or password already exist
        if ($user = User::findByEmail($_POST['email'])) {
            $register_error = $_['email in use']." <a class='btn btn-outline-primary' href='registered.php?uid=".$user->id."&pw_reset=".$user->getPasswordResetRequestToken()."'>".$_['reset password']."</a>";
        } elseif ($user = User::findByUsername($_POST['username'])) {
            $register_error = $_['username in use'];
        }
    }
    if (!$register_error) {
        try {
            $user = new User(0,  date("Ymd") . bin2hex(random_bytes(128)), htmlspecialchars($_POST['username']),htmlspecialchars(strtolower($_POST['email'])) , 0);
            $user->create();
            assert($user->id != 0);
            $headers = 'From: ' . EMAIL_ADDRESS. "\r\n" . 'Reply-To: ' .EMAIL_ADDRESS. "\r\n" . 'X-Mailer: PHP/' . phpversion();
            sendMail($user->email, iconv ( 'utf-8', 'ISO-8859-2', $_['mail subject registered']), iconv ( 'utf-8', 'ISO-8859-2', sprintf($_['mail message registered'],
                $user->username, BASE_URL, $user->id ,$user->getPasswordResetToken())), $headers);
                header("Location: registered.php?uid=" . $user->id, true, 302); 
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
<img src="/assets/blastenblaster.png" width="56" height="56" />
       <h2>Registrieren</h2>
        <p class="lead">Mit diesem Formular können Sie sich für den BlastenBlaster registrieren. Ein Account wird benötigt, um Ihren Fortschritt zu speichern und Ihren Highscore im Leaderboard anzuzeigen.</p>
      </div>

      <div class="row  justify-content-md-center">
        
        <div class="col-lg-6 col-sm-12">
          <h4 class="mb-3"><?php echo $_['userdata'];?></h4>
          <form class="needs-validation" novalidate method="post">
            <?php
            if ($register_error) {
            ?>
            <p class="small text-danger"><?php echo $_['error'];?>: <?=$register_error;?></p>
            <?php
            }
            ?>
            <div class="mb-3">
              <label for="username"><?php echo $_['username'];?> <span class="text-muted">(<?php echo $_['public'];?>)</span></label>
              <div class="input-group">
                <input type="text" class="form-control" id="username" placeholder="<?php echo $_['username'];?>" required name="username" <?php 
              if (in_array('username', array_keys($_POST))) { 
              print("value=\"" . htmlspecialchars($_POST['username'])."\""); 
              } 
              ?>>
                <div class="invalid-feedback" style="width: 100%;">
                  <?php echo $_['enter username'];?>
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email"><?php echo $_['email'];?> <span class="text-muted">(<?php echo $_['email shown'];?>)</span></label>
              <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com" <?php 
              if (in_array('email', array_keys($_POST))) { 
              print("value=\"" . htmlspecialchars($_POST['email'])."\""); 
              } 
              ?>>
              <div class="invalid-feedback">
                <?php echo $_['enter email'];?>
              </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="register"><?php echo $_['register'];?></button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>