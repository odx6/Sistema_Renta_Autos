
<?php
include_once "bd.php";

$id = $_POST["idE"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$tel = $_POST["tel"];
$fechan = $_POST["fechan"];
$email = $_POST["email"];
$password = $_POST["password"];

$sentencia = $base_de_datos->prepare("INSERT INTO empleados (idE, nombre, apellido,direccion,  tel,fechaNAc,email, password ) VALUES (?,?, ?, ?, ?, ?,?,?);");
$resultado = $sentencia->execute([$id, $nombre,$apellido, $direccion, $tel, $fechan, $email, $password]);

if($resultado === TRUE){
	header("Location: Empleados.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";

?>