<?php include("header.php")?>

    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/findesemana/f1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Certificaciones Técnicas</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- Support Company Start-->
        <div class="support-company-area fix section-padding2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                                <span>Plan fin de semana</span>
                                <h2>Certificados Técnicos</h2>
                            </div>
                            <div class="support-caption">
                                <p class="pera-top">Forma parte de una gran comunidad nacional e internacional de profesionales técnicos que enriquecen el aprendizaje colaborativo.</p>
                                <p>Vive experiencias de aprendizaje flexibles, innovadoras y personalizables; diseñadas para atender las oportunidades de formación que demanda un entorno laboral en constante cambio y diseña tu propia ruta de aprendizaje y adquiere los conocimientos y competencias específicas que requieres para tu desarrollo.</p>
                                <a href="about.html" class="btn post-btn">Más información</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img">
                            <img src="assets/img/findesemana/f2.jpg" alt="">
                            <div class="support-img-cap text-center">
                                <p>Avaldos por</p>
                                <span>Ministerio de Educación</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->
        <!-- How  Apply Process Start-->
        
        <!-- ISSUU-->

        <div style="position:relative;padding-top:max(60%,326px);height:0;width:100%"><iframe allow="clipboard-write" sandbox="allow-top-navigation allow-top-navigation-by-user-activation allow-downloads allow-scripts allow-same-origin allow-popups allow-modals allow-popups-to-escape-sandbox" allowfullscreen="true" style="position:absolute;border:none;width:100%;height:100%;left:0;right:0;top:0;bottom:0;" src="https://e.issuu.com/embed.html?backgroundColor=%23191919&d=1&u=emilianisomascos"></iframe></div>
        <!-- END ISSUU-->
                            
        <!-- Online CV Area Start -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <!-- Form-->
              <div class="comment-form">
            <h1 class="pera1">Información de cursos plan fin de semana</h1>
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
            </form>
         </div>
    </div>
     <!-- Form end-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Online CV Area End-->
     

    </main>
  
    <?php include('footer.php')?>