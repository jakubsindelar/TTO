<?
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
include("config.php");
include("administrace.php");
 $con = mysql_connect($server, $jmeno, $heslo_db);
if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }

 mysql_select_db($db, $con);

 $result = mysql_query("SELECT * FROM clenove 
WHERE id = '".$idc."';");
 while($row = mysql_fetch_array($result) and $idc == $row['id'])
{ if($row['typ'] == 1) {$typ = "Dítě";};
  if($row['typ'] == 2) {$typ = "Vedoucí";};
  if($row['typ'] == 3) {$typ = "Praktikant";};
$den    =   $row['den_narozeni'];
$mesic  =   $row['mesic_narozeni'];
$rok    =   $row['rok_narozeni'];
$zaznam = "$rok-$mesic-$den"; // ukazka vstupu
$vek = 0;
if (!is_null($zaznam) and $zaznam != "") {
  $poleNarozeni = explode("-",$zaznam);
  $vek = date("Y") - $poleNarozeni[0];
  if ($poleNarozeni[1] > date("m")) { // porovname mesice
    $vek -= 1;
  } elseif (($poleNarozeni[1] = date("m")) and ($poleNarozeni[2] >= date("d"))) { // porovname dny v mesici
    $vek -= 1;
  }
}
echo"<h3 class='tab-view_edit-nadpis'>Hlavní údaje</h3>
<table border='1' class='tab-view_edit'>
<tr>
		<td align='center' width='200'>Jméno</td>
<td align='center' width='200'>".$row['jmeno']."</td></tr>
</tr>
		<tr><td align='center' width='200' >Příjmení</td>
<td align='center' width='200'>".$row['prijmeni']."</td></tr>
</tr>
    <tr><td align='center' width='200'>Věk</td>
<td align='center' width='200'>$vek</td></tr>
</tr
    <tr><td align='center' width='200'>Datum narození</td>
<td align='center' width='200'>".$row['den_narozeni'].".".$row['mesic_narozeni'].".".$row['rok_narozeni']."</td></tr>
</tr>
    <tr><td align='center' width='200'>Postižení</td>
<td align='center' width='200'>".$row['postizeni']."</td></tr>
<tr><td align='center' width='200'>Typ</td>
<td align='center' width='200'>$typ</td></tr>
	</tr></table>";
echo"<h3 class='tab2-view_edit-nadpis'>Kontakty</h3>
<table border='1' class='tab2-view_edit'>
<tr>
		<td align='center' width='200'>Adresa</td><td align='center' width='200'>".$row['adresa']."</td></tr></tr>
		<tr><td align='center' width='200' >Telefon</td><td align='center' width='200'>".$row['telefon']."</td></tr></tr>
    <tr><td align='center' width='200'>Mobil</td><td align='center' width='200'>".$row['mobil']."</td></tr></tr
    <tr><td align='center' width='200'>E-mail</td><td align='center' width='200'>".$row['email']."</td></tr></tr>
	</tr></table>";};
			
?>
