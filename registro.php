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
		?>
	<body>
		<?php 
			require('modulos/nav.php');
			?>
		<header class="contenido">
			<div class="cont-iz-grande">
				<div class="cont-iz2">
					<h1 class="cont-iz-titulo">Registro</h1>
					<hr>
<?php 
						require('modulos/registro.php');
						?>
					</div>
				</div>
			<a class="cont-de" style="top:15%;width: 15%;">
				Hora in Game<br>
				<?php require('modulos/hora.php');  ?>
				</a>
			<a class="cont-de" style="top:25%;width: 15%;">
				Server <font color="#00ff15">Online</font>
				</a>
			</header>
		</body>
	</html>