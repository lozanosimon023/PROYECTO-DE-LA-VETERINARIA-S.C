
      <!-- Content Header (Page header) -->
      <div class="content-header">
      <div class="container-fluid">
         <H1>
            <center>Administrar Productos</center>
         </H1>
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="form group row">
                     <div class="col-6 mt-4">
                        <label for="nombre" >Nombre</label>
                        <input type="text" class="form-control" name="Nombre" id="Nombre" >
                     </div>
                     <div class="col-6 mt-4">
                        <label for="Cantidad_Volumen" >Ingrese cantidad volumen</label>
                        <input type="text" class="form-control" name="Cantidad_Volumen" id="Cantidad_Volumen" >
                     </div>
                     <div class="col-6 mt-4">
                        <label for="Correo" >Precio unitario</label>
                        <input type="text" class="form-control" name="Precio_Unitario" id="Precio_Unitario" >
                     </div>
                     <div class="col-6 mt-4">
                        <label for="Correo" >Proveedor</label>
                        <select name="proveedor" id="proveedor" class="form-control">
                           
                        </select>
                     </div>
                  </div>
                  <div class="btn-group row ">
                     <div class="col-4 mt-4 ">
                     <input class="btn btn-success" value="Guardar" onclick="guardarProducto()">
                     </div>
                  </div>
                  <!-- Orders -->
                  <div class="orders">
                     <div class="row">
                        <div class="col-xl-12 mt-5">
                           <div class="card">
                              <div class="card-body">
                                 <h4 class="box-title">PRODUCTOS</h4>
                              </div>
                              <div class="card-body--">
                                 <div class="table-stats order-table ov-h">
                                    <table class="table table-hover">
                                       <thead class="thead-dark">
                                          <tr>
                                             <th class="serial">#</th>
                                             <th>Nombre</th>
                                             <th>Cantidad_Volumen</th>
                                             <th>Precio_Unitario</th>
                                             <th>Eliminar</th>
                                             <th>Modificar</th>
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
<div class="modal fade" id="modalModificarProductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModificarProducto">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="modificarProductos()">Save changes</button>
      </div>
    </div>
  </div>
</div>
      <script>
         $(document).ready(function (){
            listarComboProveedores();
            listarProductos();
         });
      </script>
    
   