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

$P -> SetRelImage("../img/semestr_img.jpg","Studia", "Semestr I");

echo $P->Begin();
echo $P->Menu('Semestr I');
echo $P ->PageHeader();

$title = "Analiza Matematyczna I";
$list1 = [
          "Znam pojęcie ciągu granicy i pojęcie zbiezności szeregu",
          "Dowiedziałem się czym jest ciągłość funkcji",
          "Wiem czym jest pochodna funkcji",
          "Znam pojęcie całki Riemana"
          ];

$list2 = [
          "Poprawić swoje umiejętności w liczeniu całek dwóch zmiennych",
          "Budować wizualizację analizowanych zagadnień analitycznych"
          ];

echo $P -> Section($title, $list1, $list2);

$title = "Algebra z Geometrią Analityczną";
$list1 = [
          "Wiele ciekawych rzeczy na temat grup",
          "Wiele ciekawych rzeczy na temat ciał",
          "Własności podstawowe algebry, algebry liniowej",
          "Podstawy odnośnie liczb zepolonych"
          ];

$list2 = [
          "Powtórzyć pojęcie baz",
          "Powtórzyć pojęcie podprzestrzeni",
          "Ortogonalizacje Grama-Schmidta",
          "Wyznaczanie rzutu ortogonalnego na podprzestrzeń liniowa"
          ];

echo $P -> Section($title, $list1, $list2);


$title = "Logika i Struktury Formalne";
$list1 = [
          "Co to jest tautologia",
          "Jak interpretować kwantyfikatory",
          "Podstawowe warianty indukcji matematycznej",
          "Pojęcie dobrego porządku",
          "Dużo o nieskończoności"
          ];

$list2 = [
          "Wykorzystania dobrego uporządkowania zbioru"
          ];

echo $P -> Section($title, $list1, $list2);

$title = "Wstęp do Informatyki i Programowania";
$list1 = [
          "Czym jest rekurencja",
          "Czym jest iteracja",
          "Obiliczenia na stosie",
          "Wyrażenia regularne"
          ];

$list2 = [
          "Podstaw języka C od środka",
          "Jaka jest ideologia języka"
          ];

echo $P -> Section($title, $list1, $list2);

echo $P -> End();

 ?>
