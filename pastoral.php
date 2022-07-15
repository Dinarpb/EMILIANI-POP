<?php 
include("header.php")   
?>

   <!-- Hero Area Start-->
   <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/pastoral.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>Departamento Pastoral</h2>
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
                     <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                      </div>
                  </div>
                  <div class="blog_details">
                     <h2>Departamento Pastoral</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> Coordinador Armando García</a></li>
                        <li><a href="#"><i ></i> 2022</a></li>
                     </ul>
                     <p class="excert">
                        Jerónimo Emiliani nació en Venecia en 1486. En 1506 entró en la vida pública como sol-dado de la República veneciana, llegando a ejercer el cargo de gobernador. Tras la expe-riencia de su liberación de la cárcel en un epi-sodio bélico en 1511, poco a poco interioriza su experiencia de fe y da un giro radical y deci-dido a su vida, cambiando de costumbres, re-cuperando las prácticas religiosas, leyendo y meditando la Palabra de Dios. 
                     </p>
                     <p>
                        En 1528 Italia entera se ve invadida de una grandísima hambruna. Jerónimo, tras re-partir su patrimonio a los pobres, junto con otros cristianos, se dedicaba a la asistencia de los enfermos “incurables”. A partir de 1531 deja definitivamente su casa, viviendo en dife-rentes obras cuidando y educando a niños y jóvenes sin familia, abandonados, víctimas de las guerras y de las enfermedades. A partir de 1532, organiza obras de caridad y orfelinatos en  diferentes  ciudades,  logrando  que  otros cristianos, sacerdotes y seglares, se involucra-sen en sus proyectos y participasen activa-mente en cada nueva acción
                     </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                           San Jerónimo Emiliani, Ruega por nostros y por todos los huérfanos del mundo...
                        </div>
                     </div>
                     <p>
                        Jerónimo crea en 1534 la “Compañía de los Siervos de los Pobres” para organizar las obras y atender a los niños. Escogerá una pe-queña aldea, Somasca, cerca de Como, para sede de su organización. Sin embargo, tras una nueva epidemia, Jerónimo se contagia de peste. El 8 de febrero de 1537, tras una vida de entrega a los demás, muere en Somasca.
                     </p>
                     <p>
                        San Jerónimo centró su vida en la oración al crucificado y sobre todo, en el amor a Cristo. Amor, que supo demostrar con la inmensa ternura que tenía conlos niños y jóvenes desamparados
                     </p>
                  </div>
               </div>
              
               <div class="comment-form">
                  <h4>Apoyo pastoral</h4>
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