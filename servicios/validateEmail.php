<?php
include('_conexion.php');
$CORREO=$_POST['CORREO'];
$sql2="SELECT 'CORREO' FROM cliente WHERE CORREO='$CORREO'";
$result=mysqli_query($con,$sql2);;
$count=mysqli_num_rows($result);
if($count==0 && filter_var($CORREO, FILTER_VALIDATE_EMAIL)){
    echo ' no Registrado';
}else{echo 'EL correo ya se encuentra registrado !';}
?>