<?php 

class Conexion{


	static public function conectar(){

		#PDO("nombre del servidor; nombre de la base de datos", "usuario", "contraseña")

		$link = new PDO("mysql:host=89.46.111.248;dbname=Sql1644130_1", 
			            "Sql1644130", 
			            "Carlos227567@@");

		$link->exec("set names utf8");

		return $link;

	}

}
