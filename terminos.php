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

    <title>Terminos y Condiciones</title>
   
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
    <!--contenido-->
    <div class="title-section">TERMINOS Y CONDICIONES </div>
        <div class="content-pagePP">       
            <p align="center" > Ultima actualización de esta política noviembre 2021 </p>
            <h3 class="styleh3"><img data-speed="1" class="home imgPP" src="assets/ALAMOPP.png" alt="" width="30" height="30">OBJETIVO DEL SITIO; RESERVAS.</h3>
            <p class="paragraph">Proporciona el Sitio únicamente para ayudarlo a ver las opciones de alquiler de automóviles y reservar. 
                Los pagos de alquiler  se celebran exclusivamente en las sucursales de Alamo y sus afiliadas o sus respectivas franquicias
                y no se celebran a través de este Sitio. </p>

            <h3 class="styleh3"><img data-speed="1" class="home imgPP" src="assets/ALAMOPP.png" alt="" width="30" height="30">REQUISITOS PARA RENTAR</h3>
            <p class="paragraph">Podrás ser candidato a rentar uno de nuestros automóviles siempre y cuando cuentes con los siguientes documentos 
                        personales vigentes, de los cuales puedas ser acreditado como titular:<br><br>
                        - Licencia de conducir vigente. <br><br>
                        - Credencial para votar del INE, Pasaporte o documento migratorio vigente. <br><br>
                        - Tarjeta de crédito Visa, Master Card y American Express <br><br>
                        - Ser mayor de 25 años de edad, con excepción de los límites de edad que establece esta política.   </p>
        
            <h3 class="styleh3"><img data-speed="1" class="home imgPP" src="assets/ALAMOPP.png" alt="" width="30" height="30">LICENCIAS</h3>
            <p class="paragraph">Todos los clientes deberán presentar una licencia de conducir válida y vigente, sin importar del país del que procede, 
                no serán válidos los permisos provisionales, ni los comprobantes de infracción en caso de que esta haya sido retirada. </p>
                        
            <h3 class="styleh3"><img data-speed="1" class="home imgPP" src="assets/ALAMOPP.png" alt="" width="30" height="30">LIMITE DE EDAD</h3>
            <p class="paragraph">La edad mínima para rentar un automóvil es de 21 años y la máxima será de 75 años, siempre que en ambos casos se presente 
                la licencia de conducir. Conductores Menores. Los conductores menores de 25 años, se consideran como menores de edad por lo tanto aplica un 
                cargo adicional por día de renta. </p>

            <h3 class="styleh3"><img data-speed="1" class="home imgPP" src="assets/ALAMOPP.png" alt="" width="30" height="30">MONEDA</h3>
            <p class="paragraph">Todos los cargos y tarifas se realizarán en pesos mexicanos. </p>
        
            <h3 class="styleh3"><img data-speed="1" class="home imgPP" src="assets/ALAMOPP.png" alt="" width="30" height="30">TIPO DE CAMBIO</h3>
            <p class="paragraph"> El tipo de cambio aplica al día de la apertura del contrato o lo establecido en el sistema en uso.</p>

            <h3 class="styleh3"><img data-speed="1" class="home imgPP" src="assets/ALAMOPP.png" alt="" width="30" height="30">IVA</h3>
            <p class="paragraph">16% En toda la República Mexicana. </p>

            <h3 class="styleh3"><img data-speed="1" class="home imgPP" src="assets/ALAMOPP.png" alt="" width="30" height="30">CARGOS POR SERVICIO</h3>
            <p class="paragraph">Se consideran especiales y si existe algún cargo se negociará y confirmará en la plaza.</p>
        
            <h3 class="styleh3"><img data-speed="1" class="home imgPP" src="assets/ALAMOPP.png" alt="" width="30" height="30">IDENTIFICACIÓN</h3>
            <p class="paragraph">En todo caso se solicitará una identificación oficial la cual puede ser: Pasaporte, o una credencial oficial, 
                        diferente a la licencia de conducir.</p>

            <h3 class="styleh3"><img data-speed="1" class="home imgPP" src="assets/ALAMOPP.png" alt="" width="30" height="30">DEPOSITOS</h3>
            <p class="paragraph">Los depósitos  deberán efectuarse con cargo a tarjeta de crédito: 
                        American Express, VISA o MasterCard, y los montos podrán variar según las coberturas contratadas y el tipo de auto rentado. </p>

            <h3 class="styleh3"><img data-speed="1" class="home imgPP" src="assets/ALAMOPP.png" alt="" width="30" height="30">METODO DE PAGO</h3>
            <p class="paragraph">Tarjetas de crédito: American Express, VISA y Master Card, cupones de prepago o carta responsiva en caso de ser una cuenta 
                con crédito vigente de convenio.</p>
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
</html>