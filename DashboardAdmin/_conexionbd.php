<?php
    //$con=mysqli_connect('localhost','root','','sistema_renta');
    $con=mysqli_connect('localhost','root','@12345678','autos_renta',3307);
    if ($con->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }