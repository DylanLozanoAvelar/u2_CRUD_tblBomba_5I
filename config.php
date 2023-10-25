<?php

$servidor = "localhost";
$usuario = "root";
$contra = "";
$dbnombre = "pemex";

$db = mysqli_connect($servidor, $usuario, $contra, $dbnombre);

if (!$db)
    die("Error en la conexion a la base de datos: " . mysqli_connect_error());
