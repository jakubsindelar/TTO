<?
session_start();
session_cache_limiter('private');
include("config.php");
$_SESSION['id'] = $id;
$con = mysql_connect($server, $jmeno, $heslo_db);
if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }

 mysql_select_db($db, $con);

mysql_query("UPDATE user SET online = 0 WHERE id = '".$_SESSION['id']."';");
 $_SESSION = array(); //Vy�ist� v�echy registrovan� prom�nn�
 session_destroy(); //zni�� session
header("Location: .");
?>
