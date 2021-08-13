<section class="content">
  <div class="container-fluid">
    <div class="container">
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
              <select name="tipo_producto" id="tipo_producto" class="form-control">
                <option value="1">cama</option>
                <option value="2">guacal burbuja</option>
                <option value="3">guacal espaldero</option>
                <option value="4">correas</option>
                <option value="5">correas retractiles</option>
                <option value="6">bozales</option>
                <option value="7">cuido para perro</option>
                <option value="8">cuido para gato</option>
              </select>
            </div>
          </div>
          <div>
            <input class="btn btn-primary " value="Guardar" onclick="guardarProductos()">
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

      </table>
    </section>
  </div>
</section>