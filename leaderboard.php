<?php
require_once("backend.php");
include("base_layout.php");
?>
<style>
.cell_wrap {
}
.cell_wrap  img {
    margin: -64px 0 0 -64px;
    object-fit: cover;
    clip-path: inset(64px round 32px);

}
</style>
<body>
<div class="container py-3">

  
  <header>
      <?php include('menubar.php'); ?>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-body-emphasis"><?php echo $_['leaderboard'];?></h1>
      <p class="fs-5 text-body-secondary"><?php echo $_['best of the best'];?></p>
    </div>
  </header>
  <main>
  <ol>
  <?php foreach(User::leaders() as $leader) {
  ?>
  <li><?=$leader['username']?> <?php echo $_['achieved1'];?> <?=date($_['dateformat'],strtotime($leader['date']));?> <?php echo $_['achieved2'];?> <?=$leader['proficiency'];?> <?php echo $_['achieved3'];?>.</li>
  <?php
  }
  
  ?>
  </ol>
  </main>
 
</body>
</html>