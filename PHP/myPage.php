<?php

$HEADER =<<<EOT
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>{{TITLE}}</title>
  <meta name="description" content= "{{DESCRIPTION}}">
  <meta name="author" content="Bartosz Banasik">
  <meta name="viewport" content = "width=device-width, initial-scale=1.0"/>
{{STYLES}}
{{SCRIPTS}}
{{INNER-STYLE}}
{{FONTS}}
</head>
<body>
<div id="container">
EOT;

$MAIN_MENU = <<<EOT
<div class="topnav" id="mainmenu">
  <a href="/projekt2/index.php" class="active">Strona główna</a>
  <a href="/projekt2/sub_sites/semestr1.php"> Semestr I</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<script>
function myFunction() {
    var x = document.getElementById("mainmenu");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
EOT;


$PAGE_HEADER =<<<EOT
<div class="rel-img">

 <img src={{PATH_TO_IMG}} alt="Zdjęcie">

  <div class="bottom-center">
    <h1>{{HEADER_TITLE}}</h1>
    <h2>{{HEADER_DESCRIPTION}}</h2>
  </div>

</div> <!-- rel-img -->
EOT;

$FOOTER =<<<EOT
</div><!-- container -->
</body>
</html>
EOT;

/**
* Klasa sluzaca do generowania stron ustalonej witryny
* @package myPage
* @author Jacek Cichon
*/
class MyPage {
  private $title        = "";
  private $description  = "";
  private $header_title = "";
  private $header_description = "";
  private $header_img_path = "";
  private $root         = "";
  private $cssfiles     = [];
  private $jsfiles      = [];
  private $innerStyle   = "";
  private $fonts = [];

  /**
  * Dodaje specyficzne style do strony
  * @param string $filename
  * @return void
  */
  public function AddCSS($filename) {
    $this->cssfiles[] = $filename;
  }

  /**
  * Ustalamy skrypty umieszczane w nagłówku
  * @param string $filename
  * @return void
  */
  public function AddJS($filename) {
    $this->jsfiles[] = $filename;
  }

  /**
  * Ustalamy fonty używane na stronie
  * @param string $font_url
  * @return void
  */
  public function AddFont($url) {
      $this->fonts[] = $url;
  }

  /**
  * Ustawienie opisu strony (description)
  * @param string $s
  * @return void
  */
  public function SetDescription($s) {
    $this->description = $s;
  }

  /**
  * Ustawianie górnej cześci strony (zdjęcie + teskt)
  * @param string $path - ścieżka do zdjęcia
  * @param string $title - tytuł
  * @param string $desc - krótki opisu
  * @return void
  */
  public function SetRelImage($path, $title = "", $desc = "") {
      global $PAGE_HEADER;

      $PAGE_HEADER = str_replace(["{{PATH_TO_IMG}}", "{{HEADER_TITLE}}","{{HEADER_DESCRIPTION}}"],
                            [$path, $title, $desc], $PAGE_HEADER);
  }

  /**
  * Dodanie wewnętrznego stylu strony
  * @param string $s
  * @return void
  */
  public function AddInnerStyle($s) {
    $this->innerStyle = $s;
  }

  /**
  * Ustawienie opisu strony
  * @param string $title - tytul strony
  * @param string $root - sciezka do glownego katalogu witryny
  * @return void
  */

  public function __construct($title = "", $root="") {
    $this->title = $title;
    $this->root  = $root;
  }

  /**
  * Zwraca lancuch z poczatkiem strony
  * @return string
  */
  public function Begin() {
    global $HEADER;
    $s = str_replace(["{{TITLE}}", "{{DESCRIPTION}}"], [$this->title, $this->description], $HEADER);

    //dodajemy style
    $X = [];
    $C = $this->cssfiles;
    $TMP = '  <link rel="stylesheet" href="{{R}}css/{{CSS}}">' . "\n";
    for ($i = 0; $i < count($C); $i++){
      $X[]= (string) str_replace(["{{R}}", "{{CSS}}"], [$this->root, (string) $C[$i]], $TMP);
    }
    $s= str_replace("{{STYLES}}", join("\n",$X), $s);

    // dodajemy skrypty
    $X = [];
    $C = $this->jsfiles;
    $T = '  <script src="{{R}}js/{{JS}}"></script>' . "\n";
    for ($i = 0; $i < count($this->jsfiles); $i++){
      $X[]= str_replace(["{{R}}", "{{JS}}"], [$this->root, (string) $C[$i]], $T);
    }
    $s= str_replace("{{SCRIPTS}}", join("\n",$X), $s);

    // dodajemy fonty
    $X = [];
    $C = $this->fonts;
    $T = '<link href="{{URL}}" rel="stylesheet">' . "\n";
    for ( $i = 0; $i < count($this->fonts); $i++) {
        $X[] = str_replace("{{URL}}", (string) $C[ $i ], $T );
    }
    $s = str_replace('{{FONTS}}', join("\n", $X), $s);

    // aktualizujemy styl wewnętrzny strony
    $X = ($this->innerStyle === "") ? "" : "<style>\n" . $this->innerStyle . "\n</style>\n";
    $s= str_replace("{{INNER-STYLE}}", $X, $s);

    // usuwamy puste linie
    //return preg_replace('/^[ \t]*[\r\n]+/m', '', $s);
    return preg_replace('/^\h*\v+/m', '', $s);
    // \h : dowolny poziomy pusty znak
    // \v : dowolny pionowy pusty znak
    // /m : multiline
  }

  public function PageHeader(){
    global $PAGE_HEADER;
    return $PAGE_HEADER;
  }
  /**
  * Zwraca lancuch z zamknieciem strony
  * @return string
  */
  public function End() {
    global $FOOTER;
    return $FOOTER;
  }

  public function Menu() {
    global $MAIN_MENU;
    return $MAIN_MENU;
  }
} //class MyPage

?>
