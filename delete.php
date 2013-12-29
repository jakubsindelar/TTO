<?php
include("config.php");
mysql_connect($server, $jmeno, $heslo_db);
	mysql_select_db($db);

mysql_query("DELETE FROM clenove WHERE id = '".$idc."';");
$log = mysql_query("SELECT * FROM clenove
WHERE id = '".$idc."'
;");
if(!isset($log['id'])) {echo "uživatal byl smazán";echo "<meta http-equiv='refresh' 
content='10;url=administrace.php'>";};

?>
