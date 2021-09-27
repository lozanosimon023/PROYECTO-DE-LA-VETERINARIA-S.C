
<?php

require_once '../Modelo/conexion.php';


$conexion = new PDODB();
$conexion->connect();

$idCita = $_POST['idCita'];

$InstruccionSQL = "DELETE FROM tbl_citas WHERE idCita = " . $idCita;
$resultado = $conexion->executeInstruction($InstruccionSQL);
if ($resultado == true) {
    echo "Cita eliminada correctamente.";
} else {
    echo "No fue posible eliminar la cita.";
}
