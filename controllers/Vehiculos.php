<?php

class VehiculosController {
    
    public function index(){
        require_once "models/Vehiculosmodel.php"; //agregar un script y si ya existe no agregarlo 2 veces
        $vehiculos = new Vehiculosmodel();
        $data["titulo"] ="Vehiculos";
        $data["vehiculos"] = $vehiculos->get_vehiculos();

        require_once "views/vehiculos.php";
    }
    public function nuevo(){
           $data["titulo"] ="Vehiculos";
           require_once "views/vehiculos_nuevo.php";
}
}

?>
