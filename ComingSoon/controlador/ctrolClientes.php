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
        listarCombo();
        break;
    case 'm':
        modificar();
        break;
    case 'cc':
        consultarCliente();
        break;
}
function eliminar()
{
    $conexion = new PDODB();
    $conexion->connect();

    $idCliente = $_POST['x'];

    $InstruccionSQL = "DELETE FROM clientes WHERE idCliente = " . $idCliente;

    $resultado = $conexion->executeInstruction($InstruccionSQL);
    if ($resultado == true) {
        echo "Usuario eliminado correctamente.";
    } else {
        echo "No fue posible eliminar el usuario.";
    }
}
function listar()
{
    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "SELECT * FROM clientes";

    $resultado = $conexion->getData($InstruccionSQL);

    foreach ($resultado as $key => $value) {
        echo '<tr>
                    <th scope="row">' . $value['idCliente'] . '</th>
                    <td> <span class="Usuario">' . $value['Usuario'] . '</span> </td>
                    <td><span class="Nombre">' . $value['Nombre'] . '</span></td>
                    <td><span class="Telfono">' . $value['Telefono'] . '</span></td>
                    <td><span class="Direccion">' . $value['Direccion'] . '</span></td>
                    <td><span class="Ciudad">copa</span></td>
                    <td><span class="Barrio">' . $value['Barrio'] . '</span></td>
                    <td><span class="Correo">' . $value['Correo'] . '</span></td>
                    <td><span class="Edad">' . $value['Edad'] . '</span></td>
                    <td><span class="Tipodedocumento">CC</span></td>
                    <td><span class="Numerodedocumento">123456</span></td>
                  <td>
                  <button type="button" class="btn btn-success" onclick="cargarClientes(' . $value['idCliente'] . ')">Modificar</button>
                  </td>
                    <td>
                    <input type="button" class="btn btn-danger" onclick="eliminarCliente(' . $value['idCliente'] . ')" value="Eliminar">
                    </td>
                </tr>';
    }
}

function consultarCliente()
{
    $conexion = new PDODB();

    $conexion->connect();

    $idCliente = $_POST['idCliente'];
    $InstruccionSQL = "SELECT * FROM clientes  where idCliente = " . $idCliente;

    $resultado = $conexion->getData($InstruccionSQL);

    foreach ($resultado as $key => $value) {
        echo '<div class="row">
                <div class="col">
                <input type="hidden" id="idClienteM" name="idClienteM" value="' . $value['idCliente'] . '">
                <div class="form group row">
                    <div class="col-6">
                        <label for="Dirección">Usuario</label>
                        <input type="text" class="form-control" name="UsuarioM" value="' . $value['Usuario'] . '" id="UsuarioM">
                    </div>
                    <div class="col-6">
                        <label for="Dirección">Contraseña</label>
                        <input type="text" class="form-control" name="ContrasenaM" value="' . $value['Contrasena'] . '" id="ContrasenaM">
                    </div>
                    <div class="col-6">
                        <label for="nombre">Nombres</label>
                        <input type="text" class="form-control" name="NombreM" value="' . $value['Nombre'] . '" id="NombreM">
                    </div>
                    <div class="col-6">
                        <label for="Telefono">Telefono</label>
                        <input type="text" class="form-control" name="TelefonoM" value="' . $value['Telefono'] . '" id="TelefonoM">
                    </div>
                    <div class="col-6">
                        <label for="Dirección">Dirección</label>
                        <input type="text" class="form-control" name="DireccionM" value="' . $value['Direccion'] . '" id="DireccionM">
                    </div>
                    <div class="col-6">
                        <label for="apellido">Ciudad</label>
                        <input type="text" class="form-control" name="CiudadM" value="' . $value['Ciudad'] . '" id="CiudadM">
                    </div>
                    <div class="col-6">
                        <label for="Dirección">Barrio</label>
                        <input type="text" class="form-control" name="BarrioM" value="' . $value['Barrio'] . '" id="BarrioM">
                    </div>
                    <div class="col-6">
                        <label for="Correo">Correo Electronico</label>
                        <input type="text" class="form-control" name="CorreoM" value="' . $value['Correo'] . '" id="CorreoM">
                    </div>
                    <div class="col-6">
                        <label for="Edad">Edad</label>
                        <input type="text" class="form-control" name="EdadM" value="' . $value['Edad'] . '" id="EdadM">
                    </div>
                    <div class="col-6">
                        <label for="Tipodedocumento">Tipo de documento</label>
                        <input type="text" class="form-control" name="TipodedocumentoM" value="' . $value['Tipodedocumento'] . '" id="TipodedocumentoM">
                    </div>
                    <div class="col-6">
                        <label for="Numerodedocumento">Numero de documento</label>
                        <input type="text" class="form-control" name="NumerodedocumentoM" value="' . $value['Numerodedocumento'] . '" id="NumerodedocumentoM">
                    </div>
                </div>
                </div>
            </div>';
    }
}

