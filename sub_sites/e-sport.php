<?php
require_once("../PHP/myPage.php");

$OPIS = "Projekt realizujący na zaliczenie przedmiotu.";
$P = new MyPage("Moje przygody z edukacją","../");
$P->AddCSS("reset.css");
$P->AddCSS("grid.css");
$P->AddCSS("main.css");
$P->AddCSS("muzyka.css");
$P->AddCSS("e-sport.css");
$P -> SetDescription($OPIS);
$P -> AddFont('https://fonts.googleapis.com/css?family=Lato');

$P -> SetRelImage("../img/iem.png","Moje Hobby", "E-SPORT");

echo $P->Begin();
echo $P->Menu('E-sport');
echo $P ->PageHeader();

 ?>

      <div class="row">
        <div class="col-4-4">
          <p>Moja przygoda z e-sportem zaczęła się stosunkowo późno, patrząc na to
             w jakich czasach się urodziłem. Wszystko zaczęło się od gry <span class="one-line">Counter-Strike 1.6.</span>
            W gmnazjum z paczką znajomych zaczęliśmy wspólnie grać i śledzić scenę
             profesjonalną. Później przyszedł krótki epizod gry w <span class="one-line">League Of Legends,</span> jednak
              tutaj nie zatrzymam się na długo, ponieważ nie jest to tego warte. Aktualnie pod
               kątem e-sportowym króluje <span class="dota">Dota 2</span>. Piękne emocje i ogromne wydarzenia, gdze
             pula nagród potrafi sięgać nawet <span class="dota">85 milionów złoty</span>.</p>

        </div>
      </div> <!-- row -->

      <div class="row">
        <div class="square col-2-4">
          <h4>Ulubione gry</h4>

          <div class="row">

              <div class="col-2-4 img_in_col" id="i1">
                <a href="http://store.steampowered.com/app/730/CounterStrike_Global_Offensive/"
                 target="_blank">
                <img src="../img/csgo.jpg" alt="csgo">
                </a>
              </div>

            <div class="col-2-4 img_in_col" id="i2">
              <a href="https://na.leagueoflegends.com/en/" target="_blank">
              <img src="../img/lol.jpg" alt="league_of_legends">
              </a>
            </div>

          </div><!-- row -->

          <div class="row">
            <div class="col-2-4 img_in_col">
              <a href="http://www.dota2.com/play/" target="_blank">
              <img src="../img/dota2.jpg" alt="dota2">
              </a>
            </div>

            <div class="col-2-4 img_in_col">
              <a href="https://starcraft2.com/en-us/" target="_blank">
              <img src="../img/sc2.jpg" alt="sc2">
              </a>
            </div>
          </div><!-- row -->

        </div><!-- col -->

        <div class="square col-2-4">
          <h4>Ulubieni gracze</h4>
          <ul>
            <li><span class="toTrigger" prefix="ocelot" id="ocelot">Ocelote - Carlos Rodríguez Santiago</span>
                <ul>
                  <li>urodzony 15.01.1990, Hiszpania</li>
                  <li>były mid-laner drużyny SK Gaming</li>
                  <li>założyciel drużyny Gamers2, aktualnie G2 Esport</li>
                </ul>
            </li>
            <li><span class="toTrigger" prefix="snax" id="snax">Snax - Janusz Pogorzelski</span>
              <ul>
                <li>urodzony 5.07,1993 w Krakowie</li>
                <li>aktualny gracz Virtus Pro</li>
                <li>średnio wygrał: $517,129</li>
              </ul>
            </li>
            <li><span class="toTrigger" prefix="miracle" id="miracle">Miracle- - Amer Al-Barkawi</span>
              <ul>
                <li>pochodzenie polsko-jordańskie</li>
                <li>gracz drużyny Team Liquid, na pozycji Mid lub Carry</li>
                <li>średnio wygrał: $3,143,674</li>
              </ul>
            </li>
            <li><span class="toTrigger" prefix="kuroky" id="kuroky">Kuroky - Kuro Salehi Takhasomi</span>
              <ul>
                <li>urodzony 28.12.1992</li>
                <li>Kapitan i support drużyny Team Liquid</li>
                <li>średnio wygrał: $3,566,564</li>
              </ul>
            </li>
          </ul>
        </div><!-- col -->
      </div><!-- row -->


    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">×</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>


<?php
echo $P->End();
 ?>
