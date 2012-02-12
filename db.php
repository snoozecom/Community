<?php
$db_link = mysql_connect ('localhost', 'web149', '');

$db_sel = mysql_select_db( 'usr_web149_10' )
   or die("Auswahl der Datenbank fehlgeschlagen");

$sql = "SELECT * FROM adressen";

$db_erg = mysql_query( $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysql_error());
}

echo '<table border="1">';
while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
{
  echo "<tr>";
  echo "<td>". $zeile['id'] . "</td>";
  echo "<td>". $zeile['nachname'] . "</td>";
  echo "<td>". $zeile['vorname'] . "</td>";
  echo "<td>". $zeile['akuerzel'] . "</td>";
  echo "<td>". $zeile['strasse'] . "</td>";
  echo "<td>". $zeile['plz'] . "</td>";
  echo "<td>". $zeile['telefon'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysql_free_result( $db_erg );
?>