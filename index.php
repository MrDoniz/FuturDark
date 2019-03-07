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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<?php 
		require('modulos/config.php');
		require('modulos/slider.php');
		if( $user->is_logged_in() ){ header('Location: index2.php'); exit(); }
		?>
	<body>
		<?php 
			require('modulos/nav.php');
			?>
		<header class="contenido">
			<div class="cont-iz">
				<div class="cont-iz2">
					<h1 class="cont-iz-titulo">Bienvenido! Tu aventura empieza aquí.....</h1>
					<hr>
					<p>En un choque épico de reinos a quien quieres ayudar... La luz se enfrenta a la oscuridad... Tu decisión es ahora!</p>
					<p style="width:25%;margin-left:auto;"><button class="cont-iz-boton" onclick="window.location.href='registro.php'">Registro</button></p>
					<p style="width:15%;margin-left:auto;"><button class="cont-iz-boton" onclick="window.location.href='login.php'">Acceder</button></p>
					</div>
				</div>
			<a class="cont-de" style="">
				Hora in Game<br>
				<?php require('modulos/hora.php');  ?>
				</a>
			<a class="cont-de" style="    margin-top: 77px;">
				Server <font color="#00ff15">Online</font>
				</a>
			</header>
		</body>
	</html>