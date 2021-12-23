<?php
include ('../_conexion.php');
$response=new stdClass();

$datos=[];
$i=0;
$sql="select * from reserva res 
inner join coches ch
on res.nm=ch.nm
inner join modelos ml
on ch.mo=ml.mo
where ch.estado > 0";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
    $obj=new stdClass();
    $obj->marca=$row['marca'];
    $obj->mo=$row['mo'];
    $obj->nm=$row['nm'];
    $obj->DESCR=$row['DESCR'];  
    $obj->pr=$row['pr'];
    $obj->fecha_i_r=$row['fecha_i_r'];
    $obj->fecha_f_r=$row['fecha_f_r'];
    $obj->cr=$row['cr'];
    $obj->imagen=$row['imagen'];
    $datos[$i]=$obj;
    $i++;
}
$response->datos=$datos;

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);