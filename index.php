<?php
require_once("backend.php");
include("base_layout.php");
?>
<body>
<div class="container py-3">
  <header>
    <?php include('menubar.php'); ?>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-body-emphasis"><img src="/assets/blastenblaster.png" width="50" height="50" style="margin-right: 10px" />BlastenBlaster</h1>
      <p class="fs-5 text-body-secondary"><?php echo $_['bb-description'];?></p>
    </div>
  </header>
    
  <main>
  <?php
  const SALT = '8E339E87-C9A3-4698-9667-3A65AC9AC054';

   if (in_array('verify', array_keys($_GET)) and in_array('level', array_keys($_GET)) and in_array('email', array_keys($_GET)) and in_array('date', array_keys($_GET)) and in_array('cells', array_keys($_GET))) {
        $hash = hash('sha256',hash('sha256',CERTIFICATE_SALT.$_GET['email'].CERTIFICATE_SALT.$_GET['level'].CERTIFICATE_SALT.$_GET['date'].CERTIFICATE_SALT.$_GET['cells']));
        $link = BASE_URL."/?date=".urlencode($_GET['date'])."&cells=".urlencode($_GET['cells'])."&email=".urlencode($_GET['email'])."&level=".urlencode($_GET['level'])."&verify=".urlencode($_GET['verify']);
        if ($hash == $_GET['verify']) {
        ?>
        <div class="alert alert-success" role="alert">
  <h4 class="alert-heading"></h4>
  <p><?php echo $_['verification-valid'];?></p>
  <hr>
  <p class="mb-0"><?php echo $_['date'];?>: <?php echo htmlentities($_GET['date']); ?><br /><?php echo $_['username'];?>: <?php echo htmlentities($_GET['email']) ?><br />Blastenblaster-Level: <?php echo htmlentities($_GET['level']) ?><br /><?php echo $_['nr-of-cells'];?>: <?php echo htmlentities($_GET['cells']) ?><br /><?php echo $_['check-again'];?>: <a href="<?php echo $link ?>"><?php echo $link ?></a></p>
</div>
        <?php
        } else {
        ?>
        <div class="alert alert-danger" role="alert">
  <h4 class="alert-heading"><?php echo $_['invalid-verification'];?></h4>
  <p><?php echo $_['invalid-verification2'];?></p>
  <hr>
  <p class="mb-0"><small><?php echo $_['invalid-verification3'];?></small></p>
</div>
        <?php
        }
        ?>
        </main>
    </div>
</body>
</html>
        <?php
        die();
        }
        ?>
  
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><?php echo $_['learn'];?></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title"><?php echo $_['first steps'];?></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><?php echo $_['18 celltypes'];?></li>
              <li><?php echo $_['morpho features'];?></li>
              <li><?php echo $_['ideal preparation'];?></li>
              <li><?php echo $_['no registration'];?></li>
            </ul>
            <a type="button" class="w-100 btn btn-lg btn-outline-secondary" aria-disabled="true" href="lernen.php"><?php echo $_['start learning'];?></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal"><?php echo $_['train'];?></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php echo $_['learn'];?></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><?php echo $_['no time pressure'];?></li>
              <li><?php echo $_['errors possible'];?></li>
              <li><?php echo $_['different levels'];?></li>
              <li><?php echo $_['take your time'];?></li>
            </ul>
            <a type="button" class="w-100 btn btn-lg btn-primary" aria-disabled="true" href="ueben.php"><?php echo $_['excersise'];?></a>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-danger">
          <div class="card-header py-3 text-bg-danger border-danger">
            <h4 class="my-0 fw-normal">BlastenBlaster</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php echo $_['compare'];?></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><?php echo $_['blood and honor'];?><a href="leaderboard.php"><?php echo $_['leaderboard'];?></a></li>
              <li><?php echo $_['blast the blasts'];?></li>
              <li><?php echo $_['compare yourself'];?></li>
              <li><?php echo $_['mistakes have consequences'];?></li>
            </ul>
            <a type="button" id="start-competition" class="w-100 btn btn-lg btn-primary" href="competition.php"><?php echo $_['start blastenblaster'];?></a>
          </div>
        </div>
      </div>
    </div>
    <div class="alert alert-light" role="alert">
    <div class="row">
    <div class="col-sm-6 col-md-4 col-lg-2"><img src="assets/sgh.jpeg" width="100%" /></div>
    <div class="col-sm-6 col-md-8 col-lg-10"><p><?php echo $_['accreditation_sgh']; ?></p></div>
    </div>
    </div>
    </main>
    </div>
</body>
</html>