

<script>
    function enviarPeticion(){
                var nombre = $('#nameCreForm').val();
                var peticion = $('#messageCreForm').val();
                //alert(nombre);
                //alert(peticion);

                if (nombre == ''){
                  alert('Nombre o correo del creyente');
                  $('#nameCreForm').focus();
                  return false;
                }
                if (peticion == ''){
                      alert('Debe llenar el campo peticion');
                      $('#messageCreForm').focus();
                      return false;
                }
                          $.post( "<?php echo site_url()?>/home_controller/add_comentary_whit_db",
                          {
                            nombre:nombre,
                            peticion:peticion,
                          },
                          function( data ) {
                                            $('#savemodal').modal('show');
                                            $('#nameCreForm').val('');
                                            $('#messageCreForm').val('');
                                            //self.location.reload();
                                            }
                          );
              }

    function submitContactForm(){

            var nombre = $('#nameCre').val();
            var email = $('#emailCre').val();
            var asunto = $('#asunto').val();
            var mensaje = $('#message').val();

            if (nombre == ''){
                  alert('Nombre Requerido');
                  $('#nameCre').focus();
                  return false;
            }
            if (email == ''){
                  alert('Email Requerido');
                  $('#emailCre').focus();
                  return false;
            }
            if (asunto == ''){
                  alert('Asunto requerido');
                  $('#asunto').focus();
                  return false;
            }
            if (mensaje == ''){
                  alert('Mensaje Requerido');
                  $('#message').focus();
                  return false;
            }
                      $.post( "<?php echo site_url()?>/home_controller/contacto",
                      {
                        nombre:nombre,
                        email:email,
                        asunto:asunto,
                        mensaje:mensaje,
                      },
                      function( data ) {
                        $('#savemodal').modal('show');
                        var nombre = $('#nameCre').val('');
                        var email =  $('#emailCre').val('');
                        var asunto =  $('#asunto').val('');
                        var mensaje = $('#message').val('');
                        $('#myModal').modal('hide');
                                        //self.location.reload();
                                        }
                      );
          }
