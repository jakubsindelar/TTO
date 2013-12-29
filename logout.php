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
 $_SESSION = array(); //Vyèistí všechy registrované promìnné
 session_destroy(); //znièí session
header("Location: .");
?>
