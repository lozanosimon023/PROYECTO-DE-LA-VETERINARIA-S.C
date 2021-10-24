<?php
require_once '../Modelo/conexion.php';

$conexion = new PDODB();
$conexion->connect();

$id = $_POST['idCita'];
$cliente = $_POST['cliente'];
$paciente = $_POST['paciente'];
$tipoConsulta = $_POST['tipoConsulta'];
$fecha = $_POST['fecha'];

$InstruccionSQL = "UPDATE `tbl_citas` 
                    SET `idPaciente` =  $paciente , 
                    `idCliente` =   $cliente  ,
                    `idTipoConsulta` =  $tipoConsulta ,
                    `Fecha_Hora` =  '" . $fecha . "'
                    WHERE `idCitas` =  $id ;";

// echo $InstruccionSQL;                    
$resultado = $conexion->executeInstruction($InstruccionSQL);

if ($resultado == true) {
    echo "Cita actualizada correctamente.";
} else {
    echo "No fue posible actualizar la cita.";
}
