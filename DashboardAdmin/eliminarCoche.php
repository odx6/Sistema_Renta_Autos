<?php
    include_once "bd.php";
    /*EliminarProducto($_GET['nm']);*/
    $nm=$_GET['nm'];
    
    
    //$sentencia= "DELETE FROM coches WHERE nm=".$nm."";
     
    $sentencia = $base_de_datos->prepare("DELETE FROM coches WHERE nm = ?;");
    $resultado = $sentencia->execute([$nm]);

   /* if($resultado === TRUE){
        header("Location: Coches.php");
        exit;
    }
    else echo "Algo salió mal. Por favor verifica que la tabla exista";*/
    ?>

    <script type="text/javascript">
        alert("Producto Eliminado exitosamente");
        window.location.href='Coches.php';

    </script>
