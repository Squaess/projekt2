<?php
require_once("../PHP/myPage.php");

$OPIS = "Projekt realizujący na zaliczenie przedmiotu.";

$P = new MyPage("Moje przygody z edukacją","../");
$P->AddCSS("reset.css");
$P->AddCSS("grid.css");
$P->AddCSS("main.css");
$P->AddCSS("semestr1.css");
$P -> SetDescription($OPIS);
$P -> AddFont('https://fonts.googleapis.com/css?family=Lato');

$P -> SetRelImage("../img/semestr_img.jpg","Studia", "Semest I");

echo $P->Begin();
echo $P->Menu('Semestr I');
echo $P ->PageHeader();

 ?>

 <div class="row">
   <h3>Analiza Matematyczna I</h3>
   <div class="square col-2-4">
     <h4>Czego się dowiedziałem?</h4>
     <ol>
       <li>Znam pojęcie ciągu granicy i pojęcie zbiezności szeregu</li>
       <li>Dowiedziałem się czym jest ciągłość funkcji</li>
       <li>Wiem czym jest pochodna funkcji</li>
       <li>Znam pojęcie całki Riemana</li>
   </ol>
   </div><!-- col -->

   <div class="square col-2-4">
     <h4>Czego warto się douczyć?</h4>
     <ol>
       <li>Poprawić swoje umiejętności w liczeniu całek dwóch zmiennych</li>
       <li>Budować wizualizację analizowanych zagadnień analitycznych</li>
    </ol>
   </div><!-- col -->

 </div> <!-- row -->

 <div class="row">
   <h3>Algebra z Geometrią Analityczną</h3>
   <div class="square col-2-4">
     <h4>Czego się dowiedziałem?</h4>
     <ol>
       <li>Wielie ciekawych rzeczy na temat grup</li>
       <li>Wielie ciekawych rzeczy na temat ciał</li>
       <li>Własności podstawowe algebry, algebry liniowej</li>
       <li>Podstawy odnośnie liczb zepolonych</li>
   </ol>
   </div><!-- col -->

   <div class="square col-2-4">
     <h4>Czego warto się douczyć?</h4>
     <ol>
       <li>Powtórzyć pojęcie baz</li>
       <li>Powtórzyć pojęcie podprzestrzeni</li>
       <li>Ortogonalizacje Grama-Schmidta</li>
       <li>Wyznaczanie rzutu ortogonalnego na podprzestrzeń liniowa</li>
   </ol>
   </div><!-- col -->

 </div> <!-- row -->
 <div class="row">
   <h3>Logika i Struktury Formalne</h3>
   <div class="square col-2-4">
     <h4>Czego się dowiedziałem?</h4>
     <ol>
       <li>Co to jest tautologia</li>
       <li>Jak interpretować kwantyfikatory</li>
       <li>Podstawowe warianty indukcji matematycznej</li>
       <li>Pojęcie dobrego porządku</li>
       <li>Dużo o nieskończoności</li>
   </ol>
   </div><!-- col -->

   <div class="square col-2-4">
     <h4>Czego warto się douczyć?</h4>
     <ol>
       <li>Wykorzystania dobrego uporządkowania zbioru</li>
   </ol>
   </div><!-- col -->

 </div> <!-- row -->

 <div class="row">
   <h3>Wstęp do Informatyki i Programowania</h3>
   <div class="square col-2-4">
     <h4>Czego się dowiedziałem?</h4>
     <ol>
       <li>Czym jest rekurencja</li>
       <li>Czym jest iteracja</li>
       <li>Obiliczenia na stosie</li>
       <li>Wyrażenia regularne</li>
   </ol>
   </div><!-- col -->

   <div class="square col-2-4">
     <h4>Czego warto się douczyć?</h4>
     <ol>
       <li>Podstaw języka C od środka</li>
       <li>Jaka jest ideologia języka </li>
   </ol>
   </div><!-- col -->

 </div> <!-- row -->


<?php
$P -> End();

 ?>
