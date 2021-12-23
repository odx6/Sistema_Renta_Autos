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

    <title>Sobre Nosotros</title>
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
    <!--contenido de la pagina web-->
    <div class="title-section">Sobre nosotros</div> 
    <div class="content-pagePP">
        <div class="center">
            <img src="assets/logo.png" alt="vision" class="img-sobre">
        </div>
        <h3 class="styleh3"> GIRO DE LA EMPRESA</h3>
        <p class="paragraph">El principal giro de esta empresa es el servicio de renta de automóviles. </p>

        <div class="center">
        <img src="assets/apreton-de-manos.png" alt="Mision" class="img-sobre">
        </div>
        <h3 class="styleh3"> MISIÓN</h3>
        <p class="paragraph">Nos visionamos como una de las mejores empresas dedicadas a la renta de automóviles,
                 garantizando una experiencia de alquiler libre de complicaciones, ofreciendo un servicio de calidad con 
                 toda la eficiencia y eficacia que nuestros clientes exigen., generando confianza.</p>

        <div class="center">
        <img src="assets/ojo.png" alt="vision" class="img-sobre">
        </div>
        <h3 class="styleh3"> VISIÓN</h3>
        <p class="paragraph">Ser una empresa en constante crecimiento, que día con día ofrezca los mejores servicios 
                para satisfacción de nuestros clientes y amigos.</p>

        <div class="center">
        <img src="assets/carpeta.png" alt="Antecedentes" class="img-sobre">
        </div>
        <h3 class="styleh3"> ANTECEDENTES</h3>
        <p class="paragraph">Alamo se fundó en 1974 y ofrece tarifas de alquiler bajas, así como una experiencia del 
                cliente agradable y sin complicaciones, en los destinos de viaje más populares en todo Estados Unidos, Canadá, 
                México, el Caribe, América Latina, Europa, Asia y la zona del Pacífico. Alamo lanzó el primer motor de reservas 
                por internet en tiempo real de la industria y el sistema de registro en línea. Actualmente, su sitio facilita la 
                planificación de vacaciones, ya que proporciona excelentes tarifas, así como herramientas de viaje para encontrar 
                información sobre el clima, indicaciones de conducción y actividades divertidas durante el viaje.</p>
    </div>
    <!--Footer de la pagina web--> 
    <footer >
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
</html>