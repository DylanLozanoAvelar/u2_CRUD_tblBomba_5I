<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['tambah'])) {
    // ambil data dari form
    $tipoBomba = $_POST['tipoBomba'];
    $tipoCombustible = $_POST['tipoCombustible'];
    $ubicacion = $_POST['ubicacion'];
    $capacidadBomba = $_POST['capacidadBomba'];
    $estado = $_POST['estado'];
    $numEmpleados = $_POST['numEmpleados'];
    $fechaRegistro = $_POST['fechaRegistro'];

    // query
    $sql = "INSERT INTO bomba(tipoBomba, tipoCombustible, ubicacion, capacidadBomba, estado, numEmpleados, fechaRegistro)
    VALUES('$tipoBomba', '$tipoCombustible', '$ubicacion', '$capacidadBomba', '$estado', '$numEmpleados', '$fechaRegistro')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?estado=exito');
    else
        header('Location: ./index.php?estado=fallo');
} else
    die("Error...");
