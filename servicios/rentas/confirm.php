<?php
    session_start();
    $response=new stdClass();
    include_once('../_conexion.php');
    $codusu=$_SESSION['DNI'];
    $fechaini=$_POST['fechaini'];
    $fechafin=$_POST['fechafin'];
    $sql="UPDATE reserva SET fecha_i_r='$fechaini',fecha_f_r='$fechafin'";
    $result=mysqli_query($con,$sql);
        if($result){
        $response->state=true;
        $response->detail="Auto agregado";
    }else{
        $response->state=false;
        $response->detail="No se pudo actualizar la reserva. Intente mas tarde";
    }
    mysqli_close($con);
    header('Content-Type: application/json');
    echo json_encode($response);