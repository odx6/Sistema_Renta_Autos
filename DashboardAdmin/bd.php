<?php
$contraseña = "@12345678";
$usuario = "root";
$nombre_base_de_datos = "autos_renta";
try{
	$base_de_datos = new PDO('mysql:host=127.0.0.1;port=3307;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
	$base_de_datos->query("set names utf8;");
    $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, TRUE);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(Exception $e){
	echo "Ocurrió algo
con la base de datos: " . $e->getMessage();
}
?>