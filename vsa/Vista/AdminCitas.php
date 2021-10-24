<section class="content">
  <div class="container-fluid">
    <div class="container m">
      <H5>
        <center>ADMINISTRAR CITAS</center>
      </H5>
      <BR>
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <div class="col-4">
              <label for="NombreAcompañante">Cliente</label>
              <select id="clienteCita" name="clienteCita" class="form-control">
                <option value=""></option>
              </select>
            </div>
            <div class="col-1">
              <label class="text-light">btnAgregarCliente</label>
              <button class="btn btn-success btn-block">Agregar</button>
            </div>
            <div class="col-4 offset-1">
              <label for="Nombres">Paciente</label>
              <select id="paciente" name="paciente" class="form-control">
                <option value=""></option>
              </select>
            </div>
            <div class="col-1">
              <label class="text-light">btnAgregarPaciente</label>
              <button class="btn btn-success btn-block">Agregar</button>
            </div>
          </div>

          <div class="form-group row">
            <div class="form-group col-md-5">
              <label aria-placeholder="inputState">Tipo de Consulta </label>
              <select id="tipoConsulta" class="form-control">
              </select>
            </div>
            <div class="form-group col-md-5 offset-1">
              <label for="Fecha-Hora">Fecha-Hora</label>
              <input type="datetime-local" class="form-control" id="Fecha" name="Fecha">
            </div>
          </div>
        </div>
      </div>
      <div>
        <a class="btn btn-primary mb-3" onclick="guardarCitas()">Guardar</a>
      </div>
    </div>

  </div>
  </div>
  <section class="col connectedSortable mt-3">
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre del Paciente</th>
          <th scope="col">Nombre Cliente</th>
          <th scope="col">Tipo Consulta</th>
          <th scope="col">Fecha y hora</th>
          <th scope="col">Eliminar</th>
          <th scope="col">Modificar</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </section>
  </div>
</section>
<script>
  $(document).ready(function() {
    listarClientesPrincipal("#clienteCita");
    listarPacientes();
    listarTipoConsulta()
    listarCitas();
  });
</script>