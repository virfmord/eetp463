<?php
//Configuración global
require_once 'Configuracion/global.php';
 
//Base para los controladores
require_once 'Logica/ControladorBase.php';
 
//Funciones para el controlador frontal
require_once 'Logica/ControladorFrontal.func.php';
 
//Cargamos controladores y acciones
if(isset($_GET["controller"])){
    $controllerObj=cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObj);
}else{
    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
    lanzarAccion($controllerObj);
}
?>
