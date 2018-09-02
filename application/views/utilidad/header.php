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
  <link href="<? echo base_url('asset/css/lightbox.css') ?>" rel="stylesheet">
  <link href="<? echo base_url('asset/css/main.css') ?>" rel="stylesheet">
  <link id="css-preset" href="<? echo base_url('asset/css/presets/preset1.css') ?>" rel="stylesheet">
  <link href="<? echo base_url('asset/css/responsive.css')?>" rel="stylesheet">
  <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=yAIzaSyDzB-LnhYfWNQ6xalaX4xekeWEzhHAgMZ0"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">

</head>

<body>
  <!--/.preloader-->
  <header id="home">

    <div id="demoSaludo"></div>

    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<? echo base_url('')?>">
            <h1><img style="border: 4px outset #cccccc; background-color: #cccccc;" class="img-responsive" src="<? echo base_url('asset/images/logo-san2.png')?>" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="<? echo base_url( )?>">San Judas Tadeo</a></li> 
            <li class="scroll"><a href="<? echo base_url('#portfolio')?>">Galeria</a></li>
            <li class="scroll"><a href="<? echo base_url('#pricing')?>">Informacion</a></li>
            <li class="scroll"><a href="<? echo base_url('#about-us')?>">Parroquia</a></li>                     
            <li class="scroll" data-toggle="modal" data-target="#myModal"><a href="<? echo base_url('#contact')?>">Contacto</a></li>      
            <li class="scroll"  data-toggle="modal" data-target="#myAporte"><a href="<? echo base_url('#aporte')?>">Aporte</a></li> 
                      <li class="scroll"><a href="<? echo base_url( )?>index.php/login">Usuario</a></li>  

          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->


<?php $this->load->view('utilidad/modals'); ?>

  </header><!--/#home-->

<body> <!-- inicio body -->



<script type="text/javascript">

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

        function openDialog() {
                    $('#overlay').fadeIn('fast', function() {
                        $('#popup').css('display','block');
                        $('#popup').animate({'left':'30%'},500);
                    });
                }

        function closeDialog(id) {
              $('#'+id).css('position','absolute');
              $('#'+id).animate({'left':'-100%'}, 500, function() {
                  $('#'+id).css('position','fixed');
                  $('#'+id).css('left','100%');
                  $('#overlay').fadeOut('fast');
              });
          }
  //************************************************************************************* */
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