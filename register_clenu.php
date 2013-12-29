<?
ob_start();
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
require_once("administrace.php");	
	$jmeno = mb_strtoupper(htmlspecialchars($_POST['nick']),"utf-8");

	$prijmeni = mb_strtoupper(htmlspecialchars($_POST['prijmeni']),"utf-8");
	$den_narozeni = htmlspecialchars($_POST['dennarozeni']);
	$mesic_narozeni = htmlspecialchars($_POST['mesicnarozeni']);
	$rok_narozeni = htmlspecialchars($_POST['rok']);
	$postizeni = mb_strtoupper(htmlspecialchars($_POST['postizeni']),"utf-8");
	$adresa =  mb_strtoupper(htmlspecialchars($_POST['adresa']),"utf-8");
	$typ = htmlspecialchars($_POST['typ']);
	$telefon = htmlspecialchars($_POST['telefon']);
	$mobil = htmlspecialchars($_POST['mobil']);
	$email = mb_strtoupper(htmlspecialchars($_POST['email']),"utf-8");
	mysql_connect("localhost","root","ilidan");
	mysql_select_db("testing");
?>
	<div class="reg_clenu-div">
<h1>Registrace nových členů</h1>
		<form method="POST">

       <p>Jméno:<input class="reg_clenu-edpole" type="text" name="nick" size="15"></p>
       <p>Příjmení:<input class="reg_clenu-edpole" type="text" name="prijmeni" size="15"></p>
       <p>Datum narození:<select class="reg_clenu-edpole" size="1" name="dennarozeni" alt="Den narození">
<option selected>Den</option>
<option value="1">1</option><option value="2">2</option>
<option value="3">3</option><option value="4">4</option>
<option value="5">5</option><option value="6">6</option>
<option value="7" >7</option><option value="8">8</option>
<option value="9">9</option><option value="10">10</option>
<option value="11">11</option><option value="12">12</option>
<option value="13">13</option><option value="14">14</option>
<option value="15">15</option><option value="16">16</option>
<option value="17">17</option><option value="18">18</option>
<option value="19">19</option><option value="20">20</option>
<option value="21">21</option><option value="22">22</option>
<option value="23">23</option><option value="24">24</option>
<option value="25">25</option><option value="26">26</option>
<option value="27">27</option><option value="28">28</option>
<option value="29">29</option value="30"><option>30</option>
<option value="31">31</option>
</select>
<select class="reg_clenu-seznam-datum" size="1" name="mesicnarozeni" alt="Měsíc narození">
<option selected>Měsíc</option>
<option value="1">Leden</option><option value="2">Únor</option>
<option value="3">Březen</option><option value="4">Duben</option>
<option value="5">Květen</option><option value="6">Červen</option>
<option value="7">Červenec</option><option value="8">Srpen</option>
<option value="9">Září</option><option value="10">Říjen</option>
<option value="11">Listopad</option><option value="12">Prosinec</option>
</select><input type="text" name="rok" class="reg_clenu-rok" value="Rok" size="4" alt="Rok narození">
</p>
       <p>Postižení:<input class="reg_clenu-edpole" type="text" name="postizeni" size="15"></p>
       <p>Adresa:<textarea class="reg_clenu-edpole" rows="3" name="adresa" cols="20" alt="Adresa"></textarea></p><br>
       <p>Typ:<select name="typ" class="reg_clenu-edpole" alt="Typ člena">
<option selected>Typ</option>4
<option value="1">Dítě</option>
<option value="2">Vedoucí</option>
<option value="3">Praktikant</option>
</select></p>
       <p>Telefon:<input class="reg_clenu-edpole" type="text" name="telefon" size="15"></p>
       <p>Mobil:<input class="reg_clenu-edpole" type="text" name="mobil" size="15"></p>
       <p>E-mail:<input class="reg_clenu-edpole" type="text" name="email" size="15"></p>
    
      <p><input class="reg_clenu-edpole" type="submit" value="Uložit  "></p>
                                                     </div>   
		</form>

		<?
			if(isset($jmeno) and !empty($jmeno)) {
mysql_query("insert into clenove (jmeno, prijmeni, den_narozeni, mesic_narozeni, rok_narozeni, postizeni, typ, adresa, telefon, mobil, email) values ('".$jmeno."','".$prijmeni."','".$den_narozeni."','".$mesic_narozeni."','".$rok_narozeni."','".$postizeni."','".$typ."','".$adresa."','".$telefon."','".$mobil."','".$email."');");				
header("Location: register_clenu.php");
		
			}
		?>
