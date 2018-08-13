<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('utilidad/header');
?>

            <div class="container">
                <dic class="row">
                    <div class="col-5"></div>
                    
                        <div class="col-2">
                            <form class="form-signin" id="frmlogin" action="#" data-url="" methd ="POST">
                                    <label for="txtuser">Email</label>
                                    <input type="email" name="emailUser" id="emailUser" class="form-control" placeholder="" required="" autofocus="">
                                    <br>
                                    <label for="txtpass">Contraseña</label>
                                    <input type="password" id="txtpass" name="txtpass" class="form-control" placeholder="************" required="">
                                    <div class="alert alert-warning" style="text-align: center; display: none;"></div>
                                    <button id="btnConectar" name="btnConectar" class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                                    <button id="btnLimpiar" name="btnLimpiar" class="btn btn-lg btn-primary btn-block" type="submit">Limpiar</button>
                            </form>
                        </div>
                    
                    <div class="col-5"></div>
                </dic>
            </div>
<br><br><br><br><br><br><br><br>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){

        alert('BIENVENIDOS');
        $('#btnConectar').click(function(){
            var email = $('#emailUser').val();
            var pass = $('#txtpass').val();


        });


        $('#btnLimpiar').click(function(){
            $('#emailUser').val('');
            $('#txtpass').val('');
            var valor = document.getElementById('txtpass').val()
            console.log(valor);
        })

        


    });
</script>  
</body>
</html>
