<?php
include("../DataBase/conexion.php");
?>
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
                <input type="text" class="form-control" id="apellidos" name="CorreoElectronico">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-6">
                <label for="Edad">Edad</label>
                <input type="number" class="form-control" id="apellidos" name="Edad">
              </div>
              <div class="col-6">
                <label for="Telefono">Celular</label>
                <input type="number" class="form-control" id="dirección" name="telefono">
              </div>
              <div>
                <button id="btnCrearUsuario" type="submit" class="btn btn-primary mt-3">Enviar</button>
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
            <th scope="col">Eliminar</th>
            <th scope="col">Modificar</th>
          </tr>
        </thead>
        <tbody>
          <?php include("./logica/mostrarUsuarios.php"); ?>
        </tbody>
      </table>
    </section>
  </div>
</section>

<script type="text/javascript">
  $(document).ready(function() {
    $('#btnCrearUsuario').click(function() {
      var datos = $('#frmajax').serialize();
      $.ajax({
        type: "POST",
        url: "./logica/guardarUsuario.php",
        data: datos,
        success: function(r) {
          if (r == 1) {
            alert("Usuario agregado con exito.");
          } else {
            alert("Falló al ingresar el usuario.");
          }
        }
      });

      return false;
    });
  });
</script>