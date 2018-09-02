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

  <link href="<? echo base_url('asset/css/color.css') ?>" rel="stylesheet">
  <link href="<? echo base_url('asset/css/style.css') ?>" rel="stylesheet"> 
  <link href="<? echo base_url('asset/css/swipe.css') ?>" rel="stylesheet">

  <!--<link href="<? echo base_url('asset/css/lightbox.css') ?>" rel="stylesheet"> -->
  <link href="<? echo base_url('asset/css/main.css') ?>" rel="stylesheet">
  <link href="<? echo base_url('asset/css/presets/preset1.css') ?>" rel="stylesheet">

  <link href="<? echo base_url('asset/css/responsive.css')?>" rel="stylesheet">
  <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=yAIzaSyDzB-LnhYfWNQ6xalaX4xekeWEzhHAgMZ0"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="shortcut icon" href="#">



  <style type="text/css">
      .hide-bullets {
          list-style:none;
          margin-left: -40px;
          margin-top:20px;
      }

      .thumbnail {
          padding: 0;
      }

      .carousel-inner>.item>img, .carousel-inner>.item>a>img {
          width: 100%;
      }


        .gallery-title
        {
            font-size: 36px;
            color: #42B32F;
            text-align: center;
            font-weight: 500;
            margin-bottom: 70px;
        }
        .gallery-title:after {
            content: "";
            position: absolute;
            width: 7.5%;
            left: 46.5%;
            height: 45px;
            border-bottom: 1px solid #5e5e5e;
        }
        .filter-button
        {
            font-size: 18px;
            border: 1px solid #42B32F;
            border-radius: 5px;
            text-align: center;
            color: #42B32F;
            margin-bottom: 30px;

        }
        .filter-button:hover
        {
            font-size: 18px;
            border: 1px solid #42B32F;
            border-radius: 5px;
            text-align: center;
            color: #ffffff;
            background-color: #42B32F;

        }
        .btn-default:active .filter-button:active
        {
            background-color: #42B32F;
            color: white;
        }

        .port-image
        {
            width: 100%;
        }

        .gallery_product
        {
            margin-bottom: 30px;
        }

        #demo {
          height:100%;
          position:relative;
          overflow:hidden;
        }


        .green{
          background-color:#6fb936;
        }
                .thumb{
                    margin-bottom: 20px;
                    
                }
                
                .page-top{
                    margin-top:150px;
                }

           
        img.zoom {
            width: 250px;
            height: 200px;
            
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
        }
                
         
        .transition {
            -webkit-transform: scale(1.2); 
            -moz-transform: scale(1.2);
            -o-transform: scale(1.2);
            transform: scale(1.2);
        }
            .modal-header {
           
             border-bottom: none;
        }
            .modal-title {
                color:#000;
            }
            .modal-footer{
              display:none;  
            }

  </style>


</head><!--/head-->
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
<body>

      <!--Sub Banner Wrap Start -->
    <div class="gt_sub_banner_bg default_width">
        <div class="container">
            <div class="gt_sub_banner_hdg  default_width">
                <h3>Galeria de Imagenes</h3>

            </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->

        <section class="gt_gallery_filter_bg">
            <div class="container">
                <div class="row">

                    <div id="filterable-item-holder-1">
                        <div class="filterable-item all 1 col-md-4 col-sm-6 col-xs-12">
                            <div class="edu_masonery_thumb">
                                <figure>
                                    <img src="<? echo base_url('asset/images/grupoJuvenil/grupoJuvenil.jpg') ?>" alt=""  class="zoom img-fluid"/>
                                    <a href="<? echo base_url('asset/images/grupoJuvenil/grupoJuvenil.jpg') ?>" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                </figure>
                            </div>  
                        </div>

                         <div class="filterable-item all 1 col-md-4 col-sm-6 col-xs-12">
                            <div class="edu_masonery_thumb">
                                <figure>
                                    <img src="<? echo base_url('asset/images/grupoJuvenil/1.jpg') ?>"  class="zoom img-fluid ">
                                    <a href="<? echo base_url('asset/images/grupoJuvenil/1.jpg') ?>" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                </figure>
                            </div>  
                        </div>

                        <div class="filterable-item all 2 col-md-4 col-sm-6 col-xs-12">
                            <div class="edu_masonery_thumb">
                                <figure>
                                    <img src="<? echo base_url('asset/images/grupoJuvenil/2.jpg') ?>"  class="zoom img-fluid ">
                                    <a href="<? echo base_url('asset/images/grupoJuvenil/2.jpg') ?>" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                </figure>
                            </div>  
                        </div>

                        <div class="filterable-item all 2 col-md-4 col-sm-6 col-xs-12">
                            <div class="edu_masonery_thumb">
                                <figure>
                                    <img src="<? echo base_url('asset/images/grupoJuvenil/4.jpg') ?>"  class="zoom img-fluid ">
                                    <a href="<? echo base_url('asset/images/grupoJuvenil/4.jpg') ?>" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                </figure>
                            </div>  
                        </div>

                        <div class="filterable-item all 2 col-md-4 col-sm-6 col-xs-12">
                            <div class="edu_masonery_thumb">
                                <figure>
                                    <img src="<? echo base_url('asset/images/grupoJuvenil/5.jpg') ?>"  class="zoom img-fluid ">
                                    <a href="<? echo base_url('asset/images/grupoJuvenil/5.jpg') ?>" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                </figure>
                            </div>  
                        </div>
                        <div class="filterable-item all 2 col-md-4 col-sm-6 col-xs-12">
                            <div class="edu_masonery_thumb">
                                <figure>
                                    <img src="<? echo base_url('asset/images/grupoJuvenil/6.jpg') ?>"  class="zoom img-fluid ">
                                    <a href="<? echo base_url('asset/images/grupoJuvenil/6.jpg') ?>" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                </figure>
                            </div>  
                        </div>

                        
                    </div>
                </div>
            </div>
        </section>

<?php
$this->load->view('utilidad/footer');
?>