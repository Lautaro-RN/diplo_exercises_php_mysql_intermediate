<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>U3</title>
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	
	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>

	<section>
		<h2>Comentarios</h2>
		<form method="POST" action="">
			<input type="text" name="nya" required placeholder="Nombre y Apellido" maxlength="40">
			<input type="email" name="correo" required placeholder="Correo Electrónico" maxlength="30">
			<p><input type="text" name="coment" required placeholder="Comentario" maxlength="100"></p>
			<p><input class="btn_send" type="submit" value="ENVIAR"></p>
		</form>

		<?php
		date_default_timezone_set("America/Argentina/Buenos_Aires");
		include ("comentarios.php");
		?>

	</section>

	<aside>
    
  </aside>
  
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>