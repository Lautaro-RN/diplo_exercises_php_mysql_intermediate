<?php
//Verificar el código del Captcha. Cargar datos en la tabla "consultas".

session_start();

if ($_POST['cap']==$_SESSION['captcha']) {
	include ("conexion.php");
	$nom=$_POST['nombre'];
	$ape=$_POST['apellido'];
	$ema=$_POST['email'];
	$con=$_POST['consulta'];
	mysqli_query($conexion_db,"INSERT INTO consultas VALUES (DEFAULT, '$nom', '$ape', '$ema', '$con')");
	header("Location:unidad5.php?ok");
} else {
	header("Location:unidad5.php?error");
}

?>