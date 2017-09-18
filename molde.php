<?php 

abstract class Molde{}
abstract public function ingresa();
abstract public function obtener();

}


/**
* 
*/
class Persona extends Molde
{
	private $mensaje = "hola";
	public function mostrar(){
		print $this-> mensaje;
	}
	
	public function ingresa(){

	}

	public function obtener(){
		
	}
}


$obj = new Persona();
$obj->mostrar();
 ?>