<section class="content">
  <div class="container-fluid">
    <div class="container">
      <H5>
        <center>ADMINISTRAR PRODUCTOS</center>
      </H5>
      <BR>
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <div class="col-6">
              <label for="Nombres">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="col-6">
              <label for="Apeliidos">Precio</label>
              <input type="number" class="form-control" id="precio" name="precio">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="Apeliidos">Tipo Producto</label>
              <select name="tipo_producto_Modal" id="tipo_producto_Modal" class="form-control">
                <option value=""></option>
              </select>
            </div>
          </div>
          <div>
            <a class="btn btn-primary mt-3" onclick="guardarProductos()">Guardar</a>
          </div>
        </div>
      </div>
    </div>

    <section class="col connectedSortable mt-3">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Tipo</th>
            <th scope="col">Modificar</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </section>
  </div>
</section>

<!-- Modal de ModificarProducto -->
<div class="modal fade" id="ModificarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModificarProducto">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="actualizarProducto()">Actualizar</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    listarProductos();
    listarTipoProductos();
  });
</script>