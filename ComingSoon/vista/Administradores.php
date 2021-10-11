<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <H1>
         <center>Administradores</center>
      </H1>
      <div class="container">
         <div class="row">
            <div class="col">
               <div class="form group row">
                  <div class="col-6">
                     <label for="Usuario">Usuario</label>
                     <input type="text" class="form-control" name="Usuario" id="Usuario">
                  </div>
                  <div class="col-6">
                     <label for="Contraseña">Contraseña</label>
                     <input type="text" class="form-control" name="Contrasena" id="Contrasena">
                  </div>
                  <div class="col-6">
                     <label for="Nombre">Nombre</label>
                     <input type="text" class="form-control" name="Nombre" id="Nombre">
                  </div>
                  <div class="col-6">
                     <label for="Telefono">Telefono</label>
                     <input type="text" class="form-control" name="Telefono" id="Telefono">
                  </div>
                  <div class="col-6">
                     <label for="Correo">Correo</label>
                     <input type="text" class="form-control" name="Correo" id="Correo">
                  </div>
                  
               </div>
            </div>
         </div>
         <div class="btn-group row ">
            <div class="col-4 mt-4 ">
               <input class="btn btn-success" value="Guardar" onclick="guardarAdministradores()">
            </div>
         </div>
      </div>
      <!-- Orders -->
      <div class="orders">
         <div class="row">
            <div class="col-xl-12 mt-5">
               <div class="card">
                  <div class="card-body">
                     <h4 class="box-title">Administradores</h4>
                  </div>
                  <div class="card-body--">
                     <div class="table-stats order-table ov-h">
                        <table class="table table-hover">
                           <thead class="thead-dark">
                              <tr>
                              <th class="serial">#</th>
                                 <th>Usuario</th>
                                 <th>Contrasena</th>
                                 <th>Nombre</th>
                                 <th>Telefono</th>
                                 <th>Correo</th>
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
<script>
   $(document).ready(function(){
      listarAdministradores();
   });
</script>