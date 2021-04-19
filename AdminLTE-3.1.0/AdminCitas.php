<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
  

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/AdminLTE-3.1.0/MenuAdministrador.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Veterinaria San Agustin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                ADMINISTRACIÓN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/AdminLTE-3.1.0/AdminUsuarios.html" class="nav-link active" >
                  <i class="far fa-circle nav-icon "></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/AdminLTE-3.1.0/AdminProductos.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/AdminLTE-3.1.0/AdminPedidos.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pedidos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/AdminLTE-3.1.0/AdminCitas.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Citas</p>
                </a>
              </li>
              <li class="nav-item">  <!---Perfil-->
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Perfil
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link" data-toggle="modal" data-target="#CerrarSesion">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Cerrar Sesión</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          
          
        </ul>         
        
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Citas</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    
    <section class="content">
      <div class="container-fluid">
        <!-- TABLA CITAS-->
        
        <div class="container">
          <div class="row">
            <div class="col">
                <div class="form-group row">
                  <div class="col-4">
                    <label for="Nombres">Nombres del Paciente</label>
                    <input type="text" class="form-control" id="nombres" name="nombres">
                  </div>
                  <div class="col-4">
                    <label for="Apeliidos">Edad</label>
                    <input type="number" class="form-control" id="apellidos" name="apellidos">
                  </div> 
                  <div class="form-group col-md-4">
                    <label for="inputState">Sexo</label>
                    <select id="inputState" class="form-control">
                      <option selected>Hembra</option>
                      <option>Macho</option>
                    </select>
                  </div> 
                                
                </div>
                <div class="form-group row">
                  <div class="col-4">
                    <label for="Edad">Nombre del Acompañante</label>
                    <input type="number" class="form-control" id="apellidos" name="Edad">
                  </div>  
                  <div class="form-group col-md-4">
                    <label for="inputState">Tipo de Consulta</label>
                    <select id="inputState" class="form-control">
                      <option selected>Radiografia</option>
                      <option>Profilaxis</option>
                      <option>Ecografias</option>
                    </select>
                  </div>
                  <div class="col-4">
                    <label for="Telefono">Correo</label>
                    <input type="number" class="form-control" id="dirección" name="telefono">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-6">
                    <label for="NumeroContacto">Numero de Contacto</label>
                    <input type="" class="form-control" id="contacto" name="Contacto">
                  </div>
                  <div class="col-6">
                    <label for="Telefono">Fecha y Hora</label>
                    <input type="datetime-local" class="form-control" id="dirección" name="telefono">
                  </div>
                </div>
                <div>
                 <button type="button" class="btn btn-primary">Enviar</button>
               </div>


              
            </div>            
      </div>
    
    </div>
          <section class="col connectedSortable mt-3">

            <table class="table table-striped table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre Paciente</th>
                  <th scope="col">Edad</th>
                  <th scope="col">Sexo</th>
                  <th scope="col">Nombre Acompañante</th>
                  <th scope="col">Tipo Consulta</th>
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
                  <td>5</td>
                  <td>Macho</td>
                  <td>Luis Lopez</td>
                  <td>Radiografia</td>
                  <td>luislopm@hotmail.com</td>
                  <td>3005515518</td>
                  <td>26/09/2021</td>
                  <td>8:00am</td>
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
                  <td>3</td>
                  <td>Hembra</td>
                  <td>Angela Aquite</td>
                  <td>Profilaxis</td>
                  <td>AngelaAq23@hotmail.com</td>
                  <td>3005515518</td>
                  <td>02/09/2021</td>
                  <td>8:45am</td>
                  <td>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn btn-warning">Modificar</button>
                  </td>

                </tr>
                
                <tr>
                  <th scope="row">3</th>
                  <td>Juana</td>
                  <td>6</td>
                  <td>Hembra</td>
                  <td>Andres Martinez</td>
                  <td>Consulta General</td>
                  <td>AndresMar20@hotmail.com</td>
                  <td>3005515518</td>
                  <td>25/09/2021</td>
                  <td>10:00am</td>
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
                  <td>3</td>
                  <td>Macho</td>
                  <td>Luisa Mesa</td>
                  <td>Cirugia</td>
                  <td>Lumesa29p@hotmail.com</td>
                  <td>3005515518</td>
                  <td>29/10/2021</td>
                  <td>11:00am</td>
                  <td>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn btn-warning">Modificar</button>
                  </td>

                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Lucas</td>
                  <td>9</td>
                  <td>Macho</td>
                  <td>Mateo Muñoz</td>
                  <td>Urgencias</td>
                  <td>Matm25p@hotmail.com</td>
                  <td>3005515518</td>
                  <td>17/10/2021</td>
                  <td>2:00am</td>
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
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->
  </div>
  <!--Modal Cerrar Sesisón-->
 <div class="modal fade" id="CerrarSesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CONFIRMAR CIERRE DE SESIÓN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estas seguro que desea Cerrar Sesión?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-info">Cerrar</button>
      </div>
    </div>
  </div>
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
