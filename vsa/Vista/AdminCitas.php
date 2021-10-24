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
              </select>
            </div>
            <div class="col-1">
              <label class="text-light">btnAgregarCliente</label>
              <button class="btn btn-success btn-block" onclick="AgregarCliente()">Agregar</button>
            </div>
            <div class="col-4 offset-1">
              <label for="Nombres">Paciente</label>
              <select id="paciente" name="paciente" class="form-control">
              </select>
            </div>
            <div class="col-1">
              <label class="text-light">btnAgregarPaciente</label>
              <button class="btn btn-success btn-block" onclick="AgregarPaciente()">Agregar</button>
            </div>
          </div>

          <div class="form-group row">
            <div class="form-group col-md-5">
              <label aria-placeholder="inputState">Tipo de Consulta </label>
              <select id="tipoConsulta" class="form-control">
              </select>
            </div>
            <div class="form-group col-md-5 offset-1">
              <label for="Fecha">Fecha</label>
              <input type="date" class="form-control" id="Fecha" name="Fecha">
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

<!-- Modal del ModificarCitas -->
<div class="modal fade" id="ModificarCita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Cita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModificarCita">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="actualizarCita()">Actualizar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal del Crear cliente -->
<div class="modal fade" id="CreartCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModificarCita">
        <div class="row">
          <div class="col">
            <form id="frmajax" method="POST">
              <div class="form-group row">
                <div class="col-6">
                  <label for="Nombres">Nombres</label>
                  <input type="text" class="form-control" id="nombres" name="nombres" required>
                </div>
                <div class="col-6">
                  <label for="Apeliidos">Celular</label>
                  <input type="number" class="form-control" id="celular" name="celular" required>
                </div>

              </div>
              <div class="form-group row">
                <div class="col-6">
                  <label for="CorreoElectronico">Correo Electronico</label>
                  <input type="text" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-6">
                  <label for="contrasena">Contraseña</label>
                  <input type="text" class="form-control" id="contrasena" name="contrasena" required>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="guardarCliente()">Crear</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal del Crear paciente -->
<div class="modal fade" id="CrearPaciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModificarCita">
        <div class="row">
          <div class="col">
            <form id="frmajax" method="POST">
              <div class="form-group row">
                <div class="col-6">
                  <label for="Nombres">Cliente</label>
                  <select id="clientePaciente" name="clientePaciente" class="form-control">
                  </select>
                </div>
                <div class="col-6">
                  <label for="nombrePaciente">Nombre Paciente</label>
                  <input type="text" class="form-control" id="nombrePaciente" name="nombrePaciente" required>
                </div>

              </div>
              <div class="form-group row">
                <div class="col-6">
                  <label for="Edad">Edad</label>
                  <input type="number" class="form-control" id="edadPaciente" name="edadPaciente" required>
                </div>
                <div class="col-6">
                  <label for="sexo">Sexo</label>
                  <select id="sexoPaciente" name="sexoPaciente" class="form-control">
                    <option value="" selected disabled></option>
                    <option value="Hembra">Hembra</option>
                    <option value="Macho">Macho</option>
                    <option value="No especificado">No especificado</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="guardarPaciente()">Crear</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    listarClientesPrincipal("#clienteCita");
    listarPacientes();
    listarTipoConsulta()
    listarCitas();
  });
</script>