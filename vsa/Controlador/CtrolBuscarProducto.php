<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$idProducto = $_POST['idProducto'];

$consulta = "SELECT p.idProducto AS idProducto,p.idTipoProducto AS idTipoProducto, p.nombre AS nombre, p.Precio AS Precio, tp.Tipo AS Tipo 
            FROM `tbl_productos` p
            INNER JOIN tbl_tipo_producto tp ON p.idTipoProducto = tp.idTipoProducto where p.idProducto = " . $idProducto;

$listado = $conexion->executeInstruction($consulta);
foreach ($listado as $key => $value) {
    echo '<div class="row">
            <div class="col">     
                <input type="hidden" id="idProducto" name="idProducto" value="' . $value['idProducto'] . '">   
                <div class="form group row">
                    <div class="col-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombreModal" id="nombreModal" value="' . $value['nombre'] . '">
                    </div>
                    <div class="col-6">
                        <label for="Precio">Precio</label>
                        <input type="text" class="form-control" name="PrecioModal" id="PrecioModal" value="' . $value['Precio'] . '">
                    </div>
                    <div class="col-6">
                        <label for="Tipo">Tipo</label>
                        <select name="tipo_producto" id="tipo_producto" class="form-control" data-valueid="' . $value['idTipoProducto'] . '">                                            
                        </select>
                    </div>                
                </div>
            </div>
        </div>';
}
