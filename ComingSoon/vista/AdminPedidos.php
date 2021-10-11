
      <!-- Content Header (Page header) -->
      <div class="content-header">
      <div class="container-fluid">
         <H1>
            <center>Administrar Pedidos</center>
         </H1>
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="form group row">
                     <div class="col-6 mt-4">
                        <label for="Cantidad_Volumen" >Fecha</label>
                        <input type="date" class="form-control" name="Fecha" id="Fecha" >
                     </div>
                     <div class="col-6 mt-4">
                        <label for="Correo" >Total</label>
                        <input type="text" class="form-control" name="Total" id="Total" >
                     </div>
                     <div class="col-6 mt-4">
                        <label for="pedido" >Cliente</label>
                        <select name="cliente" id="cliente" class="form-control">
                           
                        </select>
                     </div>
                  </div>
                  <div class="btn-group row ">
                     <div class="col-4 mt-4 ">
                     <input class="btn btn-success" value="Guardar" onclick="guardarPedidos()">
                     </div>
                  </div>
                  <!-- Orders -->
                  <div class="orders">
                     <div class="row">
                        <div class="col-xl-12 mt-5">
                           <div class="card">
                              <div class="card-body">
                                 <h4 class="box-title">PEDIDOS</h4>
                              </div>
                              <div class="card-body--">
                                 <div class="table-stats order-table ov-h">
                                    <table class="table table-hover">
                                       <thead class="thead-dark">
                                          <tr>
                                             <th class="serial">#</th>
                                             <th>Fecha</th>
                                             <th>Total</th>
                                            
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
            listarComboClientes();
            listarPedidos();
         });
      </script>
    
   