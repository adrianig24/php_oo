<?php 


trait Perspna {
	public $nombre;
	public function mostrarNombre(){
		echo $THIS->NOMBRE;
	}

abstract function asignarNombre($nombre);

}

class Persona2{

	use Persona;
	public function asignarNombre($nombre){
		$persona = new Persona();
		$persona->asignarNombre("adri");


	}

 ?>