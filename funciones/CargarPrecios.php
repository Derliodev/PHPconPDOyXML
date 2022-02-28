<?php

function mostrar(){
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("precios.xml");
    $elementos = $xmlDoc->getElementsByTagName('habitacion');
    $arrElementos = array();

    foreach($elementos as $elemento){
        $precio = $elemento->getElementsByTagname('precio')->item(0)->nodeValue;
        array_push($arrElementos, $precio);
        echo"<option value='".$precio."'>".$precio."</option>\n";
    }
    return $arrElementos;
}

?>