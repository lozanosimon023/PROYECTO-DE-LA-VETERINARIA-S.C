<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$consulta = "SELECT idProducto, nombre FROM tbl_productos";
$listado = $conexion->executeInstruction($consulta);

foreach ($listado as $key => $value) {
    echo '<option value="' . $value['idProducto'] . '">' . $value['nombre'] . '</option>';
}
