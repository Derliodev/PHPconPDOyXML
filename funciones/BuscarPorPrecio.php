
<?php 
    function porPrecio(){
        
        $fila = null;
        $valor = $_POST['precio'];
        $arrElementos = array();
        
        try {
            
            include "clases/conexion.php";
            $conexion = new Conexion();
            $conn = $conexion->getConexion();

            $query = "SELECT codigo, nombre, precio FROM habitacion Where precio = ?" ;
            $sentencia = $conn->prepare($query);
            $sentencia->bindParam(1, $valor);
            $sentencia->execute();
            
            
            foreach($sentencia as $fila) {
                array_push($arrElementos, $fila['codigo']);
                echo "Codigo: 00".$fila['codigo']."<br/>";
                array_push($arrElementos, $fila['nombre']);
                echo "Nombre: ".$fila['nombre']."<br/>";
                array_push($arrElementos, $fila['precio']);
                echo "Precio: $".$fila['precio']."<br/>";
                echo "<br/>";
            }

            //$result = $sentencia->fetch(PDO::FETCH_OBJ);
            //array_push($arrElementos, $result->codigo);
            //array_push($arrElementos, $result->nombre);
            //array_push($arrElementos, $result->precio);
            
            if ($fila == null) {
                echo "No se encontraron habitaciones con el precio: $" . $valor;
                echo "<br>El array no se generó";
            }if($arrElementos != null){
                echo "Ella array ha sido exportado y posee ". count($arrElementos)." elementos";
            }
            return $arrElementos;       
        }
        catch (PDOException $e){
            echo "¡Error!: " . $e->getMessage();
            die();
        }
    }
?>
