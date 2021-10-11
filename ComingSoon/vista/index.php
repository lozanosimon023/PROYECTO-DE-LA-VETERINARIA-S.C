<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Licorera DAV</title>
      
      <meta content="" name="descriptison">
      <meta content="" name="keywords">
      <!-- Favicons -->
      <link href="../vista/lib/assets/img/favicon.png" rel="icon">
      <link href="../vista/lib/assets/img/favicon.png" rel="favicon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="../vista/lib/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="../vista/lib/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
      <!-- Template Main CSS File -->
      <link href="../vista/lib/assets/css/styleindex.css" rel="stylesheet">
      <!-- =======================================================
         * Template Name: ComingSoon - v2.1.0
         * Template URL: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/
         * Author: BootstrapMade.com
         * License: https://bootstrapmade.com/license/
         ======================================================== -->
   </head>
   <body>

     <!-- ======= Contact Us Section ======= -->
     <section id="contact" class="contact">
      <div class="container">
         <div class="section-title">
            <h2>Iniciar Session</h2>
         </div>
         <div class="row  justify-content-center">
            <div class="col-lg-10">
               <form action="../controlador/ctrollogin.php" method="post">
                  <div class="form-row">
                     
                     
                  </div>
                  <div class="form-row">
                     <div class="col-md-6 form-group">
                        <input type="text" name="email" class="form-control" id="email" placeholder="Correo electrónico" data-rule="minlen:4" data-msg="Por favor introduzca una dirección de correo electrónico válida" />
                        
                     </div>
                     <div class="col-md-6 form-group">
                        <input type="password" class="form-control" name="contrasena" id="contraseña" placeholder="Contraseña" data-rule="email" data-msg="La contraseña es incorrecta" />
                        
                     </div>
                  </div>
                 
                  <div class="form-group">
                     <select class="form-control">
                        <option>Cliente</option>
                        <option>Administrador</option>
                        
                     </select>
                  </div>
                  <div class="text-center"><input class="btn btn-danger" type="submit" value="Enviar"></div>
               </form>
            </div>
         </div>
      </div>
   </section>
   <!-- End Contact Us Section -->

      <!-- ======= Header ======= -->
      <header id="header" class="d-flex align-items-center">
         <div class="container d-flex flex-column align-items-center">
            <h2>Si no logras acceder a nuestra página por tú fraude, podrás hacerlo después del tiempo correspondido.</h2>
            <div class="countdown d-flex justify-content-center" data-count="2021/12/30">
               <div>
                  <h3>%D</h3>
                  <h4>Days</h4>
               </div>
               <div>
                  <h3>%H</h3>
                  <h4>Hours</h4>
               </div>
               <div>
                  <h3>%M</h3>
                  <h4>Minutes</h4>
               </div>
               <div>
                  <h3>%S</h3>
                  <h4>Seconds</h4>
               </div>
            </div>
            
               
               </form>
           
      </header>
      <!-- End #header -->
      <main id="main">
         <!-- ======= About Us Section ======= -->
         <section id="about" class="about">
            <div class="container">
               <div class="row content">
                  <div class="col-lg-6">
                     <h2>¡Hola!</h2>
                     <h3>Nuestra empresa de licores es responsable y por ende para poder ingresar necesitas registrarte.</h3>
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0">
                     <p>
                        Nuestra empresa tiene estrictas normas para poder ingresar, lee con atención para ingresar facilmente.
                     </p>
                     <ul>
                        <li><i class="icofont-check"></i> Debes ser mayor de edad para ver nuestras bebidas con alcohol.</li>
                        <li><i class="icofont-check"></i> Debes poner tú información real, en caso que no sea no podras acceder a nuestros productos.</li>
                        <li><i class="icofont-check"></i> En caso de una mala atención por nuestros empleados puedes ir a nuestro sitio de quejas, reclamos etc.</li>
                     </ul>
                     <p class="font-italic">
                        Esperamos esta información te sirva de ayuda por si no logras acceder.
                     </p>
                  </div>
               </div>
            </div>
         </section>
         <!-- End About Us Section -->
         <!-- ======= Contact Us Section ======= -->
         <section id="contact" class="contact">
            <div class="container">
               <div class="section-title">
                  <h2>Regristrarse</h2>
               </div>
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
                     <label for="Dirección">Dirección</label>
                     <input type="text" class="form-control" name="Dirección" id="Dirección">
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
         </section>
         <!-- End Contact Us Section -->
      </main>
      <!-- End #main -->
      <!-- ======= Footer ======= -->
      <footer id="footer">
      <div class="container">
      <div class="copyright">
      &copy; Copyright <strong><span>ComingSoon</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/ -->
      Designed by <a href="https://bootstrapmade.com/">Deisy Cruz</a>
      </div>
      </div>
      </footer><!-- End #footer -->
      <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
      <!-- Vendor JS Files -->
      <script src="../vista/admin/plugins/jquery/jquery.min.js"></script>
      <script src="../vista/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../vista/lib/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
      <script src="../vista/lib/assets/vendor/php-email-form/validate.js"></script>
      <script src="../vista/lib/assets/vendor/jquery-countdown/jquery.countdown.min.js"></script>
      <!-- Template Main JS File -->
      <script src="../vista/lib/assets/js/main.js"></script>
      <script src="lib/scripts/myScript.js"></script>

   </body>
   
</html>