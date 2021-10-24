<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$consulta = "SELECT p.idPedido AS idPedido, cl.Nombre AS Cliente, Direccion, p.Celular AS Celular, 
IFNULL((SELECT SUM(Subtotal) FROM `tbl_detalle_pedido` where idPedido=p.idPedido),0) AS Total
FROM `tbl_pedido` p 
INNER JOIN tbl_cliente cl on p.idCliente = cl.idCliente";
$listado = $conexion->executeInstruction($consulta);

foreach ($listado as $key => $value) {
    echo '<tr>
        <td scope="col">' . $value['idPedido'] . '</td>
        <td scope="col">' . $value['Cliente'] . '</td>
        <td scope="col">' . $value['Direccion'] . '</td>
        <td scope="col">' . $value['Celular'] . '</td>
        <td scope="col">' . $value['Total'] . '</td>
        <td scope="col"><input class="btn btn-danger" type="button" value="Eliminar" onclick="eliminarPedido(' . $value['idPedido'] . ')"></td>
        <td scope="col"><input class="btn btn-warning" type="button" value="Modificar" onclick="BuscarPedido(' . $value['idPedido'] . ')"></td>
        <td scope="col"><input class="btn btn-success" type="button" value="Ver" onclick="DetallePedido(' . $value['idPedido'] . ')"></td>
    </tr>';
}
