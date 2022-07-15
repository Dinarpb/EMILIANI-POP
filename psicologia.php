<?php 
include("header.php")   
?>
   <!-- Hero Area Start-->
   <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/psicologia.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>Departamento Psicología</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- Hero Area End -->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                    <img class="card-img rounded-0" src="/assets/img/psicologia/psicologia.jpg" alt="">
                </div>
                  <div class="blog_details">
                     <h2>Departamento Psicología</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> Licda. Mitzi Rabanales</a></li>
                        <li><a href="#"><i ></i> 2022</a></li>
                     </ul>
                     <p class="excert">
                        El departamento de Psicología ofrece una atención psicológica de manera ética y profesional, con el objetivo de brindar herramientas necesarias que requiera cada alumno que lo solicite para un crecimiento y transformación personal.
                     </p>
                     <ul class="list-group list-group-flush">
                        <li class="list-group-item">Apoyo emocional/Psicoterapia</li>
                        <li class="list-group-item">Adecuación Curricular</li>
                        <li class="list-group-item">Evaluaciones Psicológica</li>
                        <li class="list-group-item">Trabajo psicológico de orientación a padres de Familia.</li>
                        <li class="list-group-item">Trabajo psicológico de orientación a docentes</li>
                      </ul>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            Confiar en ti mismo no garantiza el éxito, pero no hacerlo garantiza el fracaso (Albert Bandura)
                        </div>
                     </div>
                    </div>
               </div>
              
               <div class="comment-form">
                  <h4>Inscripción al programa de Psicología</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Comentario"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Nombre">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="website" id="website" type="number" placeholder="Teléfono">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Enviar</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  
                  <aside class="single_sidebar_widget newsletter_widget">
                     <h4 class="widget_title">Boletines informativos-pastorales</h4>
                     <form method="post">
                        <div class="form-group"  >
                              <input type="hidden" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" value="cindybenito10@gmail.com" name="email" required> <br>
                              <input type="text" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" name="asunto" placeholder="Ingrese su Nombre" required> <br>
                              <input type="text" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" name="msg" placeholder="Ingrese su Correo" required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit" name="enviar"> Suscribete </button>
                     </form>

                     <?php 
                     include("correo.php");
                     ?>
                  </aside>

                 <aside class="single_sidebar_widget newsletter_widget">
                    <h4 class="widget_title">Grupo de WhatsApp-Pastoral</h4>
                    <form target="_blank" action="https://chat.whatsapp.com/GjgW7PMYkNH4T7LuFxLy16">
                     
                       <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                          type="submit">  Ingresar </button>
                    </form>
                 </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Facebook</h4>
                    
                     <div class="fb-page" data-href="https://www.facebook.com/IESGT/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/IESGT/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/IESGT/">Instituto Emiliani Somascos</a></blockquote></div>
                    
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     
                  </aside>
                  
                 
                  
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
   <?php include('footer.php')?>