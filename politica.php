<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/f059f01114.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type= "text/css" href="css/stylefoot.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <title>Politicas de Privacidad</title>
</head>
<body> 
    <!--Header de la pagina web-->
    <header>
        <div class="logo-place"><img src="assets/logo.png"></div>
        <div class="search-place">
            <input type="text" id="idbusqueda" placeholder="¿Qué automovil buscas?">
            <button class="btn-main btn-search"><i class="fas fa-search"></i></button>
        </div>
        <div class="option-place">
        <?php
            if (isset($_SESSION['DNI'])) {
                echo '<div class="item-option" onclick="mostrar_opciones()"><i class="far fa-user-circle"></i><p>'.$_SESSION['NOM'].'</p></div>';
            }else {
            ?>
            <div class="item-option" title="Registrarse"><a href="registrarvista.php"><i class="far fa-user-circle"></i></div>
            <div class="item-option" title="Ingresar"><a href="loginvista.php"><i class="fas fa-sign-in-alt"></i></a></div>
            <?php
            }
            ?>
            <div class="item-option" title="Mi auto"><i class="fas fa-car"></i></div>
        </div>
    </header>
    <div class="title-section">Políticas de Privacidad </div>
    <!--imagen-->
    <section class="home" id="home">
        <img data-speed="5" class="home-parallax" src="assets/privacidad.jpg" alt="">
    </section>
    <!--Contenido-->
    <div class="content-pagePP">
        <h3 class="styleh3"> AVISO DE PRIVACIDAD</h3>
        <p class="paragraph">En cumplimiento a la Ley Federal de Protección de Datos Personales en Posesión de los Particulares
                      le informa que Alamo Oaxaca es responsable de sus datos personales.
                      El "Usuario" podrá contactar a  la empresa Alamo Oaxaca en cualquier momento a través de nuestro
                      correo electrónico alamo@gmail.com o al telefono 951 290 31 18, o directamente en la calle 
                      Matamoros 203-A,Oaxaca 68000. Protegemos y salvaguardamos sus datos personales para evitar el daño,
                      pérdida, destrucción, robo, extravío, alteración, así como el tratamiento no autorizado de sus
                      datos personales. </p>

        <h3 class="styleh3"> DATOS PERSONALES</h3>
        <p class="paragraph">La información que el usuario prop orcione, deberá ser siempre verdadera y completa. La empresa 
                      Alamo Oaxaca no será responsable de la veracidad de los mismos. 
                      La información solicitada al usuario en el sitio de la empresa Alamo es la siguiente:  
                      Licencia de conducir vigente, credencial para votar del INE, Pasaporte o documento, migratorio
                      vigente, Edad. Sus datos personales serán tratados con base a en los principios de licitud,
                      consentimiento, información, calidad, finalidad, lealtad, proporcionalidad y responsabilidad en 
                      ltérminos de la Legislación. Se mantendrá la confidencialidad de sus datos personales estableciendo y 
                      manteniendo de forma efectiva las medidas de seguridad administrativas, técnicas y físicas,
                      para evitar su daño, pérdida, alteración, destrucción, uso, acceso o divulgación indebida.</p>
    
        <h3 class="styleh3"> TRANSFERENCIA DE DATOS</h3>
        <p class="paragraph">El usuario o titular de los datos personales, autoriza a la empresa Alamo; a transferir los datos
                      proporcionados por él a terceros, que con motivo de la relación comercial lo requieran para entero  
                      cumplimiento del negocio; asimismo podrá transferirlos a instituciones financieras de banca múltiple 
                      para contacto y comercialización de sus productos o servicios financieros.</p>
    </div>   
    <!--Footer de la pagina web--> 
    <footer>
        <div class="footer-container">
            <div class="footer-content-container">
                <h3 class="website-logo">Alamo</h3>
                <span class="footer-info">951 290 31 18</span>
                <span class="footer-info">alamo@gmail.com</span>
            </div>
            <div class="footer-menus">
                <div class="footer-content-container">
                    <span class="menu-title">menu</span>
                    <a href="index.php" class="menu-item-footer">Home</a>
                <!-- <a href="" class="menu-item-footer">Courses</a>-->
                    <a href="sobreNosotros.php" class="menu-item-footer">Sobre Nosotros</a>
                </div>
                <div class="footer-content-container">
                    <span class="menu-title">legal</span>
                    <a href="politica.php" class="menu-item-footer">Politica de Privacidad</a>
                    <a href="" class="menu-item-footer">Cookies</a>
                    <a href="terminos.php" class="menu-item-footer">Terminos y condiciones</a>
                </div>
            </div>

            <div class="footer-content-container">
                <span class="menu-title">Siguenos</span>
                <div class="social-container">
                    <a href="https://www.facebook.com/AlamoRentACar" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/alamorentacar/" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/Alamo" class="social-link"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright-container">
            <span class="copyright">&copy;2021, Derechos Reservados Equipo 6</span>
        </div>
    </footer>  
    <script type="text/javascript">
        function mostrar_opciones(){
            if(document.getElementById("ctrl-menu").style.display=="none"){
                document.getElementById("ctrl-menu").style.display="block";
            }else{
                document.getElementById("ctrl-menu").style.display="none";
            }
            
        }
    </script>
    <div class="menu-opciones" id="ctrl-menu" style="display: none;">
        <ul>
            <li>
                <a href="_logout.php">
                    <div class="menu-opcion">Cerrar sesión</div>
                </a>
            </li>
        </ul>
    </div>             
</body>
</html