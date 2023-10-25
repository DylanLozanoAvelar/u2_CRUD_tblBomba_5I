<?php
include("./config.php");

if (isset($_POST['borrarDatos'])) {
    // ambil id dari query string
    $id = $_POST['borrar_idBomba'];

    // query hapus
    $sql = "DELETE FROM bomba WHERE idBomba = '$id'";
    $query = mysqli_query($db, $sql);

    // apa query berhasil dihapus?
    if ($query) {
        header('Location: ./index.php?limpiar=exito');
    } else
        die('Location: ./index.php?limpiar=fallo');
} else
    die("akses dilarang...");
