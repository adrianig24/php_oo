<?php 

interface Auto{
	public function encender();
	public function apagar();
}

interface gasolina extends Auto{
	public function vaciar();
	public function llenar();
}

class Deportivo implements gasolina{
public function ver(){
	
}
}



 ?>