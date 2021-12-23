<?php
include_once "bd.php";

$modelo = $_POST["modelo"];
$potencia = $_POST["potencia"];
$marca = $_POST["marca"];
$precio = $_POST["precio"];

$sentencia = $base_de_datos->prepare("INSERT INTO modelos(mo, po, ma,pr) VALUES (?,?, ?, ?);");
$resultado = $sentencia->execute([ $modelo,$potencia, $marca, $precio]);

if($resultado === TRUE){
	header("Location: Coches.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";

?>