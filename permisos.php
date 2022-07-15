
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario || Permisos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="shortcut icon" href="logo-PNG - copia.ico" type="image/x-icon">
    <script src="/js/jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="/js/app-permisos.js"></script>
    
    <!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="css/responsive.css">

      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
    
<!-- header inner -->
    <div class="head">
        <div  class="container">
           <div class="row ">
              <div  class="col-md-8">
                 <ul class="email_call">
                    <li><a href="#"><img src="assets/icon/2.png" alt="#"/>2431-0521 | 2431-1140</a></li>
                    <li><a href="#"><img src="assets/icon/1.png" alt="#"/>info@emilianisomascos.edu.gt</a></li>
                 </ul>
              </div>
              <div  class="col-md-4">
                 <ul class="social_icon">
                    <li><a href="https://www.facebook.com/IESGT"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/emilianisomasco?lang=es"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                    <li><a href="https://www.instagram.com/emilianisomascos/"><i class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <!-- header inner -->

    <header>

        
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3. col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>  
                        </div>

                      

                        
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">

                                
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.php">Inicio</a></li>
                                            <li><a href="admisiones.php">Admisiones </a></li>
                                            <li><a href="findesemana.php">Plan Sábado</a></li>
                                            <li><a href="#">Clases Virtuales</a>
                                                <ul class="submenu">
                                                    <li><a href="permisos.php" target="_blank">Permisos</a></li>
                                                    <li><a href="single-blog.html">Horarios virtuales</a></li>
                                                    <li><a href="elements.html">Horarios presenciales</a></li>
                                                    <li><a href="job_details.html">Calendarización</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Contacto</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="https://issuu.com/emilianisomascos/docs/ag_emiliani-zona_3-mixco-2022-nnnn?fr=sNTg1MzM3Njc5NjQ" target="_blank" class="btn head-btn1">Proyecto Educativo</a>
                                    
                                
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->

        
    </header>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3><center>PERMISO DE INGRESO DE EQUIPOS ELECTRÓNICOS</center></h3>
                <hr>
                <form id="form">
                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso</label>
                        <select class="form-select" id="curso" required>
                            <option value=""selected disabled>Seleccione su Curso</option>
                            <option value="Taller/Computación">Taller/Computación</option>
                            <option value="Taller/Dibujo">Taller/Dibujo</option>
                            <option value="Taller/Electricidad">Taller/Electricidad</option>
                            <option value="Taller/Electrónica">Taller/Electrónica</option>
                            <option value="Taller/Mecánica">Taller/Mecánica</option>
                            <option value="CCLL">CCLL</option>
                            <option value="Primero Básico">Primero Básico</option>
                            <option value="Segundo Básico">Segundo Básico</option>
                            <option value="Tercero Básico">Tercero Básico</option>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre completo del estudiante</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="grado" class="form-label">Grado</label>
                            <input type="text" class="form-control" id="grado">
                        </div>
                        <div class="col-md-6">
                            <label for="seccion" class="form-label">Sección</label>
                            <input type="text" class="form-control" id="seccion">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="carrera" class="form-label">Carrera</label>
                        <input type="text" class="form-control" id="carrera">
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="area" class="form-label">Área</label>
                            <input type="text" class="form-control" id="area">
                        </div>
                        <div class="col-md-6">
                            <label for="fecha" class="form-label">Fecha de trámite</label>
                            <input type="text" class="form-control" id="fecha" disabled placeholder="(Se genera automaticamente)">
                        </div>
                    </div>

                    <h4><center>DESCRIPCIÓN DEL EQUIPO</center></h4>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="tipo" class="form-label">Tipo</label>
                            <input type="text" class="form-control" id="tipo" >
                        </div>
                        <div class="col-md-6">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="marca" class="form-label">Marca</label>
                            <input type="text" class="form-control" id="marca" >
                        </div>
                        <div class="col-md-6">
                            <label for="motivo" class="form-label">Motivo</label>
                            <input type="text" class="form-control" id="motivo">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="modelo" class="form-label">Modelo</label>
                            <input type="text" class="form-control" id="modelo">
                        </div>
                        <div class="col-md-6">
                            <label for="instructor" class="form-label">Instructor</label>
                            <input type="text" class="form-control" id="instructor">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="serie" class="form-label">No. Serie</label>
                            <input type="text" class="form-control" id="serie">
                        </div>
                        <div class="col-md-6">
                            <label for="observaciones" class="form-label">Observaciones</label>
                            <input type="text" class="form-control" id="observaciones">
                        </div>
                    </div>

                    <span class="d-block pb-2">Firma digital del Padre de familia</span>
                    <div class="signature mb-2" style="width: 100%; height: 200px;">
                        <canvas id="signature-canvas"
                            style="border: 1px dashed rgb(0, 140, 255); width: 100%; height: 200px;"></canvas>
                    </div>

                    <div class="mb-3">
                        <label for="dpi" class="form-label">DPI padre de familia</label>
                        <input type="text" class="form-control" id="dpi">
                    </div>

                    <center><button type="submit" class="btn btn-primary mb-4">Generar PDF</button></center>
                </form>
            </div>
        </div>
    </div>

</body>
<?php 
include('footer.php');
?>
</html>