<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/MessageError.css">

    <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f059f01114.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type= "text/css" href= "css/stylelog.css">
    <script scr="https://code.jquery.com/jquery-3.6.0.js" type="text/javascript"></script>

    <title>Registrarse</title>
</head>
<body>
    <div class="logo-place"><a href="index.php"><img src="assets/logo.png"></a></div>
    <form action="servicios/registrar.php" method="POST" class="formulario" id="Formulario">
        <h1>Registrarse</h1>
        <div class="contenedor">
            <span class="form_incorrect" id="SpanNombre"></span>
            <div class="input-contenedor" id="Conteiner_Name">
                <i class="fas fa-user icon"></i>
                <input type="text" name="NOMR" placeholder="Nombre" id="name" required  minlength="4" maxlength="20"> 
                <i  class="form_incorrect" id="Icon"></i>
                    
            </div>  
            <span class="form_incorrect" id="SpanAP"></span>
            <div class="input-contenedor" id="Conteiner_AP">
                <i class="fas fa-user icon" ></i>
                <input type="text" name="APR" placeholder="Apellidos" id="Apellidos" class="active2" class="active" maxlength="40">
                <i  class="form_incorrect" id="Icon1"></i>
            </div>  
            
            <span class="form_incorrect" id="SpanCurp"></span>
            <div class="input-contenedor" id="Conteiner_CP">
                <i class="fas fa-user icon"></i>
                <input type="text" name="CUR" placeholder="CURP" required class="active" class="active2" id="curp" maxlength="18">
                <i  class="form_incorrect" id="Icon2"></i>
                <php

                !>
            </div>
             <span class="form_incorrect" id="SpanDC"></span>
            <div class="input-contenedor" id="Conteiner_DR">
                <i class="fas fa-map-marked-alt icon"></i>
                <input type="text" name="DIR" placeholder="Dirección" class="active" class="active2" id="direction" maxlength="50">
                <i  class="form_incorrect" id="Icon3"></i>
            </div>  
            <span class="form_incorrect" id="SpanTE"></span>
            <div class="input-contenedor" id="Conteiner_TE">
                <i class="fas fa-mobile-alt icon"></i>
                <input type="text" name="TER" placeholder="Telefono"  class="active" class="active2" id="phone" maxlength="12">
                <i  class="form_incorrect" id="Icon4"></i>
            </div> 
            <span class="form_incorrect" id="SpanCO"></span>
            <div class="input-contenedor" id="Conteiner_CO">
                <i class="far fa-envelope icon"></i>
                <input type="text" name="CORREOR" placeholder="Correo Electrónico" class="active" class="active2" id="correo" >
                 <i  class="form_incorrect" id="Icon5"></i>
            </div>  
                <span class="form_incorrect" id="SpanPS"></span>
            <div class="input-contenedor" id="Conteiner_PS">
                <i class="fas fa-key icon"></i>
                <input type="password"  name="CONTRASEÑAR" placeholder="Contraseña" class="active" class="active2" id="password">
                <i  class="form_incorrect" id="Icon6"></i>
            </div>  
            <span class="form_incorrect" id="SpanPS2"></span>
            <div class="input-contenedor" id="Conteiner_PS2">
                <i class="fas fa-key icon"></i>
                <input type="password" name="CONTRASEÑA2R" placeholder="Confirmar contraseña" class="active2" class="active" id="password2" >
                <i  class="form_incorrect" id="Icon7"></i>
            </div>
            <input type="submit" value="Registrarse" class="button" id="button">
            <?php
                if (isset($_GET['er'])) {
                    switch ($_GET['er']) {
                        case '1':
                            echo '<p>Error de conexion</p>';
                            break;
                        case '2':
                            echo '<p>El email o curp esta siendo usado por otro usuario</p>';
                            break;
                        case '3':
                            echo '<p>Las contraseñas no coinciden</p>';
                            break;
                        case '4':
                                echo '<p>La curp es invalida</p>';
                                break;
                        default:
                            break;    
                    }
                }
            ?>
            <p>Al registrarte, aceptas nuestras condiciones de uso y politicas
                de privacidad</p>
             <p>¿Ya tienes cuenta? <a href="loginvista.php" class="link">Iniciar Sesion</a></p>
        </div>
    </form>
    <script src="js/validate.js"></script>
    <
</body>
</html>