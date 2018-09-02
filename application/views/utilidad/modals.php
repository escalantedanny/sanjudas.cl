<!-- Modal de Usuario -->
<div id="myLogin" name="myLogin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Usuario</h4>
        </div>

            <div class="modal-body">
                  <div class="row" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <p class="login-box-msg">
                                  Log in to start your session
                                </p>
                                <div class="col-2"></div>

                                            <form class="form-signin" id="frmlogin" action="<?php echo site_url('login/iniciar')?>" data-url="<?php echo site_url('main')?>">
                                            
                                                <div class="logo"></div>
                                                <input type="text" name="txtuser" class="form-control" placeholder="Email" required="" autofocus="">
                                                <input type="password" name="txtpass" class="form-control" placeholder="**********" required="">
                                                <label class="checkbox">
                                                </label>
                                                
                                                <button id="btniniciar" class="btn btn-lg btn-primary btn-block" type="submit"></button>
                                            </form>

                                <div class="col-2"></div>
                  </div>
            </div>
    </div>
  </div> <!-- fin pantalla modal registro-->
</div>

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
          Registro Guardado con &eacute;xito
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.FIN modal CONFIRMADO -->