<?php
include('_conexion.php');
$DNI=$_POST['DNI'];
$sql2="SELECT 'DNI' FROM cliente WHERE DNI='$DNI'";
$result=mysqli_query($con,$sql2);;
$count=mysqli_num_rows($result);
if($count==0){
    echo ' no Registrado';
}else{echo 'La curp ya se encuentra registrada';}
?>