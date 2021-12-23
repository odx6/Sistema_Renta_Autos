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
                        <a href="#" class="px-4 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>

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
                    <a href="buscarAlq.php"><i class="fas fa-file-invoice"></i><span>L. factura</span></a>
                    <a href="Empleados.php"><i class="fas fa-users"></i><span>Empleados</span></a>
                </nav>
            </div>
            <main class="main col">
                <div class="columna col-lg-12 ">
                    
                    <form action="buscarMod.php" method="get" class="form_search">
                        <input type="text" name="busqueda" id="busqueda" placeholder="Buscar..">
                        <input type="submit" value="Buscar" class="btn_search">
                    </form>

                    <nav style="background-color: #0b2fa3;">
                        <center>
                            <h1 style="color:white;">Modelos</h1>
                        </center>
                    </nav>

                    <div class="columna col-lg-12">

                        <div>
                            <form action="agregarMo.php" method="POST">
                                <label for="modelo"> Modelo</label>
                                <input name="modelo" id="modelo" placeholder="Modelo" required></input>
                                <label for="potencia">Potencia</label>
                                <input name="potencia" id="potencia" placeholder="Potencia" required></input>
                                <label for="marca">Marca</label>
                                <input name="marca" id="marca" placeholder="Marca" required></input>
                                <label for="precio">Precio</label>
                                <input name="precio" id="precio" placeholder="Precio" required></input>
                                <input type="submit" class="btn-submit" name="agregar" id="agregar" value="Agregar">
                            </form>
                        </div>
                        <div>
                            <table class="table" width="100%" style="background-color: #f7ff80;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Modelo</th>
                                        <th scope="col">Potencia</th>
                                        <th scope="col">Marca</th>
                                        <th scope="col">Precio</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($link->query('SELECT * from modelos;') as $row) { ?>
                                        <tr>
                                            <td><?php echo $row['mo'] ?></td>
                                            <td><?php echo $row['po'] ?></td>
                                            <td><?php echo $row['ma'] ?></td>
                                            <td><?php echo $row['pr'] ?></td>
                                        </tr>

                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>

                            </table>
                        </div>
                    </div>

                    <form action="buscarCoch.php" method="get" class="form_search">
                        <input type="text" name="busqueda" id="busqueda" placeholder="Buscar..">
                        <input type="submit" value="Buscar" class="btn_search">
                    </form>

                    <nav style="background-color: #0b2fa3;">
                        <center>
                            <h1 style="color:white;">Autos</h1>
                        </center>
                    </nav>

                    <div class="columna col-lg-12">


                        <div>
                            <form action="agregarCoche.php" method="POST">
                                <label for="matricula">Numero de matricula</label>
                                <input name="matricula" id="matricula" placeholder="Numero de matricula" required></input>
                                <label for="color">Color del Automovil</label>
                                <input name="color" id="color" placeholder="Color del Automovil" required></input>
                                <label for="km">KM</label>
                                <input name="km" id="km" placeholder="km" required></input>
                                <label for="modelo">Modelo</label>
                                <input name="modelo" id="modelo" placeholder="Modelo" required></input>
                                <label for="estado">Estado</label>
                                <input name="estado" id="estado" placeholder="Estado" required></input>
                                <label for="descripcion">Descripcion</label>
                                <input name="descripcion" id="descripcion" placeholder="Descripcion" required></input>
                                <label for="marca">Marca</label>
                                <input name="marca" id="marca" placeholder="Marca" required></input>
                                <label for="imagen">Imagen</label>
                                <input name="imagen" id="imagen" placeholder="imagen" required></input>
                                <input type="submit" class="btn-submit" name="agregar" id="agregar" value="Agregar">
                            </form>
                        </div>

                        <div>
                            <table class="table" width="100%" style="background-color: #f7ff80;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Matricula</th>
                                        <th scope="col">color</th>
                                        <th scope="col">Km</th>
                                        <th scope="col">Modelo</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Marca</th>
                                        <th scope="col">imagen</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($link->query('SELECT * from coches;') as $row) { ?>
                                        <tr>
                                            <td><?php echo $row['nm'] ?></td>
                                            <td><?php echo $row['color'] ?></td>
                                            <td><?php echo $row['km'] ?></td>
                                            <td><?php echo $row['mo'] ?></td>
                                            <td><?php echo $row['estado'] ?></td>
                                            <td><?php echo $row['DESCR'] ?></td>
                                            <td><?php echo $row['marca'] ?></td>
                                            <td><?php echo $row['imagen'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>

                            </table>
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