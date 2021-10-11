<section class="content">
  <div class="container-fluid">
    <div class="container m">
      <h5>
        <center>ADMINISTRAR USUARIOS</center>
      </h5>
      <BR>
      <div class="row">
        <div class="col">
          <form id="frmajax" method="POST">
            <div class="form-group row">
              <div class="col-6">
                <label for="Nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" required>
              </div>
              <div class="col-6">
                <label for="Apeliidos">Apeliidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
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
              <div>
                <a class="btn btn-primary mt-3" type="submit" onclick="guardarUsuarios()">Guardar</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <section class="col connectedSortable mt-3">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Contraseña</th>
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

<!-- Modal del ModificarUsuarios -->
<div class="modal fade" id="ModificarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModificarUsuario">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="actualizarUsuario()">Actualizar</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    listarUsuarios();
  });
</script>