</script>
            <!-- Modal de Registro -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Datos del Contacto</h4>
                  </div>
                  <div class="modal-body">
                    
                    <form >
                            <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                              <div class="form-group"><H4 align="center">PETICION PERSONAL </h4></div>
                                <hr>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <input type="text" name="nameCre" id="nameCre" class="form-control" placeholder="Nombre" required="required">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <input type="email" name="emailCre" id="emailCre" class="form-control" placeholder="Email" required="required">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <input type="text" name="asunto" id="asunto" class="form-control" placeholder="Asunto" required="required">
                            </div>
                            <div class="form-group">
                              <textarea name="message" id="message" class="form-control" rows="4" placeholder="Introduzca su mensaje" required="required"></textarea>
                            </div>                        

                  </form>   
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn-submit" onclick="submitContactForm()">Enviar Datos</button>
                  </div>
                </div>

              </div>
            </div> <!-- fin pantalla modal registro-->

            <!-- Modal de Dialogo -->
            <div id="myAporte" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Datos del Aporte</h4>
                  </div>
                  <div class="modal-body"> 
                    <div><p>Dirección del Santuario<br>
                            Calle Zenteno (ex Gálvez) 764 esquina Copiapó, Santiago Centro<br>
                            Fono: 226989491<br>
                            Cuenta Corriente: <strong>277358-9</strong><br>
                            a Nombre de: Basilica Parroquia Corazon de María <br>
                            correo: <strong>fernandovega@claretianos.cl</strong>
                            Atención oficina parroquial<br>
                            De lunes a sábado: 09:00 a 13:00 hrs y de 16:00 a 20:00 hrs<br>
                            Domingo: atención del bazar: de 10:00 a 13:30 hrs</p></div>
                            <br>
                            <br>
                  </div>
                                      <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
              </div>
            </div> <!-- FIN MODAL DIALOGO -->

            <div class="modal fade" id="savemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Peticion de Creyente</h4>
                    </div>
                    <div class="modal-body">
                      Petición Guardada con &eacute;xito
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.FIN modal CONFIRMADO -->


  <footer id="footer">

      <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container text-center">
          <div class="footer-logo">
            <a href="index.html"><img class="img-responsive" src="<?php base_url('images/logo2.png')?>" alt=""></a>
          </div>
          <div class="social-icons">
            <ul>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="facebook" href="https://www.facebook.com/pages/Santuario-De-San-Judas-Tadeo-Parroquia-Coraz%C3%B3n-De-Mar%C3%ADa/263011617106203"  target="blank"><i class="fa fa-facebook"></i></a></li>
              <li><a class="instagram" href="https://www.instagram.com/explore/locations/457701891/santuario-de-san-judas-tadeo-parroquia-corazon-de-maria/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div> 
        </div>
      </div> <!-- final redes sociales -->

          <div>
              <div class="footer-top wow fadeInUp col-sm-3 hidden-xs"  data-wow-duration="1000ms" data-wow-delay="300ms">    
                    <ul>
                        <div style="color: #E80505"><strong><div>ACERCA DE</div></strong></div>
                         <hr>
                        <!-- <li><a href="<?php echo base_url(); ?>">Inicio</a></li> -->
                        <li><a href="<?php echo base_url();?>index.php/sanjudas" target="_blank" onClick="">San Judas Tadeo</a></li>
                        
                        <li><a href="<?php echo base_url();?>index.php/virgen" target="_blank" onClick="">Sagrado Coraz&oacute;n de Mar&iacute;a</a></li>
                        
                        <li><a href="<?php echo base_url();?>index.php/peticiones" target="_blank" onClick="">Oraciones y Alabanzas</a></li>
                        
                        <li><a href="<?php echo base_url();?>index.php/himno" target="_blank" onClick="">Himno y Consagraciones</a></li>
                        
                    </ul>
              </div> 

              <div class="footer-top wow fadeInUp col-sm-3 hidden-xs"  data-wow-duration="1000ms" data-wow-delay="300ms">    
                    <ul>
                        <div style="color: #E80505"><strong><div>WEB AMIGAS</div></strong></div>
                         <hr>
                        <li style=""><a href="http://www.claretianos.es/" target="_blank" onClick="">Claretianos</a></li>
                        
                        <li><a href="http://www.iglesiadesantiago.cl/" target="_blank" onClick="">Arsobispado de Santiago</a></li>
                        
                        <li><a href="http://www.iglesia.cl/" target="_blank" onClick="">Conferencia Episcopal</a></li>
                        
                        <li><a href="http://www.iglesiadesantiago.cl/arzobispado/site/edic/base/port/santuarios.html" target="_blank" onClick="">Santuarios</a></li>
                        
                    </ul>
              </div> 

              <div class="footer-top wow fadeInUp col-sm-3 hidden-xs"  data-wow-duration="1000ms" data-wow-delay="300ms"> 
                    <ul>
                        <div style="color: #E80505"><strong><div>EDUCACI&Oacute;N</div></strong></div>
                        <hr>
                        <li><a href="http://www.uc.cl/" target="_blank" onClick="">Pontifica Universidad Catolica de Chile</a></li>
                        
                        <li><a href="https://www.aciprensa.com/" target="_blank" onClick="">Aciprensa</a></li>
                        
                        <li><a href="http://w2.vatican.va/content/vatican/es.html" target="_blank" onClick="">Vaticano</a></li>
                        
                        <li><a href="https://sanpablo.co/publicaciones-periodicas/pan-de-la-palabra/" target="_blank" onClick="">Evangelio del D&iacute;a</a></li>
                        
                    </ul>
              </div> 

              <div class="footer-top wow fadeInUp col-sm-2 hidden-xs"  data-wow-duration="1000ms" data-wow-delay="300ms"> 
                    <ul>
                        <span style="color: #E80505"><strong><div>POL&Iacute;TICA DE PRIVACIDAD</div></strong></span>
                        <hr>
                        <li><a href="<? echo base_url( )?>index.php/Terminos_controller/uso" target="_blank" onClick="">Terminos de Uso</a></li>
                        
                       <!-- <li><a href="<? echo base_url( )?>index.php/Terminos_controller/privacidad" target="_blank" onClick="">Pol&iacute;tica de privacidad</a></li>-->
                      
                        <li><a href="<? echo base_url( )?>index.php/Terminos_controller/copyright" target="_blank" onClick="">Pol&iacute;tica de Copyright</a></li>
                        
                        <li><a href="<? echo base_url( )?>index.php/Terminos_controller/responsable" target="_blank" onClick="">Responsabilidad de Contenido</a></li>
                        
                    </ul>
              </div> 
            <div class="col-sm-1  hidden-xs"><img align="right mt-5" class="img-responsive" src="<? echo base_url('asset/images/logo-san2.png')?>" alt="logo"></div>


          </div> <!-- fin de container para lista pie de pagina -->
  </footer>

      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
          
              <p>&copy; 2018 San Judas Tadeo - Santiago Chile</p>
            </div>
            <div class="col-sm-6" align="bottom">
            
              <p class="pull-right">Creada por Parroquia Coraz&oacuten de Mar&iacutea y Santuario de <a href="http://www.sanjudas.cl"><strong>San Judas Tadeo</strong></a></p>
            </div>
          </div>
        </div>
      </div>

  <script type="text/javascript" src="<? echo base_url('asset/js/jquery.js')?>"></script>
  <script type="text/javascript" src="<? echo base_url('asset/js/bootstrap.min.js') ?>"></script>
  <script type="text/javascript" src="<? echo base_url('asset/js/jquery.inview.min.js')?>"></script>
  <script type="text/javascript" src="<? echo base_url('asset/js/wow.min.js')?>"></script>
  <script type="text/javascript" src="<? echo base_url('asset/js/mousescroll.js')?>"></script>
  <script type="text/javascript" src="<? echo base_url('asset/js/smoothscroll.js')?>"></script>
  <script type="text/javascript" src="<? echo base_url('asset/js/jquery.countTo.js')?>"></script>
  <script type="text/javascript" src="<? echo base_url('asset/js/lightbox.min.js')?>"></script>
  <script type="text/javascript" src="<? echo base_url('asset/js/main.js')?>"></script>

</body>
</html>