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
  <header class="text-white">
        <?php include('menubar.php'); ?>
    </header>
  <main>
  <?php
  switch($lang) {
  case 'de':
  ?>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cella_K0UN7L_082.png" alt="a" style="margin: -54px 0 0 -54px;
    clip-path: inset(54px 74px 74px 54px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Lymphozyt [a]</h5>
      <p>Lymphozyten sind kleine Blutzellen mit einem grossen, runden Kern und einem schmalen, blauen Zytoplasmasaum. Sie sind für die spezifische Immunabwehr verantwortlich.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellx_WHTGHS_078.png" alt="a" style="margin: -58px 0 0 -86px;
    clip-path: inset(58px 42px 70px 86px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Monozyt [x]</h5>
      <p>Monozyten sind grosse, unregelmässig geformte Blutzellen mit einem grossen, nierenförmigen Kern und einem hellblauen, körnigen Zytoplasma. Sie spielen eine wichtige Rolle bei der unspezifischen Immunabwehr.</p>
      </div>
  </div>
  
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellf_SUHXIH_252.png" alt="f" />
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
              <img src="https://blastenblaster.com/images/cells/celld_ST4LQ3_260.png" alt="d" />
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
              <img src="https://blastenblaster.com/images/cells/cellc_IELVL4_189.png" alt="c" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Eosinophiler Granulozyt [c]</h5>
      <p>Eosinophile Granulozyten sind weisse Blutkörperchen mit einem zweilappigen Kern und einem hellblau gefärbten Zytoplasma. Darin befinden sich zahlreiche, rot-orange gefärbte Granula, die ihnen ihren Namen geben. Sie spielen eine wichtige Rolle bei allergischen Reaktionen und Parasitenabwehr.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellh_WHTGHS_216.png" alt="h" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Basophiler Granulozyt [h]</h5>
      <p>Basophile Granulozyten sind weisse Blutkörperchen mit einem unregelmässig gelappten Kern und einem dunkelblau bis schwarz gefärbten Zytoplasma. Darin befinden sich zahlreiche, dunkelblaue Granula. Sie spielen eine Rolle bei allergischen Reaktionen und Entzündungen.</p>
      </div>
  </div>
  <!-- level 2 -->
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellg_931Y73_187.png" alt="s" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Metamyelozyt [s]</h5>
      <p>Metamyelozyten sind unreife Granulozyten mit einem grossen, nierenförmigen oder leicht gefalteten Kern. Ihr Zytoplasma ist hellblau gefärbt und enthält feine Granula. Sie stellen eine Zwischenstufe bei der Entwicklung der Granulozyten dar. Im Gegensatz zu stabkernigen Granulozyten besitzen Metamyelozyten einen grösseren, nierenförmigen oder leicht gefalteten Kern, während Bandformen einen stabförmigen Kern aufweisen. </p>
      </div>
  </div>
  
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cells_DXPN9K_219.png" alt="s" style="margin: -54px 0 0 -64px;
    clip-path: inset(54px 64px 74px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Myelozyt [s]</h5>
      <p>Myelozyten sind unreife Granulozyten mit einem grossen, runden Kern, der häufig exzentrisch liegt. Das Zytoplasma ist reichlich vorhanden und färbt sich hellblau. Im Zytoplasma befinden sich bereits feine Granula, die je nach Reifungsgrad unterschiedlich stark ausgeprägt sind.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellv_YL6YUA_146.png" alt="v" style="margin: -54px 0 0 -64px;
    clip-path: inset(54px 64px 74px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Promyelozyt [v]</h5>
      <p>Promyelozyten sind unreife Granulozyten mit einem grossen, runden Kern und einem reichlichen, hellblauen Zytoplasma. Üblicherweise findet sich eine prominente Aufhellung neben dem Kern. Sie enthalten bereits Azurophil-Granula, die für ihre Phagozytose-Funktion wichtig sind. Promyelozyten sind eine frühe Entwicklungsstufe der Granulozyten. Promyelozyten sind grössere Zellen als Myeloblasten, mit einem ähnlichen grossen, runden Kern, jedoch mit einem feineren Chromatinmuster. Ihr Zytoplasma ist reichlicher und enthält charakteristische azurophilen Granula, die sie von Myeloblasten unterscheiden. Im Gegensatz zu Myelozyten, die einen exzentrischen Kern und bereits spezifische Granula aufweisen, besitzen Promyelozyten noch einen zentral gelegenen Kern und ausschliesslich azurophile Granula.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellb_IYGIIO_088.png" alt="b" style="margin: -44px 0 0 -64px;
    clip-path: inset(44px 64px 84px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Myeloblast [b]</h5>
      <p>Myeloblasten sind unreife Vorläuferzellen der Granulozyten. Sie besitzen einen grossen, runden Kern, der häufig den Grossteil der Zelle einnimmt. Das Zytoplasma ist schmal und färbt sich hellblau. Es ist morphologisch häufig meistens schwierig, Hämatogonen, Lymphoblasten, Myeloblasten und Monoblasten zu unterscheiden, sie werden daher immer zu den Myeloblasten gezählt.</p>
      </div>
  </div>
  <!-- level 3 -->
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellt_XUL11P_002.png" alt="t" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Proerythroblast [t]</h5>
      <p>Proerythrozyten sind grosse Zellen mit einem grossen, runden Kern und einem dunkelblauen, körnigen Zytoplasma. Es findet sich eine oder mehrere prominente Aufhellungen des Zytoplasmas neben dem Zellkern. Sie sind die ersten erkennbaren Vorläuferzellen der roten Blutkörperchen und weisen eine hohe mitotische Aktivität auf.
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellr_KA1MN6_001.png" alt="r" />
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
              <img src="https://blastenblaster.com/images/cells/celle_47J47U_091.png" alt="e" />
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
              <img src="https://blastenblaster.com/images/cells/cellw_HBGFIQ_140.png" alt="w" />
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
              <img src="https://blastenblaster.com/images/cells/cellq_1RPEC0_069.png" alt="q" style="margin: -54px 0 0 -54px;
    clip-path: inset(54px 74px 74px 54px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Plasmazelle [q]</h5>
      <p>Plasmazellen sind grosse, runde Zellen mit einem exzentrisch gelegenen, rundlichen Kern und einem basophilen Zytoplasma. Der Kern weist ein charakteristisches, radspeichenartiges Chromatinmuster auf, manche sehen darin auch Ähnlichkeiten zu einem Fussball. Das Zytoplasma ist stark basophil und enthält einen ausgeprägten Golgi-Apparat, der als heller Hof im Zytoplasma sichtbar sein kann.</p>
      </div>
  </div>
   <h2>Tastaturbelegung</h2>
   <img src="https://blastenblaster.com/images/KeyboardWithIcons.png" style="width: 100%"/>
  
    </main>
    <?php
    break;
    case 'it':
    ?>
    <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cella_K0UN7L_082.png" alt="a" style="margin: -54px 0 0 -54px;
    clip-path: inset(54px 74px 74px 54px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Linfocita [a]</h5>
      <p>I <strong>linfociti</strong> sono piccole cellule del sangue con un nucleo grande e rotondo e un bordo stretto e blu di citoplasma. Sono responsabili della <strong>difesa immunitaria specifica</strong>.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellx_WHTGHS_078.png" alt="a" style="margin: -58px 0 0 -86px;
    clip-path: inset(58px 42px 70px 86px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Monocita [x]</h5>
      <p>I <strong>monociti</strong> sono grandi cellule del sangue di forma irregolare con un nucleo grande, a forma di rene, e un citoplasma granulare di colore azzurro. Svolgono un ruolo importante nella <strong>difesa immunitaria non specifica</strong>.</p>
      </div>
  </div>
  
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellf_SUHXIH_252.png" alt="f" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Granulocita Neutrofilo a Banda (o Giovanile) [f]</h5>
      <p>I <strong>granulociti neutrofili a banda</strong> sono cellule giovani; un aumento è chiamato <strong>deviazione a sinistra</strong>. Il nucleo è ancora unito (a forma di bastoncello o ferro di cavallo). Sono uno stadio intermedio nello sviluppo dei granulociti e svolgono un ruolo nella reazione infiammatoria acuta.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/celld_ST4LQ3_260.png" alt="d" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Granulocita Neutrofilo Segmentato [d]</h5>
      <p>I <strong>granulociti neutrofili segmentati</strong> sono cellule più mature; il nucleo è diviso in più segmenti collegati solo da un sottile filamento. La presenza di soli due segmenti nucleari è definita come <strong>forma di Pseudo-Pelger-Huët</strong>, un segno di displasia, mentre più di 5 segmenti nucleari sono chiamati <strong>forme ipersegmentate</strong>.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellc_IELVL4_189.png" alt="c" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Granulocita Eosinofilo [c]</h5>
      <p>I <strong>granulociti eosinofili</strong> sono globuli bianchi con un nucleo bilobato e un citoplasma colorato di azzurro. Contengono numerosi <strong>granuli color rosso-arancio</strong>, che danno loro il nome. Svolgono un ruolo importante nelle reazioni allergiche e nella difesa dai parassiti.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellh_WHTGHS_216.png" alt="h" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Granulocita Basofilo [h]</h5>
      <p>I <strong>granulociti basofili</strong> sono globuli bianchi con un nucleo lobato in modo irregolare e un citoplasma colorato da blu scuro a nero. Contengono numerosi <strong>granuli blu scuro</strong>. Svolgono un ruolo nelle reazioni allergiche e nelle infiammazioni.</p>
      </div>
  </div>
     <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellg_931Y73_187.png" alt="s" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Metamielocita [s]</h5>
      <p>I <strong>metamielociti</strong> sono granulociti immaturi con un nucleo grande, a forma di rene o leggermente piegato. Il loro citoplasma è colorato di azzurro e contiene granuli fini. Rappresentano uno stadio intermedio nello sviluppo dei granulociti. A differenza dei granulociti a banda, i metamielociti hanno un nucleo più grande, a forma di rene o leggermente piegato, mentre le forme a banda presentano un nucleo a forma di bastoncello. </p>
      </div>
  </div>
  
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cells_DXPN9K_219.png" alt="s" style="margin: -54px 0 0 -64px;
    clip-path: inset(54px 64px 74px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Mielocita [s]</h5>
      <p>I <strong>mielociti</strong> sono granulociti immaturi con un nucleo grande e rotondo, spesso posizionato eccentricamente. Il citoplasma è abbondante e si colora di azzurro. Nel citoplasma sono già presenti granuli fini, la cui prominenza varia a seconda del grado di maturazione.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellv_YL6YUA_146.png" alt="v" style="margin: -54px 0 0 -64px;
    clip-path: inset(54px 64px 74px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Promielocita [v]</h5>
      <p>I <strong>promielociti</strong> sono granulociti immaturi con un nucleo grande e rotondo e un citoplasma abbondante, azzurro. Solitamente si trova una prominente area chiara (alone perinucleare) accanto al nucleo. Contengono già i <strong>granuli azzurrofili</strong>, importanti per la loro funzione di fagocitosi. I promielociti sono uno stadio di sviluppo precoce dei granulociti. I promielociti sono cellule più grandi dei mieloblasti, con un nucleo rotondo e grande simile, ma con un pattern di cromatina più fine. Il loro citoplasma è più abbondante e contiene i caratteristici granuli azzurrofili, che li distinguono dai mieloblasti. A differenza dei mielociti, che hanno un nucleo eccentrico e già granuli specifici, i promielociti hanno ancora un nucleo centrale e contengono esclusivamente granuli azzurrofili.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellb_IYGIIO_088.png" alt="b" style="margin: -44px 0 0 -64px;
    clip-path: inset(44px 64px 84px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Mieloblasto [b]</h5>
      <p>I <strong>mieloblasti</strong> sono cellule progenitrici immature dei granulociti. Possiedono un nucleo grande e rotondo che spesso occupa la maggior parte della cellula. Il citoplasma è stretto e si colora di azzurro. Morfologicamente è spesso difficile distinguere tra ematogoni, linfoblasti, mieloblasti e monoblasti, pertanto sono sempre inclusi nel conteggio dei mieloblasti.</p>
      </div>
  </div>
     <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellt_XUL11P_002.png" alt="t" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Proeritroblasto [t]</h5>
      <p>I <strong>proeritroblasti</strong> (o proeritrociti) sono cellule grandi con un nucleo grande e rotondo e un citoplasma granulare di colore blu scuro. Si trova una o più aree di schiarimento prominenti del citoplasma accanto al nucleo. Sono le prime cellule progenitrici riconoscibili dei globuli rossi e mostrano un'elevata attività mitotica.
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellr_KA1MN6_001.png" alt="r" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Eritroblasto Basofilo [r]</h5>
      <p>Gli <strong>eritroblasti basofili</strong> (o eritrociti basofili) sono leggermente più piccoli dei proeritroblasti e possiedono un nucleo rotondo e un po' più piccolo, posizionato eccentricamente. Il citoplasma è colorato di blu scuro e contiene già emoglobina, il che li distingue dai proeritroblasti. A differenza degli eritroblasti policromatici, che presentano un citoplasma grigio-blu, il citoplasma degli eritroblasti basofili è ancora distintamente blu.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/celle_47J47U_091.png" alt="e" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Eritroblasto Policromatico [e]</h5>
      <p>Gli <strong>eritroblasti policromatici</strong> (o eritrociti policromatici) sono più piccoli degli eritroblasti basofili e possiedono un nucleo rotondo e più piccolo, posizionato eccentricamente. Il loro citoplasma è colorato di grigio-blu, dovuto all'inizio della formazione di emoglobina. A differenza degli eritroblasti basofili, che presentano un citoplasma distintamente blu, il citoplasma degli eritroblasti policromatici è già meno blu. Rispetto agli eritroblasti ortocromatici (ossifili), che possiedono un citoplasma rossastro, il citoplasma degli eritroblasti policromatici è ancora grigio-blu.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellw_HBGFIQ_140.png" alt="w" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Eritroblasto Ortocromatico (o Ossifilo) [w]</h5>
      <p>Gli <strong>eritroblasti ortocromatici</strong> (o eritrociti ortocromatici) sono più piccoli degli eritroblasti policromatici e possiedono un nucleo piccolo e rotondo, posizionato eccentricamente. Il loro citoplasma è colorato di rossastro, dovuto alla completa emolobinizzazione. A differenza degli eritroblasti policromatici, che presentano un citoplasma grigio-blu, il citoplasma degli eritroblasti ortocromatici è già rossastro.</p>
      </div>
  </div>
     <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellq_1RPEC0_069.png" alt="q" style="margin: -54px 0 0 -54px;
    clip-path: inset(54px 74px 74px 54px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Plasmacellula [q]</h5>
      <p>Le <strong>plasmacellule</strong> (o cellule plasmatiche) sono cellule grandi e rotonde con un nucleo arrotondato posizionato eccentricamente e un citoplasma basofilo. Il nucleo presenta un caratteristico pattern di cromatina "a ruota di carro" (o "a raggi di bicicletta"), alcuni vedono anche somiglianze con un pallone da calcio. Il citoplasma è fortemente basofilo e contiene un apparato di Golgi pronunciato, che può essere visibile come un alone chiaro nel citoplasma.</p>
      </div>
  </div>
   <h2>Disposizione della Tastiera</h2>
   <img src="https://blastenblaster.com/images/KeyboardWithIcons.png" style="width: 100%"/>
  
    <?php
    break;
    case 'fr':
    ?>
    <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cella_K0UN7L_082.png" alt="a" style="margin: -54px 0 0 -54px;
    clip-path: inset(54px 74px 74px 54px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Lymphocyte [a]</h5>
      <p>Les <strong>lymphocytes</strong> sont de petites cellules sanguines dotées d'un grand noyau rond et d'une étroite bordure de cytoplasme bleu. Ils sont responsables de la <strong>défense immunitaire spécifique</strong>.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellx_WHTGHS_078.png" alt="a" style="margin: -58px 0 0 -86px;
    clip-path: inset(58px 42px 70px 86px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Monocyte [x]</h5>
      <p>Les <strong>monocytes</strong> sont de grandes cellules sanguines de forme irrégulière avec un grand noyau réniforme et un cytoplasme granulaire bleu clair. Ils jouent un rôle important dans la <strong>défense immunitaire non spécifique</strong>.</p>
      </div>
  </div>
  
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellf_SUHXIH_252.png" alt="f" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Granulocyte Neutrophile à Noyau en Baguette [f]</h5>
      <p>Les <strong>granulocytes neutrophiles à noyau en baguette</strong> sont des cellules jeunes ; une augmentation est appelée une <strong>déviation à gauche</strong>. Le noyau est encore continu (non segmenté). Ils représentent un stade intermédiaire dans le développement des granulocytes et jouent un rôle dans la réaction inflammatoire aiguë.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/celld_ST4LQ3_260.png" alt="d" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Granulocyte Neutrophile Segmenté [d]</h5>
      <p>Les <strong>granulocytes neutrophiles segmentés</strong> sont des cellules plus matures ; le noyau est divisé en plusieurs segments reliés uniquement par un filament. La présence de seulement deux segments nucléaires est appelée une <strong>forme de Pseudo-Pelger-Huët</strong>, signe de dysplasie, tandis que plus de 5 segments nucléaires sont appelés des <strong>formes hypersegmentées</strong>.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellc_IELVL4_189.png" alt="c" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Granulocyte Éosinophile [c]</h5>
      <p>Les <strong>granulocytes éosinophiles</strong> sont des globules blancs avec un noyau bilobé et un cytoplasme coloré en bleu clair. Ils contiennent de nombreux <strong>granules colorés rouge-orange</strong>, qui leur donnent leur nom. Ils jouent un rôle important dans les réactions allergiques et la défense contre les parasites.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellh_WHTGHS_216.png" alt="h" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Granulocyte Basophile [h]</h5>
      <p>Les <strong>granulocytes basophiles</strong> sont des globules blancs avec un noyau lobé de manière irrégulière et un cytoplasme coloré de bleu foncé à noir. Ils contiennent de nombreux <strong>granules bleu foncé</strong>. Ils jouent un rôle dans les réactions allergiques et les inflammations.</p>
      </div>
  </div>
     <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellg_931Y73_187.png" alt="s" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Métamyélocyte [s]</h5>
      <p>Les <strong>métamyélocytes</strong> sont des granulocytes immatures avec un grand noyau réniforme ou légèrement plié. Leur cytoplasme est coloré en bleu clair et contient de fins granules. Ils représentent un stade intermédiaire dans le développement des granulocytes. Contrairement aux granulocytes à noyau en baguette, les métamyélocytes ont un noyau plus grand, réniforme ou légèrement plié, tandis que les formes en baguette présentent un noyau en forme de bâtonnet. </p>
      </div>
  </div>
  
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cells_DXPN9K_219.png" alt="s" style="margin: -54px 0 0 -64px;
    clip-path: inset(54px 64px 74px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Myélocyte [s]</h5>
      <p>Les <strong>myélocytes</strong> sont des granulocytes immatures avec un grand noyau rond qui est souvent situé excentriquement. Le cytoplasme est abondant et se colore en bleu clair. De fins granules sont déjà présents dans le cytoplasme, dont la proéminence varie selon le degré de maturité.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellv_YL6YUA_146.png" alt="v" style="margin: -54px 0 0 -64px;
    clip-path: inset(54px 64px 74px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Promyélocyte [v]</h5>
      <p>Les <strong>promyélocytes</strong> sont des granulocytes immatures avec un grand noyau rond et un cytoplasme abondant, bleu clair. On trouve habituellement une zone de clarification proéminente (halo perinucleaire) à côté du noyau. Ils contiennent déjà des <strong>granules azurophiles</strong>, importants pour leur fonction de phagocytose. Les promyélocytes sont un stade de développement précoce des granulocytes. Les promyélocytes sont des cellules plus grandes que les myéloblastes, avec un noyau rond et grand similaire, mais avec un motif de chromatine plus fin. Leur cytoplasme est plus abondant et contient des granules azurophiles caractéristiques, qui les distinguent des myéloblastes. Contrairement aux myélocytes, qui ont un noyau excentré et possèdent déjà des granules spécifiques, les promyélocytes ont encore un noyau central et contiennent exclusivement des granules azurophiles.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellb_IYGIIO_088.png" alt="b" style="margin: -44px 0 0 -64px;
    clip-path: inset(44px 64px 84px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Myéloblaste [b]</h5>
      <p>Les <strong>myéloblastes</strong> sont des cellules précurseurs immatures des granulocytes. Ils possèdent un grand noyau rond qui occupe souvent la majeure partie de la cellule. Le cytoplasme est étroit et se colore en bleu clair. Il est souvent difficile de distinguer morphologiquement les hématogones, les lymphoblastes, les myéloblastes et les monoblastes ; ils sont donc toujours comptés comme des myéloblastes.</p>
      </div>
  </div>
     <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellt_XUL11P_002.png" alt="t" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Proérythroblaste [t]</h5>
      <p>Les <strong>proérythroblastes</strong> sont de grandes cellules avec un grand noyau rond et un cytoplasme granulaire bleu foncé. On trouve une ou plusieurs zones de schiarimento proéminentes du cytoplasme à côté du noyau. Ce sont les premières cellules précurseurs reconnaissables des globules rouges et elles présentent une activité mitotique élevée.
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellr_KA1MN6_001.png" alt="r" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Érythroblaste Basophile [r]</h5>
      <p>Les <strong>érythroblastes basophiles</strong> sont légèrement plus petits que les proérythroblastes et possèdent un noyau rond et un peu plus petit, situé excentriquement. Le cytoplasme est coloré en bleu foncé et contient déjà de l'hémoglobine, ce qui les distingue des proérythroblastes. Contrairement aux érythroblastes polychromatophiles, qui présentent un cytoplasme gris-bleu, le cytoplasme des érythroblastes basophiles est encore nettement bleu.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/celle_47J47U_091.png" alt="e" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Érythroblaste Polychromatophile [e]</h5>
      <p>Les <strong>érythroblastes polychromatophiles</strong> sont plus petits que les érythroblastes basophiles et possèdent un noyau rond et plus petit, situé excentriquement. Leur cytoplasme est coloré en gris-bleu, ce qui est dû au début de la formation d'hémoglobine. Contrairement aux érythroblastes basophiles, qui présentent un cytoplasme nettement bleu, le cytoplasme des érythroblastes polychromatophiles est déjà moins bleu. Par rapport aux érythroblastes orthochromatophiles (oxyphiles), qui possèdent un cytoplasme rougeâtre, le cytoplasme des érythroblastes polychromatophiles est encore gris-bleu.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellw_HBGFIQ_140.png" alt="w" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Érythroblaste Orthochromatophile (ou Oxyphile) [w]</h5>
      <p>Les <strong>érythroblastes orthochromatophiles</strong> (ou oxyphiles) sont plus petits que les érythroblastes polychromatophiles et possèdent un petit noyau rond, situé excentriquement. Leur cytoplasme est coloré en rougeâtre, ce qui est dû à l'hémoglobinisation complète. Contrairement aux érythroblastes polychromatophiles, qui présentent un cytoplasme gris-bleu, le cytoplasme des érythroblastes orthochromatophiles est déjà rougeâtre.</p>
      </div>
  </div>
     <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellq_1RPEC0_069.png" alt="q" style="margin: -54px 0 0 -54px;
    clip-path: inset(54px 74px 74px 54px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Plasmocyte [q]</h5>
      <p>Les <strong>plasmocytes</strong> (ou cellules plasmatiques) sont de grandes cellules rondes avec un noyau arrondi situé excentriquement et un cytoplasme basophile. Le noyau présente un motif de chromatine caractéristique <strong>"en roue de chariot"</strong> (ou "à rayons de vélo"), certains y voient également des similitudes avec un ballon de football. Le cytoplasme est fortement basophile et contient un appareil de Golgi prononcé, qui peut être visible comme un halo clair dans le cytoplasme.</p>
      </div>
  </div>
   <h2>Disposition du Clavier</h2>
   <img src="https://blastenblaster.com/images/KeyboardWithIcons.png" style="width: 100%"/>

    <?php
    case 'es':
    ?>
    <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cella_K0UN7L_082.png" alt="a" style="margin: -54px 0 0 -54px;
    clip-path: inset(54px 74px 74px 54px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Linfocito [a]</h5>
      <p>Los <strong>linfocitos</strong> son células sanguíneas pequeñas con un núcleo grande y redondo y un borde estrecho y azul de citoplasma. Son responsables de la <strong>defensa inmunitaria específica</strong>.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellx_WHTGHS_078.png" alt="a" style="margin: -58px 0 0 -86px;
    clip-path: inset(58px 42px 70px 86px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Monocito [x]</h5>
      <p>Los <strong>monocitos</strong> son células sanguíneas grandes e irregularmente formadas con un núcleo grande, de forma arriñonada, y un citoplasma granular de color azul claro. Juegan un papel importante en la <strong>defensa inmunitaria inespecífica</strong>.</p>
      </div>
  </div>
  
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellf_SUHXIH_252.png" alt="f" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Granulocito Neutrófilo en Banda (o Cayado) [f]</h5>
      <p>Los <strong>granulocitos neutrófilos en banda</strong> son células jóvenes; un aumento se denomina <strong>desviación a la izquierda</strong>. El núcleo es todavía continuo (en forma de bastón o cayado). Representan un estadio intermedio en el desarrollo de los granulocitos y desempeñan un papel en la reacción inflamatoria aguda.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/celld_ST4LQ3_260.png" alt="d" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Granulocito Neutrófilo Segmentado [d]</h5>
      <p>Los <strong>granulocitos neutrófilos segmentados</strong> son células más maduras; el núcleo está dividido en varios segmentos conectados solo por un filamento delgado. La presencia de solo dos segmentos nucleares se conoce como <strong>forma de Pseudo-Pelger-Huët</strong>, un signo de displasia, mientras que más de 5 segmentos nucleares se denominan <strong>formas hipersegmentadas</strong>.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellc_IELVL4_189.png" alt="c" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Granulocito Eosinófilo [c]</h5>
      <p>Los <strong>granulocitos eosinófilos</strong> son glóbulos blancos con un núcleo bilobulado y un citoplasma teñido de azul claro. Contienen numerosos <strong>gránulos de color rojo-anaranjado</strong>, que les dan su nombre. Desempeñan un papel importante en las reacciones alérgicas y en la defensa contra parásitos.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellh_WHTGHS_216.png" alt="h" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Granulocito Basófilo [h]</h5>
      <p>Los <strong>granulocitos basófilos</strong> son glóbulos blancos con un núcleo lobulado irregularmente y un citoplasma teñido de azul oscuro a negro. Contienen numerosos <strong>gránulos azul oscuro</strong>. Desempeñan un papel en las reacciones alérgicas y las inflamaciones.</p>
      </div>
  </div>
     <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellg_931Y73_187.png" alt="s" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Metamielocito [s]</h5>
      <p>Los <strong>metamielocitos</strong> son granulocitos inmaduros con un núcleo grande, en forma de riñón o ligeramente plegado. Su citoplasma está teñido de azul claro y contiene gránulos finos. Representan un estadio intermedio en el desarrollo de los granulocitos. A diferencia de los granulocitos en banda, los metamielocitos tienen un núcleo más grande, en forma de riñón o ligeramente plegado, mientras que las formas en banda presentan un núcleo en forma de bastón. </p>
      </div>
  </div>
  
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cells_DXPN9K_219.png" alt="s" style="margin: -54px 0 0 -64px;
    clip-path: inset(54px 64px 74px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Mielocito [s]</h5>
      <p>Los <strong>mielocitos</strong> son granulocitos inmaduros con un núcleo grande y redondo que a menudo se encuentra excéntricamente. El citoplasma es abundante y se tiñe de azul claro. Ya están presentes gránulos finos en el citoplasma, cuya prominencia varía según el grado de madurez.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellv_YL6YUA_146.png" alt="v" style="margin: -54px 0 0 -64px;
    clip-path: inset(54px 64px 74px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Promielocito [v]</h5>
      <p>Los <strong>promielocitos</strong> son granulocitos inmaduros con un núcleo grande y redondo y un citoplasma abundante, azul claro. Generalmente se encuentra un <strong>aclaramiento prominente</strong> (halo perinuclear) junto al núcleo. Ya contienen <strong>gránulos azurófilos</strong>, importantes para su función de fagocitosis. Los promielocitos son una etapa temprana del desarrollo de los granulocitos. Son células más grandes que los mieloblastos, con un núcleo redondo y grande similar, pero con un patrón de cromatina más fino. Su citoplasma es más abundante y contiene gránulos azurófilos característicos, que los distinguen de los mieloblastos. A diferencia de los mielocitos, que tienen un núcleo excéntrico y ya presentan gránulos específicos, los promielocitos todavía tienen un núcleo central y exclusivamente gránulos azurófilos.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellb_IYGIIO_088.png" alt="b" style="margin: -44px 0 0 -64px;
    clip-path: inset(44px 64px 84px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Mieloblasto [b]</h5>
      <p>Los <strong>mieloblastos</strong> son células precursoras inmaduras de los granulocitos. Poseen un núcleo grande y redondo que a menudo ocupa la mayor parte de la célula. El citoplasma es estrecho y se tiñe de azul claro. Morfológicamente, a menudo es difícil distinguir entre hematogonos, linfoblastos, mieloblastos y monoblastos, por lo que siempre se cuentan como mieloblastos.</p>
      </div>
  </div>
     <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellt_XUL11P_002.png" alt="t" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Proeritroblasto [t]</h5>
      <p>Los <strong>proeritroblastos</strong> son células grandes con un núcleo grande y redondo y un citoplasma granular azul oscuro. Se encuentra una o más áreas de aclaramiento prominente del citoplasma junto al núcleo. Son las primeras células precursoras reconocibles de los glóbulos rojos y muestran una alta actividad mitótica.
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellr_KA1MN6_001.png" alt="r" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Eritroblasto Basófilo [r]</h5>
      <p>Los <strong>eritroblastos basófilos</strong> son algo más pequeños que los proeritroblastos y poseen un núcleo redondo y un poco más pequeño, situado excéntricamente. El citoplasma está teñido de azul oscuro y ya contiene hemoglobina, lo que los distingue de los proeritroblastos. A diferencia de los eritroblastos policromatófilos, que presentan un citoplasma gris-azul, el citoplasma de los eritroblastos basófilos es todavía distintivamente azul.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/celle_47J47U_091.png" alt="e" />
          </div>
          </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Eritroblasto Policromatófilo [e]</h5>
      <p>Los <strong>eritroblastos policromatófilos</strong> son más pequeños que los eritroblastos basófilos y poseen un núcleo redondo y más pequeño, situado excéntricamente. Su citoplasma está teñido de gris-azul, lo que se debe al inicio de la formación de hemoglobina. A diferencia de los eritroblastos basófilos, que presentan un citoplasma claramente azul, el citoplasma de los eritroblastos policromatófilos es ya menos azul. En comparación con los eritroblastos ortocromáticos (oxífilos), que poseen un citoplasma rojizo, el citoplasma de los eritroblastos policromatófilos es todavía gris-azul.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellw_HBGFIQ_140.png" alt="w" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Eritroblasto Ortocromático (u Oxífilo) [w]</h5>
      <p>Los <strong>eritroblastos ortocromáticos</strong> (u oxífilos) son más pequeños que los eritroblastos policromatófilos y poseen un núcleo pequeño y redondo, situado excéntricamente. Su citoplasma está teñido de rojizo, lo que se debe a la hemoglobinización completa. A diferencia de los eritroblastos policromatófilos, que presentan un citoplasma gris-azul, el citoplasma de los eritroblastos ortocromáticos es ya rojizo.</p>
      </div>
  </div>
     <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellq_1RPEC0_069.png" alt="q" style="margin: -54px 0 0 -54px;
    clip-path: inset(54px 74px 74px 54px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Célula Plasmática (o Plasmocito) [q]</h5>
      <p>Las <strong>células plasmáticas</strong> (o plasmocitos) son células grandes y redondas con un núcleo redondeado ubicado excéntricamente y un citoplasma basófilo. El núcleo presenta un patrón de cromatina característico <strong>"en rueda de carro"</strong> (o "en rayos de bicicleta"). El citoplasma es fuertemente basófilo y contiene un aparato de Golgi prominente, que puede ser visible como un halo claro en el citoplasma.</p>
      </div>
  </div>
   <h2>Distribución del Teclado</h2>
   <img src="https://blastenblaster.com/images/KeyboardWithIcons.png" style="width: 100%"/>
     <?php
    break;
    case 'en':
    default:
    ?>
    <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cella_K0UN7L_082.png" alt="a" style="margin: -54px 0 0 -54px;
    clip-path: inset(54px 74px 74px 54px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Lymphocyte [a]</h5>
      <p>Lymphocytes are small blood cells with a large, round nucleus and a narrow, blue rim of cytoplasm. They are responsible for specific immune defense.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellx_WHTGHS_078.png" alt="a" style="margin: -58px 0 0 -86px;
    clip-path: inset(58px 42px 70px 86px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Monocyte [x]</h5>
      <p>Monocytes are large, irregularly shaped blood cells with a large, kidney-shaped nucleus and a pale blue, granular cytoplasm. They play an important role in non-specific immune defense.</p>
      </div>
  </div>
  
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellf_SUHXIH_252.png" alt="f" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Band Neutrophil Granulocyte [f]</h5>
      <p>Band neutrophil granulocytes are young cells; an increase is referred to as a left shift. The nucleus is still continuous. They are an intermediate stage in granulocyte development and play a role in the acute inflammatory reaction.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/celld_ST4LQ3_260.png" alt="d" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Segmented Neutrophil Granulocyte [d]</h5>
      <p>Segmented neutrophil granulocytes are more mature cells; the nucleus is divided into several segments connected only by a thread. The presence of only two nuclear segments is referred to as a Pseudo-Pelger-Huët form, a sign of dysplasia, while more than 5 nuclear segments are called hypersegmented forms.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellc_IELVL4_189.png" alt="c" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Eosinophil Granulocyte [c]</h5>
      <p>Eosinophil granulocytes are white blood cells with a bilobed nucleus and a pale blue-stained cytoplasm. Within it are numerous red-orange stained granules, which give them their name. They play an important role in allergic reactions and parasite defense.</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellh_WHTGHS_216.png" alt="h" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Basophil Granulocyte [h]</h5>
      <p>Basophil granulocytes are white blood cells with an irregularly lobed nucleus and a dark blue to black stained cytoplasm. Within it are numerous dark blue granules. They play a role in allergic reactions and inflammation.</p>
      </div>
  </div>
     <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellg_931Y73_187.png" alt="s" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Metamyelocyte [s]</h5>
      <p>Metamyelocytes are immature granulocytes with a large, kidney-shaped or slightly folded nucleus. Their cytoplasm is stained pale blue and contains fine granules. They represent an intermediate stage in granulocyte development. Unlike band neutrophil granulocytes, metamyelocytes have a larger, kidney-shaped or slightly folded nucleus, while band forms have a band-shaped nucleus. </p>
      </div>
  </div>
  
  <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cells_DXPN9K_219.png" alt="s" style="margin: -54px 0 0 -64px;
    clip-path: inset(54px 64px 74px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Myelocyte [s]</h5>
      <p>Myelocytes are immature granulocytes with a large, round nucleus that is often eccentrically located. The cytoplasm is abundant and stains pale blue. Fine granules are already present in the cytoplasm, which vary in prominence depending on the degree of maturity.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellv_YL6YUA_146.png" alt="v" style="margin: -54px 0 0 -64px;
    clip-path: inset(54px 64px 74px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Promyelocyte [v]</h5>
      <p>Promyelocytes are immature granulocytes with a large, round nucleus and abundant, pale blue cytoplasm. A prominent clearing is usually found next to the nucleus. They already contain azurophilic granules, which are important for their phagocytosis function. Promyelocytes are an early developmental stage of granulocytes. Promyelocytes are larger cells than myeloblasts, with a similarly large, round nucleus but a finer chromatin pattern. Their cytoplasm is more abundant and contains characteristic azurophilic granules, which distinguish them from myeloblasts. Unlike myelocytes, which have an eccentric nucleus and already possess specific granules, promyelocytes still have a centrally located nucleus and only azurophilic granules.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellb_IYGIIO_088.png" alt="b" style="margin: -44px 0 0 -64px;
    clip-path: inset(44px 64px 84px 64px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Myeloblast [b]</h5>
      <p>Myeloblasts are immature precursor cells of granulocytes. They have a large, round nucleus that often takes up most of the cell. The cytoplasm is narrow and stains pale blue. It is often morphologically difficult to distinguish between hematogones, lymphoblasts, myeloblasts, and monoblasts, so they are always counted as myeloblasts.</p>
      </div>
  </div>
     <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellt_XUL11P_002.png" alt="t" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Proerythroblast [t]</h5>
      <p>Proerythrocytes are large cells with a large, round nucleus and a dark blue, granular cytoplasm. One or more prominent clearings of the cytoplasm are found next to the nucleus. They are the first recognizable precursor cells of red blood cells and exhibit high mitotic activity.
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellr_KA1MN6_001.png" alt="r" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Basophilic Erythroblast [r]</h5>
      <p>Basophilic erythrocytes are slightly smaller than proerythrocytes and have a slightly smaller, round nucleus that is eccentrically located. The cytoplasm is dark blue and already contains hemoglobin, which distinguishes them from proerythrocytes. Unlike polychromatic erythrocytes, which have a gray-blue cytoplasm, the cytoplasm of basophilic erythrocytes is still distinctly blue.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/celle_47J47U_091.png" alt="e" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Polychromatic Erythroblast [e]</h5>
      <p>Polychromatic erythrocytes are smaller than basophilic erythrocytes and have a smaller, round nucleus that is eccentrically located. Their cytoplasm is stained gray-blue, which is due to the beginning of hemoglobin formation. Unlike basophilic erythrocytes, which have a distinctly blue cytoplasm, the cytoplasm of polychromatic erythrocytes is already less blue. Compared to oxyphilic erythrocytes, which have a reddish cytoplasm, the cytoplasm of polychromatic erythrocytes is still gray-blue.</p>
      </div>
  </div>
   <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellw_HBGFIQ_140.png" alt="w" />
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Orthochromatic Erythroblast [w]</h5>
      <p>Orthochromatic erythrocytes are smaller than polychromatic erythrocytes and have a small, round nucleus that is eccentrically located. Their cytoplasm is stained reddish, which is due to complete hemoglobinization. Unlike polychromatic erythrocytes, which have a gray-blue cytoplasm, the cytoplasm of orthochromatic erythrocytes is already reddish.</p>
      </div>
  </div>
     <div class="row">
      <div class="col-xs-6 col-sm-4 col-lg-2">
          <div class="cell_wrap">
              <img src="https://blastenblaster.com/images/cells/cellq_1RPEC0_069.png" alt="q" style="margin: -54px 0 0 -54px;
    clip-path: inset(54px 74px 74px 54px round 32px);"/>
          </div>
      </div>
      <div class="col-xs-6 col-sm-8 col-lg-19">
      <h5>Plasma Cell [q]</h5>
      <p>Plasma cells are large, round cells with an eccentrically located, roundish nucleus and a basophilic cytoplasm. The nucleus exhibits a characteristic, "spoke-wheel" chromatin pattern; some also see similarities to a soccer ball. The cytoplasm is highly basophilic and contains a prominent Golgi apparatus, which can be visible as a pale halo in the cytoplasm.</p>
      </div>
  </div>
   <h2>Keyboard Layout</h2>
   <img src="https://blastenblaster.com/images/KeyboardWithIcons.png" style="width: 100%"/>
  
    <?php
    }
    ?>
    </div>
</body>
</html>