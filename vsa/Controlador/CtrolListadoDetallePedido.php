<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$idPedido = $_POST['idPedido'];

$consulta = "SELECT p.idProducto AS idProducto, p.nombre AS nombre, dp.Cantidad AS Cantidad, dp.Subtotal AS Subtotal, p.Precio AS Precio, dp.idDetallePed AS idDetallePed
            FROM `tbl_detalle_pedido` dp
            INNER JOIN tbl_productos p on dp.idProducto=p.idProducto
            WHERE dp.idPedido = $idPedido";

$listado = $conexion->executeInstruction($consulta);

echo '<div class="form group row mt-3">        
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio Unitario</th>
                <th scope="col">Total</th>
                <th scope="col">Eliminar</th>
            </tr>
            </thead>
        <tbody id="bodyDetallePedido">';
foreach ($listado as $key => $value) {
    echo '<tr>
                <td scope="col">' . $value['idProducto'] . '</td>
                <td scope="col">' . $value['nombre'] . '</td>
                <td scope="col">' . $value['Cantidad'] . '</td>
                <td scope="col">' . $value['Precio'] . '</td>
                <td scope="col">' . $value['Subtotal'] . '</td>
                <td scope="col"><input class="btn btn-danger" type="button" value="Eliminar" onclick="eliminarDetallePedido(' . $value['idDetallePed'] . ')"></td>       
            </tr>';
}
echo '</tbody>
    </table>
  </div>';
