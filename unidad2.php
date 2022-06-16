<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>U2</title>
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

	<section id="main_section">
		<h2>Eventos</h2>
		<form method="POST" action="">
			<input type="number" name="dia" required placeholder="Nº de Día" maxlength="2">
			<input type="number" name="mes" required placeholder="Nº de Mes" maxlength="2">
			<input type="number" name="anno" required placeholder="Año" maxlength="4">
			<p><input class="btn_send" type="submit" value="CALCULAR"></p>
		</form>
		<div><?php include("calculo_fecha.php"); ?></div>
	</section>
	
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>