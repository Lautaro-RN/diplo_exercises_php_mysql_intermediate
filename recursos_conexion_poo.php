<?php

include ("base_poo.php");
include ("class_producto.php");
include ("class_carrito.php");

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('CLAVE', '');
define('BASE', 'phpavanzado');

$baseconectada = new BaseDeDatos(SERVIDOR, USUARIO, CLAVE, BASE);
$prod = new Producto($baseconectada);
$carr = new Carrito($baseconectada);

?>