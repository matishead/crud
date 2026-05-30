<?php

$host = "localhost";
$usuario = "root";
$password = "";
$bd = "Tienda";

$conn = mysqli_connect($host, $usuario, $password, $bd);

if (!$conn) {
    die("Error de conexión");
}

?>