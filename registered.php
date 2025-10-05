<?php
require_once("backend.php");
require_once('mail.php');

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
        $title = $_['registration failed'];
        $message = $_['try again'];
    } else if (in_array('key', array_keys($_GET))|in_array('key', array_keys($_POST))) {
            // check if a key (pw reset token) has been sent. This can only have been received via email, thus proves the user's identity.
            $key = in_array('key', array_keys($_GET)) ? $_GET['key'] : $_POST['key'];
            if ($user->checkPasswordResetToken($key)) {
                $show_form = true;
                $title = $_['hello']. " " . htmlspecialchars($user->username);
                $message = $_['new password'];
                if (in_array('register', array_keys($_POST))) {
                    $password = $_POST['password1'];
                    if ($password != $_POST['password2']) {
                        $registered_error = $_['passwords dont match'];
                    } else if (strlen($password) < 1) {
                        $registered_error = $_['password too short'];
                    } else if (User::checkPasswordComplexity($password, $registered_error)) {
                        //password is valid
                        $user->setPassword($password);
                        $user->save();
                        $user->login();
                        $title = $_['password reset'];
                        $message = $_['password reset message'];
                        $show_form = false;
                    }
                }
            } else {
                //link not valid, show error and offer to send a new key.
                $title = $_['link expired'];
                $message = $_['link expired']."<br /><a class='btn btn-primary' href='?uid=".$user->id."&pw_reset=".$user->getPasswordResetRequestToken()."'>".$_['link expired message']."</a>";
            }
        } else if (in_array('pw_reset', array_keys($_GET))|in_array('pw_reset', array_keys($_POST))) {
            $key = in_array('pw_reset', array_keys($_GET)) ? $_GET['pw_reset'] : $_POST['pw_reset'];
            if ($user->checkPasswordResetRequestToken($key)) {
                    $title = $_['mail subject password reset'];
                    $message = $_['password reset mail sent'];
                    $headers = 'From: '. EMAIL_ADDRESS . "\r\n" . 'Reply-To: ' . EMAIL_ADDRESS . "\r\n" . 'X-Mailer: PHP/' . phpversion();
                    sleep(2);
                    sendMail($user->email, iconv ( 'utf-8', 'ISO-8859-2',$_['mail subject password reset']), iconv ( 'utf-8', 'ISO-8859-2', sprintf($_['mail message password reset'],
                        $user->username, BASE_URL, $user->id ,$user->getPasswordResetToken())), $headers);
             } else {
                    $title = $_['link expired'];
                    $message = $_['try again'];
                }
        } else {
            $title = $_['thank you'];
            $message = $_['thank you for registering'];
        }
} else {
    $title = $_['login required'];
    $message = $_['login required2'];
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
        <h2><?=$title?></h2>
        <p class="lead"><?=$message?></p>
      </div>
<?php if ($show_form) { ?>
      <div class="row  justify-content-md-center">
        
        <div class="col-lg-6 col-sm-12">
          <h4 class="mb-3"><?php echo $_['set password'];?></h4>
          <form class="needs-validation" novalidate method="post">
          <input type="hidden" name="uid" value="<?=$user->id;?>" />
          <input type="hidden" name="key" value="<?=$key;?>" />
            <?php
            if ($registered_error) {
            ?>
            <p class="small text-danger"><?php echo $_['error'];?>: <?=$registered_error;?></p>
            <?php
            }
            ?>
            <div class="mb-3">
              <label for="pw1"><?php echo $_['password'];?></label>
              <div class="input-group">
                <input type="password" class="form-control" id="pw1" placeholder="<?php echo $_['password repeat'];?>" required name="password1" />
              </div>
            </div>

            <div class="mb-3">
              <label for="p12"><?php echo $_['password repeat'];?></label>
              <div class="input-group">
                <input type="password" class="form-control" id="pw2" placeholder="<?php echo $_['password repeat'];?>" required name="password2" />
              </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="register"><?php echo $_['password change'];?></button>
          </form>
        </div>
      </div>
      <?php } ?>

    </div>
  </body>
</html>