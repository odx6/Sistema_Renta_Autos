<?php
include ('../_conexion.php');
$response=new stdClass();

$datos=[];
$i=0;
$sql="select * from coches ch
inner join modelos ml
on ch.mo=ml.mo
where ch.estado > 0";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
    $obj=new stdClass();
    $obj->nm=$row['nm'];
    $obj->color=$row['color'];
    $obj->km=$row['km'];
    $obj->mo=$row['mo'];
    $obj->estado=$row['estado'];
    $obj->DESCR=$row['DESCR'];
    $obj->marca=$row['marca'];
    $obj->imagen=$row['imagen'];
    $obj->pr=$row['pr'];
    $datos[$i]=$obj;
    $i++;
}
$response->datos=$datos;

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);