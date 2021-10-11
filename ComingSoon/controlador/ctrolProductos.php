<?php
require_once '../modelo/conexion.php';


switch ($_POST['metodo']) {
    case 'g':
        guardar();
        break;
    case 'l':
        listar();
        break;
    case 'e':
        eliminar();
        break;
    case 'lc':
        listarComboProductos();
        break;

}
function eliminar()
{
    $conexion = new PDODB();
    $conexion->connect();

    $idProducto = $_POST['x'];

    $InstruccionSQL = "DELETE FROM productos WHERE idProducto = ".$idProducto;

    $resultado = $conexion->executeInstruction($InstruccionSQL);
    if ($resultado == true) {
        echo "Producto eliminado correctamente.";
    } else {
        echo "No fue posible eliminar el Producto.";
    }
}
function consultarCliente(){
    $conexion = new PDODB();

    $conexion->connect();

    $idProducto = $_POST['idProducto'];
    $InstruccionSQL = "SELECT * FROM productos  where idProducto = ".$idProducto;

    $resultado = $conexion->getData($InstruccionSQL);

    foreach ($resultado as $key => $value) {
        echo '<div class="row">
           <div class="col">
           <div class="form group row">
              <div class="col-6 mt-4">
                 <label for="nombre" >Nombre</label>
                 <input type="text" class="form-control" name="Nombre" id="Nombre" >
              </div>
              <div class="col-6 mt-4">
                 <label for="Cantidad_Volumen" >Ingrese cantidad volumen</label>
                 <input type="text" class="form-control" name="Cantidad_Volumen" id="Cantidad_Volumen" >
              </div>
              <div class="col-6 mt-4">
                 <label for="Correo" >Precio unitario</label>
                 <input type="text" class="form-control" name="Precio_Unitario" id="Precio_Unitario" >
              </div>
            </div>';
    }
}
function listar(){
    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "SELECT * FROM Productos";

    $resultado = $conexion->getData($InstruccionSQL);

    foreach ($resultado as $key => $value) {
        echo '<tr>
                    <th scope="row">'.$value['idProducto'].'</th>
                    <td> <span class="Nombre">'.$value['Nombre'].'</span> </td>
                    <td> <span class="CantidadVolumen">'.$value['Cantidad_Volumen'].'</span> </td>
                    <td><span class="PrecioUnitario">'.$value['Precio_Unitario'].'</span></td>
                    
                    <td>
                    <a href="#" class="btn btn-success d-block">Modificar datos</a>
                    </td>
                    <td>
                    <input type="button" class="btn btn-danger" onclick="eliminarProductos('.$value['idProducto'].')" value="Eliminar">
                    </td>
                </tr>';
    }

}

function guardar()
{
    $Nombre = $_POST['nombre'];
    $Cantidad_Volumen = $_POST['cantidadvolumen'];
    $Precio_Unitario = $_POST['preciounitario'];
    $Proveedor = $_POST['proveedor'];
    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "INSERT INTO `productos` (`idProducto`, `idProveedor`, `Nombre`, `Cantidad_Volumen`, `Precio_Unitario`) VALUES 
(NULL, '" . $Proveedor . "', '" . $Nombre . "', '" . $Cantidad_Volumen . "','" . $Precio_Unitario . "');";

    $resultado = $conexion->executeInstruction($InstruccionSQL);

    if ($resultado == true) {
        echo "Datos del producto Guardado Correctamente";
    } else {
        echo "No fué posible guardar los datos del producto";
    }
}


function listarComboProductos(){
    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "SELECT idProducto, Nombre FROM `productos`";

    $resultado = $conexion->getData($InstruccionSQL);

    foreach ($resultado as $key => $value) {
        echo '<option value="'.$value['idProducto'].'">'.$value['Nombre'].'</option>';
    }
}