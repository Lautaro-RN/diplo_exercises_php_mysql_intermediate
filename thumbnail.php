<?php

$img_original = 'unidad4.jpg';//Llamar archivo original
$org = @imagecreatefromjpeg($img_original);//Crear copia de la img

$ancho = 150;
$alto = 150;
$img_ancho = imagesx($org);
$img_alto = imagesy($org);//Definir vars de ancho y alto

$mini = imagecreate($ancho, $alto);//Crear imagen vacía de destino

imagecopyresized($mini, $org, 0, 0, 0, 0, $ancho, $alto, $img_ancho, $img_alto);
//Copiar imagen original entera. Escalar tamaño al tn

imagejpeg($mini);//Guardar tn

imagedestroy($org);//Limpiar memoria

?>