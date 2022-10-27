<?php
   function cargarControlador($controlador){
    
    $nombreControlador=ucwords($controlador)."controller";
    $archivoControlador = 'controllers/'.ucwords($controlador).'.php';
   //  if(!is_file$archivoConrolador)){
   //     $archivoControlador='controllers/'.CONTROLADOR_PRINCIPAL.'.php';
   //  }
    require_once $archivoControlador;
    $control = new nombreControlador();
    return $control;
   }
?>