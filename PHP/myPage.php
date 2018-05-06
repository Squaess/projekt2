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


$MAIN_MENU_TMPL =<<<EOT
<div id="myTopnav" class="topnav">  
    {{ACTIVE}}
    {{M1}}

    <div class="dropdown">
      <span onclick="showSubList('edu')" class="subspan">Moja Edukacja</span>
      <ul class="sublist" id="edu">
          {{M2.1}}
          {{M2.2}}
          {{M2.3}}
          {{M2.4}}
          {{M2.5}}
          {{M2.6}}
      </ul>
    </div>
    <div class="dropdown">
      <span onclick="showSubList('hobby')" class="subspan">Moje Hobby</span>
      <ul class="sublist" id="hobby">
          {{M3.1}}
          {{M3.2}}
          {{M3.3}}
      </ul>
    </div>
    <span class="icon" onclick="myFunction()">☰</span>
</div><!-- topnav -->
EOT;
$MAIN_MENU_LI_2 = '<span class="active">{{T}}</span>';
$MAIN_MENU_LI_1 = '<li><a href="{{H}}">{{T}}</a></li>';

$MAIN_MENU_ITEMS = [
  "M1"   => ["Strona głowna","index.php"],
  "M2.1"   => ["Moje Liceum", "http://lo.olesno.pl/"],
  "M2.2"   => ["Semestr I", "semestr1.php"],
  "M2.3"   => ["Semestr II", "semestr2.php"],
  "M2.4"   => ["Semestr III", "semestr3.php"],
  "M2.5"   => ["Semestr IV", "semestr4.php"],
  "M2.6"   => ["Semestr V", "semestr5.php"],
  "M3.1" => ["Muzyka", "muzyka.php"],
  "M3.2" => ["E-sport",  "e-sport.php"],
  "M3.3" => ["Książki",    "ksiazki.php"]
];

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
    $this-> AddJS('navigation.js');
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
    $T = '  <script src="{{R}}scripts/{{JS}}"></script>' . "\n";
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

  public function Menu($active_name){
    global $MAIN_MENU_TMPL, $MAIN_MENU_ITEMS, $MAIN_MENU_LI_1, $MAIN_MENU_LI_2;

    $s = $MAIN_MENU_TMPL;

    $help = $MAIN_MENU_LI_2;
    $help = (string) str_replace("{{T}}", $active_name, $help);
    $s = (string) str_replace("{{ACTIVE}}", $help, $s);

    $pref = "";
    if($active_name === 'Strona główna') {
      $pref .= "sub_sites/";
    }

    foreach ($MAIN_MENU_ITEMS as $key => $array) {
      $mkey = "{{" . $key . "}}";
      if($key === "M1") {
        $item = '<span class="subspan" onclick="redir(\'{{H}}\')">{{T}}</span>';
        $prefix2 = "../";
        if($active_name === 'Strona główna') {
          $prefix2 = "";
        }
        $item = (string) str_replace(["{{T}}","{{H}}"], [$array[0], $prefix2.$array[1]], $item);
      } else if ($key === "M2.1") {
        $item = ($array[0] === $active_name)?$MAIN_MENU_LI_2:$MAIN_MENU_LI_1;
        $item = (string) str_replace(["{{T}}","{{H}}"], [$array[0], $array[1]], $item);
      } else {
        $item = ($array[0] === $active_name)?$MAIN_MENU_LI_2:$MAIN_MENU_LI_1;
        $item = (string) str_replace(["{{T}}","{{H}}"], [$array[0], $pref.$array[1]], $item);
      }

      $s = (string) str_replace($mkey, $item, $s);
    }

    return $s;

  }

  public function Section($title, $list1, $list2){
    $s = '<div class="row">'."\n";
    $s .= '<h3>'.$title.'</h3>'."\n";
    $s .= '<div class="square col-2-4">'."\n";
    $s .= '<h4>Czego się dowiedziałem?</h4>'."\n";
    $s .= "<ol>"."\n";
    foreach ($list1 as $key => $value) {
      $s .= "<li>".$value."</li>\n";
    }
    $s .= "</ol>\n";
    $s .= "</div><!-- col -->\n";

    $s .= '<div class="square col-2-4">'."\n";
    $s .= '<h4>Czego warto się douczyć?</h4>'."\n";
    $s .= "<ol>"."\n";
    foreach ($list2 as $key => $value) {
      $s .= "<li>".$value."</li>\n";
    }
    $s .= "</ol>\n";
    $s .= "</div><!-- col -->\n";

    $s .= '</div>'."<!-- row -->\n";

    return $s;
  }

  /**
  * Zwraca lancuch z zamknieciem strony
  * @return string
  */
  public function End() {
    global $FOOTER;
    return $FOOTER;
  }

} //class MyPage

?>
