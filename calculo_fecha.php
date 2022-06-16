<?php

if($_POST){

	date_default_timezone_set("America/Argentina/Buenos_Aires");

	$dia_fut=$_POST['dia'];
	$mes_fut=$_POST['mes'];
	$anno_fut=$_POST['anno'];

	$fechahoy = date('d-m-Y', time());
	$fechafutura = date_create_from_format("d-m-Y","$dia_fut-$mes_fut-$anno_fut")->format("d-m-Y");

	if ($fechafutura <= $fechahoy) { ?>
		<h3> <?php echo "Por favor ingrese otra fecha. ".$fechafutura." ya pasó o no es inválido."; ?></h3> <?php
	} else{
		$diasrestantes = strtotime($fechafutura) - strtotime($fechahoy);
		$conversion = intval($diasrestantes/86400); ?>

		<h3> <?php echo "Faltan ".$conversion." días para el ".$fechafutura."."; ?></h3>
	<?php }		

 }

?>