<?php

Class conexion{
	private $usuario;
	private $clave;	
	private $server;
	private $nombreBD;

	function __construct(){
		/*$this->usuario = "u717209614_D7VnR";
		$this->clave ="Kv+jS1Uy?";
		$this->server ="localhost";
		$this->nombreBD = "u717209614_CHKQI";*/

		$this->usuario = "root";
		$this->clave ="";
		$this->server ="localhost";
		$this->nombreBD = "mak";

		// $this->usuario = "root";
		// $this->clave ="";
		// $this->server ="localhost";
		// $this->nombreBD = "u717209614_CHKQI";
	}

	function abrirConexion(){
		$cadena = mysqli_connect($this->server, $this->usuario, $this->clave,$this->nombreBD);

		if($cadena){
			return $cadena;

		}else{
			return mysqli_errno($cadena);
		}
	}

	function cerrarConexion($cadena){
		mysqli_close($cadena);
		$cadena=null;
	}
}

?>
