<?php
     class Conectar {
         public static function conexion(){
             //$conexion = new mysqli("localhost","root","123456","tarea");
             $conexion = mysqli_connect("localhost","root","","mvc");
             return $conexion;
             
         }
     }
?>
