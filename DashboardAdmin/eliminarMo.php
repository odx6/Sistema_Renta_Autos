<?php
    include_once "bd.php";
    /*EliminarProducto($_GET['nm']);*/
    $mo=$_GET['mo'];
    
     
    $sentencia = $base_de_datos->prepare("DELETE FROM modelos WHERE mo = ?;");
    $resultado = $sentencia->execute([$mo]);

    if($resultado === false){
        echo "El auto no se puede eliminar, porque esta en uso";
        
        exit;

    }
    ?>

    <script type="text/javascript">
        alert("Producto Eliminado exitosamente");
        window.location.href='Coches.php';

    </script>
