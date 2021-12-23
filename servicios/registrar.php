<?php
//1: Error de conexion
//2: email invalido
//3: contraseña incorrecta

/* ==================================
    VALIDA LA EDAD
===================================*/
function edad($valor){
    if(strlen($valor)==18){ 
        $birth = intval(substr($valor, 4, 2));
        $year=date("Y");// EXTRAE EL AÑO ACTUAL
        $year1=date("y");//EXTRAE EL AÑO EN 2 DIGITOS
        $year2=100+$year1;
        $year3=$year-$year2;
        $birth2=$year3+$birth;
        $birth1=$year-$birth2;
        
        if($birth1>=18 && $birth1<=60){
            return true;
        }

        
    }
    return false;

}

/* ==================================
    VALIDA LA CURP
===================================*/
function validate_curp2($valor) {     
    $regex='/^[A-Z]{1}([AEIOU]{1})([A-Z]{2})([0-9]{2})(0[1-9]{1}|1[0-2]{1})([0-2]{1}[1-9]{1}|3(0|1))([HM]{1})(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)([B-DF-HJ-NP-TV-Z]{3})([0-9A-Z]{1})([0-9]{1}$)/';
    if(preg_match($regex, $valor)){
        return true;
    }
    return false;
 }
include('_conexion.php');
$CORREO=$_POST['CORREOR'];
$NOMR=$_POST['NOMR'];
$DNI=$_POST['CUR'];
$sql="SELECT * FROM cliente WHERE CORREO='$CORREO'";
$result=mysqli_query($con,$sql);
$sql2="SELECT * FROM cliente WHERE DNI='$DNI'";
$result2=mysqli_query($con,$sql2);
if ($result && $result2){
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    $row2=mysqli_fetch_array($result2);
    $count2=mysqli_num_rows($result2);
    if ($count==0 && $count2==0 && filter_var($CORREO, FILTER_VALIDATE_EMAIL) ) {
        
        if(validate_curp2($DNI) && edad($DNI) ){
            //puede crear un nuevo usuario
            $APELLIDO=$_POST['APR'];
            $DIRECCION=$_POST['DIR'];
            $TEL=$_POST['TER'];
            $CONTRASEÑA=$_POST['CONTRASEÑAR'];
            $CONTRASEÑA2=$_POST['CONTRASEÑA2R'];
            if ($CONTRASEÑA!=$CONTRASEÑA2) {
                header('Location: ../registrarvista.php?er=3'); 
            }else {
                $i=0;
                $sql="INSERT into cliente (DNI,NOM,APELLIDO,DIRECCION,CORREO,TEL,CONTRASEÑA)
                VALUES ('$DNI','$NOMR','$APELLIDO','$DIRECCION','$CORREO','$TEL','$CONTRASEÑA')";
                $result=mysqli_query($con,$sql);
                session_start();
                $_SESSION['DNI']=$DNI;
                $_SESSION['NOM']=$NOM;
                $_SESSION['APELLIDO']=$APELLIDO;
                $_SESSION['DIRECCION']=$DIRECCION;
                $_SESSION['CORREO']=$CORREO;
                $_SESSION['TEL']=$TEL;
                $i++;
                header('Location: ../index.php');
            }
        }else {
            header('Location: ../registrarvista.php?er=4');
        }
        
    }else{
    header('Location: ../registrarvista.php?er=2'); 
    }
}else{
    header('Location: ../registrarvista.php?er=1');
}