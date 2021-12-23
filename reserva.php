<?php
    session_start();
    if (!isset($_SESSION['DNI'])) {
        header('location: index.php');
    }
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
    <link rel="stylesheet" type= "text/css" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->  
    <link rel="stylesheet" href="css/style.css">

    <title>Reserva</title>
</head>
<body> 
    <!--Header de la pagina web-->
    <header>
        <div class="logo-place"><a href="index.php"><img src="assets/logo.png"></a></div>
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
            <div class="item-option" title="Mi auto">
                <a href="reserva.php"><i class="fas fa-car"></i></a>
            </div>
        </div>
    </header>

    <!--Tipo publicidad-->
    <section class="home" id="home">

        <h3 data-speed="-2" class="home-parallax">Encuentra tu Automóvil ideal</h3>
    
        <img data-speed="5" class="home-parallax" src="assets/autos/home-img.png" alt="">
    
    </section> 

    <!--contenido de la pagina web-->
    <div class="main-content">
        <div class="content-page">
            <h3>Mi Reserva</h3>
            <div class="body-renta" id="space-list">  
            </div>
            <h4>Ingresar fecha de inicio: <input type="date" id="fecha-ini"></h4>
            <br>
            <h4>Ingresar fecha de entrega: <input type="date" id="fecha-fin"></h4>
            <br>
            
            <br>
            <button onclick="procesar_renta()">Rentar Ahora</button>
        </div>
        <br>
    </div>
    <div id="space">
    </div> 
    <div id="space">
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
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajax({
                url:'servicios/rentas/get_all_renta.php',
                type:'POST',
                data:{},
                success:function(data){
                    console.log(data);
                    let html='';
                    for (var i = 0; i < data.datos.length; i++) {
                        html+=
                        '<div class="item-renta">'+
                           ' <div class="renta-img">'+
                                '<img src="assets/autos/'+data.datos[i].imagen+'">'+
                            '</div>'+
                            '<div class="renta-detalle">'+
                                '<h3>Marca: '+data.datos[i].marca+'</h3>'+
                                '<h3>Modelo: '+data.datos[i].mo+'</h3>'+
                                '<h3>Matricula: '+data.datos[i].nm+'</h3>'+
                                '<h3>Descripción: '+data.datos[i].DESCR+'</h3>'+
                                '<h4>Precio: $'+data.datos[i].pr+'.00</h4>'+
                                '<h4>Fecha de inicio:'+data.datos[i].fecha_i_r+'</h4>'+
                                '<h4>Fecha de entrega:'+data.datos[i].fecha_f_r+'</h4>'+
                                '<h2>Codigo: '+data.datos[i].cr+'</h2>'+
                            '</div>'+
                        '</div>';
                    }
                    document.getElementById("space-list").innerHTML=html;
                },
                error:function(err){
                    console.error(err);
                }
            });
        });
        function procesar_renta(){
            let fechaini=document.getElementById("fecha-ini").value;
            let fechafin=document.getElementById("fecha-fin").value;
            if(fechaini=="" || fechafin==""){
                alert("Complete los campos");
            }else{
              $.ajax({
                url:'servicios/rentas/confirm.php',
                type:'POST',
                data:{
                    fechaini:fechaini,
                    fechafin:fechafin
                },
                success:function(data){
                    console.log(data);
                    if(data.state){
                        window.location.href='reservado.php';
                    }else{
                        alert(data.detail);
                    }   
                },
                error:function(err){
                    console.error(err);
                }
                });
            }
        }
    </script>
</body>
</html>