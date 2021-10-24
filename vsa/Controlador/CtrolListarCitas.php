<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$consulta = "SELECT c.idCitas AS id, p.NombrePaciente AS paciente, cl.Nombre AS cliente, tc.Tipo AS tipo, c.Fecha_Hora AS fecha 
            FROM tbl_citas c 
            INNER JOIN tbl_paciente p ON p.idPaciente = c.idPaciente 
            INNER JOIN tbl_cliente cl ON cl.idCliente = c.idCliente 
            INNER JOIN tbl_tipo_consulta tc ON tc.idTipoConsulta = c.idTipoConsulta
            ORDER BY c.idCitas ASC";

$listado = $conexion->executeInstruction($consulta);

foreach ($listado as $key => $value) {
    echo '<tr>
            <td scope="col">' . $value['id'] . '</td>
            <td scope="col">' . $value['paciente'] . '</td>
            <td scope="col">' . $value['cliente'] . '</td>
            <td scope="col">' . $value['tipo'] . '</td>
            <td scope="col">' . $value['fecha'] . '</td>
            <td scope="col"><input class="btn btn-danger" type="button" value="Eliminar" onclick="eliminarCita(' . $value['id'] . ')"></td>
            <td scope="col"><input class="btn btn-warning" type="button" value="Modificar" onclick="buscaCita(' . $value['id'] . ')"></td>
        </tr>';
}
