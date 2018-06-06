<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('utilidad/header');
?>
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 "> <!--col-sm-offset-2 -->
              <p align="justify"><strong><h2>Deuteronomio 3:22 - "no los teman, porque Yavé combate por ustedes ."</h2></strong></p>
              <br>
              <h2>PETICION O AGRADECIMIENTO</h2>
              <input type="text" name="nameCreForm" id="nameCreForm" class="form-control" placeholder="Nombre" required="required">
              
              <textarea name="messageCreForm" id="messageCreForm" class="form-control" rows="2" width="300px" placeholder="Peticion o Agradecimiento de su mensaje" required="required"></textarea>
              
              <div>
                <button type="submit" class="btn-submit" onclick="enviarPeticion()">Enviar Peticion</button>
              </div>
          </div>
          <div  class="text-center col-sm-4" >
            <h2>San Judas Tadeo</h2>
            <img src="<? echo base_url('asset/images/sanjudas/sanjudastadeo2.jpg') ?>">
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <a href="<?php echo base_url( ) ?>index.php/sanjudas">
                  <div class="service-icon">
                        <i class="fa fa-stack-exchange"></i>
                  </div>
            </a>
            <div class="service-info">
              <h3>San Judas Tadeo y Sus Devociones</h3>
              <p>Historia de San Judas Tadeo en nuestra parroquia y el Mundo</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <a href="<?php echo base_url( ) ?>index.php/peticiones">
                  <div class="service-icon">
                        <i class="fa fa-stack-exchange"></i>
                  </div>
            </a>
            <div class="service-info">
              <h3>Peticiones, Oraciones y Alabanzas</h3>
              <p>Peticiones, Oraciones y alabanzas a Dios en nombre de San Judas Tadeo</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <a href="<?php echo base_url( ) ?>index.php/himno">
                  <div class="service-icon">
                        <i class="fa fa-stack-exchange"></i>
                  </div>
            </a>
            <div class="service-info">
              <h3>Himno  y Consagraciones</h3>
              <p>Himno a San Judas Tadeo y Consagraciones para san judas Tadeo</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section><!--/#services-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Galeria de Imagen</h2>
          <hr>
          <p><h3>Importante Galeria de Imagenes de Nuestro Santo Patrono San Judas Tadeo</h3></p>
        </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="<? echo base_url('asset/images/sanjudas/imgppal/1.jpg') ?>" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Sagrado Corazón de María</h3>
                    <p>Diseños y Fotografias</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<? echo base_url('asset/images/sanjudas/imgppal/1.jpg') ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="<? echo base_url('asset/images/sanjudas/imgppal/2.jpg') ?>" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>San Judas Tadeo</h3>
                    <p>Diseño, Fotografias</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<? echo base_url('asset/images/sanjudas/imgppal/2.jpg') ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <img class="img-responsive" src="<? echo base_url('asset/images/sanjudas/imgppal/3.jpg') ?>" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Vigilias, Oraciones</h3>
                    <p>Diseños, Fotografias</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<? echo base_url('asset/images/sanjudas/imgppal/3.jpg') ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="<? echo base_url('asset/images/sanjudas/imgppal/4.jpg') ?>" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Homilias y Oraciones</h3>
                    <p>Diseño, Fotografias</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<? echo base_url('asset/images/sanjudas/imgppal/4.jpg') ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Horarios de la Eucaristia y Otra Informacion</h2>
              <hr>
          <p align="left">informacion para la comunidad con respecto a los horarios de las Homilias, bautizos, confirmaciones, Horas de Alabanzas, Vigilias Nocturnas, Eventos Parroquiales</p>
        </div>
      </div>
      <div class="pricing-table">
        <div class="row">
          <div class="col-sm-3">
            <div class="single-table wow featured flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h3>Eucaristias Diarias</h3>
              <div class="price">
                Homilia                             
              </div>
              <ul>

                
                <li>19:30 | 20:30</li>
                <li>Todos los Jueves hacemos</li>
                <li>la Oracion de San Judas Tadeo</li>
                <li>al terminal la Eucaristia de las 19:30</li>
                
              </ul>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3>Actividades Pastorales</h3>
              <ul>
                  <li>Primer lunes de mes: Consejo Pastoral Parroquial. 19:30 hrs</li>
                  <li>Todos los martes: Reunión Grupo de oración. 16:30 hrs</li>
                  Reunión del Equipo de liturgia. 19:00 hrs

                  <li>Todos los jueves: Preparación de comida para los hermanos de la calle</li>
                  Comunidad Encuentro con Cristo. Desde las 20:30 hrs
                  <li>Todos los viernes: Encuentro de padres y niños de la Catequesis de Comunión (2° año). 19:30 hrs</li>
                  <li>Todos los sábados: Encuentro Catequesis Adultos. 16:30 hrs</li>
                  <li>Tercer sábado de mes: Adoración Nocturna al Santísimo Sacramento</li>
                  <li>Todos los domingos: Encuentro de padres y niños de la Catequesis de Comunión (1° año). 10:00 hrs</li>
              </ul>
            </div>
          </div>




          <div class="col-sm-3">
            <div class="single-table wow featured flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h3>28 de cada mes</h3>
              <div class="price">
                Homilia                             
              </div>
              <ul>

                <li>09:00 | 10:00</li>
                <li>11:00 | 12:00</li>
                <li>19:30 | 20:30</li>
                <li>Corta Procesion con Replica</li><br>
              </ul>
            </div>
          </div>



        </div>
      </div>
    </div>
  </section><!--/#pricing-->

  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <BR>
            <h2>Parroquia Basílica del Corazon de maría</h2>
            <p  ALIGN="justify">La Basílica del Corazón de María de Santiago de Chile es el primer templo dedicado en el mundo a su titular y patrona de los misioneros hijos del Inmaculado Corazón de María, llamados también Claretianos, por su fundador, 
              San Antonio María Claret.<br>Esta iglesia, de estilo renacentista y neoclásico, se encuentra localizada en el corazón del 
              barrio San Diego. &nbsp;Fue diseñada por el padre José Viladrich, el hermano Pedro, constructor, 
              en la segunda mitad del siglo XIX.<br>Su edificación se inició en 1856, en terrenos de la congregación de los Misioneros 
              Hijos del Inmaculado Corazón de María, popularmente conocidos como Claretianos. &nbsp;En 1928 se reconoce su calidad de 
              parroquia del Corazón de María y al año siguiente, el Papa Pío XI le confiere el título de basílica, la primera en el mundo 
              dedicada al Corazón de María.<br>La basílica sufrió serios daños estructurales después del terremoto del 27 de febrero de   2010 
              y tras dos años de restauración, fue reabierta el 18 de marzo de 2012.<br>Fue declarada Monumento Histórico en 1987.&nbsp;</p>
          </div>
          <a href="<? echo base_url( )?>index.php/nosotros">Leer mas</a>
        </div>
        <div class="col-sm-6">
          <div><h1 align="center">Basilica del Corazon de Maria</h1></div>
          <div>
            <img src="<? echo base_url('asset/images/slider/foto2.jpg') ?>" alt="">
          </div>
        </div>
      </div>
    </div>

 <div class="row">
   <div class="col">
       <? $this->load->view('utilidad/add_address_video_direccion'); ?>
   </div>
 </div>
</section>
<?
  $this->load->view('utilidad/footer');
?>
 