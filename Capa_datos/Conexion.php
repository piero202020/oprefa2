<?php



class Conexion
{
	private $connect = '';

	function __construct()
	{
		$this->database_connection();
	}
	 
     
	function database_connection()
	{
		$this->connect = new PDO("mysql:host=localhost;dbname=bdhistorial", "root", "");
	}
     
}

?>