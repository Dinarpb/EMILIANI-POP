<?php 
include("header.php")   
?>

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/contacto/contact1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Contacto</h2>
                            <h3 style="color:white">Horario de atención: 7:00h A 17:00h</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Hero Area End -->
    <!-- ================ contact section start ================= -->

      <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Redes Sociales Oficiales</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <a href="http://cp.usastreams.com/pr2g/APPlayerRadioHTML5.aspx?stream=http://hoth.alonhosting.com:4590/stream&fondo=05&formato=mp3&color=17&titulo=3&autoStart=1&vol=7&tipo=20&nombre=RadioEmiliani&botonPlay=2&imagen=https://i.ibb.co/fQ1dvfn/logo-radio-emiliani.png&server=http://hoth.alonhosting.com:4590/status.xslCHUMILLASmount=/stream" target="_blank">
                                <img class="img-fluid" src="assets/img/social/team-1.jpg" alt="https://emilianisomascos.edu.gt/">
                                </a>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Radio Emiliani</h5>
                                <small><www class="emilianisomascos edu gt"></www></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <a href="https://www.youtube.com/channel/UCp4XD5VV-iS03PXl2GxDfPg" target="_blank">
                                <img class="img-fluid" src="assets/img/social/team-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Youtube</h5>
                                <small>Instituto Emiliani Somascos</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                               <a href="https://www.facebook.com/IESGT" target="_blank">
                                <img class="img-fluid" src="assets/img/social/team-3.jpg" alt="">
                               </a>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Facebook</h5>
                                <small>@IESGT</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                              <a href="https://www.instagram.com/emilianisomascos/" target="_blank">
                                <img class="img-fluid" src="assets/img/social/team-4.jpg" alt="">
                              </a>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Instagram</h5>
                                <small>Emiliani Somascos</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">

                </div>
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Contacto</h2>
                    </div>
                    <div class="col-lg-8">
                            <div class="d-flex justify-content-left" style="margin-top:1%">
    
    <div class="card" style="width: 40rem;height:35rem;border-color:black">
    <div class="card-body">
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
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Planta central</h3>
                                <p>2431-1140</p>
                                <p>2431-0521</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>WhatsApp</h3>
                                <p>Admisiones: 5628-8402</p>
                                <p>Coordinación: 3617-5637</p>
                                <p>Plan Sábado: 3617-5602</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>Correo Electrónico</h3>
                                <p>secretariageneral@emilianisomascos.edu.gt</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Maps -->
        <iframe src="https://www.google.com/maps/embed?pb=!4v1618519085349!6m8!1m7!1sNOeD3YbcO0d64kNmYtJvxA!2m2!1d14.64780986442433!2d-90.58125378729423!3f280.8920320101141!4f0!5f0.7820865974627469" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <!-- Maps -->
    <!-- ================ contact section end ================= -->
    <?php include('footer.php')?>