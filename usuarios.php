<?php

class Usuario {

	private $nombre;
	private $apellido;
	private $edad;//propiedades private no pueden accederse por fuera de la clase
	
	function __construct($no, $ap, $ed)	{//método constructor de objetos
		$this->nombre = $no;
		$this->apellido = $ap;
		$this->edad = $ed;
	}

	public function imprime_caracteristicas() {//método que muestra las propiedades de un objeto
		echo '<div class="usuarios_nuevos">';
		echo "<h4>Nombre: ".$this->nombre."</h4>";
		echo "<h4>Apellido: ".$this->apellido."</h4>";
		echo "<h4>Edad: ".$this->edad."</h4></div>";
	}

}

?>