<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$idUsuario = $_POST['id'];

$consulta = "SELECT * FROM tbl_usuarios where id = " . $idUsuario;
$listado = $conexion->executeInstruction($consulta);
foreach ($listado as $key => $value) {
    echo '<div class="row">
            <div class="col">     
                <input type="hidden" id="idUsuario" name="idUsuario" value="' . $value['id'] . '">   
                <div class="form group row">
                <div class="col-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="' . $value['nombre'] . '">
                </div>
                <div class="col-6">
                    <label for="apellido">Apellidos</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" value="' . $value['apellido'] . '">
                </div>
                <div class="col-6">
                    <label for="correo">Correo</label>
                    <input type="text" class="form-control" name="correo" id="correo" value="' . $value['correo'] . '">
                </div>
                <div class="col-6">
                    <label for="Contrasena">Contraseña</label>
                    <input type="text" class="form-control" name="Contrasena" id="Contrasena" value="' . $value['Contrasena'] . '">
                </div>
                </div>
            </div>
        </div>';
}
