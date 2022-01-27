<?php
include('_conexion.php');
$DNI=$_POST['DNI'];
$sql2="SELECT * FROM cliente WHERE DNI='$DNI'";
$result=mysqli_query($con,$sql2);
if($result){
    echo 'Registrado';
}else{echo 'no registrado';}
?>