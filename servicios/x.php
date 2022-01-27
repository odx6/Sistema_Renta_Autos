<?php
include('_conexion.php');
if(isset($_POST['NOMR'])){
$NOMR=$_POST['NOMR'];

}else{
	echo 'es un errror';
}
$APELLIDO=$_POST['APR'];
$DNI=$_POST['CUR'];
$DIRECCION=$_POST['DIR'];
$TEL=$_POST['TER'];
$CORREO=$_POST['CORREOR'];
$CONTRASEÑA=$_POST['CONTRASEÑAR'];
$CONTRASEÑA2=$_POST['CONTRASEÑA2R'];
echo $DNI;
?>