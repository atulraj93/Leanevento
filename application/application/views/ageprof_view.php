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
	Agente
</title>
</head>

<body>
<div id="wrapper">
	

		<div>
			<img class ="bannerpic" src="<?php echo base_url(); ?>/Images/bannercontacto.jpg" alt="Leanevento bannercontacto" >
		</div>

		<div id="ImageTextContacto">
			PERFIL	
		</div>

		<div id="SubTextInicio">
			<span style="color: #FFC300">INICIO</span>  &nbsp &nbsp PERFIL
		</div>

		

		<div class=ColumnInfo>
			<?php
                    echo form_open('Agent/validProf'); ?>
                    <?php foreach ($event->result() as $item):?>
			
			<span style="font-weight: normal; font-size: 16px"> Tu Información del Perfil </span>
			
			<div style="margin-top: 30px" class="row">
			  <div style="margin-right: 100px;font-size: 12px" class="column">
			  	<i class='fa fa-book'> </i>&nbsp <?php echo "".$item->First_Name." ".$item->Last_Name.""?> 
			  	<br><br>
				<i class='fa fa-book'> </i>&nbsp <?php echo "".$item->Agent_ID.""?>
				<br><br>
				<i class='fas fa-user'> </i>&nbsp <?php echo "".$item->Email.""?>
				<br><br>
			  </div>
			  
			  <div style="margin-right: 100px" class="column">
			    <i class='fas fa-map-marker-alt'> </i>
			    <span style="font-size: 12px"><?php echo "".$item->Address.""?></span>
			    <br>
			    <span style="font-size: 12px"><?php echo "".$item->City." ".$item->State." ".$item->Postal_Code.""?>	 </span>
			    <br><br>
			    <i class='fas fa-phone'> </i>
			    <span style="font-size: 12px">&nbsp <?php echo "".$item->Telephone.""?></span> <br><br>
			    <i class='far fa-paper-plane'> </i>
			    <span style="font-size: 12px">&nbsp <?php echo "".$item->Email.""?></span>
			  </div>

			  <div style="margin-right: 100px" class="column">
			  	<img style="width: 125px;height: 125px" src="<?php echo base_url(); ?>/Images/user.png" alt="IndividualProfile" >	
			  </div>
			  
			  
			  
			</div>
				

	    <div style="height: 575px;" class="container">
	    	
		    <div class="row">
					
					    
		    	<h2 style="font-weight: normal;font-size: 16px;margin-bottom: 20px">Estra en contacto</h2>
		    	<hr color="#F0F0F0">

		    	<div style="padding: 0px" class="column">
				    <label for="fname">Nombres</label>  <br>
				    
				    <?php $data_fname = array(
									                        'name' => 'ifname',
									                        'id' => 'ifname',
									                        'class' => 'input_box',
									                         'value'        => $item->First_Name,
									                        'readonly' => 'readonly',
									                        'style' => 'width: 450px; margin-bottom: 35px;'
									                    );
									                    echo form_input($data_fname);
									                    ?> 

				    <label for="Responible">Numero de Registro del Inscrito	</label> <br>
				   
				    <?php $data_lname = array(
									                        'name' => 'ifname',
									                        'id' => 'ifname',
									                        'class' => 'input_box',
									                         'value'        => $item->Agent_ID, 
									                        'readonly' => 'readonly',
									                        'style' => 'width:450px'
									                    );
									                    echo form_input($data_lname);
									                    ?> 

			    </div>
			    
			    <div class="column">
				    <img style="width: 125px;height: 125px;margin-left: 445px" src="<?php echo base_url(); ?>/Images/user.png" alt="Seleccionar Foto" > <br> <br>
				    <input style="margin-left: 430px;width: 150%" type="submit" value="Seleccionar Foto">
			    </div>

			</div>
			
		    <label for="topic">Correo	</label> <br>
		    
		    <?php $data_email = array(
									                        'name' => 'ifname',
									                        'id' => 'ifname',
									                        'class' => 'input_box',
									                         'value'        => $item->Email, 
									                        'readonly' => 'readonly'
									                    );
									                    echo form_input($data_email);
									                    ?> 
		    
	    	<div  class="row">    
			    <div style="width: 252px;padding: 0px" class="column">
			    <label for="message">Telefono	</label> 
			    
			    <?php $data_phno = array(
									                        'name' => 'phno',
									                        'id' => 'phno',
									                        'class' => 'input_box',
									                         'value'        => $item->Telephone
									                    );
									                    echo form_input($data_phno);
									                    echo form_error('phno');
									                    ?> 
			     
			    </div>
			    <div style="width: 252px;padding: 0px 20px 0px 20px" class="column">
			    <label for="message">Usuario	</label> 
			    <?php $data_uname = array(
									                        'name' => 'ifname',
									                        'id' => 'ifname',
									                        'class' => 'input_box',
									                         'value'        => $item->Email, 
									                        'readonly' => 'readonly'
									                    );
									                    echo form_input($data_uname);
									                    ?> 
			    </div>
			    <div style="width: 252px;padding: 0px" class="column">
			    <label for="message">Contraseña		</label> 
			    <?php $data_psd = array(
									                        'name' => 'pswd',
									                        'id' => 'pswd',
									                        'class' => 'input_box',
									                         'value'        => $item->Password
									                    );
									                    echo form_input($data_psd);
									                    
									                    echo form_error('pswd');
									                    ?> 
			    
				</div>
		    </div>
				
				<p class="nota">
					Nota:
				</p>
				<p style="font-size: 80%;">Solo puede cambiar los datos(Teléfono,Contraseña y Logo)</p>
			    <!-- <a href="IndividualProfile.php"><input style="margin-left: 350px" type="submit" value="Guardar Cambios"></a> -->
			    <?php echo form_submit (array('id' => 'isubmit', 'value' => 'Guardar Cambios','class' => 'submit', 'style' => 'margin-left:350px'));?>
			    
	    </div>
	<?php endforeach;
	    echo form_close();?>
	</div>
	    
	    <footer>	    	      
	    
		    </div>
		    <div id="Copyright">
		    	<p>
		        	<span style="font-size: 80%">Copyright&copy2019 All Rights reserved | This web is made with by &#9825</span> <a href="#" style="color: #FFC300; font-size: 80%"> DiazApps 
		        		<button class="arrwbtn"> <a href="#wrapper" style="color: #FFC300"><i class="fas fa-arrow-up" style="color: white;font-size: 90%; "></i></a> </button>
		        </p>
		    </div>
	    </footer>


	</div>
</body>
</html>