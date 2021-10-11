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
              <div class="">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion">
              </div>
            </div>

          </div>
          <div class="form-group row">
            <div class="col-6">
              <label for="celular">Celular</label>
              <input type="number" class="form-control" id="celular" name="celular">
            </div>
            <div class="col-6">
              <label for="total">Total</label>
              <input type="number" class="form-control" id="total" name="total">
            </div>


            <div>
              <a class="btn btn-primary mt-3" onclick="guardarPedidos()">Guardar</a>
            </div>

          </div>
        </div>
      </div>
    </div>
    <section class="col connectedSortable mt-3">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Dirección</th>
            <th scope="col">Celular</th>
            <th scope="col">Total</th>
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
    listarPedidos();
  });
</script>