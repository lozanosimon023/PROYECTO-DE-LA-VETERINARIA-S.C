<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$consulta = "SELECT idCliente, Nombre FROM tbl_cliente ORDER BY Nombre ASC";
$listado = $conexion->executeInstruction($consulta);

echo '<option value="0" selected disabled> Seleccione un cliente</option>';
foreach ($listado as $key => $value) {
    echo '<option value="' . $value['idCliente'] . '">' . $value['Nombre'] . '</option>';
}
