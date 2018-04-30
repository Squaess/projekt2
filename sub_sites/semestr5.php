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

$P -> SetRelImage("../img/semestr_img.jpg","Studia", "Semestr V");

echo $P->Begin();
echo $P->Menu('Semestr V');
echo $P ->PageHeader();

$title = "Obliczenia naukowe";
$list1 = [
          "Poznałem arytkemtykę zmiennopozycyjną",
          "Dowiedziałem się czym jest macheps",
          "Dowiedziałem się czym jest wskaźnik uwarunkowania"
          ];

$list2 = [
          "Jak ralizowane są poszczególne zagadnienia w innych językach programowania
            niż julia",
          "Powtorzyć zagadnienie interpolacji wielomianowej",
          "Powtórzyć czym jest aproksymacja średniokwadratowa"
          ];

echo $P -> Section($title, $list1, $list2);

$title = "Języki formalne i techniki translacji";
$list1 = [
          "Czym jest automat skończony",
          "Czym jest język regularny, bezkontekstowy",
          "Znam podstawowe metody konstruowania parserów"
          ];

$list2 = [
          "Hierarchi Chomsky'ego",
          "Metod minimalizacji automatu"
          ];

echo $P -> Section($title, $list1, $list2);

$title = "Programowanie zespołowe";
$list1 = [
          "Jak pracować w zespole",
          "Że praca w zespole nie jest łatwa",
          "W jaki sposób zarządzać dużym projektem"
          ];

$list2 = [
          "Lepszych metod na integracje oprogramowania",
          "Jak testować złożony system kiedy tak na prawdę jeszcze nie jest ukończony",
          ];

echo $P -> Section($title, $list1, $list2);

$title = "Kryptografia";
$list1 = [
          "Poznałem metody zapewniające poufność informacji",
          "Poznałem metody zapeniwające integralność informacji",
          "Czym jes dowód z wiedzą zerową",
          "Jak sprytne są funkcje haszujące"
          ];

$list2 = [
          "W jaki sposób jest implementowany AES",
          "Blockchain",
          "Jakie algorytmy i przesłania stoją za naszymi kartami płatniczymi"
          ];

echo $P -> Section($title, $list1, $list2);

$title = "Bezpieczeństwo komputerowe";
$list1 = [
          "Jak przeprowadzać proste ataki SQLInjection",
          "Czym jest XSS  oraz CSRF",
          "Jak działają certyfikaty"
          ];

$list2 = [
          "Praktycznego zastosowania zdobytej wiedzy",
          "Niskopoziomowych ataków na pamięć",
          "Cracking"
          ];

echo $P -> Section($title, $list1, $list2);

$title = "Metody wytwarzania oprogramowania";
$list1 = [
          "Podstaw zarządania projektami",
          "Planowania projektu",
          "Metodyki tworzenia oprogramowania",
          "Zarządzania jakością w projekcie",
          "Dokumentowania projektu"
          ];

$list2 = [
          "Czy są inne metodyki wytwarzania, które miałyby lepsze efekty"
          ];

echo $P -> Section($title, $list1, $list2);

echo $P->End();
 ?>
