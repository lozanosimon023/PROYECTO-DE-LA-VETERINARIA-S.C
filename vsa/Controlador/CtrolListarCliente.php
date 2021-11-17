<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$consulta = "SELECT * FROM tbl_cliente";
$listado = $conexion->executeInstruction($consulta);
foreach ($listado as $key => $value) {
    echo '<tr>
            <td scope="col">' . $value['idCliente'] . '</td>
            <td scope="col">' . $value['Nombre'] . '</td>
            <td scope="col">' . $value['Celular'] . '</td>
            <td scope="col">' . $value['Correo'] . '</td>
            <td scope="col">' . $value['Contrasena'] . '</td>
            <td scope="col"><input class="btn btn-danger" type="button" value="Eliminar" onclick="eliminarCliente(' . $value['idCliente'] . ')"></td>
        </tr>';
}
