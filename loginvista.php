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
    <title>Login</title>
</head>
<body>
    <div class="logo-place"><a href="index.php"><img src="assets/logo.png"></a></div>
    <form action="servicios/login.php" method="POST" class="formulario">
        <h1>Iniciar Sesión: Cliente</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" name="NOM" placeholder="Nombre Completo">
            </div>      
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" name="CONTRASEÑA" placeholder="Contraseña">
            </div>  
            <input type="submit" value="Iniciar Sesión" class="button">
            <?php
                if (isset($_GET['e'])) {
                    switch ($_GET['e']) {
                        case '1':
                            echo '<p>Error de conexion</p>';
                            break;
                        case '2':
                            echo '<p>Nombre invalido</p>';
                            break;
                        case '3':
                            echo '<p>Contraseña incorrecta</p>';
                            break;
                        default:
                            break;    
                    }
                }
            ?>
            <p>Al registrarte, aceptas nuestras condiciones de uso y politicas
                de privacidad</p>
             <p>¿No tienes cuenta? <a href="registrarvista.php" class="link">Registrarse</a></p>
        </div>
    </form>
</body>
</html>