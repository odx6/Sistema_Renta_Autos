<?php
$link = new PDO('mysql:host=localhost;port=3307;dbname=autos_renta', 'root', '@12345678');

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">

</head>

<body>


    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">
                <img src="assets/logo.png" width="115px" height="70px">
            </div>
            <div class="col-4 text-right barra">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>

                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <a class="dropdown-item menuperfil cerrar" href="#"><i class="fas fa-sign-out-alt m-1"></i>Salir
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <a href="dashboard.html"><i class="fas fa-home"></i><span>Inicio</span></a>
                    <a href="Coches.php"><i class="fas fa-car"></i><span>Automovil</span></a>
                    <a href="alquilar.php"><i class="fas fa-car-side"></i><span>En Uso</span></a>
                    <a href="#"><i class="fas fa-file-invoice"></i><span>L. factura</span></a>
                    <a href="Empleados.php"><i class="fas fa-users"></i><span>Empleados</span></a>
                </nav>
            </div>
            <main class="main col">
                <div class="columna col-lg-12">

                    <form action="buscarRes.php" method="get" class="form_search">
                        <input type="text" name="busqueda" id="busqueda" placeholder="Buscar..">
                        <input type="submit" value="Buscar" class="btn_search">
                    </form>


                    <nav style="background-color: #0b2fa3;">
                        <center>
                            <h1 style="color:white;">Reserva</h1>
                        </center>
                    </nav>

                    <div class="columna col-lg-12">

                        <div>
                            <table class="table" width="100%" style="background-color: #f7ff80;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <th scope="col">fecha inicio</th>
                                        <th scope="col">fecha fin</th>
                                        <th scope="col">Oficina</th>
                                        <th scope="col">Matricula</th>
                                        <th scope="col">ID Cliente</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($link->query('SELECT * from reserva;') as $row) { ?>
                                        <tr>
                                            <td><?php echo $row['cr'] ?></td>
                                            <td><?php echo $row['fecha_i_r'] ?></td>
                                            <td><?php echo $row['fecha_f_r'] ?></td>
                                            <td><?php echo $row['co'] ?></td>
                                            <td><?php echo $row['nm'] ?></td>
                                            <td><?php echo $row['dni'] ?></td>

                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>

                            </table>
                        </div>
                    </div>

                    <form action="buscarAlq.php" method="get" class="form_search">
                        <input type="text" name="busqueda" id="busqueda" placeholder="Buscar..">
                        <input type="submit" value="Buscar" class="btn_search">
                    </form>

                    <nav style="background-color: #0b2fa3;">
                        <center>
                            <h1 style="color:white;">Alquilados</h1>
                        </center>
                    </nav>

                    <div class="columna col-lg-12">


                        <div>
                            <form action="agregarALq.php" method="POST">
                                <label for="ca">Codigo</label>
                                <input name="ca" id="ca" placeholder="Codigo de alquiler" required></input>
                                <label for="fechai">Fecha inicio</label>
                                <input name="fechai" id="fechai" placeholder="fecha de inicio" required></input>
                                <label for="fechaf">frecha fin</label>
                                <input name="fechaf" id="fechaf" placeholder="Fecha de vencimiento" required></input>
                                <label for="dni">cliente</label>
                                <input name="dni" id="dni" placeholder="Cliente" required></input>
                                <label for="co">oficina</label>
                                <input name="co" id="co" placeholder="Numero de oficina" required></input>
                                <label for="nm"> Matricula</label>
                                <input name="nm" id="nm" placeholder="Numero de matricula" required></input>
                                <label for="cr">C reserva</label>
                                <input name="cr" id="cr" placeholder="Codigo de reserva" required></input>
                                <input type="submit" class="btn-submit" name="agregar" id="agregar" value="Agregar">
                            </form>
                        </div>

                        <div>
                            <table class="table" width="100%" style="background-color: #f7ff80;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <th scope="col">fecha inicio</th>
                                        <th scope="col">fecha fin</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">ofi</th>
                                        <th scope="col">Matricula</th>
                                        <th scope="col">Cod res</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($link->query('SELECT * from alquiler;') as $row) { ?>
                                        <tr>
                                            <td><?php echo $row['ca'] ?></td>
                                            <td><?php echo $row['fecha_i_a'] ?></td>
                                            <td><?php echo $row['fecha_i_a'] ?></td>
                                            <td><?php echo $row['dni'] ?></td>
                                            <td><?php echo $row['co'] ?></td>
                                            <td><?php echo $row['nm'] ?></td>
                                            <td><?php echo $row['cr'] ?></td>

                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>

                            </table>
                        </div>
                    </div>
            </main>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/646c794df3.js"></script>
</body>

</html>