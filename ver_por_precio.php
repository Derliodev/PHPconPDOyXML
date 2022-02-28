<?php
include "funciones/BuscarPorPrecio.php";
include "clases/habitacion.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar por precios</title>
</head>
<body>

<?php 
porPrecio();
?>

<br><br>
<a href="inicio.php" target="self">VOLVER</a>
    
</body>
</html>