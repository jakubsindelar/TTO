<?php

require_once("index.php");
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
echo"<img src='login-pozadi.gif' class='login-form'><img src='login-pozadi.gif' class='login-form-pass'><img src='login.gif' class='login-background'>
<div class='login'><h1 class='login-h1'>Přihlášení</h1><form method ='POST' action='logining.php'>
<p><b>Login:</b><input type='text' name='name'style='background-color: #A1855C'></p><br><br>
<p><b>Heslo:</b><input type='password' name='heslo' style='background-color: #A1855C'></p>
<input class='button_prihlas' type='submit' value='Přihlaš'>
</form></div>";

 ?>
