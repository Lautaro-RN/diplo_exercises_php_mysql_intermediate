<?php
//generar img con datos tomados del archivo crear_captcha.php

session_start();
header("Content-type: image/jpeg");

$imagen_cap = imagecreate(100, 30);
$cfondo = imagecolorallocate($imagen_cap, 113, 47, 42);
$ctexto = imagecolorallocate($imagen_cap, 220, 220, 220);
imagestring($imagen_cap, 5, 26, 7, $_SESSION['captcha'], $ctexto);
imagejpeg($imagen_cap);

?>