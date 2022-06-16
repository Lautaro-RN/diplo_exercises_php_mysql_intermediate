<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>U1</title>
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
		<h2>Agenda de clases</h2>
		<form method="POST" action="insertar_clases.php">
			<input type="text" name="unidad" required placeholder="Unidad" maxlength="30">
			<input type="date" name="fecha" required placeholder="Fecha">
			<p><input class="btn_send" type="submit" value="CARGAR"></p>
		</form>
		<?php if (isset($_GET['ok'])) {
			echo "<h3>Unidad cargada con éxito.</h3>";
			}
		?>
	</section>

	<aside>
    	<?php include("ver_clases.php"); ?>
    </aside>

	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>