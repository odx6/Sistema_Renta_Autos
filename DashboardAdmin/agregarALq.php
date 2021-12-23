
<?php
include_once "bd.php";

$ca = $_POST["ca"];
$fechai = $_POST["fechai"];
$fechaf = $_POST["fechaf"];
$dni = $_POST["dni"];
$co = $_POST["co"];
$nm = $_POST["nm"];
$cr = $_POST["cr"];

$sentencia = $base_de_datos->prepare("INSERT INTO alquiler(ca, fecha_i_a, fecha_f_a ,dni ,co ,  nm, cr) VALUES (?,?, ?, ?, ?,?,?);");
$resultado = $sentencia->execute([ $ca,$fechai, $fechaf, $dni, $co, $nm, $cr]);

if($resultado === TRUE){
	header("Location: alquilar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";

?>