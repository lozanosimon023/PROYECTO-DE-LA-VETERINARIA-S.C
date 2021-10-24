<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$consulta = "SELECT idTipoConsulta, Tipo FROM tbl_tipo_consulta ORDER BY Tipo ASC";
$listado = $conexion->executeInstruction($consulta);

echo '<option value="" selected disabled> Seleccione un tipo de consulta</option>';
foreach ($listado as $key => $value) {
    echo '<option value="' . $value['idTipoConsulta'] . '">' . $value['Tipo'] . '</option>';
}
