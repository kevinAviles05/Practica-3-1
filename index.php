<?php
    require_once "config/config.php";
    require_once "core/routes.php";
    require_once "config/database.php";
    require_once "controllers/Vehiculos.php";

    $control = new VehiculosController();
    $control->index();
    // if (isset($_GET['c'])){
    //    $controlador = cargarControlador$_GET['c'];
    //    } else {
             
    //           }
    
    // }
    
?>