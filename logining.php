<?php 
session_start();
session_cache_limiter('private');
include("config.php");
	$nick = mb_strtoupper(htmlspecialchars($_POST['name']),"utf-8");
  $heslo = htmlspecialchars($_POST['heslo']);
  $mdheslo = md5($heslo);
 $con = mysql_connect($server, $jmeno, $heslo_db);
if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }

 mysql_select_db($db, $con);

 $result = mysql_query("SELECT * FROM user 
WHERE username = '".$nick."' AND heslo = '".$mdheslo."';");
$row = mysql_fetch_array($result);
if($row['username'] = $nick and $row['heslo'] = $mdheslo)
{$_SESSION['admin_typ'] = $row['typ'];$_SESSION['id'] = $row['id'];
mysql_query("UPDATE user SET online = 1 WHERE username = '".$nick."' AND 
heslo = '".$mdheslo."';");
header("Location: administrace.php");}
?>

