<?php

include("conexion.php");

$consultar=mysqli_query($conexion_db, "SELECT * FROM clases");

while($row=mysqli_fetch_assoc($consultar)) { ?>
	<section class="clases_listadas">
		<h4><?php echo $row['unidad'] ?></h4>
		<h4><?php echo $row['fecha'] ?></h4>
	</section>
	
<?php }

?>