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
      <h1 class="display-4 fw-normal text-body-emphasis">Lernen</h1>
      <p class="fs-5 text-body-secondary">Diese Seite gibt Dir einen kurzen Überblick über die verschiedenen Zelltypen. Wir empfehlen Dir aber, die Zelltypen intuitiv mit dem interaktiven Lernprogramm einzustudieren, da die Morphologie der Zellen sehr variabel sein kann.</p>
    </div>
  </header>
  <main>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://jeremy.deuel.ch/cells/images/cells/cella_K0UN7L_082.png" alt="a" style="margin: -54px 0 0 -54px;
    clip-path: inset(54px 74px 74px 54px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Lymphozyt [a]</h5>
      <p>Lymphozyten sind kleine Blutzellen mit einem großen, runden Kern und einem schmalen, blauen Zytoplasmasaum. Sie sind für die spezifische Immunabwehr verantwortlich.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://jeremy.deuel.ch/cells/images/cells/cellx_WHTGHS_078.png" alt="a" style="margin: -58px 0 0 -86px;
    clip-path: inset(58px 42px 70px 86px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Monozyt [x]</h5>
      <p>Monozyten sind große, unregelmäßig geformte Blutzellen mit einem großen, nierenförmigen Kern und einem hellblauen, körnigen Zytoplasma. Sie spielen eine wichtige Rolle bei der unspezifischen Immunabwehr.</p>
      </div>
  </div>
  
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://jeremy.deuel.ch/cells/images/cells/cellf_SUHXIH_252.png" alt="f" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Stabkerniger Granulozyt [f]</h5>
      <p>Stabkernige neutrophile Granulozyten sind junge Zellen, bei einer Vermehrung spricht man von einer Linksverschiebung. Der Kern ist noch zusammenhängend. Sie sind eine Zwischenstufe bei der Entwicklung der Granulozyten und spielen eine Rolle bei der akuten Entzündungsreaktion.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://jeremy.deuel.ch/cells/images/cells/celld_ST4LQ3_260.png" alt="d" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Segmentkerniger Granulozyt [d]</h5>
      <p>Segmentkernige neutrophile Granulozyten sind reifere Zellen, der Kern ist in mehrere Segmente aufgeteilt, welche nur durch einen Faden verbunden sind. Bei vorliegen lediglich zweier Kernsegmente spricht man von einer Pseudo-Pelger-Huët-Form, ein Dysplasiezeichen, bei mehr als 5 Kernsegmenten von hypersegmentierten Formen.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://jeremy.deuel.ch/cells/images/cells/cellc_IELVL4_189.png" alt="c" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Eosinophiler Granulozyt [c]</h5>
      <p>Eosinophile Granulozyten sind weiße Blutkörperchen mit einem zweilappigen Kern und einem hellblau gefärbten Zytoplasma. Darin befinden sich zahlreiche, rot-orange gefärbte Granula, die ihnen ihren Namen geben. Sie spielen eine wichtige Rolle bei allergischen Reaktionen und Parasitenabwehr.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://jeremy.deuel.ch/cells/images/cells/cellh_WHTGHS_216.png" alt="h" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Basophiler Granulozyt [h]</h5>
      <p>Basophile Granulozyten sind weiße Blutkörperchen mit einem unregelmäßig gelappten Kern und einem dunkelblau bis schwarz gefärbten Zytoplasma. Darin befinden sich zahlreiche, dunkelblaue Granula. Sie spielen eine Rolle bei allergischen Reaktionen und Entzündungen.</p>
      </div>
  </div>
  <!-- level 2 -->
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://jeremy.deuel.ch/cells/images/cells/cellg_931Y73_187.png" alt="s" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Metamyelozyt [s]</h5>
      <p>Metamyelozyten sind unreife Granulozyten mit einem großen, nierenförmigen oder leicht gefalteten Kern. Ihr Zytoplasma ist hellblau gefärbt und enthält feine Granula. Sie stellen eine Zwischenstufe bei der Entwicklung der Granulozyten dar. Im Gegensatz zu stabkernigen Granulozyten besitzen Metamyelozyten einen größeren, nierenförmigen oder leicht gefalteten Kern, während Bandformen einen stabförmigen Kern aufweisen. </p>
      </div>
  </div>
  
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://jeremy.deuel.ch/cells/images/cells/cells_DXPN9K_219.png" alt="s" style="margin: -54px 0 0 -64px;
    clip-path: inset(54px 64px 74px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Myelozyt [s]</h5>
      <p>Myelozyten sind unreife Granulozyten mit einem großen, runden Kern, der häufig exzentrisch liegt. Das Zytoplasma ist reichlich vorhanden und färbt sich hellblau. Im Zytoplasma befinden sich bereits feine Granula, die je nach Reifungsgrad unterschiedlich stark ausgeprägt sind.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://jeremy.deuel.ch/cells/images/cells/cellv_YL6YUA_146.png" alt="v" style="margin: -54px 0 0 -64px;
    clip-path: inset(54px 64px 74px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Promyelozyt [v]</h5>
      <p>Promyelozyten sind unreife Granulozyten mit einem großen, runden Kern und einem reichlichen, hellblauen Zytoplasma. Üblicherweise findet sich eine prominente Aufhellung neben dem Kern. Sie enthalten bereits Azurophil-Granula, die für ihre Phagozytose-Funktion wichtig sind. Promyelozyten sind eine frühe Entwicklungsstufe der Granulozyten. Promyelozyten sind größere Zellen als Myeloblasten, mit einem ähnlichen großen, runden Kern, jedoch mit einem feineren Chromatinmuster. Ihr Zytoplasma ist reichlicher und enthält charakteristische azurophilen Granula, die sie von Myeloblasten unterscheiden. Im Gegensatz zu Myelozyten, die einen exzentrischen Kern und bereits spezifische Granula aufweisen, besitzen Promyelozyten noch einen zentral gelegenen Kern und ausschließlich azurophile Granula.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://jeremy.deuel.ch/cells/images/cells/cellb_IYGIIO_088.png" alt="b" style="margin: -44px 0 0 -64px;
    clip-path: inset(44px 64px 84px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Myeloblast [b]</h5>
      <p>Myeloblasten sind unreife Vorläuferzellen der Granulozyten. Sie besitzen einen großen, runden Kern, der häufig den Großteil der Zelle einnimmt. Das Zytoplasma ist schmal und färbt sich hellblau. Es ist morphologisch häufig meistens schwierig, Hämatogonen, Lymphoblasten, Myeloblasten und Monoblasten zu unterscheiden, sie werden daher immer zu den Myeloblasten gezählt.</p>
      </div>
  </div>
  <!-- level 3 -->
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://jeremy.deuel.ch/cells/images/cells/cellt_XUL11P_002.png" alt="t" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Proerythroblast [t]</h5>
      <p>Proerythrozyten sind große Zellen mit einem großen, runden Kern und einem dunkelblauen, körnigen Zytoplasma. Es findet sich eine oder mehrere prominente Aufhellungen des Zytoplasmas neben dem Zellkern. Sie sind die ersten erkennbaren Vorläuferzellen der roten Blutkörperchen und weisen eine hohe mitotische Aktivität auf.
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://jeremy.deuel.ch/cells/images/cells/cellr_KA1MN6_001.png" alt="r" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Basophiler Erythroblast [r]</h5>
      <p>Basophile Erythrozyten sind etwas kleiner als Proerythrozyten und besitzen einen etwas kleineren, runden Kern, der exzentrisch liegt. Das Zytoplasma ist dunkelblau gefärbt und enthält bereits Hämoglobin, was sie von Proerythrozyten unterscheidet. Im Gegensatz zu Polychromatischen Erythrozyten, die ein grau-blaues Zytoplasma aufweisen, ist das Zytoplasma der Basophilen Erythrozyten noch deutlich blau gefärbt.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://jeremy.deuel.ch/cells/images/cells/celle_47J47U_091.png" alt="e" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Polychromatischer Erythroblast [e]</h5>
      <p>Polychromatische Erythrozyten sind kleiner als Basophile Erythrozyten und besitzen einen kleineren, runden Kern, der exzentrisch liegt. Ihr Zytoplasma ist grau-blau gefärbt, was auf die beginnende Hämoglobinbildung zurückzuführen ist. Im Gegensatz zu Basophilen Erythrozyten, die ein deutlich blaues Zytoplasma aufweisen, ist das Zytoplasma der Polychromatischen Erythrozyten bereits weniger blau. Im Vergleich zu Oxyphile Erythrozyten, die ein rötliches Zytoplasma besitzen, ist das Zytoplasma der Polychromatischen Erythrozyten noch grau-blau.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://jeremy.deuel.ch/cells/images/cells/cellw_HBGFIQ_140.png" alt="w" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Oxyphiler Erythroblast [w]</h5>
      <p>Oxyphile Erythrozyten sind kleiner als Polychromatische Erythrozyten und besitzen einen kleinen, runden Kern, der exzentrisch liegt. Ihr Zytoplasma ist rötlich gefärbt, was auf die vollständige Hämoglobinisierung zurückzuführen ist. Im Gegensatz zu Polychromatischen Erythrozyten, die ein grau-blaues Zytoplasma aufweisen, ist das Zytoplasma der Oxyphile Erythrozyten bereits rötlich.</p>
      </div>
  </div>
     <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://jeremy.deuel.ch/cells/images/cells/cellq_1RPEC0_069.png" alt="q" style="margin: -54px 0 0 -54px;
    clip-path: inset(54px 74px 74px 54px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Plasmazelle [q]</h5>
      <p>Plasmazellen sind große, runde Zellen mit einem exzentrisch gelegenen, rundlichen Kern und einem basophilen Zytoplasma. Der Kern weist ein charakteristisches, radspeichenartiges Chromatinmuster auf, manche sehen darin auch Ähnlichkeiten zu einem Fussball. Das Zytoplasma ist stark basophil und enthält einen ausgeprägten Golgi-Apparat, der als heller Hof im Zytoplasma sichtbar sein kann.</p>
      </div>
  </div>
   <h2>Tastaturbelegung</h2>
   <img src="https://jeremy.deuel.ch/cells/images/KeyboardWithIcons.png" style="width: 100%"/>
  
    </main>
    </div>
</body>
</html>