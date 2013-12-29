<?

require("administrace.php");
	ob_start();
if($_SESSION['admin_typ']==0){
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";	
echo"<div class='reg_clenu-div'>
<h1>Registrace nového administátora</h1>
		<form action='register_send.php'>
	<div>
       <p>Uživatelské jméno<input class='reg_adminu-edpole' type='text' 
name='nick' size='15'></p>
<p>Typ účtu<select  class='reg_adminu-edpole' 
name='admin_typ'>
<option selected>Vyber typ</option>
<option value='0'>Hlavní Administrátor</option>
<option value='1'>Vedoucí</option>
<option value='2'>Praktikant</option>
</select></p>
			<p>Heslo:<input class='reg_adminu-edpole' 
type='password' name='heslo' size='15'></p>
      <p><input class='reg_adminu-edpole' type='submit' value='Přidat 
administrátora'></p>
                                                     </div>   
		</form></div>";
 }
else {echo"<div class='error_opravneni'><h3>Neoprávněný vstup</h3>Nemáte 
oprávnění pro vstup na tuto stránku</div>";}
		?>

