<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <H1>
         <center>Administrar Clientes</center>
      </H1>
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="form group row">
                  <div class="col-6">
                     <label for="Dirección">Usuario</label>
                     <input type="text" class="form-control" name="Usuario" id="Usuario">
                  </div>
                  <div class="col-6">
                     <label for="Dirección">Contraseña</label>
                     <input type="text" class="form-control" name="Contrasena" id="Contrasena">
                  </div>
                  <div class="col-6">
                     <label for="nombre">Nombres</label>
                     <input type="text" class="form-control" name="Nombre" id="Nombre">
                  </div>
                  <div class="col-6">
                     <label for="Telefono">Telefono</label>
                     <input type="text" class="form-control" name="Telefono" id="Telefono">
                  </div>
                  <div class="col-6">
                     <label for="Dirección">Direccion</label>
                     <input type="text" class="form-control" name="Direccion" id="Direccion">
                  </div>
                  <div class="col-6">
                     <label for="apellido">Ciudad</label>
                     <input type="text" class="form-control" name="Ciudad" id="Ciudad">
                  </div>
                  <div class="col-6">
                     <label for="Dirección">Barrio</label>
                     <input type="text" class="form-control" name="Barrio" id="Barrio">
                  </div>
                  <div class="col-6">
                     <label for="Correo">Correo Electronico</label>
                     <input type="text" class="form-control" name="Correo" id="Correo">
                  </div>
                  <div class="col-6">
                     <label for="Edad">Edad</label>
                     <input type="text" class="form-control" name="Edad" id="Edad">
                  </div>
                  <div class="col-6">
                     <label for="Tipodedocumento">Tipo de documento</label>
                     <input type="text" class="form-control" name="Tipodedocumento" id="Tipodedocumento">
                  </div>
                  <div class="col-6">
                     <label for="Numerodedocumento">Numero de documento</label>
                     <input type="text" class="form-control" name="Numerodedocumento" id="Numerodedocumento">
                  </div>
               </div>
            </div>
         </div>
         <div class="btn-group row ">
            <div class="col-4 mt-4 ">
               <input class="btn btn-success" value="Guardar" onclick="guardarCliente()">
            </div>
         </div>
      </div>
   <!-- Orders -->
      <div class="orders">
         <div class="row">
            <div class="col-xl-12 mt-5">
               <div class="card">
                  <div class="card-body">
                     <h4 class="box-title">CLIENTES</h4>
                  </div>
                  <div class="card-body--">
                     <div class="table-stats order-table ov-h">
                        <table class="table table-hover">
                           <thead class="thead-dark">
                              <tr>
                                 <th class=serial">#</th>
                                 <th>Usuario</th>
                                 <th>Nombre</th>
                                 <th>Telefono</th>
                                 <th>Dirección</th>
                                 <th>Ciudad</th>
                                 <th>Barrio</th>
                                 <th>Correo Electronico</th>
                                 <th>Edad</th>
                                 <th>Tipo de documento</th>
                                 <th>Numero de documento</th>
                                 <th>Modificar
                                 </th>
                                 <th>Eliminar</th>

                              </tr>
                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <!-- /.card-body -->
            </div>
            <!-- /.card -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Control Sidebar -->
<!-- Modal -->
<div class="modal fade" id="modalModificarClientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModificarUsuario">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="modificarUsuarios()">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>
   $(document).ready(function(){
      listarClientes();
   });
</script>