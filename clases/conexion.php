<?php

//Clase conexiones
class Conexion{
    //Variable global
    private $conexion;
        //Constructor
        function __construct(){
            $this -> conexion = new PDO('mysql:host=localhost;dbname=dbmira', 'root', '');
        }
        //Accesador
        public function getConexion(){
            return $this -> conexion;
        }
}
?>