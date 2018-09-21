<?php


class ControladorPlantillaClase{

	/* LLAMAMOS A LA PLANTILLA	 */

    public function plantilla(){

        include "views/plantilla.php";
    }

    /*  TRAEMOS LOS ESTILOS DINÁMICOS DE LA PLANTILLA */


    public function ctrEstiloPlantilla(){


    	$tabla = "plantilla";

    	$respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

    	return $respuesta;


    }

    public function proba(){


        
        return "Return dende o método PROBA.";


    }
}
