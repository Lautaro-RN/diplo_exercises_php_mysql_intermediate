<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>U7</title>
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
		<h2>Compras</h2>

			<?php

				include ("recursos_conexion_poo.php");

				$mostrar_datos = $prod->traerProducto();
				for ($i=0; $i<count($mostrar_datos) ; $i++) { 
					
					?> 

	                <div class="caja_datos">
	                    <h4><?php echo("CÓDIGO: ".$mostrar_datos[$i]['codigo']) ?></h4>
	                    <h3 name="producto"><?php echo("PRODUCTO: ".$mostrar_datos[$i]['producto']) ?></h3>
	                    <h4 name="descripcion"><?php echo("DESCRIPCIÓN: ".$mostrar_datos[$i]['descripcion']) ?></h4>
	                    <h4 name="precio"><?php echo("PRECIO: $ ".$mostrar_datos[$i]['precio']) ?></h4>
	                	</br>
	                	<button method="get" action="agregar_prods_carr.php" type="submit" class="btn_send">AGREGAR AL CARRITO</button>

	                </div>

	            <?php  }
	            if (isset($_GET['ok'])){
	            	echo "<p>Se cargó en el carrito.</p>";
	            }
            ?>

		<!--
			Utilizar la tabla "productos" que se encuentra junto a la consigna.
			Crear una tabla llamada "compras" con los siguientes datos:
				codigo:  int, clave primaria
				producto: varchar(30)
				descripcion: varchar(255)
				precio: decimal (5,2)
			Construir un sistema de selección de productos orientado a objetos. Pasos a seguir:
				Crear una clase producto que tenga  como propiedades o atributos los datos asociados al producto: código, producto, descripción y precio. 
				Crear una clase carrito que tenga tres métodos asociados: introducir producto en el carrito, eliminar un producto del carrito y listar el contenido del carrito.
				El archivo unidad7.php deberá tener la lista de Productos ofrecidos con la posibilidad de poder seleccionarlos para introducirlos en el carrito.   
				Al seleccionar un producto para introducir en el carrito deberán mostrar el contenido del carrito con la posibilidad de poder seleccionar dicho producto introducido para eliminarlo del mismo.
		-->
	</section>

	<aside>
		<div class="txt_aside">
	    	<p>CARRITO</p>
	    	<p>Llevás estas compras: </p>

	    </div>
	    	<?php
		    	$mostrar_datos = $carr->mostrarProductos();
				for ($i=0; $i<count($mostrar_datos) ; $i++) { 
					
					?> 

	                <div class="caja_datos">
	                    <h4><?php echo("CÓDIGO: ".$mostrar_datos[$i]['codigo']) ?></h4>
	                    <h3 name="producto"><?php echo("PRODUCTO: ".$mostrar_datos[$i]['producto']) ?></h3>
	                    <h4 name="descripcion"><?php echo("DESCRIPCIÓN: ".$mostrar_datos[$i]['descripcion']) ?></h4>
	                    <h4 name="precio"><?php echo("PRECIO: $ ".$mostrar_datos[$i]['precio']) ?></h4>
	                	</br>
	                	<button method="get" action="" type="submit" class="btn_send">SACAR DEL CARRITO</button>
	                </div>
		    	<?php } ?>
  </aside>

	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>