<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$consulta = "SELECT p.idProducto, p.nombre, p.Precio, tp.Tipo FROM `tbl_productos` p
inner join tbl_tipo_producto tp ON(p.idTipoProducto = tp.idTipoProducto)";
$listado = $conexion->getData($consulta);

foreach ($listado as $key => $value) {
    echo '<tr>
        <td scope="col">' . $value['idProducto'] . '</td>
        <td scope="col">' . $value['nombre'] . '</td>
        <td scope="col">' . $value['Precio'] . '</td>
        <td scope="col">' . $value['Tipo'] . '</td>
        <td scope="col"><input class="btn btn-danger" type="button" value="Eliminar" onclick="eliminarProducto(' . $value['idProducto'] . ')"></td>
        <td scope="col"><input class="btn btn-warning" type="button" value="Modificar" onclick="modificarProducto(' . $value['idProducto'] . ')"></td>
    </tr>';
}
