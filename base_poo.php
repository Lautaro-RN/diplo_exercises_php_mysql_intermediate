<?php
class BaseDeDatos
{	

	private $conexion;
	
	function __construct($servidor, $usuario, $clave, $nombrebase)
	{
		$this->conexion = new mysqli($servidor, $usuario, $clave, $nombrebase);
	}

	function __destruct()
	{
		$this->conexion-> close();
	}

	public function consultasQuery($sql)
	{
		$comando = strtoupper(substr($sql, 0,6));

		switch ($comando) {
			case 'INSERT':
				$resultado = $this->conexion->query($sql);
			case 'SELECT':
				$resultado = $this->conexion->query($sql);
				$mostrar_datos = [];				
					while ($array = $resultado->fetch_assoc()) {
						$mostrar_datos[] = $array;
					}
					return $mostrar_datos;
					break;
			case 'UPDATE':
			case 'DELETE':
				$resultado = $this->conexion->query($sql);
				break;						
		}
	}

}
?>