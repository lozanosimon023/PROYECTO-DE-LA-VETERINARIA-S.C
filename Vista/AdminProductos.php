<?php
include("../DataBase/conexion.php")
?>

<section class="content">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <div class="col-6">
              <label for="Nombres">Nombre</label>
              <input type="text" class="form-control" id="nombres" name="nombres">
            </div>
            <div class="col-6">
              <label for="Apeliidos">Precio</label>
              <input type="number" class="form-control" id="apellidos" name="apellidos">
            </div>
          </div>
          <div>
            <button type="button" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </div>
    </div>

    <section class="col connectedSortable mt-3">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tipo</th>
            <th scope="col">Precio</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Modificar</th>
          </tr>
        </thead>
        <tbody>
          <?php include("../AdminLTE-3.1.0/logica/mostrarProductos.php"); ?>
        </tbody>

      </table>
    </section>
  </div>
</section>