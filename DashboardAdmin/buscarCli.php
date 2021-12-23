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

                    <?php

                    /// busqueda variable 
                    $busqueda = strtolower($_REQUEST['busqueda']);
                    if (empty($busqueda)) {
                        header("location: alquilar.php");
                    }

                    ?>

                    <form action="buscarEmp.php" method="get" class="form_search">
                        <input type="text" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda; ?>">
                        <input type="submit" value="Buscar" class="btn_search">
                    </form>

                    <nav style="background-color: #0b2fa3;">
                        <center>
                            <h1 style="color:white;">Clientes</h1>
                        </center>
                    </nav>

                    <div class="columna col-lg-12">

                        <div>
                            <table class="table" width="100%" style="background-color: #f7ff80;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Direccion</th>
                                        <th scope="col">email</th>
                                        <th scope="col">Telefono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($link->query("SELECT * FROM cliente 
                                                                          WHERE DNI LIKE  '%$busqueda%' 
                                                                          OR NOM LIKE  '%$busqueda%' 
                                                                          OR CORREO LIKE  '%$busqueda%  ' 
                                                                          OR APELLIDO LIKE  '%$busqueda%';") as $row) { ?>
                                        <tr>
                                            <td><?php echo $row['DNI'] ?></td>
                                            <td><?php echo $row['NOM'] ?></td>
                                            <td><?php echo $row['APELLIDO'] ?></td>
                                            <td><?php echo $row['DIRECCION'] ?></td>
                                            <td><?php echo $row['CORREO'] ?></td>
                                            <td><?php echo $row['TEL'] ?></td>

                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>

                            </table>

                            <tr>
                                <td><a href="Empleados.php"><button type="button" class="btn btn-danger">Atras</button></a></td>
                            </tr>
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