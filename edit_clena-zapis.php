<?
session_start();
$jmeno_2 = mb_strtoupper(htmlspecialchars($_POST['nick']),"utf-8");

	$prijmeni = mb_strtoupper(htmlspecialchars($_POST['prijmeni']),"utf-8");
	$den_narozeni = htmlspecialchars($_POST['dennarozeni']);
	$mesic_narozeni = htmlspecialchars($_POST['mesicnarozeni']);
	$rok_narozeni = htmlspecialchars($_POST['rok']);
	$postizeni = mb_strtoupper(htmlspecialchars($_POST['postizeni']),"utf-8");
	$adresa =  mb_strtoupper(htmlspecialchars($_POST['adresa']),"utf-8");
	$vek = htmlspecialchars($_POST['vek']);
	$typ = htmlspecialchars($_POST['typ']);
	$telefon = htmlspecialchars($_POST['telefon']);
	$mobil = htmlspecialchars($_POST['mobil']);
	$email = mb_strtoupper(htmlspecialchars($_POST['email']),"utf-8");
include("config.php");
mysql_connect($server, $jmeno, $heslo_db);
	mysql_select_db($db);
mysql_query("UPDATE clenove SET jmeno = '".$jmeno_2."', prijmeni = '".$prijmeni."',den_narozeni = '".$den_narozeni."', mesic_narozeni = '".$mesic_narozeni."', rok_narozeni = '".$rok_narozeni."',postizeni = '".$postizeni."',vek = '".$vek."',typ = '".$typ."',adresa = '".$adresa."',telefon = '".$telefon."', mobil = '".$mobil."' , email = '".$email."'
 WHERE id = '".$_SESSION['id_clena']."';");
header("Location: administrace.php");
?>