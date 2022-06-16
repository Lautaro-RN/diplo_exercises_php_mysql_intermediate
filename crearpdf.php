<?php

include("clasepdf.php");

date_default_timezone_set("America/Argentina/Buenos_Aires");
$fechahoy=date('d-m-Y', time());//Se define la hora actual
$authors_name = $_POST['nombre'];
$title = $_POST['titulo'];
$txt_to_convert = $_POST['texto'];//Se reciben los datos del formulario

$nuevo_pdf = new PDF();//creación de objeto 'PDF'
	
	$nuevo_pdf->addPage('', 'A4');
 			
 		$nuevo_pdf->SetMargins(20, 20, 20);
 		$nuevo_pdf->SetFont('Courier', '', 11);
 		$nuevo_pdf->SetTitle($title, true);
		$nuevo_pdf->Cell(0, 10, $fechahoy." - ".$title, 0, 0, 'R');
		$nuevo_pdf->ln();

		$nuevo_pdf->SetFont('Arial', 'I', 19);
		$nuevo_pdf->Cell(100, 10, $title);
		$nuevo_pdf->ln();
		$nuevo_pdf->SetFont('Arial', '', 17);
		$nuevo_pdf->Cell(100, 10, "Escrito por ".$authors_name);
		$nuevo_pdf->ln(15);

		$nuevo_pdf->SetFont('Arial', '', 13);
		$nuevo_pdf->Write(10, $txt_to_convert);//Se transcriben los datos recibidos y se formatean para el pdf

		$nuevo_pdf->AliasNbPages();//Esta función guarda el dato del total de páginas del documento

	$nuevo_pdf->OutPut('I', 'nota.pdf', true);//Valores que toma el archivo al guardarlo / descargarlo

?>