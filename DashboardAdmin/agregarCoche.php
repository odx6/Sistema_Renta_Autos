
<?php
include_once "bd.php";

$numero_matricula = $_POST["matricula"];
$color = $_POST["color"];
$km = $_POST["km"];
$modelo = $_POST["modelo"];
$estado = $_POST["estado"];
$descripcion = $_POST["descripcion"];
$marcas = $_POST["marca"];
$imagen = $_POST["imagen"];

$sentencia = $base_de_datos->prepare("INSERT INTO coches(nm, color, km,mo,estado,  descr,marca,imagen) VALUES (?,?, ?, ?, ?, ?,?,?);");
$resultado = $sentencia->execute([$numero_matricula, $color,$km, $modelo, $estado, $descripcion, $marcas, $imagen]);

if($resultado === TRUE){
	header("Location: Coches.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";

?>