<?php
//Crear una clase producto que tenga  como propiedades o atributos los datos asociados al producto: código, producto, descripción y precio.

class Producto {
	private $bdd;
	public $codigo;
	public $producto;
	public $descripcion;
	public $precio;

	function __construct($base)
	{
		$this->bdd = $base;
	}

	public function traerProducto()
	{
		$respuesta = $this->bdd->consultasQuery("SELECT * FROM productos");
		return $respuesta;
	}
/*
	public function insertarProducto()
	{

	}

	public function modificarProducto()
	{
		
	}

	public function eliminarProducto()
	{
		
	}
*/
}

?>