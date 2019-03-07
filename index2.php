<!DOCTYPE html>
<html>
	<title>Shaiya Darkness</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="modulos/js/slider.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" type="text/css" href="modulos/css/pinturillo.css" />
	<link rel="stylesheet" type="text/css" href="modulos/css/slider.css" />
	<?php 
		require('modulos/config.php');
		require('modulos/slider.php');
		if(!$user->is_logged_in()){ header('Location: login.php'); exit(); }
		?>
	<body>
		<?php 
			require('modulos/nav.php');
			?>
		<header class="contenido">
			<div class="cont-iz-grande" style="margin-top: 10%;top:0%">
				<div class="cont-iz2">
					<h1 class="cont-iz-titulo">Aqui va un titulito</h1>
					<hr>
					<p>Aquí va un textito bonito acorde al titulito</p>
					<?php require('modulos/panel.php');  ?>
					</div>
				</div>
			<a class="cont-de" style="width: 15%;margin-top:2%;">
				<p style=""><button class="cont-iz-boton"onclick="window.location.href='modulos/logout.php'">Cerrar sesión</button></p>
				</a>
			<a class="cont-de" style="width: 15%; margin-top:10%;">
				Hora in Game<br>
				<?php require('modulos/hora.php');  ?>
				</a>
			<a class="cont-de" style="width: 15%;margin-top:15%;">
				Server <font color="#00ff15">Online</font>
				</a>
			<div class="cont-de" style="width: 20%;text-align: left;margin-top:20%;">
				<a>Inf Server</a><br>
				dddd
				</div>
			</header>
		</body>
	</html>