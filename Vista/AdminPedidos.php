<section class="content">
  <div class="container-fluid">
    <div class="container m">
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <div class="col-6">
              <label for="cliente">Nombre cliente</label>
              <select name="Nomcliente" id="nomcliente" class="form-control">
                <option value=""></option>
                <option value="1">Simón</option>
                <option value="2">Juanca</option>
                <option value="3">Geny</option>
                <option value="4">Clemencia</option>
                <option value="5">David</option>
              </select>
            </div>
            <div class="form-group col-md-6">
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
              <input class="btn btn-primary mt-3" value="Guardar" onclick="guardarPedidos()">
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
            <th scope="col">Nombre</th>
            <th scope="col">Dirección</th>
            <th scope="col">Celular</th>
            <th scope="col">Total</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Modificar</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Luis</td>
            <td>Calle 46a #51-40</td>
            <td>3005515518</td>
            <td>120</td>
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
<script>
  $(document).ready(function() {
    listarPedidos();
  });
</script>