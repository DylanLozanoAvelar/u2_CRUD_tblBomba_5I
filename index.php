<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Dasar CRUD dengan PHP dan MySQL">
    <title>Datos PEMEX | Tabla BOMBA</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">Ingresar Datos </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-sm-start text-center" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary ms-md-4 text-white" href="#">Inicio de Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <!-- form tambah bomba -->
        <div class="card mb-5">
            <!-- <div class="card-header">
                Latihan CRUD PHP & MySQL
            </div> -->
            <!-- tambah data -->
            <div class="card-body">
                <h3 class="card-title">PEMEX Chihuahua</h3>
                <p class="card-text"> Nombre: Dylan Lozano Avelar <br> Grado y Grupo: 5°I </p>

                <!-- tampilkan pesan sukses ditambah -->
                <?php if (isset($_GET['estado'])) : ?>
                    <?php
                    if ($_GET['estado'] == 'exito')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>¡Exitoso!</strong> ¡Los datos se agregaron correctamente!
                        <button type='button' class='btn-close' onclick='haciendoClic()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> ¡Los datos NO se agregaron!
                        <button type='button' class='btn-close' onclick='haciendoClic()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>


                <form class="row g-3" action="tambah.php" method="POST">
                    <div class="col-md-4">
                        <label for="tipoBomba" class="form-label">Tipo de Bomba</label>
                        <input type="text" name="tipoBomba" class="form-control" placeholder="Centrifuga" required>
                    </div>

                    <div class="col-md-4">
                        <label for="tipoCombustible" class="form-label">Tipo de Combustible</label>
                        <select class="form-select" name="tipoCombustible" aria-label="Default select example">
                            <option value="Magna">Magna</option>
                            <option value="Premium">Premium</option>
                            <option value="Diesel">Diesel</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="tittle" class="form-label">Ubicacion de la Bomba</label>
                        <div class="col-md-12">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="jenis_kelamin">Isla 1</label>
                                <input class="form-check-input" type="radio" name="ubicacion" value="Isla 1">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="jenis_kelamin">Isla 2</label>
                                <input class="form-check-input" type="radio" name="ubicacion" value="Isla 2">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="estado" class="form-label">Estado de la Bomba</label>
                        <select class="form-select" name="estado" aria-label="Default select example">
                            <option value="Activo">Activo</option>
                            <option value="Mantenimiento">Mantenimiento</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="capacidadBomba" class="form-label">Capacidad de la Bomba</label>
                        <input type="number" step=0.01 name="capacidadBomba" class=" form-control" placeholder="30000" required>
                    </div>

                    <div class="col-md-6">
                        <label for="numEmpleados" class="form-label"> Numero de Empleados </label>
                        <input type="number"  name="numEmpleados" class=" form-control" placeholder="1" required>
                    </div>

                    <div class="col-md-6">
                        <label for="fechaRegistro" class="form-label"> Fecha de Registro</label>
                        <input type="datetime-local" class="form-select" name="fechaRegistro"  required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="daftar" name="tambah"><i class="fa fa-plus"></i><span class="ms-2"> Agregar Datos </span></button>
                    </div>
                </form>
            </div>
        </div>


        <!-- judul tabel -->
        <h5 class="mb-3">Mi lista de Bombas de Combustible</h5>

        <div class="row my-3">
            <div class="col-md-2 mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Mostrar Entradas</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="col-md-3 ms-auto">
                <div class="input-group mb-3 ms-auto">
                    <input type="text" class="form-control" placeholder="Buscar algo..." aria-label="cari" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>


        <!-- tampilkan pesan sukses dihapus -->
        <?php if (isset($_GET['limpiar'])) : ?>
            <?php
            if ($_GET['limpiar'] == 'exito')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>¡Exitoso!</strong> Dato borrado con exito!
                        <button type='button' class='btn-close' onclick='haciendoClic()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> No se borró ningun dato!
                        <button type='button' class='btn-close' onclick='haciendoClic()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tampilkan pesan sukses di edit -->
        <?php if (isset($_GET['actualizar'])) : ?>
            <?php
            if ($_GET['actualizar'] == 'exito')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>¡Exitoso!</strong> ¡Datos actualizados con éxito!
                        <button type='button' class='btn-close' onclick='haciendoClic()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> ¡No se actualizaron los datos!
                        <button type='button' class='btn-close' onclick='haciendoClic()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabel -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col' class='text-center'>idBomba</th>";
            echo "<th scope='col' class='text-center'>tipoBomba</th>";
            echo "<th scope='col' class='text-center'>tipoCombustible</th>";
            echo "<th scope='col' class='text-center'>ubicacion</th>";
            echo "<th scope='col' class='text-center'>capacidadBomba</th>";
            echo "<th scope='col' class='text-center'>estado</th>";
            echo "<th scope='col' class='text-center'>numEmpleados</th>";
            echo "<th scope='col' class='text-center'>fechaRegistro</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";



            $limite = 10;
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
            $pagina_comienzo = ($pagina > 1) ? ($pagina * $limite) - $limite : 0;

            $previous = $pagina - 1;
            $next = $pagina + 1;

            $datos = mysqli_query($db, "SELECT * FROM bomba");
            $cantidad_datos = mysqli_num_rows($datos);
            $total_pagina = ceil($cantidad_datos / $limite);

            $consultaBomba = mysqli_query($db, "SELECT * FROM bomba LIMIT $pagina_comienzo, $limite");
            $no = $pagina_comienzo + 1;

            // $sql = "SELECT * FROM bomba";
            // $query = mysqli_query($db, $sql);




            while ($bomba = mysqli_fetch_array($consultaBomba)) {
                echo "<tr>";
                echo "<td style='display:none'>" . $bomba['idBomba'] . "</td>";
                echo "<td class='text-center'>" . $no++ . "</td>";
                echo "<td class='text-center'>" . $bomba['tipoBomba'] . "</td>";
                echo "<td class='text-center'>" . $bomba['tipoCombustible'] . "</td>";
                echo "<td class='text-center'>" . $bomba['ubicacion'] . "</td>";
                echo "<td class='text-center'>" . $bomba['capacidadBomba'] . "</td>";
                echo "<td class='text-center'>" . $bomba['estado'] . "</td>";
                echo "<td class='text-center'>" . $bomba['numEmpleados'] . "</td>";
                echo "<td class='text-center'>" . $bomba['fechaRegistro'] . "</td>";

                echo "<td class='text-center'>";

                echo "<button type='button' class='btn btn-primary editButton pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                // tombol hapus
                echo "
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger deleteButton pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($cantidad_datos == 0) {
                echo "<p class='text-center'> No hay datos disponibles en esta tabla. </p>";
            } else {
                echo "<p>Total de $cantidad_datos entrada(s)</p>";
            }

            echo "</div>";
            ?>
        </div>

        <!-- pagination -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($pagina > 1) ? "href='?pagina=$previous'" : "" ?>><i class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $total_pagina; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?pagina=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($pagina < $total_pagina) ? "href='?pagina=$next'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Modal Edit-->
        <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Editar Datos de la Tabla Bomba</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                        $sql = "SELECT * FROM bomba";
                        $query = mysqli_query($db, $sql);
                        $bomba = mysqli_fetch_array($query);
                    ?>

                    <form action='edit.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='editar_idBomba' id='editar_idBomba'>

                            <label for="editar_tipoBomba" class="form-label">Tipo de Bomba</label>
                            <input type="text" name="editar_tipoBomba" id='editar_tipoBomba' class="form-control" placeholder="Centrifuga" required>
                        
                            <label for="editar_tipoCombustible" class="form-label">Tipo de Combustible</label>
                            <select class="form-select" id='editar_tipoCombustible' name="editar_tipoCombustible" aria-label="Default select example">
                                <option value="Magna">Magna</option>
                                <option value="Premium">Premium</option>
                                <option value="Diesel">Diesel</option>
                            </select>

                            <div class="col-md-12">
                                <label for="editar_ubicacion" class="form-label">Ubicacion de la Bomba</label>
                                <div class="col-md-12" id='editar_ubicacion'>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="ubicacion">Isla 1</label>
                                        <input class="form-check-input" type="radio" name="editar_ubicacion" value="Isla 1" id="isla1">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="ubicacion">Isla 2</label>
                                        <input class="form-check-input" type="radio" name="editar_ubicacion" value="Isla 2" id="isla2">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="editar_estado" class="form-label">Estado de la Bomba</label>
                                <select class="form-select" name="editar_estado" id='editar_estado' aria-label="Default select example">
                                    <option value="Activo">Activo</option>
                                    <option value="Mantenimiento">Mantenimiento</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label for="editar_capacidadBomba" class="form-label">Capacidad de la Bomba</label>
                                <input type="number" id='editar_capacidadBomba' step=0.01 name="editar_capacidadBomba" class=" form-control" placeholder="30000" required>
                            </div>

                            <div class="col-md-12">
                                <label for="editar_numEmpleados" class="form-label"> Numero de Empleados </label>
                                <input type="number" id='editar_numEmpleados' name="editar_numEmpleados" class=" form-control" placeholder="1" required>
                            </div>

                            <div class="col-md-12">
                                <label for="editar_fechaRegistro" class="form-label"> Fecha de Registro </label>
                                <input type="datetime-local" class="form-select" id='editar_fechaRegistro' name="editar_fechaRegistro" required>
                            </div>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='editarDatos' class='btn btn-primary'>Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Modal Delete-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Confirmacion</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='hapus.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='borrar_idBomba' id='borrar_idBomba'>
                            <p>¿Estás seguro de que deseas eliminar estos datos?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='borrarDatos' class='btn btn-primary'>Borrar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- tutup container -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
        $(document).ready(function() {
            $('.editButton').on('click', function() {
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#editar_idBomba').val(data[0]);
                // gak dipake, karena cuma increment number
                // $('#no').val(data[1]);
                $('#editar_tipoBomba').val(data[2]);
                $('#editar_tipoCombustible').val(data[3]);
                $('#editar_ubicacion').val(data[4]);
                // jenis kelamin checked
                if (data[4] == "Isla 1") {
                    $("#isla1").prop("checked", true);
                } else {
                    $("#isla2").prop("checked", true);
                }

                $('#editar_capacidadBomba').val(data[5]);
                $('#editar_estado').val(data[6]);
                $('#editar_numEmpleados').val(data[7]);
                $('#editar_fechaRegistro').val(data[8]);
            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#borrar_idBomba').val(data[0]);
            });
        });
    </script>

    <script>
        function haciendoClic() {
            window.location.href = './index.php';
        }
    </script>
</body>

</html>