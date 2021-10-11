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
            <div class="col-6">
              <label for="Nombres">Nombres del paciente</label>
              <input type="text" class="form-control" id="paciente" name="paciente">
            </div>
            <div class="col-6">
              <label for="NombreAcompañante">Nombre del cliente</label>
              <input type="text" class="form-control" id="cliente" name="cliente">
            </div>

          </div>
          <div class="form-group row">
            <div class="form-group col-md-6">
              <label aria-placeholder="inputState">Tipo de Consulta </label>
              <select id="tipoConsulta" class="form-control">
                <option selected disabled></option>
                <option>3</option>
                <option>Profilaxis</option>
                <option>Vacunación</option>
                <option>Ecografia</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="Fecha-Hora">Fecha-Hora</label>
              <input type="datetime-local" class="form-control" id="Fecha" name="Fecha">
            </div>
          </div>
        </div>
      </div>
      <div>
        <input class="btn btn-primary mt-3" value="Guardar" onclick="guardarCitas()">
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
    listarCitas();
  });
</script>