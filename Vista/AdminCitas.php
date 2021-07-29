
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
              <label for="Edad">Edad</label>
              <input type="text" class="form-control" id="apellidos" name="Edad">
            </div>
            <div class="form-group col-md-4">
                <label aria-placeholder="inputState">Sexo </label>
                <select id="inputState" class="form-control">
                <option selected></option>
                <option>Hembra</option>
                <option>Macho</option>
                </select>
             </div>
          </div>
          <div class="form-group row">
            <div class="col-4">
              <label for="NombreAcompañante">Nombre del acompañante</label>
              <input type="text" class="form-control" id="apellidos" name="Edad">
            </div>
            <div class="form-group col-md-4">
                <label aria-placeholder="inputState">Tipo de Consulta </label>
                <select id="inputState" class="form-control">
                <option selected></option>
                <option>Radiografia</option>
                <option>Profilaxis</option>
                <option>Vacunación</option>
                <option>Ecografia</option>
                </select>
             </div>
             <div class="col-4">
              <label for="Correo">Correo</label>
              <input type="text" class="form-control" id="Correo" name="Correo">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-6">
              <label for="Celular">Celular</label>
              <input type="number" class="form-control" id="apellidos" name="celular">
            </div>
            <div class="form-group col-md-6">
                <label for="Fecha-Hora">Fecha-Hora</label>
                <input type="datetime-local" class="form-control" id="Fecha-Hora" name="Fecha-Hora">
             </div>
          </div>
           
            <div>
              <button type="button" class="btn btn-primary ">Enviar</button>
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
            <th scope="col">Nombre del Paciente</th>
            <th scope="col">Edad</th>
            <th scope="col">Sexo</th>
            <th scope="col">Nombre del Acompañante</th>
            <th scope="col">Tipo de Consulta</th>
            <th scope="col">Correo</th>
            <th scope="col">Celular</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Modificar</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Paco</td>
            <td>5 años</td>
            <td>Macho</td>
            <td>Luis Lopez</td>
            <td>Radiografia</td>
            <td>Luislop25@gmail.com</td>
            <td>3005515517</td>
            <td>24/06/2021</td>
            <td>8:00</td>
            <td>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
            <td>
              <button type="button" class="btn btn btn-warning">Modificar</button>
            </td>

          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Romeo</td>
            <td>2 años</td>
            <td>Macho</td>
            <td>Luisa Mesa</td>
            <td>Ecografia</td>
            <td>Lumesa@gmail.com</td>
            <td>3005515517</td>
            <td>29/04/2021</td>
            <td>10:00</td>
            <td>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
            <td>
              <button type="button" class="btn btn btn-warning">Modificar</button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Chiqui</td>
            <td>6 años</td>
            <td>Hembra</td>
            <td>Mateo Muñoz</td>
            <td>Vacunación</td>
            <td>Matm25@gmail.com</td>
            <td>3005515517</td>
            <td>11/01/2021</td>
            <td>9:30</td>
            <td>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
            <td>
              <button type="button" class="btn btn btn-warning">Modificar</button>
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Valin</td>
            <td>6 meses</td>
            <td>Macho</td>
            <td>Margarita Aquite</td>
            <td>Urgencias</td>
            <td>MargaritaAqu26@hotmail.com</td>
            <td>3005515517</td>
            <td>09/12/2021</td>
            <td>10:30</td>
            <td>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
            <td>
              <button type="button" class="btn btn btn-warning">Modificar</button>
            </td>
          </tr>
          <tr>
         
          </tr>
        </tbody>
      </table>
    </section>
  </div>
</section>