<?php defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('utilidad/header');
?>

  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 "> <!--col-sm-offset-2 -->
              <p align="justify"><strong><h2>Saludo desde el Santuario</h2></strong></p>
		<p align=”center”><h5><strong>Después de tanto tiempo aquí estamos nuevamente. Desde el Santuario de San Judas Tadeo recibe la bendición de Dios que te ama y con ternura te protege siempre. El Corazón de María te cubre con su manto. San Judas Tadeo nos acompaña en el camino.</strong></h5></p>
    <br>
    <p><strong><h5 align="right">P. Fernando Vega C., claretiano</h5></strong></p>
              
              <h3 align="left">PETICION O AGRADECIMIENTO</h3>
              <input type="text" name="nameCreForm" id="nameCreForm" class="form-control" placeholder="Nombre" required="required">
              
              <textarea name="messageCreForm" id="messageCreForm" class="form-control" rows="2" width="300px" placeholder="Peticion o Agradecimiento de su mensaje" required="required"></textarea>
              
              <div>
                <button type="submit" class="btn-submit" onclick="enviarPeticion()">Enviar Petición</button>
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
              <h3>Oraciones y Alabanzas</h3>
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
        <div class="heading text-center col-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Galeria de Imagen</h2>
          <hr>
          <p><h3>Importante Galería de Imágenes de Nuestro Santo Patrono San Judas Tadeo</h3></p>
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
                      <a href="<? echo base_url()?>index.php/virgen"><h3>Corazón de María y San Judas Tadeo</h3>
                        <p>Diseños y Fotografías</p></a>
                    </div>
                    <div class="folio-overview">
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
                <img class="img-responsive" src="<? echo base_url('asset/images/grupoJuvenil/grupoJuvenil.jpg') ?>" alt="">
              </div>
              <div class="overlay">
                <div class="overlay-content">
                  <div class="overlay-text">
                    <div class="folio-info">
                      <a href="<? echo base_url()?>index.php/grupoJuvenil"><h3>Grupo Juvenil</h3>
                        <p>Fotografias</p></a>
                    </div>
                    <div class="folio-overview">
                      <span class="folio-expand"><a href="<? echo base_url('asset/images/grupoJuvenil/grupoJuvenil.jpg') ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        <div class="col-sm-3">
            <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="50ms">
              <div class="folio-image">
                <img class="img-responsive" src="<? echo base_url('asset/images/sanjudas/imgppal/3.jpg') ?>" alt="">
              </div>
              <div class="overlay">
                <div class="overlay-content">
                  <div class="overlay-text">
                    <div class="folio-info">
                      <a href="<? echo base_url()?>index.php/vigilia"><h3>Vigilias, Oraciones</h3>
                        <p>Diseños, Fotografías</p></a>
                    </div>
                    <div class="folio-overview">
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
                <img class="img-responsive" src="<? echo base_url('asset/images/comunidades/logoMigrantes.jpg') ?>" alt="">
                    </div>
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-text">
                          <div class="folio-info">
                            <a href="<? echo base_url()?>index.php/comunidades"><h3>Comunidades</h3>
                              <p>Fotografías</p></a>
                          </div>
                          <div class="folio-overview">
                      <span class="folio-expand"><a href="<? echo base_url('asset/images/comunidades/logoMigrantespeque.jpg') ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
        
          </div> <!-- fin row -->
      </div> <!-- fin de container-->

  </section><!--/#portfolio-->

  <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Horarios de la Eucaristía y Otra Información</h2>
              <hr>
          <p align="left">información para la comunidad con respecto a los horarios de las Homilías, bautizos, confirmaciones, Horas de Alabanzas, Vigilias Nocturnas, Eventos Parroquiales</p>
        </div>
      </div>
      <div class="pricing-table">
        <div class="row">

          <div class="col-sm-3">
            <div class="single-table wow featured flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h3><strong>Misas Diarias</strong></h3>
              <ul style="text-align: left;">          
                <li>19:30 </li>
                <li>Todos los Jueves hacemos</li>
                <li>la Oración de San Judas Tadeo</li>
                <li>al concluir la Eucaristía</li>
                
              </ul>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3><strong>Actividades Pastorales</strong></h3>
              <ul style="text-align: left;">
                  <li><strong>Primer lunes de mes:</strong> Consejo Pastoral Parroquial. 19:30 hrs</li>
                  <li><strong>Todos los martes:</strong> Reunión Grupo de oración. 16:30 hrs</li>
                  Reunión del Equipo de liturgia. 19:00 hrs

                  <li><strong>Todos los jueves:</strong> Preparación de comida para los hermanos de la calle</li>
                  Comunidad Encuentro con Cristo. Desde las 20:30 hrs
                  <li><strong>Todos los viernes:</strong> Encuentro de padres y niños de la Catequesis de Comunión (2° año). 19:30 hrs</li>
                  <li><strong>Todos los sábados:</strong> Encuentro Catequesis Adultos. 16:30 hrs</li>
                  <li><strong>Tercer sábado de mes:</strong> Adoración Nocturna al Santísimo Sacramento</li>
                  <li><strong>Todos los domingos: </strong>Encuentro de padres y niños de la Catequesis de Comunión (1° año). 10:00 hrs</li>
              </ul>
            </div>
          </div>




          <div class="col-sm-3">
            <div class="single-table wow featured flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h3><strong>28 de cada mes</strong></h3>
              <ul style="text-align: left;">
                <li>09:00 | 10:00</li>
                <li>11:00 | 12:00</li>
                <li>19:30</li>
                <li>Corta Procesión con Réplica de San Judas Tadeo</li><br>
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
            <h2>Parroquia Corazón de María </h2>
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
          <div><h1 align="center">Parroquia Corazón de María </h1></div>
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
 