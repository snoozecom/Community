<?php 
if(isset($_GET['seite'])) {
	$seite = $_GET["seite"];
		} else { 
	$seite = '1'; }

if(isset($_GET['kat'])) {
	$kat = $_GET["kat"];
		} else { 
	$kat = 'all'; }


$activesubnavi = 'active'.$_GET["kat"];

$return = ""; 
$pagetitle = 'Home';

//Wenn man keine Seite angegeben hat, ist man automatisch auf Seite 1 
if(!isset($seite)) 
   { 
   $seite = 1; 
   } 
$eintraege_pro_seite = 2; 
$start = $seite * $eintraege_pro_seite - $eintraege_pro_seite; 

	if($kat == 'all') {
			$abfrage = "SELECT * FROM com_news WHERE aktiv = '1' ORDER BY id DESC LIMIT $start, $eintraege_pro_seite"; 
		} else { 
			$abfrage = "SELECT * FROM com_news WHERE aktiv = '1' AND kategorie = '$kat' ORDER BY id DESC LIMIT $start, 			$eintraege_pro_seite"; 
		}
$ergebnis = mysql_query($abfrage); 
while($row = mysql_fetch_object($ergebnis)) 
    {
    $inhalt = $row->inhalt; 
    $inhalt = htmlentities($inhalt); 
    $inhalt = nl2br($inhalt); 
	$title = $row->title;
	$title = htmlentities($title);
	$title = nl2br($title);
    $datum = date("d.m.Y H:i", $row->datum); 
	$author = $row->name;
	$kategorieprint = $row->kategorie;

$return .="<div class='box post' id='post-41'>
				<div class='post-title' style='margin-top10px;'>
            		<h2>$title</h2>
				</div>
				<div class='post-date'>Von <b>$author</b> am $datum in $kategorieprint</div>
				<div class='clr'></div>
				<!--<div class='pic fl'>
          			<a href='#' rel='bookmark' title=''>
                	<img src='images/img_1.jpg' alt='Post Pic' width='226' height='149' /></a>
				</div>-->
				<div class='post-excerpt'>
					<p>$inhalt</p>
				</div>
				<div class='post-commets'>
				Schreibe ein <a href='#'>Kommentar</a> &raquo;
				</div>
				</div>
				<div class='clr'></div><br>";
     
   } 
   
   if($kat == 'all') {
			$result = mysql_query("SELECT id FROM com_news WHERE aktiv = '1'"); 
	   } else {
			$result = mysql_query("SELECT id FROM com_news WHERE aktiv = '1' AND kategorie = '$kat' "); 
	   }
$menge = mysql_num_rows($result); 

$wieviel_seiten = $menge / $eintraege_pro_seite; 

//Ausgabe der Seitenlinks: 
$return .='<div class="wp-pagenavi">Seite :'; 

//Ausgabe der Links zu den Seiten 
for($a=0; $a < $wieviel_seiten; $a++) 
   { 
   $b = $a + 1; 

   //Wenn der User sich auf dieser Seite befindet, keinen Link ausgeben 
   if($seite == $b) 
      { 
      $return .='<span class="current">'.$b.'</span>'; 
      } 

   //Aus dieser Seite ist der User nicht, also einen Link ausgeben 
   else 
      { 
      $return .='<a href="index.php?page=home&kat='.$kat.'&seite='.$b.'" title="Seite '.$b.'">'.$b.'</a>'; 
      } 
   } 
$return .="</div>";
$content = $return
	  ?>