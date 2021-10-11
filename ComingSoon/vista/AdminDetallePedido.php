
      <!-- Content Header (Page header) -->
      <div class="content-header">
      <div class="container-fluid">
         <H1>
            <center>Administrar Detalle Pedido</center>
         </H1>
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="form group row">
                     <div class="col-6 mt-4">
                        <label for="nombre" >Cantidad</label>
                        <input type="text" class="form-control" name="Cantidad" id="Cantidad" >
                     </div>
                     <div class="col-6 mt-4">
                        <label for="Subtotal" >Subtotal</label>
                        <input type="text" class="form-control" name="Subtotal" id="Subtotal" >
                     </div>
                     <div class="col-6 mt-4">
                        <label for="Correo" >Pedido</label>
                        <select name="pedido" id="pedido" class="form-control">
                           
                        </select>
                     </div>
                     <div class="col-6 mt-4">
                        <label for="Correo" >Producto</label>
                        <select name="producto" id="producto" class="form-control">
                           
                        </select>
                     </div>
                  </div>
                  <div class="btn-group row ">
                     <div class="col-4 mt-4 ">
                     <input class="btn btn-success" value="Guardar" onclick="guardarDetallePedido()">
                     </div>
                  </div>
                  <!-- Orders -->
                  <div class="orders">
                     <div class="row">
                        <div class="col-xl-12 mt-5">
                           <div class="card">
                              <div class="card-body">
                                 <h4 class="box-title">DETALLE PEDIDO</h4>
                              </div>
                              <div class="card-body--">
                                 <div class="table-stats order-table ov-h">
                                    <table class="table table-hover">
                                       <thead class="thead-dark">
                                          <tr>
                                             <th class="serial">#</th>
                                             <th>Cantidad</th>
                                             <th>Subtotal</th>
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
      
      <script>
         $(document).ready(function (){
            listarDetallePedido();
            listarComboPedidos();
            listarComboProductos();
         });
      </script>
    
   