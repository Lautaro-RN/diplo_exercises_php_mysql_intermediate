<?php

$original = 'paisaje.jpg';
$watermark = 'marca.png';//se llaman los archivos de imagen a usar
$img_original = imagecreatefromjpeg($original);
$img_marca = imagecreatefrompng($watermark);//se declaran las img como $var

$tamaño = getimagesize($original);//tomo datos de tamaño de la imagen a modificar
$ancho = $tamaño[0];
$alto = $tamaño[1];

if ($ancho >= $alto) {//1er caso: se aplica la marca H2O por el eje X
	for ($i=0; $i<$ancho; $i+=300){ 
		$j=$i;
		imagecopy($img_original, $img_marca, ($i+300), ($j+300), 0, 0, imagesx($img_marca), imagesy($img_marca));
}
}else{//2do caso: se aplica la marca H2O por el eje Y
	for ($j=0; $j<$alto; $j+=300) {
		$i=$j;
		imagecopy($img_original, $img_marca, 300, ($j+300), 0, 0, imagesx($img_marca), imagesy($img_marca));
}
}

header("Content-type: image/jpeg");//se establece este archivo como imagen jpeg
imagejpeg($img_original);//se guarda y muestra la img creada
imagedestroy($img_marca);//se limpia la memoria de var ya usadas

?>