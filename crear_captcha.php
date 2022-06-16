<?php
//crear código captcha de 6 dígitos

function txt_captcha(){
	$caracteres = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz#$?%+-*/";
	$codigo = '';

	for ($i=0; $i<6 ; $i++) { 
		$codigo .= $caracteres[rand(0,69)];
	}
	return $codigo;
}

$_SESSION['captcha'] = txt_captcha();

?>