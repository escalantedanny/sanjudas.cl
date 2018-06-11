<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
  <meta name="Danny Escalante" content="Religioso Catolico">
  <meta name="description" content="pagina Religiosa dedicada a nuestro Patrono San Judas Tadeo">
  
  <title>Apostol San Judas Tadeo</title>
  <link href="<? echo base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<? echo base_url('asset/css/animate.min.css') ?>" rel="stylesheet"> 
  <link href="<? echo base_url('asset/css/font-awesome.min.css') ?>" rel="stylesheet">
  <!--<link href="<? echo base_url('asset/css/lightbox.css') ?>" rel="stylesheet"> -->
  <link href="<? echo base_url('asset/css/main.css') ?>" rel="stylesheet">
  <link href="<? echo base_url('asset/css/presets/preset1.css') ?>" rel="stylesheet">

  <link href="<? echo base_url('asset/css/responsive.css')?>" rel="stylesheet">
  <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=yAIzaSyDzB-LnhYfWNQ6xalaX4xekeWEzhHAgMZ0"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="shortcut icon" href="#">
</head><!--/head-->

<body>
  <!--<div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>-->
  <!--/.preloader-->
  <header id="home">

              <div class="main-nav nav-fill">
                <div class="container">

                    <a class="navbar-brand" href="<?php echo base_url() ?>">
                      <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
                    </a>                    

                  <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">                 
                      <li class="scroll active"><a href="<? echo base_url( )?>">San Judas Tadeo</a></li> 
                      <li class="scroll"><a href="<? echo base_url('#portfolio')?>">Galeria</a></li>
                      <li class="scroll"><a href="<? echo base_url('#pricing')?>">Informacion</a></li>
                      <li class="scroll"><a href="<? echo base_url('#about-us')?>">Parroquia</a></li>                     
                      <li class="scroll"  data-toggle="modal" data-target="#myModal"><a href="<? echo base_url('#contact')?>">Contacto</a></li>      
                      <li class="scroll"  data-toggle="modal" data-target="#myAporte"><a href="<? echo base_url('#aporte')?>">Aporte</a></li> 
                      <li class="scroll"><a href="<? echo base_url( )?>index.php/login">Usuario</a></li>  
                    </ul>
                  </div>

                </div>
              </div><!--/#main-nav-->


  </header><!--/#home-->


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
                      Petición Guardado con &eacute;xito
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.FIN modal CONFIRMADO -->

