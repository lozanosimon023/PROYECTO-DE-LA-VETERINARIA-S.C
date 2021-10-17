<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$consulta = "SELECT * FROM tbl_tipo_producto";
$listado = $conexion->executeInstruction($consulta);

foreach ($listado as $key => $value) {
    echo '<option value="' . $value['idTipoProducto'] . '">' . $value['Tipo'] . '</option>';
}
