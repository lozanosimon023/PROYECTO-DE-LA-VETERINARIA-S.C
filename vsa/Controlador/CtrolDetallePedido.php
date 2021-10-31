<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$idPedido = $_POST['idPedido'];

$consulta = "SELECT * From tbl_pedido where idPedido = " . $idPedido;

$listado = $conexion->executeInstruction($consulta);
foreach ($listado as $key => $value) {
    echo '<div class="row">
        <div class="col">     
            <input type="hidden" id="idPedido" name="idPedido" value="' . $value['idPedido'] . '">   
            <label class="text-center">Pedido # '. $value['idPedido'] .'</label>
            <div class="form group row">
                <div class="col-4">
                    <label for="Producto">Producto</label>
                    <select name="Producto_Modal" id="Producto_Modal" class="form-control">                                            
                    </select>
                </div>
                <div class="col-4">
                    <label for="Cantidad">Cantidad</label>
                    <input type="number" class="form-control" name="CantidadModal" id="CantidadModal">
                </div>
                <div class="col-4">
                    <label class="text-white">btnAgregarProducto</label>
                    <input class="btn btn-success btn-block" type="button" value="Agregar" onclick="AgregarProducto(' . $value['idPedido'] . ')">             
                </div>
            </div>
        </div>        
    </div>';
}
