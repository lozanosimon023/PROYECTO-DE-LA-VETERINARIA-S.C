<section class="content">
  <div class="container-fluid">
    <div class="container m">
      <H5>
        <center>ADMINISTRAR PEDIDOS</center>
      </H5>
      <BR>
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <div class="form-group col-md-12">
              <div class="col-">
                <br>
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre">
              </div>
              <br>
              <div class="col-">
                <label for="celular">Celular</label>
                <input type="number" class="form-control" id="celular" name="celular">
              </div>
              <br>
              <div class="col-">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion">
              </div>
            </div>

          </div>
          <div>
            <a class="btn btn-primary mt-3" onclick="guardarPedidos()">Guardar</a>
          </div>


        </div>
      </div>
    </div>
    <section class="col connectedSortable mt-3">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Cliente</th>
            <th scope="col">Dirección</th>
            <th scope="col">Celular</th>
            <th scope="col">Total</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Modificar</th>
            <th scope="col">Detalle</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </section>
  </div>
</section>

<!-- Modal de ModificarPedidos -->
<div class="modal fade" id="ModificarPedido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar pedido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModificarPedido">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="ActualizarPedido()">Actualizar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de DetallePedido -->
<div class="modal fade" id="DetallePedido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detalle pedido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyDetallePedido">
        <div id="formAgregarProducto">
        </div>
        <div id="tablaListadoProductos">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!-- <button type="button" class="btn btn-primary" onclick="ActualizarPedido()">Actualizar</button> -->
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    listarPedidos();
  });
</script>