<?php

include ("recursos_conexion_poo.php");

$carr->agregarProducto($_GET['codigo'], $_GET['producto'], $_GET['descripcion'], $_GET['precio']);

header("Location: unidad7.php?ok");

?>