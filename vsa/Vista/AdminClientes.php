<section class="content">
  <div class="container-fluid">
    <div class="container m">
      <h5>
        <center>ADMINISTRAR CLIENTES</center>
      </h5>
      <BR>
      <div class="row">
        <div class="col">
          <form id="frmajax" method="POST">
            <div class="form-group row">
              <div class="col-6">
                <label for="Nombres">Nombre</label>
                <input type="text" class="form-control" id="nombres" name="nombres" required>
              </div>
              <div class="col-6">
                <label for="Apeliidos">Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" required>
              </div>

            </div>
            <div class="form-group row">
              <div class="col-6">
                <label for="CorreoElectronico">Correo</label>
                <input type="text" class="form-control" id="email" name="email" required>
              </div>
              <div class="col-6">
                <label for="contrasena">Contraseña</label>
                <input type="text" class="form-control" id="contrasena" name="contrasena" required>
              </div>
              <div>
                <a class="btn btn-primary mt-3" type="submit" onclick="guardarClientes()">Guardar</a>
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
            <th scope="col">Celular</th>
            <th scope="col">Correo</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Eliminar</th>
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
    listarCliente();
  });
</script>