<?php
$verbindung = mysql_connect("localhost","web149","srecvHY9")
or die("Verbindung zur Datenbank konnte nicht hergestellt werden"); 

mysql_select_db("usr_web149_10") or die ("Datenbank konnte nicht ausgewählt werden"); 

if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}

include("template.class.php");
include("inc/constants.inc.php");
include("page/".$page.".php");

$tpl = new Template();
$tpl->load($page.".tpl");
$tpl->assign("pagetitle", $pagetitle);
$tpl->assign("name", $comname);
$tpl->assign("content", $content);
$tpl->assign("comname", $comname);
$tpl->out();
?>