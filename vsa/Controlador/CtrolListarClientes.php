<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$consulta = "SELECT idCliente, Nombre FROM tbl_cliente";
$listado = $conexion->executeInstruction($consulta);

foreach ($listado as $key => $value) {
    echo '<option value="' . $value['idCliente'] . '">' . $value['Nombre'] . '</option>';
}
