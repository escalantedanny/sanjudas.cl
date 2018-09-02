<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		echo ("<br/><a href='".$decodedjson->data[0]."'><button type='submit' class='btn btn-success' style='background-color: #91BD09; padding: 8px 14px 9px;'>Online Vsee</button></a><a id='conec' class='tcv_boton aceptar' href='".$decodedjson->data[1]."'><button type='submit' class='btn btn-success' style='background-color: #91BD09; padding: 8px 14px 9px;' onclick='hacer_click()'>Call Doctor</button></a><br/><br/>");
	?>
	
</body>
<script type="text/javascript">

    var id_tc = '<?= $tc['TEL_ID'] ?>'
    var id_pc = '<?= $tc['PAC_ID']?>';
    var date_tc = '<?= $tc['TEL_LOCK_DATE'] ?>';
    var name_esp = '<?= $tc['ESP_NOMBRE']?>';
    var etb_tc = '<?= $tc['ETB_NOMBRE']?>';
    var pais = '<?= $tc['SIT_NOMBRE'] ?>';
    var usu_vsee_call = '<?= $medGeneral ?>'; 
    var usu_vsee_recibe = '<?= $especialista ?>'; 
    var date_time =  new Date();


    function hacer_click()
        {
            alert('ID Teleconsulta: '+ id_tc +
                  '\n ID Paciente: '+ id_pc+
                  '\n Fecha Teleconsulta: '+ date_tc +
                  '\n Nombre de Especialista: '+ name_esp +
                  '\n Establecimiento: '+ etb_tc +
                  '\n Pais: '+ pais +
                  '\n Usuario Vsee Call: '+ usu_vsee_call +
                  '\n Usuario Vsee Especialista: '+ usu_vsee_recibe +
                  '\n fecha actual: '+ date_time
                 );


                $.post("<?= base_url( )?>/platc/addUserVseeC/",
                    { 
                        id_tc:id_tc,
                        id_pc:id_pc,
                        date_tc:date_tc,
                        name_esp:name_esp,
                        etb_tc:etb_tc,
                        pais:pais,
                        usu_vsee_call:usu_vsee_call,
                        usu_vsee_recibe:usu_vsee_recibe,
                        date_time:date_time },
                    function(data){
                        if(data == 'true') {
                            console.log('true');
                        }
                        else {
                            console.log('flase');
                        }
                } );

        }
    </script>
</html>