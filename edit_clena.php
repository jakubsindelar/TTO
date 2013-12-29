<?
session_start();
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
require_once("administrace.php");
include("config.php");
mysql_connect($server, $jmeno, $heslo_db);
	mysql_select_db($db);
			$log = mysql_query("SELECT * FROM clenove
WHERE id = '".$idc_2."'
;");

			while ($l=mysql_fetch_array($log)) {
$jmeno = $l['jmeno'];
$prijmeni = $l['prijmeni'];
$den = $l['den_narozeni'];
$mesic = $l['mesic_narozeni'];
$rok = $l['rok_narozeni'];
$postizeni = $l['postizeni'];
$adresa = $l['adresa'];
$vek = $l['vek'];
$typ = $l['typ'];
$telefon = $l['telefon'];
$mobil = $l['mobil'];
$email = $l['mobil'];
} $_SESSION['id_clena'] = $idc_2;
?>
<div class="reg_clenu-div">
<h1>Editace člena</h1>
		<form method="POST" action="edit_clena-zapis.php">

       <p>Jméno:<input class="reg_clenu-edpole" type="text" name="nick" size="15" value="<?echo $jmeno;?>"></p>
       <p>Příjmení:<input class="reg_clenu-edpole" type="text" name="prijmeni" size="15" value="<?echo $prijmeni;?>"></p>
       <p>Datum narození:<select class="reg_clenu-edpole" size="1" name="dennarozeni" alt="Den narození">
<option>Den</option>
<option <?if($den == 1) {echo"selected";}?> value="1">1</option>
<option <?if($den == 2) {echo"selected";}?> value="2">2</option>
<option <?if($den == 3) {echo"selected";}?> value="3">3</option>
<option <?if($den == 4) {echo"selected";}?> value="4">4</option>
<option <?if($den == 5) {echo"selected";}?> value="5">5</option>
<option <?if($den == 6) {echo"selected";}?> value="6">6</option>
<option <?if($den == 7) {echo"selected";}?> value="7" >7</option>
<option <?if($den == 8) {echo"selected";}?> value="8">8</option>
<option <?if($den == 9) {echo"selected";}?> value="9">9</option>
<option <?if($den == 10) {echo"selected";}?> value="10">10</option>
<option <?if($den == 11) {echo"selected";}?> value="11">11</option>
<option <?if($den == 12) {echo"selected";}?> value="12">12</option>
<option <?if($den == 13) {echo"selected";}?> value="13">13</option>
<option <?if($den == 14) {echo"selected";}?> value="14">14</option>
<option <?if($den == 15) {echo"selected";}?> value="15">15</option>
<option <?if($den == 16) {echo"selected";}?> value="16">16</option>
<option <?if($den == 17) {echo"selected";}?> value="17">17</option>
<option <?if($den == 18) {echo"selected";}?> value="18">18</option>
<option <?if($den == 19) {echo"selected";}?> value="19">19</option>
<option <?if($den == 20) {echo"selected";}?> value="20">20</option>
<option <?if($den == 21) {echo"selected";}?> value="21">21</option>
<option <?if($den == 22) {echo"selected";}?> value="22">22</option>
<option <?if($den == 23) {echo"selected";}?> value="23">23</option>
<option <?if($den == 24) {echo"selected";}?> value="24">24</option>
<option <?if($den == 25) {echo"selected";}?> value="25">25</option>
<option <?if($den == 26) {echo"selected";}?> value="26">26</option>
<option <?if($den == 27) {echo"selected";}?> value="27">27</option>
<option <?if($den == 28) {echo"selected";}?> value="28">28</option>
<option <?if($den == 29) {echo"selected";}?> value="29">29</option>
<option <?if($den == 30) {echo"selected";}?> value="30">30</option>
<option <?if($den == 31) {echo"selected";}?> value="31">31</option>
</select>
<select class="reg_clenu-seznam-datum" size="1" name="mesicnarozeni" alt="Měsíc narození">
<option>Měsíc</option>
<option <?if($mesic == 1) {echo"selected";}?> value="1">Leden</option>
<option <?if($mesic == 2) {echo"selected";}?> value="2">Únor</option>
<option <?if($mesic == 3) {echo"selected";}?> value="3">Březen</option>
<option <?if($mesic == 4) {echo"selected";}?> value="4">Duben</option>
<option <?if($mesic == 5) {echo"selected";}?> value="5">Květen</option>
<option <?if($mesic == 6) {echo"selected";}?> value="6">Červen</option>
<option <?if($mesic == 7) {echo"selected";}?> value="7">Červenec</option>
<option <?if($mesic == 8) {echo"selected";}?> value="8">Srpen</option>
<option <?if($mesic == 9) {echo"selected";}?> value="9">Září</option>
<option <?if($mesic == 10) {echo"selected";}?> value="10">Říjen</option>
<option <?if($mesic == 11) {echo"selected";}?> value="11">Listopad</option>
<option <?if($mesic == 12) {echo"selected";}?> value="12">Prosinec</option>
</select><input type="text" name="rok" class="reg_clenu-rok" value="<?echo $rok;?>" size="4" alt="Rok narození">
</p>
       <p>Postižení:<input class="reg_clenu-edpole" type="text" name="postizeni" size="15" value="<?echo $postizeni;?>"></p>
       <p>Adresa:<textarea class="reg_clenu-edpole" rows="3" name="adresa" cols="20" alt="Adresa"><?echo $adresa;?></textarea></p><br>
       <p>Věk:<input class="reg_clenu-edpole" type="text" name="vek" size="15" value="<?echo $vek;?>"></p>
       <p>Typ:<select name="typ" class="reg_clenu-edpole" alt="Typ člena">
<option>Typ</option>
<option  <?if($typ == 1) {echo"selected";}?> value="1">Dítě</option>
<option <?if($typ == 2) {echo"selected";}?> value="2">Vedoucí</option>
<option <?if($typ == 3) {echo"selected";}?> value="3">Praktikant</option>
</select></p>
       <p>Telefon:<input class="reg_clenu-edpole" type="text" name="telefon" size="15" value="<?echo $telefon;?>"></p>
       <p>Mobil:<input class="reg_clenu-edpole" type="text" name="mobil" size="15" value="<?echo $mobil;?>"></p>
       <p>E-mail:<input class="reg_clenu-edpole" type="text" name="email" size="15" value="<?echo $email;?>"></p>
    
      <p><input class="reg_clenu-edpole" type="submit" value="Uložit  "></p>
                                                     </div>   
		</form>