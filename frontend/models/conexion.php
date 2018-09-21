<?php

class Conexion{


	public function conectar(){

		/*try{
			$dsn = "mysql:host=localhost;dbname=ecommerce";
			$dbh = new PDO($dsn, "xose", "catalina");
		}catch(PDOException $e){
			echo $e->getMessage();
		}		
		*/
		$link = new PDO("mysql:host=localhost;dbname=ecommerce", 
						"xose",
						"catalina",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
							  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);


		return $link;
		//return $dbh;
	}

}

