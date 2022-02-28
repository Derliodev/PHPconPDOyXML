<?php
include "funciones/BuscarTodas.php"

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos los Precios</title>
    <style>
        body{
            color: white;
        }
        table{
            text-align: center;
            background-color: red;
        }
        tr{
            background-color: red;
            height: 50px;
        }
    </style>
</head>
<body>
    <table border="1"  cellpadding="10" cellspacing="0" bordercolor="#000000">
        <tr>
            <th>CODIGO</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
        </tr>
        <?php mostrarTodos(); ?>    
    </table>
    <br>
    <a href="inicio.php" target="self">VOLVER</a>
</body>
</html>