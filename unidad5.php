<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>U5</title>
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
		<h2>Consultas</h2>
		<?php include ("crear_captcha.php"); ?>
		<form method="POST" action="cargar.php">
			<input type="text" name="nombre" required placeholder="Nombre" maxlength="30">
			<input type="text" name="apellido" required placeholder="Apellido" maxlength="30">
			<input type="mail" name="email" required placeholder="E-mail" maxlength="40">
			<p><input class="textos_largos" type="text" name="consulta" required placeholder="Consulta" maxlength="100"></p>
			<br/><img src="img_captcha.php">
			<p><input type="text" name="cap" required placeholder="Escriba el texto"></p>
			<input type="submit" class="btn_send" name="Enviar" value="ENVIAR">
		</form>

	</section>

	<aside>
    </aside>
	
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>

</body>

</html>