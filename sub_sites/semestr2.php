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

$P -> SetRelImage("../img/semestr_img.jpg","Studia", "Semestr II");

echo $P->Begin();
echo $P->Menu('Semestr II');
echo $P ->PageHeader();

$title = "Analiza Matematyczna II";
$list1 = [
          "Znam pojęcie przestrzeni metrycznej",
          "Nauczyłem się liczyć pochodne funkcji wielu zmiennych",
          "Nauczyłem się liczyć całki wielu zmiennych"
          ];

$list2 = [
          "Optymalizacji funkcji wielu zmiennych",
          "Liczenie całek wielu zmiennych"
          ];

echo $P -> Section($title, $list1, $list2);

$title = "Algebra Abstrakcyjna i Kodowanie";
$list1 = [
          "Czym jest teoria grup",
          "Co nie co o teori kodów korekcyjnych",
          "Czym jest rząd grupy i jak go zbadać"
          ];

$list2 = [
          "Sprawdzania czy dany zbiór jest ciałem",
          "Wyznaczanie długości Hamminga kodu korekcyjnego",
          "Wyznaczanie pierścieli ilorazowych"
          ];

echo $P -> Section($title, $list1, $list2);


$title = "Matematyka Dyskretna";
$list1 = [
          "Czym jest symbol Newtona",
          "Czym są liczby Stirlinga",
          "Własności permutacji",
          "Czym jest dyskretna przestrzeń probabilistyczna"
          ];

$list2 = [
          "Czym jest multizbiór",
          "Modelowanie analizowanego zjawiska za pomocą grafów",
          "Zliczanie podstawowych klas drzew"
          ];

echo $P -> Section($title, $list1, $list2);


$title = "Kurs Programowania";
$list1 = [
          "Czym jest programowanie obiektowe",
          "Czym jest JAVA",
          "Czym jest C++"
          ];

$list2 = [
          "Czym są funkcje wirtualne",
          "Jak tworzyć przejrzystą dokumentację"
          ];

echo $P -> Section($title, $list1, $list2);


$title = "Fizyka";
$list1 = [
          "Pojęcia kinematyki",
          "Dynamika Newtona",
          "Energia, pęd i moment pędu",
          "Ruch drgający"
          ];

$list2 = [
          "Równań Maxwella",
          "Stosować transformację Galileusza",
          "Stosować transformację Lorentza",
          "Przedstawić jakościowy opis oddziaływania promieniowania
             (fal elektromagnetycznych) z materia"
          ];

echo $P -> Section($title, $list1, $list2);


$title = "Problemy Prawne Informatyki";
$list1 = [
          "Podstawowych zasad systemu prawnego",
          "Podstawowe zasady prawa cywilnego",
          "Ograncizenia związane z przetwarzaniem danych osobowych"
          ];

$list2 = [
          "Wdrażania we własnej działalności systemu zarządania ryzykiem",
          "Wdrażania we własnej działalności reguł ochrony danch osobowych"
          ];

echo $P -> Section($title, $list1, $list2);

echo $P->End();
 ?>
