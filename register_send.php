<?
session_start();
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
$nick = mb_strtoupper(htmlspecialchars($_GET['nick']),"utf-8");
$admin_typ = htmlspecialchars($_GET['admin_typ']);
	$heslo = htmlspecialchars($_GET['heslo']);
echo $_SESSION['admin_typ'];
	include("config.php");
mysql_connect($server, $jmeno, $heslo_db);
	mysql_select_db($db);
$mdheslo = md5($heslo);
			if(isset($nick) and !empty($nick) and isset($heslo) 
and !empty($heslo)) 
{
mysql_query("insert into user (username, heslo, typ) values 
('".$nick."','".$mdheslo."','".$admin_typ."');"); 
echo "<div class='error_opravneni'><h3>Výsledek</h3>Administrátor $nick byl 
úspěšně přidán</div>";echo"<meta http-equiv='refresh' 
content='10;url=administrace.php?administrator_typ=$ad_typ'>";}
else {echo "<div class='error_opravneni'><h3>Chyba</h3>Nezadali jste 
uživatelské jméno nebo heslo</div>";echo"<meta http-equiv='refresh' 
content='10;url=administrace.php'>";}
?>
