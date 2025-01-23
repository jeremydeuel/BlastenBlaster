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
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/cells" class="d-flex align-items-center link-body-emphasis text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="me-2" viewBox="0 0 16 16" role="img">
      <title>BlastenBlaster</title>
  <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6"  fill="currentColor"/>
  <path d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z" fill="currentColor"/>
</svg>
        <span class="fs-4">BlastenBlaster</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
              <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="login.php">Login</a>
        <a class="py-2 link-body-emphasis text-decoration-none" href="#">About</a>
      </nav>
    </div>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-body-emphasis">Leaderboard</h1>
      <p class="fs-5 text-body-secondary">Auf dieser Seite zeigen wir die Besten der Besten</p>
    </div>
  </header>
  <main>
  <ol>
  <?php foreach(User::leaders() as $leader) {
  ?>
  <li><?=$leader['username']?> hat es bis Level <?=$leader['proficiency'];?> geschafft.</li>
  <?php
  }
  
  ?>
  </ol>
  </main>
 
</body>
</html>