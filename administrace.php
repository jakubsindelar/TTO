<?php
session_start();
session_cache_limiter('private');
ob_start();
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
if(isset($_SESSION['admin_typ']) and isset($_SESSION['id']))
{
require("index.php");
if($_SESSION['admin_typ']<=3)
{echo"<div class='navi-administrace'>
<h1>Administrace</h1>";
if($_SESSION['admin_typ']==0 or $administrator_typ == 0)
{echo"<center><a href='register.php'>Přidat Administrátora</a></center>";};
echo"
<center><a href='clenove.php'>Seznam členů</a></center>
<center><a href='register_clenu.php'>Přidat člena</a></center>
<center><a href='edit_clenove.php'>Editace člena</a></center>
<center><a href='del_clenove.php'>Smazat člena</a></center>
<center><a href='logout.php'>Odhlásit se</a></center>";
echo"</div>";}}
else {echo "Zadali jste nesprávné uživatelské jméno nebo heslo";}
?>
