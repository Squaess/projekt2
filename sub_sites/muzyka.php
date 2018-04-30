<?php
require_once("../PHP/myPage.php");

$OPIS = "Projekt realizujący na zaliczenie przedmiotu.";
$P = new MyPage("Moje przygody z edukacją","../");
$P->AddCSS("reset.css");
$P->AddCSS("grid.css");
$P->AddCSS("main.css");
$P->AddCSS("muzyka.css");
$P -> SetDescription($OPIS);
$P -> AddFont('https://fonts.googleapis.com/css?family=Lato');

$P -> SetRelImage("../img/vinyl.jpeg","Moje Hobby", "Muzyka");

echo $P->Begin();
echo $P->Menu('Muzyka');
echo $P ->PageHeader();

 ?>


<div class="row">

  <div class="col-4-4">
      <p>Muzyką interesowałem się od małego. W wieku 11 lat zacząłem chodzić do
         studium muzyki rozrywkowej by uczyć się grać na klawiszu. Jednak po trzech
       latach porzuciłem ten pomysł i zacząłem uczyć się grać na gitarze. Uczyłem się
      również w studium muzyki rozrywkowej w Oleśnie. Po ukończeniu szkoły wstąpiłem
      w szeregi zespołu Wind Band.</p>
  </div>

</div> <!-- row -->

<div class="row">

  <div class=" square col-2-4">
    <h4>Moje próbki</h4>
    <div class="highligh_background">

      <p>Pewnego wieczoru usiadłem razem z kolegą i powygłupialiśmy się co nieco.
        Poniższy utwór jest wynikiem tego przedsięwzięcia.</p>
      <audio controls id="night_session">
        <source src="../sound/night_session.WAV" type="audio/wav">
          Your browser does not support the audio element.
      </audio>

    </div>
    <hr>
    <div class="highligh_background">

        <p>Tutaj jest amatorskie nagranie z występu, który był egzaminem
        zaliczającym semsetr. Jak na muzyków przystało egzamin był w formie koncertu.</p>
        <iframe src="https://www.youtube.com/embed/kgSG2iPEiWw?start=202" frameborder="0" allowfullscreen></iframe>

    </div>
  </div>

  <div class="square col-2-4">
    <h4>Moje ulubione albumy</h4>
    <ol>
      <li>Blue Train - John Coltrain, Blue Note Records, rok: 1958</li>
      <li>Kind Of Blue - Miles Davis, rok: 1959 </li>
      <li>Are You Experienced - Jimi Hendrix, rok: 1967</li>
      <li>Time In Place - Mike Stern, Wounded Bird Records, rok: 1988</li>
      <li>Überjam Deux -  John Scofield, rok: 2013</li>
      <li>We Like It Here - Snarky Puppy, rok: 2014</li>
      <li>Chocolate Starfish and the Hot Dog Flavored Water - Limp Bizkit, rok: 2000</li>
      <li>Sempiternal - Bring Me the Horizon, rok: 2013</li>
      <li>Marmur - Tco Hemingway, rok: 2016</li>
      <li>Facing Giants - 20syl & Alltta, rok: 2017</li>
      <li>A Momentary Lapse of Reason - Pink Floyd, rok: 1987</li>
      <li>DionneDionne - Dionne Farris & Charlie Hunter</li>
    </ol>
  </div>

</div> <!-- row -->
 <?php
echo $P->End();
  ?>
