<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Apostol San Judas Tadeo</title>
  <link href="<? echo base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<? echo base_url('asset/css/animate.min.css') ?>" rel="stylesheet"> 
  <link href="<? echo base_url('asset/css/font-awesome.min.css') ?>" rel="stylesheet">
  <link href="<? echo base_url('asset/css/lightbox.css') ?>" rel="stylesheet">
  <link href="<? echo base_url('asset/css/main.css') ?>" rel="stylesheet">
  <link id="css-preset" href="<? echo base_url('asset/css/presets/preset1.css') ?>" rel="stylesheet">
  <link href="<? echo base_url('asset/css/responsive.css')?>" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">

<style>
        .popup {
              background-color: #ffffff;
              color: #888888;
              height: 245px;
              left: 100%;
              padding: 20px;
              position: fixed;
              right: 30%;
              top: 25%;
              width: 550px;
              z-index: 101;
              -moz-box-shadow: 0px 0px 10px 1px #888888;
              -webkit-box-shadow: 0px 0px 10px 1px #888888;
              box-shadow: 0px 0px 10px 1px #888888;
              border-radius:10px;
              -moz-border-radius:10px;
          }
          
          .overlay {
              background: #000000;
              bottom: 0;
              left: 0;
              position: fixed;
              right: 0;
              top: 0;
              z-index: 100;
              opacity:0.5;
          }
          
          a.close {
              background: url("cancel.png") repeat scroll left top transparent;
              cursor: pointer;
              float: right;
              height: 26px;
              left: 32px;
              position: relative;
              top: -33px;
              width: 26px;
          }
</style>



</head><!--/head-->

<body>

  <header id="home">

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
            <h1><img class="img-responsive" src="<? echo base_url('asset/images/logo2.png')?>" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll"><a href="<? echo base_url('#services')?>">San Judas Tadeo</a></li> 
            <li class="scroll"><a href="<? echo base_url('#portfolio')?>">Galeria</a></li>
            <li class="scroll"><a href="<? echo base_url('#pricing')?>">Informacion</a></li>
            <li class="scroll"><a href="<? echo base_url('#about-us')?>">Parroquia</a></li>                     
            <li class="scroll"  data-toggle="modal" data-target="#myModal"><a href="<? echo base_url('#contact')?>">Contacto</a></li>      
            <li class="scroll"  data-toggle="modal" data-target="#myAporte"><a href="<? echo base_url('#aporte')?>">Aporte</a></li> 
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

<body> <!-- inicio body -->

<div id="popup" class="popup">
    <a onclick="closeDialog('popup');" class="close"></a>
    <div>
        <p><strong>Deuteronomio 3:22 - No los temáis; porque Jave vuestro Dios, él es el que pelea por vosotros.</strong></p>
    </div>
</div>

<!-- Modal -->
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
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="nameCre" id="nameCre" class="form-control" placeholder="Nombre" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="emailCre" name="emailCre" id="emailCre" class="form-control" placeholder="Email" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="asunto" id="asunto" class="form-control" placeholder="Asunto" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Introduzca su mensaje" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  
                </div>
      </form>   
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn-submit" onclick="submitContactForm()">Enviar Datos</button>
      </div>
    </div>

  </div>
</div> <!-- fin pantalla modal registro-->

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
          Guardado con &eacute;xito
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.FIN modal CONFIRMADO -->



<script>

        function enviarPeticion()
        {
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
              return
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
                      mensaje:mensaje
                    },
                    function( data ) {
                      var nombre = $('#nameCre').val('');
                      var email =  $('#emailCre').val('');
                      var asunto = $('#asunto').val('');
                      var mensaje = $('#message').val('');
                                      //self.location.reload();
                                      }
                    );
              return
        }

</script>