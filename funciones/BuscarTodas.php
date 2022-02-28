<?php

function mostrarTodos(){
    //$xmlDoc = new DOMDocument();
    //$xmlDoc->load("precios.xml");
    //$elementos = $xmlDoc->getElementsByTagName('habitacion');


    include "clases/conexion.php";
    $conexion = new Conexion();
    $conn = $conexion->getConexion();
    $query = "SELECT * FROM habitacion" ;
    $sentencia = $conn->prepare($query);
    //$sentencia->bindParam(1, $valor);
    $sentencia->execute();

    //Crear array de objetos
    $arrElementos = array();

    //Recorrer el array
    foreach($sentencia as $fila){
        $codigo = $fila['codigo'];
        $habitacion = $fila['nombre'];
        $precio = $fila['precio'];
        array_push($arrElementos, [$codigo, $habitacion, $precio]);
        echo "<tr class='celda'><td>00".$codigo."</td>"."<td>".$habitacion."</td>"."<td>$ ".$precio."</td></tr>";
    }

    if($arrElementos != null){
        echo "<p style='color: black;'>Ella array ha sido exportado y posee ".count($arrElementos)." elementos</p>";
    }else{
        echo "<p style='color: black;'>El array no se ha podido generar..</p>";
    }
    return $arrElementos;
}
?>
