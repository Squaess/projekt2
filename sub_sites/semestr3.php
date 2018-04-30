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

$P -> SetRelImage("../img/semestr_img.jpg","Studia", "Semestr III");

echo $P->Begin();
echo $P->Menu('Semestr III');
echo $P ->PageHeader();

$title = "Metody Probabilistyczne i Statystyka";
$list1 = [
          "Czym jest przestrzeń probabilistyczna",
          "Czym jest zmienna losowa",
          "Czym jest klasa rozkładu probabilistycznego"
          ];

$list2 = [
          "Jak wyznaczyć i stosować funkcje tworzace do badania własności zmiennych losowych",
          "Jak znaleźć estymatory istotnych parametrów protokołów w prostych przypadkach"
          ];

echo $P -> Section($title, $list1, $list2);


$title = "Bazy Danych i Zarządzanie Informacją";
$list1 = [
          "Czym są podstawowr aspekty systemów baz danych oraz obsługi danych",
          "Praktyczne przećwiczenie podstawowych aspektów zwi  ̨azanych z bazami danych",
          "Składni i komend jezyka SQL",
          "Pojeć związanych z zależnościami funkcyjnym"
          ];

$list2 = [
          "Przeprowadzania procesu normalizacji relacji",
          "Wykorzystania baz danych w wielu jezykach programistycznych"
          ];

echo $P -> Section($title, $list1, $list2);


$title = "Technologia Programowania";
$list1 = [
          "Czym są wzorce projektowe",
          "Jakie są techniki efektywnego programowania sieciowego",
          "Jakie są metody kontroli jakości kodu"
          ];

$list2 = [
          "Jak programować urządzenia mobilne i wykorzystywać najnowsze technologie",
          "Jak prezentować projekty informatyczne bez używania specjalistycznej terminologii"
          ];

echo $P -> Section($title, $list1, $list2);

$title = "Architektura Komputerów i Systemy Operacyjne";
$list1 = [
          "Jakie są podstawowe architektury komupuetrów",
          "Jaka jest architektura pamięci komputerów",
          "Jaki jest sposób zarządzania pamięcią",
          "Jaka jest struktura stosowanych systemów plików"
          ];

$list2 = [
          "Informacji o MBR",
          "Czegoś o BIOS i UEFI"
          ];

echo $P -> Section($title, $list1, $list2);

echo $P->End();
 ?>
