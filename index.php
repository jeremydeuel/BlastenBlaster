<?php
require_once("backend.php");
include("base_layout.php");
?>
<body>
<div class="container py-3">
  <header>
    <?php include('menubar.php'); ?>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-body-emphasis">BlastenBlaster</h1>
      <p class="fs-5 text-body-secondary">BlastenBlaster ist ein Online-Lernprogramm um rasch und spielerisch die Differenzierung von Blut- und Knochenmarkzellen zu erlernen. Es wurde im Rahmen einer Masterarbeit von Olivia Hofmann unter der Betreuung von Jeremy Deuel erstellt. BlastenBlaster ist open-source und kostenlos!</p>
    </div>
  </header>
  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Lernen</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title">erste Schritte</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>18 Zelltypen</li>
              <li>Morphologische Eigenschaften</li>
              <li>Ideale Vorbereitung für die Übungen</li>
              <li>Keine Registrierung nötig</li>
            </ul>
            <a type="button" class="w-100 btn btn-lg btn-outline-secondary" aria-disabled="true" href="lernen.php">kennenlernen</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Üben</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">lernen</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Kein Zeitdruck</li>
              <li>Fehler erlaubt</li>
              <li>Verschiedene Levels</li>
              <li>Keine Registrierung nötig</li>
            </ul>
            <a type="button" class="w-100 btn btn-lg btn-primary" aria-disabled="true" href="ueben.php">üben</a>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-danger">
          <div class="card-header py-3 text-bg-danger border-danger">
            <h4 class="my-0 fw-normal">BlastenBlaster</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Vergleichen</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Login notwendig</li>
              <li>Leaderboard</li>
              <li>Blaste die Blasten weg!</li>
              <li>Vergleiche Dich mit anderen</li>
            </ul>
            <form action="competition.html" method="get" />
                <input type="submit" class="w-100 btn btn-lg btn-primary" href="competition.html" value="loslegen" />
          </form>
          </div>
        </div>
      </div>
    </div>
    </main>
    </div>
</body>
</html>