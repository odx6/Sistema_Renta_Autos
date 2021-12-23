<?php
//1: Error de conexion
//2: email invalido
//3: contraseña incorrecta
include('_conexion.php');
$NOM=$_POST['NOM'];
$sql="SELECT * FROM cliente WHERE NOM='$NOM'";
$result=mysqli_query($con,$sql);
if ($result){
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if ($count!=0) {
        $CONTRASEÑA=$_POST['CONTRASEÑA'];
        if ($row['CONTRASEÑA']!=$CONTRASEÑA) {
            header('Location: ../loginvista.php?e=3'); 
        }else {
            session_start();
            $_SESSION['DNI']=$row['DNI'];
            $_SESSION['NOM']=$row['NOM'];
            $_SESSION['CORREO']=$row['CORREO'];
            header('Location: ../index.php');
        }
    }else{
    header('Location: ../loginvista.php?e=2'); 
    }
}else{
    header('Location: ../loginvista.php?e=1');
}