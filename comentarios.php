<?php

$guardado = 'comentarios.txt'; //declarar var del archivo .txt
if (!file_exists($guardado)) { //si el archivo no existe...
	$archivo = fopen('comentarios.txt', 'a');//... se crea
}

if ($_POST) {

	date_default_timezone_set("America/Argentina/Buenos_Aires");
	$fechahoy=date('h:i:m d-m-Y', time()); //se establece hora de publicación del comentario

	$nom_ape = $_POST['nya'];
	$correo = $_POST['correo'];
	$coment = $_POST['coment'];//se reciben los datos POST

	$archivo = fopen('comentarios.txt', 'a');//abrir archivo/mod a
	$datos_txt = '<h4>'.$fechahoy.'</h4> <h3><strong>'.$nom_ape.'</strong></h3> <h3>'.$correo.'</h3> <h3>'.$coment.'</h3>'.'<br>'; //cargar textos como una cadena concatenada

	$archivo = fopen("comentarios.txt", "c");//cambio mod c
	$tomar_cont = file_get_contents("comentarios.txt");//se convierte el contenido de .txt en una var string
	$mostrar = $datos_txt.$tomar_cont;//reordenamiento de los datos
	fputs($archivo, $mostrar);//se escribe en el .txt
	fclose($archivo);//cierre
		
	}

	$archivo = fopen('comentarios.txt', 'r'); //abrir modo lectura
	fpassthru($archivo);//leer archivo
	while (!feof($archivo)) { //mientras no se termine el .txt...

		echo "<p>".fgetc($archivo)."</p>";//...se imprime texto

		}
	fclose($archivo);//fin

?>