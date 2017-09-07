<?php 

class vehiculo{

	public $motor = false;
	public $marca;

	public function estado(){
		if(this->motor){
			echo "encendido";
		}
	}


	$vehiculo = new vehiculo();
}


class Moto extends vehiculo{

}

$moto = new Moto();
$moto-> estado();

 ?>