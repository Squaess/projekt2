<?php
require_once("../PHP/myPage.php");

$OPIS = "Projekt realizujący na zaliczenie przedmiotu.";
$P = new MyPage("Moje przygody z edukacją","../");
$P->AddCSS("reset.css");
$P->AddCSS("grid.css");
$P->AddCSS("main.css");
$P->AddCSS("muzyka.css");
$P->AddCSS("ksiazka.css");
$P -> SetDescription($OPIS);
$P -> AddFont('https://fonts.googleapis.com/css?family=Lato');

$P -> SetRelImage("../img/ksiazka.jpeg","Moje Hobby", "Książki");

echo $P->Begin();
echo $P->Menu('Książki');
echo $P ->PageHeader();

 ?>
      <div class="row">

        <div class="col-4-4">
            <p>Nie od zawsze byłem fanem książek. Wszystko zaczęło się w gimnazjum.
               Niewinnie od prostych opowiadań, a skończyło się na zarywaniu nocek by doczytać
              jeszcze jeden ostatni rozdział. Poniżej zamieszczę liste moich ulubionych książek
               oraz tych, które mam w planach przeczytać.</p>
        </div>

      </div> <!-- row -->

      <div class="row">

        <div class="col-2-4 square">
          <h4>Ulubione książki</h4>
          <ol>
            <li>Ani słowa prawdy - Jacek Piekara</li>
            <li>Alicja - Jacek Piekara</li>
            <li>Pan Lodowego Ogrodu - Jarosław Grzędowicz</li>
            <li>Era Pięciorga - Trudi Canavan</li>
            <li>Kłamca - Jakub Ćwiek</li>
            <li>Seria Jakuba Wędrowycza - Andrzej Pilipiuk</li>
            <li>Dalej niż boska cząstka - Leon Lederman, Christopher Hill</li>
            <li>Morfina - Szczepan Twardoch</li>
            <li>Drach - Szczepan Twardoch</li>
            <li>Saga Wiedźmin - Andrzej Sapkowski</li>
          </ol>
        </div><!-- col -->

        <div class="col-2-4 square">
          <h4>Ksiązki do przeczytania</h4>
          <ol>
            <li>Folwark Zwierzęcy - George Orwell</li>
            <li>Metro 2033 - Dmitrij Głuchowski</li>
            <li>Kobiety- Charles Bukowski</li>
          </ol>
        </div><!-- col -->

      </div><!-- row -->

<?php
echo $P->End();
 ?>
