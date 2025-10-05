<?php
require_once("backend.php");
include("base_layout.php");
?>
<body>
<div class="container py-3">
  <header>
    <?php include('menubar.php'); ?>

  </header>
    
  <main>
<?php
switch($lang) {
    case 'de':
    ?>
    <div class="card p-4 p-md-5">
        <header class="text-center mb-4">
            <h1 class="display-5">Datenschutzerklärung</h1>
            <p class="text-muted">Stand: September 2025 - basierend auf dem neuen Schweizer Datenschutzgesetz (DSG)</p>
        </header>
        
        <hr class="my-4">

        <section id="einleitung" class="mb-5">
            <h2 class="h4 mb-3">1. Einleitung</h2>
            <p>Wir legen Wert auf den Schutz Ihrer <strong>persönlichen Daten</strong>. Diese Datenschutzerklärung informiert Sie darüber, welche <strong>personenbezogenen Daten</strong> wir im Zusammenhang mit Ihrer Nutzung unserer Website (<a href="https://www.blastenblaster.com" target="_blank">www.blastenblaster.com</a>) sammeln, wie wir sie verwenden und welche <strong>Rechte</strong> Sie in Bezug auf diese Daten haben.</p>

            <h3 class="h5 mt-3">Verantwortliche Stelle</h3>
            <p>Verantwortlich für die Datenverarbeitung ist:</p>
            <address class="fst-italic">
                <strong>PD Dr. med. Dr. sc. nat. Jeremy Deuel</strong><br>
                Meine Kontaktdaten finden Sie auf der Webseite meines <a href="https://www.usz.ch/team/jeremy-deuel/" target="_blank">Arbeitgebers</a>.
            </address>
        </section>

        <section id="grundsaetze" class="mb-5">
            <h2 class="h4 mb-3">2. Grundsätze der Datenverarbeitung (DSG)</h2>
            <p>Wir halten uns an die Grundsätze des schweizerischen Datenschutzgesetzes (DSG) sowie, wo anwendbar, der EU-Datenschutz-Grundverordnung (DSGVO), insbesondere an die Grundsätze der <strong>Rechtmässigkeit</strong>, der <strong>Zweckbindung</strong>, der <strong>Verhältnismässigkeit</strong> und der <strong>Transparenz</strong>.</p>
        </section>

        <section id="datenbearbeitung-nutzung" class="mb-5">
            <h2 class="h4 mb-3">3. Datenbearbeitung bei Nutzung unserer Website</h2>
            
            <h3 class="h5 mt-3">a) Log-Dateien</h3>
            <p>Beim Besuch unserer Website erfasst unser Hosting-Provider automatisch Informationen, die Ihr Browser an unseren Server übermittelt. Diese sogenannten <strong>Server-Log-Dateien</strong> umfassen:</p>
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">Browsertyp und Browserversion</li>
                <li class="list-group-item">Verwendetes Betriebssystem</li>
                <li class="list-group-item">Referrer URL (die zuvor besuchte Seite)</li>
                <li class="list-group-item">Hostname des zugreifenden Rechners</li>
                <li class="list-group-item">Uhrzeit der Serveranfrage</li>
                <li class="list-group-item">IP-Adresse</li>
            </ul>
            <p class="text-secondary">Diese Daten werden zu Zwecken der <strong>Gewährleistung der Funktionsfähigkeit und Systemsicherheit</strong> gesammelt und nach nach spätestens 5 Jahren gelöscht.</p>

            <h3 class="h5 mt-4">b) Cookies</h3>
            <p>Unsere Website verwendet <strong>Cookies</strong> und ähnliche Technologien (z.B. Pixel Tags). Cookies sind kleine Textdateien, die auf Ihrem Endgerät gespeichert werden.</p>
            <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success"></i> <strong>Notwendige Cookies:</strong> Diese sind für den Betrieb der Website zwingend erforderlich (z.B. für die Speicherung Ihrer Spracheinstellung). Es gibt keine nicht-zwingend notwendigen Cookies, daher fragen wir Sie auch nicht spezifisch nach Ihrer Einwilligung.</li>
            </ul>
            <p class="text-secondary">Sie können Cookies in Ihrem Browser ablehnen oder löschen. Bei der Deaktivierung können jedoch bestimmte Funktionen der Website eingeschränkt sein.</p>

            <h3 class="h5 mt-4">c) Kontaktformulare und E-Mail-Kontakt</h3>
            <p>Wenn Sie uns bei uns registrieren oder uns E-Mail Anfragen zukommen lassen, werden Ihre Angaben (insbesondere Name, E-Mail-Adresse und Ihre Nachricht) zur <strong>Bearbeitung der Anfrage</strong> gespeichert. Die Bearbeitung dieser Daten erfolgt zur <strong>Erfüllung unserer (vor-)vertraglichen Pflichten</strong> oder aufgrund Ihres <strong>Einverständnisses</strong>.</p>
            
            <h3 class="h5 mt-4">d) Verwendete Dienste:</h3>
            
            <ul class="list-group mb-3">
                <li class="list-group-item">
                    <strong>Webhosting:</strong> <a href="https://www.hoststar.ch">hoststar.ch</a>
                </li>
            </ul>
        
        </section>

        <section id="tools-dienste" class="mb-5">
            <h2 class="h4 mb-3">4. Forschung und Qualitätssicherung</h2>
            <p>Wir sammeln ihren Lernfortschritt und speichern Tipps, welche sie auf Zelltypen abgeben. Diese können zu Forschungs- und Qualitätssicherungszwecken ausgewertet werden. Diese Daten werden nach spätestens 20 Jahren gelöscht.</p>
            <p>Die Benutzernamen sowie das Datum des höchsten Erreichbaren Levels der besten zehn Benutzerinnen und Benutzer werden im Leaderboard veröffentlicht. Mit der Benutzung von BlastenBlaster stimmen Sie dieser Veröffentlichung zu. Sie können Ihren Benutzernamen selber wählen, dieser muss nicht zwingend identifizierend sein.</p>
            <p>Ihr Lernfortschritt wird in unserer Datenbank gespeichert und nicht von uns an Fachgesellschaften übermittelt. Sie können jedoch ihren persönlichen Lernfortschritt selber speichern und einreichen, hierzu haben signieren wir ihre Daten mit einem kryptographischen Hash, damit die Authentizität des Lernfortschrittes überprüft werden kann.</p>


            
        </section>

        <section id="ihre-rechte" class="mb-5">
            <h2 class="h4 mb-3">5. Ihre Rechte</h2>
            <p>Als betroffene Person haben Sie nach dem schweizerischen Datenschutzgesetz (DSG) und gegebenenfalls der DSGVO folgende Rechte:</p>
            
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group list-group-flush small">
                        <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Auskunftsrecht:</strong> Auskunft darüber zu verlangen, welche Daten wir über Sie bearbeiten.</li>
                        <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Berichtigungsrecht:</strong> Unrichtige Daten berichtigen zu lassen.</li>
                        <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Widerspruchsrecht:</strong> Der Bearbeitung Ihrer Daten zu widersprechen.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-group list-group-flush small">
                        <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Löschungsrecht (Vergessenwerden):</strong> Die Löschung Ihrer Daten zu verlangen.</li>
                        <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Datenherausgabe (Portabilität):</strong> Ihre Daten in einem gängigen Format zu erhalten.</li>
                        <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Widerruf der Einwilligung:</strong> Eine erteilte Einwilligung jederzeit zu widerrufen.</li>
                    </ul>
                </div>
            </div>
             <p class="mt-3">Für die Geltendmachung Ihrer Rechte wenden Sie sich bitte an die in Abschnitt 1 genannte Kontaktstelle.</p>
        </section>

        <section id="aenderungen" class="mb-3">
            <h2 class="h4 mb-3">6. Änderungen dieser Datenschutzerklärung</h2>
            <p>Wir behalten uns das Recht vor, diese Datenschutzerklärung jederzeit zu ändern. Massgebend ist jeweils die auf unserer Website veröffentlichte aktuelle Version.</p>
            <p class="fw-bold">Zuletzt aktualisiert am: 27.09.2025</p>
        </section>
    
    </div>
    <?php
    break;
    case 'fr':
    ?>
    <div class="card p-4 p-md-5">
    <header class="text-center mb-4">
        <h1 class="display-5">Politique de Confidentialité</h1>
        <p class="text-muted">Statut : Septembre 2025 - basé sur la nouvelle Loi fédérale suisse sur la protection des données (LPD)</p>
    </header>
    
    <hr class="my-4">

    <section id="introduction" class="mb-5">
        <h2 class="h4 mb-3">1. Introduction</h2>
        <p>Nous accordons de l'importance à la protection de vos <strong>données personnelles</strong>. Cette politique de confidentialité vous informe sur les <strong>données personnelles</strong> que nous collectons en lien avec votre utilisation de notre site web (<a href="https://www.blastenblaster.com" target="_blank">www.blastenblaster.com</a>), comment nous les utilisons et quels sont vos <strong>droits</strong> concernant ces données.</p>

        <h3 class="h5 mt-3">Organe Responsable (Responsable du Traitement)</h3>
        <p>Le responsable du traitement des données est :</p>
        <address class="fst-italic">
            <strong>PD Dr. med. Dr. sc. nat. Jeremy Deuel</strong><br>
            Mes coordonnées se trouvent sur le site web de mon <a href="https://www.usz.ch/team/jeremy-deuel/" target="_blank">employeur</a>.
        </address>
    </section>

    <section id="principes" class="mb-5">
        <h2 class="h4 mb-3">2. Principes du Traitement des Données (LPD)</h2>
        <p>Nous respectons les principes de la Loi fédérale suisse sur la protection des données (LPD) ainsi que, le cas échéant, du Règlement général sur la protection des données de l'UE (RGPD), en particulier les principes de <strong>légalité</strong>, de <strong>finalité</strong>, de <strong>proportionnalité</strong> et de <strong>transparence</strong>.</p>
    </section>

    <section id="traitement-donnees-utilisation" class="mb-5">
        <h2 class="h4 mb-3">3. Traitement des Données lors de l'Utilisation de notre Site Web</h2>
        
        <h3 class="h5 mt-3">a) Fichiers Journaux (Log-Files)</h3>
        <p>Lors de la visite de notre site web, notre hébergeur enregistre automatiquement les informations que votre navigateur transmet à notre serveur. Ces <strong>fichiers journaux du serveur</strong> comprennent :</p>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item">Type et version du navigateur</li>
            <li class="list-group-item">Système d'exploitation utilisé</li>
            <li class="list-group-item">URL de référence (la page visitée précédemment)</li>
            <li class="list-group-item">Nom d'hôte de l'ordinateur accédant</li>
            <li class="list-group-item">Heure de la requête du serveur</li>
            <li class="list-group-item">Adresse IP</li>
        </ul>
        <p class="text-secondary">Ces données sont collectées dans le but d'**assurer la fonctionnalité et la sécurité du système** et sont supprimées après un maximum de 5 ans.</p>

        <h3 class="h5 mt-4">b) Cookies</h3>
        <p>Notre site web utilise des <strong>cookies</strong> et des technologies similaires (par exemple, les balises pixel). Les cookies sont de petits fichiers texte qui sont stockés sur votre appareil.</p>
        <ul class="list-unstyled">
            <li><i class="bi bi-check-circle-fill text-success"></i> <strong>Cookies Nécessaires :</strong> Ils sont strictement nécessaires au fonctionnement du site web (par exemple, pour l'enregistrement de votre préférence linguistique). Il n'y a pas de cookies non strictement nécessaires, c'est pourquoi nous ne vous demandons pas spécifiquement votre consentement.</li>
        </ul>
        <p class="text-secondary">Vous pouvez refuser ou supprimer les cookies dans votre navigateur. Cependant, la désactivation peut restreindre certaines fonctions du site web.</p>

        <h3 class="h5 mt-4">c) Formulaires de Contact et Contact par E-mail</h3>
        <p>Si vous vous inscrivez chez nous ou nous envoyez des demandes par e-mail, vos informations (en particulier nom, adresse e-mail et votre message) seront stockées pour le <strong>traitement de la demande</strong>. Le traitement de ces données est effectué pour l'<strong>exécution de nos obligations (pré-)contractuelles</strong> ou en raison de votre <strong>consentement</strong>.</p>
        
        <h3 class="h5 mt-4">d) Services Utilisés :</h3>
        
        <ul class="list-group mb-3">
            <li class="list-group-item">
                <strong>Hébergement Web :</strong> <a href="https://www.hoststar.ch">hoststar.ch</a>
            </li>
        </ul>
        
    </section>

    <section id="outils-services" class="mb-5">
        <h2 class="h4 mb-3">4. Recherche et Assurance Qualité</h2>
        <p>Nous collectons votre progression d'apprentissage et enregistrons les conseils que vous donnez sur les types de cellules. Ceux-ci peuvent être évalués à des fins de recherche et d'assurance qualité. Ces données seront supprimées après un maximum de 20 ans.</p>
        <p>Les noms d'utilisateur ainsi que la date du niveau le plus élevé atteint par les dix meilleurs utilisateurs seront publiés sur le classement (Leaderboard). En utilisant BlastenBlaster, vous consentez à cette publication. Vous pouvez choisir votre propre nom d'utilisateur, celui-ci ne devant pas nécessairement être identifiant.</p>
        <p>Votre progression d'apprentissage est stockée dans notre base de données et n'est pas transmise par nous aux sociétés professionnelles. Cependant, vous pouvez vous-même sauvegarder et soumettre votre progression d'apprentissage personnelle ; à cette fin, nous signons vos données avec un hachage cryptographique afin que l'authenticité de la progression d'apprentissage puisse être vérifiée.</p>


        
    </section>

    <section id="vos-droits" class="mb-5">
        <h2 class="h4 mb-3">5. Vos Droits</h2>
        <p>En tant que personne concernée, vous disposez des droits suivants en vertu de la Loi fédérale suisse sur la protection des données (LPD) et, le cas échéant, du RGPD :</p>
        
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Droit d'Accès :</strong> Demander des informations sur les données que nous traitons à votre sujet.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Droit de Rectification :</strong> Faire rectifier les données incorrectes.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Droit d'Opposition :</strong> Vous opposer au traitement de vos données.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Droit à l'Effacement (Droit à l'Oubli) :</strong> Demander la suppression de vos données.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Droit à la Portabilité des Données :</strong> Recevoir vos données dans un format courant.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Droit de Retirer le Consentement :</strong> Retirer un consentement donné à tout moment.</li>
                </ul>
            </div>
        </div>
         <p class="mt-3">Pour faire valoir vos droits, veuillez contacter le point de contact mentionné à la section 1.</p>
    </section>

    <section id="modifications" class="mb-3">
        <h2 class="h4 mb-3">6. Modifications de cette Politique de Confidentialité</h2>
        <p>Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment. La version actuelle publiée sur notre site web fait foi.</p>
        <p class="fw-bold">Dernière mise à jour le : 27.09.2025</p>
    </section>
    
