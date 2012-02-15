<?php 

if(isset($_GET['seite'])) {
	$seite = $_GET["seite"];
		} else { 
	$seite = '1'; }

$return = ""; 
$pagetitle = 'Game-Reviews';
$activesubnavi = 'games';

//Wenn man keine Seite angegeben hat, ist man automatisch auf Seite 1 
if(!isset($seite)) 
   { 
   $seite = 1; 
   } 
$eintraege_pro_seite = 2; 
$start = $seite * $eintraege_pro_seite - $eintraege_pro_seite; 


$abfrage = "SELECT * FROM com_game WHERE aktiv = '1' ORDER BY id DESC LIMIT $start, $eintraege_pro_seite"; 
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

$return .="<div class='box post' id='post-41'>
				<div class='post-title' style='margin-top10px;'>
            		<h2>$title</h2>
				</div>
				<div class='post-date'>Von <b>$name</b> am $datum <a href='#'>11</a> Comments </div>
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
				<div class='clr'></div>";
     
   } 
$result = mysql_query("SELECT id FROM com_game WHERE aktiv = '1'"); 
$menge = mysql_num_rows($result); 


$wieviel_seiten = $menge / $eintraege_pro_seite; 

//Ausgabe der Seitenlinks: 
$return .='<div class="wp-pagenavi">'; 
//$return .='<span class="pages">Seite '.$seite.' von '.$wieviel_seiten.'</span>'; 


//Ausgabe der Links zu den Seiten 
for($a=0; $a < $wieviel_seiten; $a++) 
   { 
   $b = $a + 1; 

   //Wenn der User sich auf dieser Seite befindet, keinen Link ausgeben 
   if($seite == $b) 
      { 
      $return .='Seite :<span class="current">'.$b.'</span>'; 
      } 

   //Aus dieser Seite ist der User nicht, also einen Link ausgeben 
   else 
      { 
      $return .='<a href="index.php?page=game-review&seite='.$b.'" title="'.$b.'">'.$b.'</a>'; 
      } 
   } 
$return .="</div>"; 
//$returnd.= '<div class="wp-pagenavi"><span class="pages">Seite 1 von 2</span><span class="current">1</span><a href="#" title="2">2</a><a href="#" >&raquo;</a></div>';
	  
	  $content = $return
	  ?>