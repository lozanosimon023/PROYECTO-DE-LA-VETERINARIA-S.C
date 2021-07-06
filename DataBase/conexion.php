<?php
    $user="root";
    $password="";
    $server="localhost";
    $database="db_veterinaria";
    $conexion = mysqli_connect($server, $user, $password, $database);
    mysqli_set_charset($conexion, "utf8");
?>