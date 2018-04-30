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

$P -> SetRelImage("../img/semestr_img.jpg","Studia", "Semestr IV");

echo $P->Begin();
echo $P->Menu('Semestr IV');
echo $P ->PageHeader();

$title = "Algorytmy i Struktury Danych";
$list1 = [
          "Jakie są algorytmy sortowania",
          "Czym są drzewa",
          "Reprezentacje drzewa jako kopiec",
          "Czym są algorytmy zachłanne"
          ];

$list2 = [
          "Implementacji poszczególnych algorytmów w językach programowania",
          "Jak lepiej wykorzystywać zadane algorytmy",
          "Bardzo dokładnego badania złożoności algorytmów"
          ];

echo $P -> Section($title, $list1, $list2);

$title = "Technologie sieciowe";
$list1 = [
          "Poznałem aspekty wymiany danych w sieciach lokalnych",
          "Poznałem model sieci rozległej",
          "Poznałem architekturę systemów klient serwer",
          "Wiem jak symulować programowo działanie wybranych warstw stosu protokołów"
          ];

$list2 = [
          "Dużo więcej o sieciach wirtualnych",
          "Spojrzenie na sieci pod względem bezpieczeństwa"
          ];

echo $P -> Section($title, $list1, $list2);

$title = "Aplikacje mobilne";
$list1 = [
          "Jak tworzyć współczesne aplikacje mobilne",
          "Jak odnaleźć się w Android Studio",
          "Jak programować aplikacje jednocześnie na wiele platform",
          "Jak korzystać z baz danych w aplikacji androidowych"
          ];

$list2 = [
          "Kwestii bezpieczeństwa aplikacji mobilnych",
          "Wykorzystania wbudowanych rozwiązań",
          "Lepszego projektowania wizualnego",
          "Lepszego rozmieszczania funkcjonalności aplikacji"
          ];

echo $P -> Section($title, $list1, $list2);

$title = "Programowanie Współbieżne";
$list1 = [
          "Jakim pięknym językiem jest ADA",
          "Jak pisać poprawne współbieżne programy w GO"
          ];

$list2 = [
          "Lepszego posługiwania się jezykiem ADA",
          "Zagłębić temat śladów procesów"
          ];

echo $P -> Section($title, $list1, $list2);

$title = "Wprowadzenie do teorii grafów";
$list1 = [
          "Jakie są przykłady wyrażania problemów w języku teorii miary",
          "Czym jest graf Hamiltona",
          "Jak zbudowany jest graf i jakie są jego własności"
          ];

$list2 = [
          "Czym jest zbiór dominujący",
          "Jak wykorzystać teorię grafów to projektowani sieci",
          "Komputerowej implementacji grafów"
          ];

echo $P -> Section($title, $list1, $list2);

echo $P -> End();
 ?>
