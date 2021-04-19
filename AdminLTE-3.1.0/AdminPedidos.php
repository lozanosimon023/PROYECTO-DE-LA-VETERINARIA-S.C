<section class="content">
  <div class="container-fluid">
    <div class="container m">
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <div class="col-4">
              <label for="Nombres">Nombres del paciente</label>
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
            <div class="col-4">
              <label for="Edad">Edad</label>
              <input type="number" class="form-control" id="apellidos" name="Edad">
            </div>
            <div class="col-4">
              <label for="Telefono">Telefono</label>
              <input type="number" class="form-control" id="dirección" name="telefono">
            </div>
            <div class="col-4">
              <label for="Telefono">Celular</label>
              <input type="number" class="form-control" id="dirección" name="telefono">
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
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Edad</th>
            <th scope="col">Telefono</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Modificar</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Luis</td>
            <td>Lopez</td>
            <td>Luislop25@gmail.com</td>
            <td>19</td>
            <td>300555518</td>
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
            <td>Mesa</td>
            <td>Lumesa@gmail.com</td>
            <td>25</td>
            <td>30055500</td>
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
            <td>Aquite</td>
            <td>MargaritaAqu26@hotmail.com</td>
            <td>59</td>
            <td>30055500</td>
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
            <td>Rojas</td>
            <td>JeanR146@gmail.com</td>
            <td>18</td>
            <td>30055566</td>
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
            <td>Muñoz</td>
            <td>Matm25@gmail.com</td>
            <td>25</td>
            <td>30055188</td>
            <td>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
            <td>
              <button type="button" class="btn btn btn-warning">Modificar</button>
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Juliana</td>
            <td>Toro</td>
            <td>JuliTr16@hotmail.com</td>
            <td>30</td>
            <td>300551935</td>
            <td>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
            <td>
              <button type="button" class="btn btn btn-warning">Modificar</button>
            </td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Andrez</td>
            <td>Martinez</td>
            <td>AndreMar@gmail.com</td>
            <td>30</td>
            <td>30055196</td>
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