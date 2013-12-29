<?
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
require_once("index.php");
include("config.php");
mysql_connect($server, $jmeno, $heslo_db);
	mysql_select_db($db);
			$log = mysql_query("SELECT * FROM clenove;");
echo"<table class='seznam-clenu'><tr>
		<td width='200' height='100'>Jméno</td>
		<td width='200' height='100'>Příjmení</td>
	</tr>";
			while ($l=mysql_fetch_array($log)) {
				echo "<tr>
		<td width='200'>".$l['jmeno']."</td>
		<td width='200'>".$l['prijmeni']."</td>
	</tr>";
			}echo"</table>";
		?>

