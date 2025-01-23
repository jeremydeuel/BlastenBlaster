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
      <?php 
        if (User::current()) {
            $menu_login_href = "login.php?logout";
            $menu_login_username = User::current()->username;
        } else {
            $menu_login_href = "login.php";
            $menu_login_username = "Login";
        }
        
        ?>
       <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="<?=$menu_login_href;?>"><?=$menu_login_username;?></a>
        <a class="py-2 link-body-emphasis text-decoration-none" data-about href="#">About</a>
    </nav>
</div>

<!-- About-Text -->
<div id="aboutModal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close-button" onclick="closeModal()">&times;</span>
        <h5>Über BlastenBlaster</h5>
        <p>BlastenBlaster ist ein Online-Lernprogramm, das es Nutzern ermöglicht, rasch und spielerisch die Differenzierung von Blut- und Knochenmarkzellen zu erlernen. Es wurde im Rahmen einer Masterarbeit von Olivia Hoffmann unter der Betreuung von Jeremy Deuel entwickelt.</p>
        <p>Das Spiel bietet zwei Spielmodi: den <strong>Lernmodus</strong>, in dem Nutzer die Zelltypen üben können, und den <strong>Vergleichen-Modus</strong>, in dem Spieler ihre Fähigkeiten mit anderen Nutzern messen und auf einem Leaderboard um die besten Platzierungen kämpfen können.</p>
        <p>BlastenBlaster ist Open Source und kostenlos verfügbar! Es läuft unter der sogenannten <strong>GDPR (Datenschutz-Grundverordnung)</strong>, was bedeutet, dass die Privatsphäre und der Schutz der Nutzerdaten für uns höchste Priorität haben. Wir erheben und verarbeiten nur die Daten, die zur Nutzung der Anwendung notwendig sind, und stellen sicher, dass alle Daten gemäß den geltenden Datenschutzrichtlinien behandelt werden.</p>
        <p>Alle Dateien und der Quellcode sind auf <a href="https://github.com/dein-github-account/blastenblaster">GitHub</a> öffentlich verfügbar. So kannst du bei der Entwicklung mitwirken oder das Projekt selbstausprobieren!</p>
    </div>
</div>

<style>
    .modal {
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
    }

    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        width: 80%;
        max-width: 600px;
        position: relative;
    }

    .close-button {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 20px;
        color: #aaa;
        cursor: pointer;
    }

    .close-button:hover {
        color: black;
    }
</style>


<script>
    function openModal() {
        document.getElementById('aboutModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('aboutModal').style.display = 'none';
    }

   
    document.querySelector('.link-body-emphasis[data-about]').addEventListener('click', function(event) {
        event.preventDefault(); 
        openModal(); 
    });
</script>