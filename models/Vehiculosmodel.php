
<?php
// class Vehiculosmodel{
//     private $db;
//     private $vehiculos;

//     public function _contruct() {
//         $this-> db = Conectar:: conexion();
//         $this->vehiculos = array();

//     }
// public function get_vehiculos(){
// $sql = "SELECT* FROM vehiculos";
// $resultado = $this->db->query($sql);
// while($row = $resultado->fetch_assoc())
// {
//     $this-> vehiculos [] = $row;
// }
// return $this-> vehiculos;
// }

// public function insertar($placa,$marca,$modelo,$anio,$colot){
//     $resultado = $this->db -> query("INSERT INTO vehiculos('placa,marca,modelo,anio,color')VALUES('$placa','$marca','$modelo','$anio','$color')");
// }

// }

class Vehiculosmodel
{

    private $db;
    private $vehiculos;

    public function __construct()
    { //metodo constructor
        $this->db = Conectar::conexion();
        $this->vehiculos = array();
    }
    public function get_vehiculos()
    {
        $sql = "SELECT * FROM vehiculos";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->vehiculos[] = $row;
        }
        return $this->vehiculos;
    }

    public function insertar($placa,$marca,$modelo,$anio,$colot){
    $resultado = $this->db -> query("INSERT INTO vehiculos('placa,marca,modelo,anio,color')VALUES('$placa','$marca','$modelo','$anio','$color')");
}
}

?>

