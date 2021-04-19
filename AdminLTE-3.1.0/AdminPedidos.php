<section class="content">
  <div class="container-fluid">
    <div class="container m">
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <div class="col-4">
              <label for="Nombres">Nombres</label>
              <input type="text" class="form-control" id="nombres" name="nombres">
            </div>
            <div class="form-group col-md-4">
                <label aria-placeholder="inputState">Tipo de Producto</label>
                <select id="inputState" class="form-control">
                <option selected></option>
                <option>Guacal Burbuja</option>
                <option>Guacal Espaldero</option>
                <option>Cama para Perro</option>
                <option>Cuido para Gato</option>
                <option>Correas Retractiles o Extensibles</option>
                </select>
             </div>
            <div class="col-4">
              <label for="Precio">Precio</label>
              <input type="number" class="form-control" id="precio" name="Precio">
            </div>

          </div>
          <div class="form-group row">
            <div class="col-6">
              <label for="Edad">Cantidad</label>
              <input type="number" class="form-control" id="apellidos" name="Edad">
            </div>
            <div class="col-6">
              <label for="Telefono">Dirección</label>
              <input type="text" class="form-control" id="dirección" name="telefono">
            </div>
            
            <div>
              <button type="button" class="btn btn-primary mt-3">Enviar</button>
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
            <th scope="col">Tipo de Procutos</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Dirección</th>
            <th scope="col">Celular</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Modificar</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Luis</td>
            <td>Guacal Burbuja</td>
            <td>120.000</td>
            <td>1</td>
            <td>Calle 46a #51-40</td>
            <td>3005515518</td>
            <td>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
            <td>
              <button type="button" class="btn btn btn-warning">Modificar</button>
            </td>

          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Luisa</td>
            <td>Guacal Espaldero</td>
            <td>100.000</td>
            <td>2</td>
            <td>Calle 50b #90-40</td>
            <td>300551558</td>
            <td>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
            <td>
              <button type="button" class="btn btn btn-warning">Modificar</button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Margarita</td>
            <td>Cama para Perro</td>
            <td>250.000</td>
            <td>1</td>
            <td>Calle 46a #00-18</td>
            <td>3005515500</td>
            <td>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
            <td>
              <button type="button" class="btn btn btn-warning">Modificar</button>
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Jean</td>
            <td>Cuido para Gato</td>
            <td>80.000</td>
            <td>3</td>
            <td>Calle 49a #35-7</td>
            <td>30055155108</td>
            <td>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
            <td>
              <button type="button" class="btn btn btn-warning">Modificar</button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Mateo</td>
            <td>Correas Retractiles o Extensibles</td>
            <td>30.000</td>
            <td>4</td>
            <td>Calle 46a #51-00</td>
            <td>300551551808</td>
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