</div>
    <?php
    break;
    case 'it':
    ?>
    <div class="card p-4 p-md-5">
    <header class="text-center mb-4">
        <h1 class="display-5">Informativa sulla Privacy</h1>
        <p class="text-muted">Stato: Settembre 2025 - basata sulla nuova Legge federale svizzera sulla protezione dei dati (LPD)</p>
    </header>
    
    <hr class="my-4">

    <section id="introduzione" class="mb-5">
        <h2 class="h4 mb-3">1. Introduzione</h2>
        <p>Attribuiamo valore alla protezione dei vostri <strong>dati personali</strong>. Questa Informativa sulla Privacy vi informa su quali <strong>dati personali</strong> raccogliamo in relazione al vostro utilizzo del nostro sito web (<a href="https://www.blastenblaster.com" target="_blank">www.blastenblaster.com</a>), come li utilizziamo e quali <strong>diritti</strong> avete in relazione a tali dati.</p>

        <h3 class="h5 mt-3">Titolare del Trattamento (Responsabile)</h3>
        <p>Il responsabile del trattamento dei dati è:</p>
        <address class="fst-italic">
            <strong>PD Dr. med. Dr. sc. nat. Jeremy Deuel</strong><br>
            I miei dati di contatto sono disponibili sul sito web del mio <a href="https://www.usz.ch/team/jeremy-deuel/" target="_blank">datore di lavoro</a>.
        </address>
    </section>

    <section id="principi" class="mb-5">
        <h2 class="h4 mb-3">2. Principi del Trattamento dei Dati (LPD)</h2>
        <p>Ci atteniamo ai principi della Legge federale svizzera sulla protezione dei dati (LPD) e, ove applicabile, del Regolamento generale sulla protezione dei dati dell'UE (GDPR), in particolare ai principi di <strong>liceità</strong>, <strong>limitazione delle finalità</strong>, <strong>proporzionalità</strong> e <strong>trasparenza</strong>.</p>
    </section>

    <section id="trattamento-dati-utilizzo" class="mb-5">
        <h2 class="h4 mb-3">3. Trattamento dei Dati durante l'Utilizzo del nostro Sito Web</h2>
        
        <h3 class="h5 mt-3">a) File di Log</h3>
        <p>Quando visitate il nostro sito web, il nostro fornitore di hosting registra automaticamente le informazioni che il vostro browser trasmette al nostro server. Questi cosiddetti <strong>file di log del server</strong> includono:</p>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item">Tipo e versione del browser</li>
            <li class="list-group-item">Sistema operativo utilizzato</li>
            <li class="list-group-item">URL di riferimento (la pagina visitata in precedenza)</li>
            <li class="list-group-item">Nome host del computer che accede</li>
            <li class="list-group-item">Ora della richiesta al server</li>
            <li class="list-group-item">Indirizzo IP</li>
        </ul>
        <p class="text-secondary">Questi dati vengono raccolti per **garantire la funzionalità e la sicurezza del sistema** e vengono cancellati dopo un massimo di 5 anni.</p>

        <h3 class="h5 mt-4">b) Cookie</h3>
        <p>Il nostro sito web utilizza <strong>cookie</strong> e tecnologie simili (ad esempio, pixel tag). I cookie sono piccoli file di testo che vengono memorizzati sul vostro dispositivo finale.</p>
        <ul class="list-unstyled">
            <li><i class="bi bi-check-circle-fill text-success"></i> <strong>Cookie Necessari:</strong> Questi sono strettamente necessari per il funzionamento del sito web (ad esempio, per la memorizzazione della vostra impostazione linguistica). Non ci sono cookie non strettamente necessari, motivo per cui non vi chiediamo specificamente il vostro consenso.</li>
        </ul>
        <p class="text-secondary">Potete rifiutare o cancellare i cookie nel vostro browser. Tuttavia, la disattivazione potrebbe limitare determinate funzioni del sito web.</p>

        <h3 class="h5 mt-4">c) Moduli di Contatto e Contatto via E-mail</h3>
        <p>Se vi registrate presso di noi o ci inviate richieste via e-mail, i vostri dati (in particolare nome, indirizzo e-mail e il vostro messaggio) verranno memorizzati per la <strong>gestione della richiesta</strong>. Il trattamento di questi dati avviene per l'<strong>adempimento dei nostri obblighi (pre-)contrattuali</strong> o sulla base del vostro <strong>consenso</strong>.</p>
        
        <h3 class="h5 mt-4">d) Servizi Utilizzati:</h3>
        
        <ul class="list-group mb-3">
            <li class="list-group-item">
                <strong>Hosting Web:</strong> <a href="https://www.hoststar.ch">hoststar.ch</a>
            </li>
        </ul>
        
    </section>

    <section id="strumenti-servizi" class="mb-5">
        <h2 class="h4 mb-3">4. Ricerca e Garanzia della Qualità</h2>
        <p>Raccogliamo i vostri progressi di apprendimento e memorizziamo i suggerimenti che fornite sui tipi di cellule. Questi possono essere valutati a fini di ricerca e garanzia della qualità. Tali dati saranno cancellati dopo un massimo di 20 anni.</p>
        <p>I nomi utente e la data del livello massimo raggiungibile dei dieci migliori utenti saranno pubblicati nella Classifica (Leaderboard). Utilizzando BlastenBlaster, acconsentite a questa pubblicazione. Potete scegliere il vostro nome utente, il quale non deve necessariamente essere identificativo.</p>
        <p>I vostri progressi di apprendimento vengono memorizzati nel nostro database e non vengono trasmessi da noi alle società professionali. Tuttavia, potete salvare e presentare i vostri progressi di apprendimento personali; a tal fine, firmiamo i vostri dati con un hash crittografico in modo che l'autenticità dei progressi di apprendimento possa essere verificata.</p>


        
    </section>

    <section id="i-vostri-diritti" class="mb-5">
        <h2 class="h4 mb-3">5. I Vostri Diritti</h2>
        <p>In qualità di interessati, ai sensi della Legge federale svizzera sulla protezione dei dati (LPD) e, se applicabile, del GDPR, avete i seguenti diritti:</p>
        
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Diritto di Accesso:</strong> Richiedere informazioni su quali dati trattiamo che vi riguardano.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Diritto di Rettifica:</strong> Ottenere la rettifica dei dati inesatti.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Diritto di Opposizione:</strong> Opporsi al trattamento dei vostri dati.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Diritto di Cancellazione (all'Oblio):</strong> Richiedere la cancellazione dei vostri dati.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Diritto alla Portabilità dei Dati:</strong> Ricevere i vostri dati in un formato comune.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Diritto di Revocare il Consenso:</strong> Revocare un consenso dato in qualsiasi momento.</li>
                </ul>
            </div>
        </div>
         <p class="mt-3">Per far valere i vostri diritti, si prega di contattare il punto di contatto menzionato nella Sezione 1.</p>
    </section>

    <section id="modifiche" class="mb-3">
        <h2 class="h4 mb-3">6. Modifiche a questa Informativa sulla Privacy</h2>
        <p>Ci riserviamo il diritto di modificare questa Informativa sulla Privacy in qualsiasi momento. La versione attuale pubblicata sul nostro sito web è quella di riferimento.</p>
        <p class="fw-bold">Ultimo aggiornamento: 27.09.2025</p>
    </section>
    
</div>
    <?php
    break;
    case 'es':
    ?>
    <div class="card p-4 p-md-5">
    <header class="text-center mb-4">
        <h1 class="display-5">Política de Privacidad</h1>
        <p class="text-muted">Estado: Septiembre de 2025 - basado en la nueva Ley Federal Suiza de Protección de Datos (LPD)</p>
    </header>
    
    <hr class="my-4">

    <section id="introduccion" class="mb-5">
        <h2 class="h4 mb-3">1. Introducción</h2>
        <p>Valoramos la protección de sus <strong>datos personales</strong>. Esta Política de Privacidad le informa sobre qué <strong>datos personales</strong> recopilamos, cómo los utilizamos y qué <strong>derechos</strong> tiene en relación con el uso de nuestro sitio web (<a href="https://www.blastenblaster.com" target="_blank">www.blastenblaster.com</a>).</p>

        <h3 class="h5 mt-3">Responsable del Tratamiento</h3>
        <p>El responsable del tratamiento de los datos es:</p>
        <address class="fst-italic">
            <strong>PD Dr. med. Dr. sc. nat. Jeremy Deuel</strong><br>
            Mis datos de contacto se encuentran en el sitio web de mi <a href="https://www.usz.ch/team/jeremy-deuel/" target="_blank">empleador</a>.
        </address>
    </section>

    <section id="principios" class="mb-5">
        <h2 class="h4 mb-3">2. Principios del Tratamiento de Datos (LPD)</h2>
        <p>Nos adherimos a los principios de la Ley Federal Suiza de Protección de Datos (LPD) y, cuando corresponda, del Reglamento General de Protección de Datos de la UE (RGPD), en particular a los principios de <strong>legalidad</strong>, <strong>limitación de la finalidad</strong>, <strong>proporcionalidad</strong> y <strong>transparencia</strong>.</p>
    </section>

    <section id="tratamiento-datos-uso" class="mb-5">
        <h2 class="h4 mb-3">3. Tratamiento de Datos al Utilizar Nuestro Sitio Web</h2>
        
        <h3 class="h5 mt-3">a) Archivos de Registro (Log Files)</h3>
        <p>Cuando visita nuestro sitio web, nuestro proveedor de alojamiento registra automáticamente la información que su navegador transmite a nuestro servidor. Estos <strong>archivos de registro del servidor</strong> incluyen:</p>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item">Tipo y versión del navegador</li>
            <li class="list-group-item">Sistema operativo utilizado</li>
            <li class="list-group-item">URL de referencia (la página visitada anteriormente)</li>
            <li class="list-group-item">Nombre de host del ordenador de acceso</li>
            <li class="list-group-item">Hora de la solicitud al servidor</li>
            <li class="list-group-item">Dirección IP</li>
        </ul>
        <p class="text-secondary">Estos datos se recopilan con el fin de **garantizar la funcionalidad y la seguridad del sistema** y se eliminan después de un máximo de 5 años.</p>

        <h3 class="h5 mt-4">b) Cookies</h3>
        <p>Nuestro sitio web utiliza <strong>cookies</strong> y tecnologías similares (por ejemplo, etiquetas de píxel). Las cookies son pequeños archivos de texto que se almacenan en su dispositivo final.</p>
        <ul class="list-unstyled">
            <li><i class="bi bi-check-circle-fill text-success"></i> <strong>Cookies Necesarias:</strong> Son estrictamente necesarias para el funcionamiento del sitio web (por ejemplo, para guardar su configuración de idioma). No existen cookies que no sean estrictamente necesarias, por lo que no le pedimos específicamente su consentimiento.</li>
        </ul>
        <p class="text-secondary">Puede rechazar o eliminar las cookies en su navegador. Sin embargo, la desactivación puede restringir ciertas funciones del sitio web.</p>

        <h3 class="h5 mt-4">c) Formularios de Contacto y Contacto por Correo Electrónico</h3>
        <p>Si se registra con nosotros o nos envía consultas por correo electrónico, su información (en particular, nombre, dirección de correo electrónico y su mensaje) se almacenará para el <strong>procesamiento de la solicitud</strong>. El tratamiento de estos datos se lleva a cabo para el **cumplimiento de nuestras obligaciones (pre)contractuales<strong> o en base a su </strong>consentimiento**.</p>
        
        <h3 class="h5 mt-4">d) Servicios Utilizados:</h3>
        
        <ul class="list-group mb-3">
            <li class="list-group-item">
                <strong>Alojamiento Web:</strong> <a href="https://www.hoststar.ch">hoststar.ch</a>
            </li>
        </ul>
        
    </section>

    <section id="herramientas-servicios" class="mb-5">
        <h2 class="h4 mb-3">4. Investigación y Garantía de Calidad</h2>
        <p>Recopilamos su progreso de aprendizaje y guardamos los consejos que proporciona sobre los tipos de células. Estos pueden ser evaluados con fines de investigación y garantía de calidad. Estos datos se eliminarán después de un máximo de 20 años.</p>
        <p>Los nombres de usuario y la fecha del nivel más alto alcanzable de los diez mejores usuarios se publicarán en la Clasificación. Al utilizar BlastenBlaster, usted acepta esta publicación. Puede elegir su propio nombre de usuario, el cual no tiene por qué ser necesariamente identificativo.</p>
        <p>Su progreso de aprendizaje se almacena en nuestra base de datos y no lo transmitimos a sociedades profesionales. Sin embargo, usted mismo puede guardar y enviar su progreso de aprendizaje personal; para ello, firmamos sus datos con un hash criptográfico para que se pueda verificar la autenticidad del progreso de aprendizaje.</p>


        
    </section>

    <section id="sus-derechos" class="mb-5">
        <h2 class="h4 mb-3">5. Sus Derechos</h2>
        <p>Como persona interesada, tiene los siguientes derechos según la Ley Federal Suiza de Protección de Datos (LPD) y, en su caso, el RGPD:</p>
        
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Derecho de Acceso:</strong> Solicitar información sobre qué datos tratamos sobre usted.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Derecho de Rectificación:</strong> Solicitar la corrección de datos incorrectos.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Derecho de Oposición:</strong> Oponerse al tratamiento de sus datos.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Derecho de Supresión (Derecho al Olvido):</strong> Solicitar la eliminación de sus datos.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Derecho a la Portabilidad de los Datos:</strong> Recibir sus datos en un formato común.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Derecho a Retirar el Consentimiento:</strong> Retirar un consentimiento otorgado en cualquier momento.</li>
                </ul>
            </div>
        </div>
         <p class="mt-3">Para ejercer sus derechos, póngase en contacto con el punto de contacto mencionado en la Sección 1.</p>
    </section>

    <section id="cambios" class="mb-3">
        <h2 class="h4 mb-3">6. Cambios a esta Política de Privacidad</h2>
        <p>Nos reservamos el derecho de modificar esta Política de Privacidad en cualquier momento. La versión actual publicada en nuestro sitio web es la que rige.</p>
        <p class="fw-bold">Última actualización: 27.09.2025</p>
    </section>
    
