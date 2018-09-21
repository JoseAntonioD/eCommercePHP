<?php   

require_once "conexion.php";

class ModeloPlantilla{

	//Método estático porque recibe parámetros.
	static public function mdlEstiloPlantilla($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		
		$stmt -> execute();


		return $stmt -> fetch();

		$stmt -> close();

	}


}
