<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	

?>

<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/CSS/leanevent.css">
<link rel='stylesheet' href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width-device-width, initial-scale=1">
<title>
	Contacto
</title>
</head>
<body>
	<div id="wrapper">
		

		<div>
			<img class ="bannerpic" src="<?php echo base_url(); ?>/Images/bannercontacto.jpg" alt="Leanevento bannercontacto" >
		</div>

		<div id="ImageTextContacto">
			CONTACTO	
		</div>

		<div id="SubTextInicio">
			<span style="color: #FFC300">INICIO</span>  &nbsp &nbsp CONTACTO
		</div>

		

		<div class=ColumnInfo>
			
			<span style="font-weight: normal; font-size: 16px"> Información del Contacto </span>
			
			<div class="row">
			  <div class="column">
			  	<i class='fas fa-map-marker-alt'> </i>
			    <span style="font-size: 12px">198 West 21th Street, </span>
			    <br>
			    <span style="font-size: 12px">Suite 721 New York NY 10016   </span>
			  </div>
			  
			  <div class="column">
			    <i class='fas fa-phone'> </i>
			    <span style="font-size: 12px">&nbsp +1235 2355 98</span>
			  </div>
			  
			  <div class="column">
			    <i class='far fa-paper-plane'> </i>
			    <span style="font-size: 12px">&nbsp info@diazapps.com</span>
			  </div>

			  <div class="column">
			  	<img src="https://img.icons8.com/ios-glyphs/30/000000/globe-earth.png" width="7%">
			  	<span style="font-size: 12px">&nbsp&nbspdiazapp.com </span> 
			  </div>
			</div>


		
		
			<div class="row">

			<p>
				<span style="font-weight: normal; font-size: 16px">LEAN en las redes sociales </span>
			</p>

			  <div class="column">
			    <img id ="sociallogo" src="<?php echo base_url(); ?>/Images/images2/facebook.png" alt="facebook logo" > <p id="socialname"> LEAN Ayuda Humanitaria </p>
			  </div>
			  
			  <div class="column">
			    <img id ="sociallogo" src="<?php echo base_url(); ?>/Images/images2/twitter.png" alt="twitter logo" > <p id="socialname"> &nbsp &nbsp &nbsp @LeanEmergente </p>
			  </div>
			  
			  <div class="column">
			    <img id ="sociallogo" src="<?php echo base_url(); ?>/Images/images2/instagram.png" alt="instagram logo" > <p id="socialname"> @LeanAyudaHumanitaria </p>
			  </div>

			  <div class="column">
			    <img id ="sociallogo" src="<?php echo base_url(); ?>/Images/images2/correo.png" alt="gmail logo" > <p id="socialname"> lean.emergente@gmail.com </p>
			  </div>
			</div>
		<!-- <form method="post" onsubmit="return validateForm();" action=""> -->
			<div class="row">
			<div class="container">
			    
		    	<h2 style="font-weight: normal;font-size: 16px">Estar en Contacto</h2>
			    
				<?php
                    echo form_open('ContactUs/form_valid');
                    
                    echo form_label('Nombre' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                    echo '<span style="padding-left: 330px;">';
                    echo form_label('Apellido' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                    echo '</span>';
                    echo "<br>";
                    $data_fname = array(
                        'name' => 'fname',
                        'id' => 'fname',
                        'class' => 'input_box',
                        'placeholder' => 'Tu Nombre',
                        'style'=>'width: 47%;margin-right: 2%;'
                    );
                    echo form_input($data_fname);

                   
                   
                    $data_lname = array(
                        'name' => 'lname',
                        'id' => 'lname',
                        'class' => 'input_box',
                        'placeholder' => 'Tu Apellido',
                        'style'=>'width: 47%;'
                    );
                    echo form_input($data_lname);
                    echo form_error('fname');
                    echo form_error('lname');
                    echo "<br>";
                    echo "<br>";
                                        

                    echo form_label('Correo'.'&nbsp;');
                    $data_email = array(
                        
                        'name' => 'email',
                        'id' => 'email',
                        'class' => 'input_box',
                        'placeholder' => 'Tu correo electronico',
                        'style'=>'width: 97%;'
                    );
                    echo form_input($data_email);
                    echo form_error('email');
                    echo "<br>";
                    echo "<br>";
                    
                    echo form_label('Tema'.'&nbsp;');
                    $data_topic = array(
                        
                        'name' => 'topic',
                        'id' => 'topic',
                        'class' => 'input_box',
                        'placeholder' => 'Su asunto de este mensaje',
                        'style'=>'width: 97%;'
                    );
                    echo form_input($data_topic);
                    echo form_error('topic');
                    echo "<br>";
                    echo "<br>";

                    echo form_label('Mensaje'.'&nbsp;');
                    $data_message = array(
                        
                        'name' => 'message',
                        'id' => 'message',
                        'class' => 'input_box',
                        'placeholder' => 'Di algo sobre nosotros',
                        'style'=>'width: 97%;'
                    );
                    echo form_input($data_message);
                    echo form_error('message');
                    echo "<br>";
                    echo "<br>";

                    echo form_submit (array('id' => 'submit', 'value' => 'Enviar mensaje' ));
                    echo form_close();






                    ?>


		    	<!-- <label for="fname">Nombre</label>  <label style="padding-left: 365px" for="lname">Apellido	</label> <br>
			    <input style="width: 48%; margin-right: 25px;" type="text" id="fname" name="firstname" placeholder="Tu Nombre" > 

			    <input style="width: 48%;" type="text" id="lname" name="lastname" placeholder="Tu Apellido"> <br>
			    
			    <label for="email">Correo	</label> <br>

			    <input type="text" id="email" name="email" placeholder="Tu correo electronico"> <br>
			    
			    <label for="topic">Tema	</label> <br>
			    <input type="text" id="topic" name="topic" placeholder="Su asunto de este mensaje"> <br>
			    
			    <label for="message">Mensaje	</label> <br>
			    <input type="text" id="message" name="message" placeholder="Di algo sobre nosotros"> <br> 
			    

			    <input type="submit" value="Enviar mensaje" >-->
			    
		    </div>
	    </div>
	<!-- </form> -->
		</div>
	    
	    


	</div>
</body>