function listarCombo()
{
    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "SELECT * FROM clientes";

    $resultado = $conexion->getData($InstruccionSQL);

    foreach ($resultado as $key => $value) {
        echo '<option value="' . $value['idCliente'] . '">' . $value['Usuario'] . ' </option>';
    }
}

function guardar()
{
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];
    $Nombre = $_POST['Nombre'];
    $Telefono = $_POST['Telefono'];
    $Direccion = $_POST['Direccion'];
    $Ciudad = $_POST['Ciudad'];
    $Barrio = $_POST['Barrio'];
    $Correo = $_POST['Correo'];
    $Edad = $_POST['Edad'];
    $Tipodedocumento = $_POST['Tipodedocumento'];
    $Numerodedocumento = $_POST['Numerodedocumento'];



    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "INSERT INTO `clientes` (`idCliente`, `Usuario`, `Contrasena`, `Nombre`, `Telefono`, `Direccion`, `Cuidad`, `Barrio`, `Correo`, `Edad`, `Tipodedocumento`, `Numerodedocumento`) VALUES 
(NULL, '" . $Usuario . "', '" . $Contrasena . "', '" . $Nombre . "', '" . $Telefono . "', '" . $Direccion . "', '" . $Ciudad . "', '" . $Barrio . "', '" . $Correo . "', '" . $Edad . "','" . $Tipodedocumento . "', '" . $Numerodedocumento . "');";

    $resultado = $conexion->executeInstruction($InstruccionSQL);

    if ($resultado == true) {
        echo "Datos de Cliente Guardado Correctamente";
    } else {
        echo "No fué posible guardar los datos del Cliente";
    }
}
function modificar()
{
    $idCliente = $_POST['idCliente'];
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];
    $Nombre = $_POST['Nombre'];
    $Telefono = $_POST['Telefono'];
    $Direccion = $_POST['Direccion'];
    $Ciudad = $_POST['Ciudad'];
    $Barrio = $_POST['Barrio'];
    $Correo = $_POST['Correo'];
    $Edad = $_POST['Edad'];
    $Tipodedocumento = $_POST['Tipodedocumento'];
    $Numerodedocumento = $_POST['Numerodedocumento'];

    $conexion = new PDODB();

    $conexion->connect();

    $InstruccionSQL = "UPDATE `clientes` 
                        SET `Usuario` = '" . $Usuario . "', 
                        `Contrasena` = '" . $Contrasena . "', 
                        `Nombre` = '" . $Nombre . "', 
                        `Telefono` = '" . $Telefono . "', 
                        `Direccion` = '" . $Direccion . "', 
                        `Ciudad` = '" . $Ciudad . "', 
                        `Barrio` = '" . $Barrio . "' ,
                        `Correo` = '" . $Correo . "', 
                        `Edad` = '" . $Edad . "' ,
                        `Tipodedocumento` = '" . $Tipodedocumento . "', 
                        `Numerodedocumento` = '" . $Numerodedocumento . "' 
                        WHERE `idCliente` = '" . $idCliente . "';";
    $resultado = $conexion->executeInstruction($InstruccionSQL);

    if ($resultado == true) {
        echo "Usuario modificado correctamente.";
    } else {
        echo "No fue posible modificar el usuario.";
    }
}
