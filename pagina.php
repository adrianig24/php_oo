<?php 

class pagina{

	public $nombre = "codigo";
	public static $url = "www...com";


public function bienvenida(){

	echo "hola" . pagina::$url;
}

}

pagina = new pagina();
$pagina->bienvenida();


 ?>