<?php
//1: Error de conexion
//2: email invalido
//3: contraseña incorrecta
include('_conexionbd.php');
$NOM=$_POST['NOM'];
$sql="SELECT * FROM empleados WHERE nombre='$NOM'";
$result=mysqli_query($con,$sql);
if ($result){
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if ($count!=0) {
        $CONTRASEÑA=$_POST['CONTRASEÑA'];
        if ($row['password']!=$CONTRASEÑA) {
            header('Location: ../loginvista.php?e=3'); 
        }else {
            session_start();
            $_SESSION['DNI']=$row['idE'];
            $_SESSION['NOM']=$row['nombre'];
            $_SESSION['CORREO']=$row['email'];
            header('Location: dashboard.html');
        }
    }else{
    header('Location: ../loginvista.php?e=2'); 
    }
}else{
    header('Location: ../loginvista.php?e=1');
}