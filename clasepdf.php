<?php

require('fpdf184/fpdf.php');

class PDF extends FPDF {//nueva clase que hereda de FPDF
	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Courier','',10);
		$this->Cell(0,10,$this->PageNo()." / {nb}",0,0,'L');//Se muestra el número de página en formato 'P Actual/Total Ps'
	}
}

?>