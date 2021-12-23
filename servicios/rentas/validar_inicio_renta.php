<?php
    session_start();
    $response=new stdClass();
    if (!isset($_SESSION['DNI'])){
        $response->state=false;
        $response->detail="No esta logueado";
        $response->open_login=true;
    }else{
        include_once('../_conexion.php');
        $codusu=$_SESSION['DNI'];
        $codau=$_POST['nm'];
        $sql="INSERT INTO reserva 
        (cr,fecha_i_r,fecha_f_r,co,nm,dni)
        VALUES
        (1234,'','',2,'$codau','$codusu')"; 
        $result=mysqli_query($con,$sql);
        if($result){
            $response->state=true;
            $response->detail="Auto agregado";
        }else{
            $response->state=false;
            $response->detail="No se pudo agregar auto. Intente mas tarde";
        }
        mysqli_close($con);
    }
   
    header('Content-Type: application/json');
    echo json_encode($response);