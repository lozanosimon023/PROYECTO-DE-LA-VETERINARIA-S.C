<?php

require_once '../Modelo/conexion.php';
$conexion = new PDODB();
$conexion->connect();

$idCita = $_POST['idCita'];

$consulta = "SELECT * FROM tbl_citas where idCitas = " . $idCita;
$listado = $conexion->executeInstruction($consulta);

foreach ($listado as $key => $value) {
    echo '
    <input type="hidden" id="idCita" name="idCita" value="' . $value['idCitas'] . '">   
    <input id="idCitaFecha" name="idCitaFecha" value="' . date("c", strtotime($value['Fecha_Hora'])) . '">   
    <div class="row">
        <div class="col">     
            <div class="form-group row">
                <div class="col-6">
                    <label for="NombreAcompañante">Cliente</label>
                    <select id="clienteCita_Modal" name="clienteCita_Modal" class="form-control" data-valueid="' . $value['idCliente'] . '">
                    <option value=""></option>
                    </select>
                </div>            
                <div class="col-6">
                    <label for="Nombres">Paciente</label>
                    <select id="paciente_Modal" name="paciente_Modal" class="form-control" data-valueid="' . $value['idPaciente'] . '">
                    <option value=""></option>
                    </select>
                </div>           
            </div>
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label aria-placeholder="inputState">Tipo de Consulta </label>
                    <select id="tipoConsulta_Modal" class="form-control" data-valueid="' . $value['idTipoConsulta'] . '">
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="Fecha-Hora">Fecha-Hora</label>
                    <input type="datetime-local" class="form-control" id="Fecha_Modal" name="Fecha_Modal" value=date"' . $value['Fecha_Hora'] . '">
                </div>
            </div>
        </div>
    </div>';
}
