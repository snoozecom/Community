<?php
$verbindung = mysql_connect("localhost","root","")
or die("Verbindung zur Datenbank konnte nicht hergestellt werden"); 

mysql_select_db("community") or die ("Datenbank konnte nicht ausgewählt werden"); 

if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}

include("template.class.php");
include("inc/constants.inc.php");
include("page/".$page.".php");

$activenavi = 'activeNavi'.$page;

$tpl = new Template();
$tpl->load($page.".tpl");
$tpl->assign("pagetitle", $pagetitle);
$tpl->assign($activenavi, "current_page_item");
$tpl->assign($activesubnavi, "active");
$tpl->assign("name", $comname);
$tpl->assign("content", $content);
$tpl->assign("comname", $comname);
$tpl->out();
?>