<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['editarDatos'])) {
    // ambil data dari form
    $idBomba = $_POST['editar_idBomba'];
    $tipoBomba = $_POST['editar_tipoBomba'];
    $tipoCombustible = $_POST['editar_tipoCombustible'];
    $ubicacion = $_POST['editar_ubicacion'];
    $capacidadBomba = $_POST['editar_capacidadBomba'];
    $estado = $_POST['editar_estado'];
    $numEmpleados = $_POST['editar_numEmpleados'];
    $fechaRegistro = $_POST['editar_fechaRegistro'];

    // query
    $sql = "UPDATE bomba SET tipoBomba='$tipoBomba', tipoCombustible='$tipoCombustible', ubicacion='$ubicacion', capacidadBomba='$capacidadBomba', estado='$estado', numEmpleados='$numEmpleados', fechaRegistro='$fechaRegistro' WHERE idBomba = '$idBomba'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?actualizar=exito');
    else
        header('Location: ./index.php?actualizar=fallo');
} else
    die("Akses dilarang...");
