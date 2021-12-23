<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f059f01114.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type= "text/css" href= "css/stylelog.css">
    <title>Registrarse</title>
</head>
<body>
    <div class="logo-place"><a href="index.php"><img src="assets/logo.png"></a></div>
    <form action="servicios/registrar.php" method="POST" class="formulario">
        <h1>Registrarse</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" name="NOMR" placeholder="Nombre">
            </div>  

            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" name="APR" placeholder="Apellidos">
            </div>  

            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" name="CUR" placeholder="CURP" required>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-map-marked-alt icon"></i>
                <input type="text" name="DIR" placeholder="Dirección">
            </div>  
            
            <div class="input-contenedor">
                <i class="fas fa-mobile-alt icon"></i>
                <input type="text" name="TER" placeholder="Telefono">
            </div> 

            <div class="input-contenedor">
                <i class="far fa-envelope icon"></i>
                <input type="text" name="CORREOR" placeholder="Correo Electrónico">
            </div>  

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password"  name="CONTRASEÑAR" placeholder="Contraseña">
            </div>  
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" name="CONTRASEÑA2R" placeholder="Confirmar contraseña">
            </div>
            <input type="submit" value="Registrarse" class="button">
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
</body>
</html>