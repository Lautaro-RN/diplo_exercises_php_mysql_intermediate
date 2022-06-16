<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>U6</title>
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
		<h2>Usuarios</h2>
		<form method="POST" action="" enctype="multipart/form-data">
			<label><h3>Nombre</h3><input type="text" required name="nomb"></label>
			<label><h3>Apellido</h3><input type="text" required name="apel"></label>
			<label><h3>Edad</h3><input type="number" required name="edad"></label><br><br><br>
			<input type="submit" class="btn_send" name="agre" value="AGREGAR USUARIO">
		</form>
	</section>

	<aside>
		<div class="txt_aside"><p>ÚLTIMO USUARIO AGREGADO:</p></div>
    	<?php include ("caract_usuarios.php"); ?>
  	</aside>

	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>