</div>
    <?php
    break;
    case 'en':
    default:
    ?>
    <div class="card p-4 p-md-5">
    <header class="text-center mb-4">
        <h1 class="display-5">Privacy Policy</h1>
        <p class="text-muted">Status: September 2025 - based on the new Swiss Federal Act on Data Protection (FADP)</p>
    </header>
    
    <hr class="my-4">

    <section id="einleitung" class="mb-5">
        <h2 class="h4 mb-3">1. Introduction</h2>
        <p>We value the protection of your <strong>personal data</strong>. This Privacy Policy informs you about which <strong>personal data</strong> we collect, how we use it, and what <strong>rights</strong> you have in connection with your use of our website (<a href="https://www.blastenblaster.com" target="_blank">www.blastenblaster.com</a>).</p>

        <h3 class="h5 mt-3">Responsible Body (Controller)</h3>
        <p>The controller responsible for data processing is:</p>
        <address class="fst-italic">
            <strong>PD Dr. med. Dr. sc. nat. Jeremy Deuel</strong><br>
            My contact details can be found on my <a href="https://www.usz.ch/team/jeremy-deuel/" target="_blank">employer's website</a>.
        </address>
    </section>

    <section id="grundsaetze" class="mb-5">
        <h2 class="h4 mb-3">2. Principles of Data Processing (FADP)</h2>
        <p>We adhere to the principles of the Swiss Federal Act on Data Protection (FADP) and, where applicable, the EU General Data Protection Regulation (GDPR), in particular the principles of <strong>lawfulness</strong>, <strong>purpose limitation</strong>, <strong>proportionality</strong>, and <strong>transparency</strong>.</p>
    </section>

    <section id="datenbearbeitung-nutzung" class="mb-5">
        <h2 class="h4 mb-3">3. Data Processing when Using our Website</h2>
        
        <h3 class="h5 mt-3">a) Log Files</h3>
        <p>When you visit our website, our hosting provider automatically collects information that your browser transmits to our server. These so-called <strong>server log files</strong> include:</p>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item">Browser type and browser version</li>
            <li class="list-group-item">Operating system used</li>
            <li class="list-group-item">Referrer URL (the previously visited page)</li>
            <li class="list-group-item">Host name of the accessing computer</li>
            <li class="list-group-item">Time of the server request</li>
            <li class="list-group-item">IP address</li>
        </ul>
        <p class="text-secondary">This data is collected for the purpose of <strong>ensuring functionality and system security</strong> and is deleted after a maximum of 5 years.</p>

        <h3 class="h5 mt-4">b) Cookies</h3>
        <p>Our website uses <strong>cookies</strong> and similar technologies (e.g., pixel tags). Cookies are small text files that are stored on your device.</p>
        <ul class="list-unstyled">
            <li><i class="bi bi-check-circle-fill text-success"></i> <strong>Necessary Cookies:</strong> These are strictly necessary for the operation of the website (e.g., for storing your language setting). There are no non-essential cookies, which is why we do not specifically ask for your consent.</li>
        </ul>
        <p class="text-secondary">You can reject or delete cookies in your browser. However, deactivating them may restrict certain functions of the website.</p>

        <h3 class="h5 mt-4">c) Contact Forms and Email Contact</h3>
        <p>If you register with us or send us email inquiries, your information (in particular name, email address, and your message) will be stored for the purpose of <strong>processing the request</strong>. The processing of this data is carried out for the <strong>fulfilment of our (pre-)contractual obligations</strong> or based on your <strong>consent</strong>.</p>
        
        <h3 class="h5 mt-4">d) Services Used:</h3>
        
        <ul class="list-group mb-3">
            <li class="list-group-item">
                <strong>Web Hosting:</strong> <a href="https://www.hoststar.ch">hoststar.ch</a>
            </li>
        </ul>
        
    </section>

    <section id="tools-dienste" class="mb-5">
        <h2 class="h4 mb-3">4. Research and Quality Assurance</h2>
        <p>We collect your learning progress and store tips you provide on cell types. These may be evaluated for research and quality assurance purposes. This data will be deleted after a maximum of 20 years.</p>
        <p>The usernames and the date of the highest achievable level of the top ten users will be published on the Leaderboard. By using BlastenBlaster, you agree to this publication. You can choose your own username, and it does not necessarily have to be identifying.</p>
        <p>Your learning progress is stored in our database and is not transmitted by us to professional societies. However, you can save and submit your personal learning progress yourself; for this purpose, we sign your data with a cryptographic hash so that the authenticity of the learning progress can be verified.</p>


        
    </section>

    <section id="ihre-rechte" class="mb-5">
        <h2 class="h4 mb-3">5. Your Rights</h2>
        <p>As a data subject, you have the following rights under the Swiss Federal Act on Data Protection (FADP) and, where applicable, the GDPR:</p>
        
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Right of Access:</strong> To request information about what data we process about you.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Right to Rectification:</strong> To have incorrect data corrected.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Right to Object:</strong> To object to the processing of your data.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Right to Erasure (to be forgotten):</strong> To request the deletion of your data.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Right to Data Portability:</strong> To receive your data in a common format.</li>
                    <li class="list-group-item"><i class="bi bi-chevron-right me-2"></i> <strong>Right to Withdraw Consent:</strong> To withdraw a given consent at any time.</li>
                </ul>
            </div>
        </div>
         <p class="mt-3">To assert your rights, please contact the contact point mentioned in Section 1.</p>
    </section>

    <section id="aenderungen" class="mb-3">
        <h2 class="h4 mb-3">6. Changes to this Privacy Policy</h2>
        <p>We reserve the right to change this Privacy Policy at any time. The current version published on our website is authoritative.</p>
        <p class="fw-bold">Last updated on: 27.09.2025</p>
    </section>
    
</div>
    <?php
}
?>
    </main>
</div>
</body>
</html>