<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>U8</title>
  	<link rel="stylesheet" href="estilos.css">
</head>
<!--
	Archivos utilizados en el ejercicio:
		crearpdf.php: resolución del submit y generación pdf;
		clasepdf.php: nueva clase 'PDF' hija de 'FPDF';
		fpdf184/fpdf.php: clases y métodos de la librería fpdf;
		estilos.css: diseño gráfico y presentación de unidad8.php;
-->
<body>
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
		<nav> <?php include("botonera.php");?> </nav>
	</header>
	<section>
		<h2>Creación de documento .pdf</h2>

		<form method="POST" action="crearpdf.php" target=”_blank”>
			<ul class="formularios">
			<li><label><h3>Nombre de Autor: </h3></label><input type="text" name="nombre"></li>
			<li><label><h3>Título:</h3></label>
			<textarea name="titulo" required cols="65" rows="1"></textarea></li>
			<li><label><h3>Escriba el texto:</h3></label>
			<textarea name="texto" required cols="65" rows="10"></textarea></li>
			<li><input type="submit" target="_blank" name="crear" class="btn_send" value="CREAR PDF"></li>
			</ul>
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