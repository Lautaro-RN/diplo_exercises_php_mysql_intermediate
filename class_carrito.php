<?php

class Carrito {
	private $nuevocarrito;
	public $code;
	public $product;
	public $description;
	public $prize;

	function __construct($cart)
	{
		$this->nuevocarrito = $cart;
	}

	public function agregarProducto($producto, $descripcion, $precio)
	{
		$respuesta = $this->nuevocarrito->consultasQuery("INSERT INTO compras VALUES (DEFAULT, '$producto', '$descripcion', $precio) ");
		return $respuesta;
	}

	public function sacarProducto($code)
	{
		$respuesta = $this->nuevocarrito->consultasQuery("DELETE FROM compras WHERE codigo = $code");
		return $respuesta;
	}

	 public function mostrarProductos()
	{
		$respuesta = $this->nuevocarrito->consultasQuery("SELECT * FROM compras");
		return $respuesta;			
	}

}

?>