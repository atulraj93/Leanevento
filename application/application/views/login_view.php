<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	

?>

<!DOCTYPE html>
<html>
<head>



	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/CSS/leanevent.css">
	<link rel='stylesheet' href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>
		Iniciar Session
	</title>
</head>
<body>


	<div id="wrapper">
		<div id="nav">
		

		<div>
			<img class ="bannerpic" src="<?php echo base_url(); ?>/Images/bannerlogin.jpg" alt="Leanevento bannerlogin" >
		</div>

		<div id="ImageTextContacto">
			INICIAR SESSIÓN	
		</div>

		<div id="SubTextLogin">
			<span style="color: #FFC300">INICIO</span>  &nbsp &nbsp INICIAR SESSIÓN
		</div>

		

		<div class="ColumnInfo">
			
			<div class="row">
				<div class="container">
					<?php
                    echo form_open('Login/login_valid'); ?>
		    	<h2>Iniciar Sessión</h2>
			    <label for="username">Nombre de Usuario</label>  <label style="padding-left: 355px" for="lname">Contraseña	</label> <br>
			    <!-- <input style="width: 48%; margin-right: 25px;" type="text" id="username" name="username" required placeholder="Nombre de Usuario o Correo">  -->

			    <?php $data_uname = array(
									                        'name' => 'uname',
									                        'id' => 'uname',
									                        'class' => 'input_box',
									                        'placeholder' => 'Nombre de Usuario o Correo',
									                        'style' => 'width: 48%;'
									                    );
									                    echo form_input($data_uname);
									                    
                    									
									                     ?>	

			    <!-- <input style="width: 48%" type="text" id="password" name="password" required placeholder="Contraseña" pattern="\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+"> <br> -->
			    <?php $data_psd = array(
									                        'name' => 'psd',
									                        'id' => 'psd',
									                        'class' => 'input_box',
									                        'placeholder' => 'Contraseña',
									                        'style' => 'width: 48%'
									                    );
									                    echo form_input($data_psd);
									                    echo form_error('uname');
									                    echo form_error('psd');
                    									
									                     ?>	

			    
				
			    <a style="margin-left: 315px" href="#forgotpsd" class="selected">Oivido su contraseña?	</a> <br> <br>
			    <!-- <input style="margin-left: 360px" type="submit" value="Entra"> -->

			    <?php echo form_submit (array('id' => 'submit', 'value' => 'Entra','style' => 'margin-left: 350px' ));
                    echo form_close(); ?>
				</div>
		    </div>
			
		</div>

		
	    	

	    <div id="forgotpsd" class="overlay">
					<div class="popup">
						<p  style=" padding-left: 10px;">Recuperar su Contraseña</p>
						<hr class="popupline" COLOR="#F0F0F0"><br>
						<label for="fgpsd" style="padding-top:15px; padding-left: 10px;">Correo</label><br>
						 <input type="text" id="fgpsd" name="forgot" placeholder="Correo" style="border-width: 1px;width:97%;margin-left:8px; border-color: #F0F0F0;margin-bottom: 40px">						 
						<hr class="popupline" COLOR="#F0F0F0"><br>
							<a href="#"> <input type="submit" value="Cerrar" style="margin-left: 320px;background-color:#A9A9A9"></a>
						 <input type="submit" value="Enviar" class="fgbtn"style="margin-left: 10px; margin-bottom: 10px;" >
					</div>
		</div>

	</div>

</body>
</html>