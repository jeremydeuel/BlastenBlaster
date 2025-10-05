<?php
require_once('backend.php');
?>
<!--
<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16" role="img" style="margin-right: 10px">
      <title>BlastenBlaster</title>
  <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6"  fill="currentColor"/>
  <path d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z" fill="currentColor"/>
</svg> 
-->
<nav class="navbar fixed-top navbar-light bg-light navbar-expand-lg">
  <a class="navbar-brand" href="/"><img src="/assets/blastenblaster.png" height="28" width="28" style="margin-left: 5px; margin-right: 5px;"/>BlastenBlaster</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a id="login-status-link" class="nav-link" href="/login.php"><?php echo $_['login'];?></a>
      </li>
      <li class="nav-item hidden" id="logout-link-container">
        <a id="logout-status-link" class="nav-link" href="/login.php?logout"><?php echo $_['logout'];?></a>
      </li>
      <li class="nav-item hidden">
        <a id="about-link" class="nav-link" href="/about.php"><?php echo $_['about'];?></a>
      </li>
      <li class="nav-item hidden">
        <a id="dataprotection-link" class="nav-link" href="/dataprotection.php"><?php echo $_['data protection'];?></a>
      </li>
      <li class="nav-item hidden">
        <a id="leaderboard-link" class="nav-link" href="/leaderboard.php"><?php echo $_['leaderboard'];?></a>
      </li>
      <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    <?php echo $_['language']; ?>
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="?lang=en">English</a></li>
    <li><a class="dropdown-item" href="?lang=de">Deutsch</a></li>
    <li><a class="dropdown-item" href="?lang=fr">Français</a></li>
    <li><a class="dropdown-item" href="?lang=it">Italiano</a></li>
    <li><a class="dropdown-item" href="?lang=es">Español</a></li>
  </ul>
</div>
      
    </ul>
  </div>
</nav>

   
<script>
    //check login status
    fetch("api.php?user").then((r) => r.json()).then((r) => {
        if (r['username'] == null) {
            document.getElementById('logout-link-container').style.display = 'none';
            return;
        };
        let login_link = document.getElementById('login-status-link');
        login_link.href = '/username.php';
        login_link.innerHTML = r['username'] + ' (<?php echo $_['certificate'];?>)';
    }).catch((e) => {
        console.log(e);
    })
</script>