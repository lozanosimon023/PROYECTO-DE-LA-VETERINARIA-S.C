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
                <div class="form group row">
                    <div class="col-6">
                        <label for="nombre">Nombre</label>
                        <select name="cliente_Modal" id="cliente_Modal" class="form-control" data-valueid="' . $value['idCliente'] . '">                                            
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="Direccion">Dirección</label>
                        <input type="text" class="form-control" name="DireccionModal" id="DireccionModal" value="' . $value['Direccion'] . '">
                    </div>
                    <div class="col-6">
                        <label for="Celular">Celular</label>
                        <input type="number" name="celular_Modal" id="celular_Modal" class="form-control" value="' . $value['Celular'] . '">                                            
                    </div>                
                </div>
            </div>
        </div>';
}
