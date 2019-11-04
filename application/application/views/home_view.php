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
	Inicio
</title>
</head>


<body>
<div id="wrapper">
	

	<div>
	<img id ="minibaner2" src="<?php echo base_url(); ?>/Images/minibaner2.jpg" alt="Leanevento minibaner2" >
	</div>


	<div>
		<div id="content">
			<hr class="hr-text" style="margin-left: 10%;"COLOR="#FFC300"><span style="font-size: 110%; font-weight: bold;color:black;padding-left: 10px">¿QUÉ HACEMOS?</span><hr COLOR="#FFC133" class="hr-text" style="margin-left:10px;">
			
		<p>La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones concretas, a nuestros conciudadanos en Venezuela ante la grave escasez de medicinas e insumos médicos en que se encuentra el país. Nuestra misión consiste en recolectar ayuda médico sanitaria en delegaciones en España y, a través de agentes de transporte, llevarlos a Venezuela para que otras asociaciones se encarguen de su distribución. De esta manera aportamos nuestro granito de arena ayudando a llevar asistencia humanitaria a Venezuela. Somos una asociación sin fines de lucro, dedicada a la defensa de los Derechos Humanos.</p>
	</div>
	
	<div class="rectangle" style="position: absolute;top: 125%;width: 90%"; >
		<div style="width:100%;font-size: 20px;text-align: center;padding-left: 10%;padding-top: 1%" class="row">
		 <div class="column" style="float: left;width: 25%;font-weight: bold;"> 478 <br>VOLUNTARIOS </div>
         <div class="column"style="float: left;width: 25%;font-weight: bold;"> 60.000 <br>PERSONAS BENEFICIADAS </div>
         <div class="column" style="float: left;width: 20%;font-weight: bold;">45 <br>ALIADOS </div>
        </div>	
    </div>
    <div>
 		<img class="bannerabout1" src="<?php echo base_url(); ?>/Images/bannerabout.jpg" style="position: absolute;top: 760px;">
		<div style="position: absolute;top:145%; padding-left:33%;font-weight: bold;" > "La injusticia,en cualquier parte,es una amenaza a la justicia en todas partes."</div>
		<div style="position: absolute;top:150%; padding-left:65%;font-size: 57%;" >Martin Luter King</div>
 		<img class="bannerabout2" src="<?php echo base_url(); ?>/Images/bannerabout.jpg" style="position: absolute;top: 1154px;">
	</div>	
		
		
	</div>

	<div class="sponsorlist">
							<div class="middleTextNew" style="">
  								<hr class="hr-text" style="margin-left: 250px;"COLOR="#FFC300"><span style="font-size: 110%; color:black;padding-left: 10px;">ALIADOS</span><hr COLOR="#FFC300" class="hr-text" style="margin-left:10px; ">

							</div>	

  						
					<section class="sponsorl1" style="border:solid 0px #F0F0F0;">
						<section id="sl1" style="border:solid 0px #F0F0F0;">
  					<section style="width: 20%;border:solid 0px #F0F0F0; " class="column">
  						<img class="homelogo" src="<?php echo base_url(); ?>/Images/images2/logo1.PNG"/>
  					</section>
  					<section style="width: 20%;border:solid 0px #F0F0F0; "class="column">
  						<img class="homelogo" src="<?php echo base_url(); ?>/Images/images2/logo2.PNG"/>
  					</section>
  					<section style="width: 20%;border:solid 0px #F0F0F0; "class="column">
  						<img class="homelogo" src="<?php echo base_url(); ?>/Images/images2/logo3.PNG"/>
  					</section>
  					<section style="width: 20%; border:solid 0px #F0F0F0; "class="column">
  						<img class="homelogo" src="<?php echo base_url(); ?>/Images/images2/logo4.PNG"/>
  					</section>
			 			</section>
			 			<section id="sl2" style="border:solid 0px #F0F0F0;">
			 				<section style="width: 15%;border:solid 0px #F0F0F0; " class="column">
  						<img class="homelogo" src="<?php echo base_url(); ?>/Images/images2/logo5.PNG"/>
  					</section>
  					<section style="width: 25%;border:solid 0px #F0F0F0; "class="column">
  						<img class="homelogo" src="<?php echo base_url(); ?>/Images/images2/logo6.PNG"/>
  					</section>
  					<section style="width: 25%;border:solid 0px #F0F0F0; "class="column">
  						<img class="homelogo" src="<?php echo base_url(); ?>/Images/images2/logo7.PNG"/>
  					</section>
  					<section style="width: 25%; border:solid 0px #F0F0F0; "class="column">
  						<img class="homelogo" src="<?php echo base_url(); ?>/Images/images2/logo8.PNG"/>
  					</section>
			 			</section>

  					
			 			
					</section>
						<div class="pnav">
						<ul style="list-style:none;width: 150%;float:left;text-decoration: none;padding-bottom: 0px;margin-bottom: 0px;padding-left: 0px;">
					    
					    <li ><a style="background-color:#F0F0F0;padding: 10%;"href="#sl1">&raquo</a></li>
					    <li ><a style="background-color:#FFC300;padding: 10%;"href="#sl2">&laquo </a></li> 
  					</ul>
  				</div>
  				</div>

	<div class="rectangle" style="top: 1600px" >
			
				<!-- <form name="subscribeEmail" method="post" action="">	 -->
			    <p style="float: left;margin-left: 475px;margin-top: 30px;font-weight: bold"><i  class='far fa-paper-plane'> </i>&nbsp Registrese para recibir un<br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp boletin</p>
			
			    <?php
		                    echo form_open('home/subscribe');
		                    //echo form_label('Student Name' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
		                    $data_name = array(
		                        'name' => 'subscribe',
		                        'id' => 'subscribe',
		                        'class' => 'input_box',
		                        'placeholder' => 'Introduce tu correo electrónico'
		                    );
		                    echo form_input($data_name);
		                    echo form_submit('submit', 'Suscribir', "class='submit'");
		                    echo form_close();
	            ?>

				<!-- <input style="float: left; margin-left: 30px;" type="text" name="subscribeEmail" placeholder="Introduce tu correo electrónico" name="search">
  				<button style="float: left;"type="submit" name="subscribeBtn">Suscribir</button>  
  				</form> -->
	</div>	
	
	

			
			

    


</div>
</body>
</html>