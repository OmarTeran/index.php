<!DOCTYPE html>
<html>
<head>
	<!--- BOOTSTRAP -->
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
  <!-- -->
	<title>Registrate</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilos.css">
</head>
<body style="font-family: 'DM Serif Text', serif;">
	<section class="row">
		<article class="col-lg-4">
		</article>
		<form method="post" class="col-lg-4 text-center justify-content-around">
			<h2 class="text-center">Contacto</h2>
			<input class="text-center" type="text" name="nombre" placeholder="nombre" required>
			<br>
			<br>
			<input class="text-center" type="email" name="email" placeholder="email" required>
			<br>
			<br>
			<textarea class="text-center" name="msg" placeholder="Escribe aqui tu mensaje" required></textarea>
			<br>
			<br>
			<input id="boton" name="enviar" type="submit" value="Enviar">
		</form>
		<?php
		    include("correo.php");
		?>
		<article class="col-lg-4">
		</article>
	</section>

</body>
</html>
