<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$consulta = "SELECT idPaciente, NombrePaciente FROM tbl_paciente ORDER BY NombrePaciente ASC";
$listado = $conexion->executeInstruction($consulta);

echo '<option value="" selected disabled> Seleccione un paciente</option>';
foreach ($listado as $key => $value) {
    echo '<option value="' . $value['idPaciente'] . '">' . $value['NombrePaciente'] . '</option>';
}
