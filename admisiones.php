<?php include("header.php")?>

    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/admisiones/admin2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Admisiones 2023</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class="job-post-company pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
                        <div class="single-job-items mb-50">
                            <div class="job-items">
                                <div class="company-img company-img-details">
                                    <a href="#"><img src="assets/img/admisiones/logo.png"  class="img-fluid " alt=""></a>
                                </div>
                            </div>
                        </div>
                          <!-- job single End -->
                        <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h1>Proceso de admisiones</h1>
                                </div>
                                <a href="https://admisiones.wuupa.com/admisionesLogin.php" target="_blank"><img src="assets/img/admisiones/P1.png"  class="img-fluid" alt=""></a>
                                <img src="assets/img/admisiones/P2.png"  class="img-fluid "  alt=""></a>
                                <img src="assets/img/admisiones/P3.png"  class="img-fluid" alt=""></a>
                                <img src="assets/img/admisiones/P4.png"  class="img-fluid" alt=""></a>
                                <img src="assets/img/admisiones/P5.png"  class="img-fluid" alt=""></a>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                               
                                <div class="comment-form">
                                    <h4>Información de proceso de admisiones 2023</h4>
                                    <form action="enviarcontacto.php" method="POST">
    <br>
    <?php if(isset($_SESSION['message'])) { ?>
                    
                    <div class="alert alert-<?= $_SESSION['message_type'];?>
                    alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>  

                    <?php session_unset(); } ?>
        <input required type="text" name="Nombre" class="form-control" style="width:100%;border-color:black" placeholder="Nombre" id="Nombre" onkeypress="return nom_ape(event)">
        <br>
        <input required class="form-control" style="width:100%;border-color:black" type="email" name="Correo" id="Correo" placeholder="Correo">
        <br>
        <input required class="form-control" style="width:100%;border-color:black" type="mensaje" name="Telefono" id="Telefono" placeholder="Teléfono" onkeypress="return num(event)" maxlength="8" >
        <br>
        <textarea required class="form-control" style="height:50%;border-color:black" placeholder="Mensaje" type="mensaje" name="Mensaje" id="Mensaje">
        </textarea>
        <br>
        <button type="submit" class="btn btn-warning" name="envio">Enviar mensaje</button>
        </form>
</div>
    </div>
    </div>
                        </form>
                                 </div>
                            </div>
                           
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Proxima Charla Informativa -->
                           <div class="small-section-tittle">
                               <h4>Proxima Charla Informativa</h4>
                           </div>
                          <ul>
                              <li>Fecha : <span>20 de Agosto 2022</span></li>
                              <li>Lugar: <span>Campus Central, Mixco</span></li>
                              <li>Hora : <span>15:00 horas</span></li>
                              <li>Telefono : <span>5628-8402</span></li>  
                          </ul>
                            <div class="apply-btn2">
                            <a href="https://wa.link/xnfaw5" target="_blank" class="btn">Más información</a>
                          </div>
                       </div>
                        <div class="post-details4  mb-50">
                              <!-- Proxima Charla Informativa -->
                            <!-- ISSUU -->                         
                           <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Catálogo de Admisiones 2023</h4>
                            <div style="position:relative;padding-top:max(60%,326px);height:0;width:100%"><iframe allow="clipboard-write" sandbox="allow-top-navigation allow-top-navigation-by-user-activation allow-downloads allow-scripts allow-same-origin allow-popups allow-modals allow-popups-to-escape-sandbox" allowfullscreen="true" style="position:absolute;border:none;width:100%;height:100%;left:0;right:0;top:0;bottom:0;" src="https://e.issuu.com/embed.html?d=admisiones_2023&u=emilianisomascos"></iframe></div>
                         </aside>
                            <!-- ISSUU -->  
                            <br>  
                        <!-- Card-->
                        <div class="card" style="width: auto;">
                            <a href="https://youtu.be/i2UH45Zk3oQ" target="_blank">
                            <img src="assets/img/admisiones/O1.png" class="card-img-top" alt="...">
                            </a>           
                            </div>
                            <!-- Card-->
                           
                             <!-- Card-->
                        <div class="card" style="width: auto;">
                            <a href="https://youtu.be/pKh2dOoZRPU" target="_blank">
                            <img src="assets/img/admisiones/O2.png" class="card-img-top" alt="...">
                            </a>           
                            </div>
                            <!-- Card-->

                         <!-- Online CV Area Start -->
                            <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="assets/img/gallery/cv_bg.jpg">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-9">
                                            <div class="cv-caption text-center">
                                                <p class="pera1">Certificaciones Técnicas</p>
                                                <p class="pera1"> Plan fin de semana</p>
                                                <a href="https://issuu.com/emilianisomascos/docs/1?fr=sNDI3NDM3Njc5NjQ" target="_blank" class="border-btn2 border-btn4">Descargar nuestra revista de Cursos</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Online CV Area End-->

                             <!-- Facebook-->
                            <br>
                            <div class="fb-page" data-href="https://www.facebook.com/IESGT/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/IESGT/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/IESGT/">Instituto Emiliani Somascos</a></blockquote></div>
                            <!-- Facebook-->

                            
 

                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->
        <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v14.0" nonce="dzT6a20y"></script>
    </main>


    
    <?php include('footer.php')?>