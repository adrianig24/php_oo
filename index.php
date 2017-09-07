<?php 
/**
*  
*/
class Persona
{
	
public $nombre = array();
public $apellido= array();

public function guardar($nombre,$apellido){
this-> nombre[] = $nombre;
this-> apellido[] = $apellido;
$this->mostrar();
//self::mostrar();
}

private function mostrar(){

}


public function __construc($nombre,$apellido){
$this-> nombre[] = $nombre;
$this-> apellido[] = $apellido;
}

public __destruct(){

}

$Persona=new Persona();
echo $Persona->nombre;

$Persona-> guardar("adri","iglesias");


 ?>