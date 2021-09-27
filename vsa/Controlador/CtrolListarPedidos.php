<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$consulta = "SELECT * FROM tbl_pedido";
$listado = $conexion->executeInstruction($consulta);

foreach ($listado as $key => $value) {
    echo '<tr>
        <td scope="col">' . $value['idPedido'] . '</td>
        <td scope="col">' . $value['Direccion'] . '</td>
        <td scope="col">' . $value['Celular'] . '</td>
        <td scope="col">' . $value['Total'] . '</td>
        <td scope="col"><input class="btn btn-danger" type="button" value="Eliminar" onclick="eliminarPedido(' . $value['idPedido'] . ')"></td>
        <td scope="col"><input class="btn btn-warning" type="button" value="Modificar" onclick="modificarPedido(' . $value['idPedido'] . ')"></td>
    </tr>';
}
