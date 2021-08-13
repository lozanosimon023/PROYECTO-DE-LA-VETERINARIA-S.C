<section class="content">
  <div class="container-fluid">
    <div class="container m">
      <div class="row">
        <div class="col">
          <form id="frmajax" method="POST">
            <div class="form-group row">
              <div class="col-4">
                <label for="Nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres">
              </div>
              <div class="col-4">
                <label for="Apeliidos">Apeliidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos">
              </div>
              <div class="col-4">
                <label for="CorreoElectronico">Correo Electronico</label>
                <input type="text" class="form-control" id="email" name="email">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-4">
                <label for="Edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad">
              </div>
              <div class="col-4">
                <label for="Telefono">Celular</label>
                <input type="number" class="form-control" id="cel" name="cel">
              </div>
              <div class="col-4">
                <label for="contraseña">Contraseña</label>
                <input type="text" class="form-control" id="contraseña" name="contraseña">
              </div>
              <div>
                <input class="btn btn-primary mt-3" value="Guardar" onclick="guardarUsuarios()">
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
            <th scope="col">Edad</th>
            <th scope="col">Celular</th>
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
<script>
  $(document).ready(function() {
    listarUsuarios();
  });
</script>