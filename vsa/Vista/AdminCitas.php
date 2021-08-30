<section class="content">
  <div class="container-fluid">
    <div class="container m">
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <div class="col-6">
              <label for="Nombres">Nombres del paciente</label>
              <input type="text" class="form-control" id="nombres" name="nombres">
            </div>
            <div class="col-6">
              <label for="NombreAcompañante">Nombre del cliente</label>
              <input type="text" class="form-control" id="apellidos" name="Edad">
            </div>

          </div>
          <div class="form-group row">

            <div class="form-group col-md-6">
              <label aria-placeholder="inputState">Tipo de Consulta </label>
              <select id="inputState" class="form-control">
                <option selected></option>
                <option>Radiografia</option>
                <option>Profilaxis</option>
                <option>Vacunación</option>
                <option>Ecografia</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="Fecha-Hora">Fecha-Hora</label>
              <input type="datetime-local" class="form-control" id="Fecha-Hora" name="Fecha-Hora">
            </div>
          </div>
          <div class="form-group col-md-">
            <label for="Fecha-Hora">Estado</label>
            <input type="boolean" class="form-control" id="estado" name="estado">
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
          <th scope="col">Estado</th>
          <th scope="col">Eliminar</th>
          <th scope="col">Modificar</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Paco</td>
          <td>Camila</td>
          <td>Radiografia</td>
          <td>24/06/2021 8:00</td>
          <td>Disponible</td>
          <td>
            <button type="button" class="btn btn-danger">Eliminar</button>
          </td>
          <td>
            <button type="button" class="btn btn btn-warning">Modificar</button>
          </td>

        </tr>
        <tr>
          <th scope="row">1</th>
          <td>romeo</td>
          <td>cris</td>
          <td>Profilaxis</td>
          <td>24/09/2021 8:30</td>
          <td>Disponible</td>

          <td>
            <button type="button" class="btn btn-danger">Eliminar</button>
          </td>
          <td>
            <button type="button" class="btn btn btn-warning">Modificar</button>
          </td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>Luna</td>
          <td>Simón</td>
          <td>Radiografia</td>
          <td>24/06/2021 8:00</td>
          <td>No Disponible</td>
          <td>
            <button type="button" class="btn btn-danger">Eliminar</button>
          </td>
          <td>
            <button type="button" class="btn btn btn-warning">Modificar</button>
          </td>
        </tr>

      </tbody>
    </table>
  </section>
  </div>
</section>