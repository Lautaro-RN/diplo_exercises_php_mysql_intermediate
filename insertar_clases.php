<?php

include("conexion.php");

$unidad_bd = $_POST['unidad'];
$fecha_bd = $_POST['fecha'];

mysqli_query($conexion_db, "INSERT INTO clases VALUES (DEFAULT, '$unidad_bd', '$fecha_bd')");

header("Location:unidad1.php?ok");

?>