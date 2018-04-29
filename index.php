<?php
require_once(__DIR__."/PHP/myPage.php");

$OPIS = "Projekt realizujący na zaliczenie przedmiotu.";

$P = new MyPage("Moje przygody z edukacją");
$P->AddCSS("reset.css");
$P->AddCSS("grid.css");
$P->AddCSS("main.css");
$P -> SetDescription($OPIS);
$P -> AddFont('https://fonts.googleapis.com/css?family=Lato');

$P -> SetRelImage("img/img_avatar_big.jpg","Bartosz Banasik", "Moje przygody z edukacją");

echo $P->Begin();

echo $P->Menu('Strona główna');

echo $P->PageHeader();
?>
<div id="main-info">
  <p>Na tej stronie zamieszczę krótkie informacje dotyczące
  mojego życiorysu oraz przygód z edukacją. Można również tutaj znaleźć
  informacje na temat moich ulubionych zajęć.</p>
  <hr/>
  <p>Szkołę średnią skończyłem w 2015 roku w Olesnie, małej miejscowości
     w województwie Opolskim. Również w 2015 roku zacząłem studia na wydziale
     Podstawowych Problemów Techniki Politechniki Wrocławskiej
      na kierunku Informatyka.</p>
</div><!-- main-info -->

<div class="row">

  <div class="square col-2-4">
    <h4>Moja Edukacja</h4>
    <ol>
      <li>Szkoła średnia: <a href="http://lo.olesno.pl/" target="_blank">
        Liceum Ogólnokształcące w Oleśnie</a></li>
      <li>Studia: <a href="sub_sites/semestr1.php" >semestr I (2015/16) </a></li>
      <li>Studia: <a href="sub_sites/semestr2.html" >semestr II (2015/16) </a></li>
      <li>Studia: <a href="sub_sites/semestr3.html" >semestr III (2016/17) </a></li>
      <li>Studia: <a href="sub_sites/semestr4.html" >semestr IV (2016/17) </a></li>
      <li>Studia: <a href="sub_sites/semestr5.html" >semestr V (2017/18) </a></li>
    </ol>
  </div> <!-- square -->

  <div class="square col-2-4">
    <h4>Moje hobby</h4>
    <ol>
      <li><a href="sub_sites/muzyka.html">Muzyka</a></li>
      <li><a href="sub_sites/e-sport.html">E-sport</a></li>
      <li><a href="sub_sites/ksiazki.html">Książki</a></li>
    </ol>
  </div> <!-- square -->

</div> <!-- row -->

<?php

echo $P->End();

?>
