<?php

include ("usuarios.php");

if ($_POST) {

$nombre_us = $_POST['nombre_us'];
$apellido_us = $_POST['apel'];
$edad_us = $_POST['edad'];//se reciben los datos del form y se convierten en $var

$usuarionuevo = new Usuario($nombre_us, $apellido_us, $edad_us);//atributos del Usuario
$usuarionuevo->imprime_caracteristicas();//ejecuta un método

}

?>