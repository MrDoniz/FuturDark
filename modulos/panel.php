<?php
// Database configuration parameters
$dbHost = '192.99.103.222:7691';
$dbUser = 'papiropiw40';
$dbPass = 'nabucodonosor';

$GLOBALS['dbConn'] = @odbc_connect("Driver={SQL Server};Server={$GLOBALS['dbHost']};",$GLOBALS['dbUser'],$GLOBALS['dbPass']) or die('Database Connection Error!');
if(!$GLOBALS['dbConn']){
	exit("Connection failed:".odbc_errormsg());
}

?>


						<form role="form" method="post" action="" autocomplete="off">
							<input  style="color:black;"type="text" id="input" class="Input-text" placeholder="Usuario"    name="username">
							<input  style="color:black;"type="text" id="input" class="Input-text" placeholder="Contraseña" name="newpassword">
							<div style="width:15%;margin-left:auto;"><input type="submit" name="submit" value="Acceder" class="cont-iz-boton"></div>
						</form>
						<p style="width:25%;margin-left:auto;"><button class="cont-iz-boton">Cambiar Contraseña</button></p>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
  </div>




