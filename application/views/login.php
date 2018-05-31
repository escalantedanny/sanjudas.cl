<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
