<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Licorera DAV</title>
 <!-- Favicons -->
 <link href="../Groovin/assets/img/favicon.png" rel="icon">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="../vista/admin/plugins/fontawesome-free/css/all.min.css">
 <!-- Ionicons -->
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <!-- Tempusdominus Bbootstrap 4 -->
 <link rel="stylesheet" href="../vista/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
 <!-- iCheck -->
 <link rel="stylesheet" href="../vista/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
 <!-- JQVMap -->
 <link rel="stylesheet" href="../vista/admin/plugins/jqvmap/jqvmap.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="../vista/admin/dist/css/adminlte.min.css">
 <!-- overlayScrollbars -->
 <link rel="stylesheet" href="../vista/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
 <!-- Daterange picker -->
 <link rel="stylesheet" href="../vista/admin/plugins/daterangepicker/daterangepicker.css">
 <!-- summernote -->
 <link rel="stylesheet" href="../vista/admin/plugins/summernote/summernote-bs4.css">
 <!-- Google Font: Source Sans Pro -->
 <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../vista/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../vista/MenuCliente.hphp" class="brand-link">
      <img src="../vista/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Men?? Pedido</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../vista/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Deisy</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="nav-icon fas fa-tachometer-alt"></i>
                   <p>
                     Opciones
                     <i class="right fas fa-angle-left"></i>
                   </p>
                 </a>
                 <ul class="nav nav-treeview">
                   
                   <li class="nav-item">
                     <a href="#" class="nav-link" onclick="cargar('AdminPedidos.php')">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Pedidos</p>
                     </a>
                   </li>
                 </ul>
               </li>
               <ul class="nav nav-treeview">
                   
                   <li class="nav-item">
                     <a href="#" class="nav-link" onclick="cargar('AdminDetallePedidos.php')">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Detalle Pedido</p>
                     </a>
                   </li>
                   
                 </ul>
                 <ul class="nav nav-treeview">
                   
                   <li class="nav-item">
                     <a href="#" class="nav-link" onclick="cargar('AdminPedidos.php')">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Administrador Pedidos</p>
                     </a>
                   </li>
                   
                 </ul>
                 <ul class="nav nav-treeview">
                   
                   <li class="nav-item">
                     <a href="#" class="nav-link" onclick="cargar('AdminDetallePedido.php')">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Administrador Detalle Pedido</p>
                     </a>
                   </li>
                   
                 </ul>
                 <ul class="nav nav-treeview">
                   
                   <li class="nav-item">
                     <a href="#" class="nav-link" onclick="cargar('AdminProductos.php')">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Administrador Productos</p>
                     </a>
                   </li>
                   
                 </ul>
               <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Pefil
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                 
                  <li class="nav-item">
                    <a href="" class="nav-link" data-toggle="modal" data-target="#CerrarSesion">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Cerrar Sesion</p>
                    </a>
                  </li>
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
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!--AQUI VA EL CONTENIDO PRINCIPAL-->
    <div id="qCarga">
    </div>
  </div>  
  
    <!-- Main content -->
    

            
            

 <!--Modal Cerrar Sesis??n-->
 <div class="modal fade" id="CerrarSesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CONFIRMAR CIERRE DE SESI??N</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ??Est??s seguro que deseas Cerrar Sesi??n?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Cerrar Sesi??n</button>
      </div>
    </div>
  </div>
</div>
            
 
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../vista/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../vista/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../vista/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../vista/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../vista/admin/plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="../vista/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../vista/admin/plugins/moment/moment.min.js"></script>
<script src="../vista/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../vista/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../vista/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../vista/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../vista/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../vista/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../vista/admin/dist/js/demo.js"></script>
  <!-- Importando mi Script -->
  <script src="lib/scripts/myScript.js"></script>
</body>
</html>