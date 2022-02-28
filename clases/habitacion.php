<?php
//Clase habitacion
class Habitacion{
    private $codigo;
    private $nombre;
    private $precio;
    //Constructor
    function __construct($cod, $nom, $pre){
        $this-> codigo = $cod;
        $this-> nombre = $nom;
        $this-> precio = $pre;
    }
    public function setCodigo($value){$this->codigo=$value;}
    public function getCodigo(){return $this->codigo;}

    public function setNombre($value){$this->nombre=$value;}
    public function getNombre(){return $this->nombre;}

    public function setPrecio($value){$this->precio=$value;}
    public function getPrecio(){return $this->precio;}
}

?>