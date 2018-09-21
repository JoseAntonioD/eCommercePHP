<?php

require_once "controllers/plantilla.controlador.php";
#require_once "controladores/productos.controlador.php";

require_once "models/plantilla.modelo.php";
#require_once "modelos/productos.modelo.php";


$plantilla = new ControladorPlantillaClase();
$plantilla -> plantilla();

