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
		Regístrate
	</title>
</head>

<body>


	<div id="wrapper">
		

		<div>
			<img class ="bannerpic" src="<?php echo base_url(); ?>/Images/bannerregistro.jpg" alt="Leanevento bannerregistro" >
		</div>

		<div id="ImageTextContacto">
			REGÍSTRATE	
		</div>

		<div id="SubTextLogin">
			<span style="color: #FFC300">INICIO</span>  &nbsp &nbsp REGÍSTRATE
		</div>

		

		<div class="ColumnInfo">
			<div class="row">
				<div class="container">

		    	<h2>Elija el tipo de usuario para registrarse</h2> <br>
			    
			    <a href="#IndividualRegister"><input style="margin-left: 75px" type="submit" value="Como individual"></a>
			    <a href="#BusinessRegister"><input style="margin-left: 75px" type="submit" value="Como Negocio o Fundacion"></a>
			    <a href="#AgentRegister"><input style="margin-left: 75px" type="submit" value="Como agente LEAN"> <br> <br></a>
			</div>
		    </div>
		</div>

	    

	    <div id="IndividualRegister" class="overlay">
					<div style="font-weight: bold;" class="popup">
						<?php echo form_open('Register/ind_valid'); ?>
						<p  style=" padding-left: 10px;text-align: left;">Registro Individual</p>
						<hr class="popupline" COLOR="#F0F0F0">
						<div class="row">
										    					    	
					    	<div style="margin-right: 0px;width: 44%" class="column">
							    <label for="fname">Correo</label>  <br>
							    
							    <?php $data_iemail = array(
									                        'name' => 'iemail',
									                        'id' => 'iemail',
									                        'class' => 'input_box',
									                        'placeholder' => 'Correo'
									                    );
									                    echo form_input($data_iemail);
									                    echo form_error('iemail');
                    									echo form_error('ipassword');
									                     ?>	
							    
							    				    

							    <label for="Nombre">Nombre	</label> <br>
							     
							    <?php $data_fname = array(
									                        'name' => 'ifname',
									                        'id' => 'ifname',
									                        'class' => 'input_box',
									                        'placeholder' => 'Tu Nombre'
									                    );
									                    echo form_input($data_fname);
									                    echo form_error('ifname');
                    									echo form_error('ilname'); ?> 
							</div>    
						    
						    <div style="margin-right: 0px;width: 44%" class="column">
							    <label for="fname">Contraseña</label>  <br>
							    
							    <?php  $data_ipassword = array(
									                        'name' => 'ipassword',
									                        'id' => 'ipassword',
									                        'class' => 'input_box',
									                        'placeholder' => 'Contraseña'
									                    );
									                    echo form_input($data_ipassword);
									                    
									                     ?>	
							    			    
							    <label for="Nombre">Apellido	</label> <br>
							    <?php  $data_lname = array(
									                        'name' => 'ilname',
									                        'id' => 'ilname',
									                        'class' => 'input_box',
									                        'placeholder' => 'Tu Apellido'
									                    );
									                    echo form_input($data_lname); ?>
							   
						    </div>

						</div>

						<label for="fname">Dirección</label>  <br>
					    
					    <?php  $data_iaddress = array(
									                        'name' => 'iaddress',
									                        'id' => 'iaddress',
									                        'class' => 'input_box',
									                        'placeholder' => 'Dirección'
									                    );
									                    echo form_input($data_iaddress);
									                    echo form_error('iaddress');
                    									
									                     ?>	
					    		    				    

					    <label for="Nombre">Ciudad	</label> <br>
					    
					    <?php  $data_icity = array(
									                        'name' => 'icity',
									                        'id' => 'icity',
									                        'class' => 'input_box',
									                        'placeholder' => 'Ciudad'
									                    );
									                    echo form_input($data_icity);
									                    echo form_error('icity');
                    									
									                     ?>	
					    

						<div class="row">
										    					    	
					    	<div style="padding-right: 10px;width: 60%" class="column">
					    		<label for="fname">Estado</label>  <br>
					    		
							    <?php $data_state = array(
							    	'-1' => 'Escoger...',
							    	'AL' => 'Alabama (AL)',
									'AK' => 'Alaska (AK)',
									'AZ' => 'Arizona (AZ)',
									'AR' => 'Arkansas (AR)',
									'CA' => 'California (CA)',
									'CO' => 'Colorado (CO)',
									'CT' => 'Connecticut (CT)',
									'DE' => 'Delaware (DE)',
									'DC' => 'District Of Columbia (DC)',
									'FL' => 'Florida (FL)',
									'GA' => 'Georgia (GA)',
									'HI' => 'Hawaii (HI)',
									'ID' => 'Idaho (ID)',
									'IL' => 'Illinois (IL)',
									'IN' => 'Indiana (IN)',
									'IA' => 'Iowa (IA)',
									'KS' => 'Kansas (KS)',
									'KY' => 'Kentucky (KY)',
									'LA' => 'Louisiana (LA)',
									'ME' => 'Maine (ME)',
									'MD' => 'Maryland (MD)',
									'MA' => 'Massachusetts (MA)',
									'MI' => 'Michigan (MI)',
									'MN' => 'Minnesota (MN)',
									'MS' => 'Mississippi (MS)',
									'MO' => 'Missouri (MO)',
									'MT' => 'Montana (MT)',
									'NE' => 'Nebraska (NE)',
									'NV' => 'Nevada (NV)',
									'NH' => 'New Hampshire (NH)',
									'NJ' => 'New Jersey (NJ)',
									'NM' => 'New Mexico (NM)',
									'NY' => 'New York (NY)',
									'NC' => 'North Carolina (NC)',
									'ND' => 'North Dakota (ND)',
									'OH' => 'Ohio (OH)',
									'OK' => 'Oklahoma (OK)',
									'OR' => 'Oregon (OR)',
									'PA' => 'Pennsylvania (PA)',
									'RI' => 'Rhode Island (RI)',
									'SC' => 'South Carolina (SC)',
									'SD' => 'South Dakota (SD)',
									'TN' => 'Tennessee (TN)',
									'TX' => 'Texas (TX)',
									'UT' => 'Utah (UT)',
									'VT' => 'Vermont',
									'VA' => 'Virginia',
									'WA' => 'Washington',
									'WV' => 'West Virginia',
									'WI' => 'Wisconsin',
									'WY' => 'Wyoming',); ?>
									<?php echo form_dropdown('istate', $data_state, 'istate', 'class="dropbox"');
									echo form_error('istate');?>

							    		
								

							</div>
							<div style="padding-left: 10px;width: 30%" class="column">    
							    <label for="Nombre">Código Postal	</label> <br>
							    
							    <?php  $data_ipostal = array(
									                        'name' => 'ipostal',
									                        'id' => 'ipostal',
									                        'class' => 'input_box',
									                        'placeholder' => 'Ciudad'
									                    );
									                    echo form_input($data_ipostal);
									                    echo form_error('ipostal');
                    									
									                     ?>
							    
							    

					    	</div>	
					    	</div>				    
							
						<?php echo form_submit (array('id' => 'isubmit', 'value' => 'Registrarse','class' => 'submit', 'style' => 'margin-left:10px'));?>
						<hr class="popupline" COLOR="#F0F0F0">
						<a href="<?php echo base_url(); ?>Register"><input   type="button" value="Cerrar" style="margin-left: 450px; background-color:#A9A9A9" ></a>
						<?php 
                    	echo form_close(); ?>
                    	

					</div>
		</div>
	</div>

	


		
		<div id="BusinessRegister" class="overlay">
					<div style="font-weight: bold;" class="popup">
						<?php echo form_open('Register/bus_valid'); ?>
						<p  style=" padding-left: 10px;text-align: left;">Registro Negacio o Fundacion</p>
						<hr class="popupline" COLOR="#F0F0F0">
						
						<div class="row">
										    					    	
					    	<div style="margin-right: 0px;width: 44%" class="column">
							    <label for="fname">Correo</label>  <br>
							    <?php $data_bemail = array(
									                        'name' => 'bemail',
									                        'id' => 'bemail',
									                        'class' => 'input_box',
									                        'placeholder' => 'Correo'
									                    );
									                    echo form_input($data_bemail);
									                    echo form_error('bemail');
                    									echo form_error('bpassword');
									                     ?>	
							    
							    			    				    

							    <label for="Nombre">Nombre	</label> <br>
							    <?php $data_bfname = array(
									                        'name' => 'bfname',
									                        'id' => 'bfname',
									                        'class' => 'input_box',
									                        'placeholder' => 'Tu Nombre'
									                    );
									                    echo form_input($data_bfname);
									                    echo form_error('bfname');
                    									echo form_error('blname'); ?> 

							    
						    </div>
						    
						    <div style="margin-right: 0px;width: 44%" class="column">
							    <label for="fname">Contraseña</label>  <br>
							    <?php  $data_bpassword = array(
									                        'name' => 'bpassword',
									                        'id' => 'bpassword',
									                        'class' => 'input_box',
									                        'placeholder' => 'Contraseña'
									                    );
									                    echo form_input($data_bpassword);
									                    
									                     ?>
							    		    				    
							    <label for="Nombre">Apellido	</label> <br>
							    <?php  $data_blname = array(
									                        'name' => 'blname',
									                        'id' => 'blname',
									                        'class' => 'input_box',
									                        'placeholder' => 'Tu Apellido'
									                    );
									                    echo form_input($data_blname); ?>

							    
						    </div>

						</div>

						<label for="fname">Dirección</label>  <br>
					    <?php  $data_baddress = array(
									                        'name' => 'baddress',
									                        'id' => 'baddress',
									                        'class' => 'input_box',
									                        'placeholder' => 'Dirección'
									                    );
									                    echo form_input($data_baddress);
									                    echo form_error('baddress');
                    									
									                     ?>	
					    		    				    

					    <label for="Nombre">Ciudad	</label> <br>
					    <?php  $data_bcity = array(
									                        'name' => 'bcity',
									                        'id' => 'bcity',
									                        'class' => 'input_box',
									                        'placeholder' => 'Ciudad'
									                    );
									                    echo form_input($data_bcity);
									                    echo form_error('bcity');
                    									
									                     ?>
					    	

						<div class="row">
										    					    	
					    	<div style="padding-right: 10px;width: 60%" class="column">
					    		<label for="fname">Estado</label>  <br>
							    <?php $data_bstate = array(
							    	'-1' => 'Escoger...',
							    	'AL' => 'Alabama (AL)',
									'AK' => 'Alaska (AK)',
									'AZ' => 'Arizona (AZ)',
									'AR' => 'Arkansas (AR)',
									'CA' => 'California (CA)',
									'CO' => 'Colorado (CO)',
									'CT' => 'Connecticut (CT)',
									'DE' => 'Delaware (DE)',
									'DC' => 'District Of Columbia (DC)',
									'FL' => 'Florida (FL)',
									'GA' => 'Georgia (GA)',
									'HI' => 'Hawaii (HI)',
									'ID' => 'Idaho (ID)',
									'IL' => 'Illinois (IL)',
									'IN' => 'Indiana (IN)',
									'IA' => 'Iowa (IA)',
									'KS' => 'Kansas (KS)',
									'KY' => 'Kentucky (KY)',
									'LA' => 'Louisiana (LA)',
									'ME' => 'Maine (ME)',
									'MD' => 'Maryland (MD)',
									'MA' => 'Massachusetts (MA)',
									'MI' => 'Michigan (MI)',
									'MN' => 'Minnesota (MN)',
									'MS' => 'Mississippi (MS)',
									'MO' => 'Missouri (MO)',
									'MT' => 'Montana (MT)',
									'NE' => 'Nebraska (NE)',
									'NV' => 'Nevada (NV)',
									'NH' => 'New Hampshire (NH)',
									'NJ' => 'New Jersey (NJ)',
									'NM' => 'New Mexico (NM)',
									'NY' => 'New York (NY)',
									'NC' => 'North Carolina (NC)',
									'ND' => 'North Dakota (ND)',
									'OH' => 'Ohio (OH)',
									'OK' => 'Oklahoma (OK)',
									'OR' => 'Oregon (OR)',
									'PA' => 'Pennsylvania (PA)',
									'RI' => 'Rhode Island (RI)',
									'SC' => 'South Carolina (SC)',
									'SD' => 'South Dakota (SD)',
									'TN' => 'Tennessee (TN)',
									'TX' => 'Texas (TX)',
									'UT' => 'Utah (UT)',
									'VT' => 'Vermont',
									'VA' => 'Virginia',
									'WA' => 'Washington',
									'WV' => 'West Virginia',
									'WI' => 'Wisconsin',
									'WY' => 'Wyoming',); ?>
									<?php echo form_dropdown('bstate', $data_bstate, 'bstate', 'class="dropbox"');
									echo form_error('bstate');?>

								
							</div>
							<div style="padding-left: 10px;width: 30%" class="column">    
							    <label for="Nombre">Código Postal	</label> <br>
							    <?php  $data_bpostal = array(
									                        'name' => 'bpostal',
									                        'id' => 'bpostal',
									                        'class' => 'input_box',
									                        'placeholder' => 'Ciudad'
									                    );
									                    echo form_input($data_bpostal);
									                    echo form_error('bpostal');
                    									
									                     ?>

							    
							    

					    	</div>
					    	</div>	
					    <?php
								$data_radio1 = array(
						                        'name' => 'typeBusiness',
						                        'value' => 'Type1',
						                         'checked' => TRUE
						                       
						                    );
						                    echo form_radio($data_radio1);
						                ?>
						<span style="font-weight: bold;">Tipo de negocio 1</span> 
						<?php
								$data_radio2 = array(
						                        'name' => 'typeBusiness',
						                        'value' => 'Type2'
						                       
						                    );
						                    echo form_radio($data_radio2);
						                ?> <span style="font-weight: bold;">Tipo de negocio 2</span> 
						<?php
								$data_radio3 = array(
						                        'name' => 'typeBusiness',
						                        'value' => 'Type3'
						                       
						                    );
						                    echo form_radio($data_radio3);
						                ?> <span style="font-weight: bold;">Tipo de negocio 3</span> 
						<br>
						<br> 
									    
						<?php echo form_submit (array('id' => 'bsubmit', 'value' => 'Registrarse','class' => 'submit', 'style' => 'margin-left:10px'));?>	
						<hr class="popupline" COLOR="#F0F0F0">
						<a href="<?php echo base_url(); ?>Register"><input   type="button" value="Cerrar" style="margin-left: 450px; background-color:#A9A9A9" ></a>
						<?php 
                    	echo form_close(); ?>
                    	
					</div>
		</div>
	</div>
		<?php
				if(isset($popid)){
									echo "<script>location.href = '".base_url()."Register/".$popid."';</script>"; 	
								}
		?>

		
		<div id="AgentRegister" class="overlay">
					<div style="font-weight: bold;" class="popup">
						<?php echo form_open('Register/age_valid'); ?>
						<p  style=" padding-left: 10px;text-align: left;">Registro de Agente LEAN</p>
						<hr class="popupline" COLOR="#F0F0F0">
						<div class="row">
										    					    	
					    	<div style="margin-right: 0px;width: 44%" class="column">
							    <label for="fname">Correo</label>  <br>
							    <?php $data_aemail = array(
									                        'name' => 'aemail',
									                        'id' => 'aemail',
									                        'class' => 'input_box',
									                        'placeholder' => 'Correo'
									                    );
									                    echo form_input($data_aemail);
									                    echo form_error('aemail');
                    									echo form_error('apassword');
									                     ?>
							    

							    <label for="Nombre">Nombre	</label> <br>
							    <?php $data_afname = array(
									                        'name' => 'afname',
									                        'id' => 'afname',
									                        'class' => 'input_box',
									                        'placeholder' => 'Tu Nombre'
									                    );
									                    echo form_input($data_afname);
									                    echo form_error('afname');
                    									echo form_error('alname'); ?>  
							    
						    </div>
						    
						    <div style="margin-right: 0px;width: 44%" class="column">
							    <label for="fname">Contraseña</label>  <br>
							    <?php  $data_apassword = array(
									                        'name' => 'apassword',
									                        'id' => 'apassword',
									                        'class' => 'input_box',
									                        'placeholder' => 'Contraseña'
									                    );
									                    echo form_input($data_apassword);
									                    
									                     ?>		
							       				   
							    <label for="Nombre">Apellido	</label> <br>
							    <?php  $data_alname = array(
									                        'name' => 'alname',
									                        'id' => 'alname',
									                        'class' => 'input_box',
									                        'placeholder' => 'Tu Apellido'
									                    );
									                    echo form_input($data_alname); ?>
							    
						    </div>

						</div>

						<label for="fname">Dirección</label>  <br>
					    <?php  $data_aaddress = array(
									                        'name' => 'aaddress',
									                        'id' => 'aaddress',
									                        'class' => 'input_box',
									                        'placeholder' => 'Dirección'
									                    );
									                    echo form_input($data_aaddress);
									                    echo form_error('aaddress');
                    									
									                     ?>
					    		    				    

					    <label for="Nombre">Ciudad	</label> <br>
					    <?php  $data_acity = array(
									                        'name' => 'acity',
									                        'id' => 'acity',
									                        'class' => 'input_box',
									                        'placeholder' => 'Ciudad'
									                    );
									                    echo form_input($data_acity);
									                    echo form_error('acity');
                    									
									                     ?>	
					    

						<div class="row">
										    					    	
					    	<div style="padding-right: 10px;width: 60%" class="column">
					    		<label for="fname">Estado</label>  <br>
							    <?php $data_astate = array(
							    	'-1' => 'Escoger...',
							    	'AL' => 'Alabama (AL)',
									'AK' => 'Alaska (AK)',
									'AZ' => 'Arizona (AZ)',
									'AR' => 'Arkansas (AR)',
									'CA' => 'California (CA)',
									'CO' => 'Colorado (CO)',
									'CT' => 'Connecticut (CT)',
									'DE' => 'Delaware (DE)',
									'DC' => 'District Of Columbia (DC)',
									'FL' => 'Florida (FL)',
									'GA' => 'Georgia (GA)',
									'HI' => 'Hawaii (HI)',
									'ID' => 'Idaho (ID)',
									'IL' => 'Illinois (IL)',
									'IN' => 'Indiana (IN)',
									'IA' => 'Iowa (IA)',
									'KS' => 'Kansas (KS)',
									'KY' => 'Kentucky (KY)',
									'LA' => 'Louisiana (LA)',
									'ME' => 'Maine (ME)',
									'MD' => 'Maryland (MD)',
									'MA' => 'Massachusetts (MA)',
									'MI' => 'Michigan (MI)',
									'MN' => 'Minnesota (MN)',
									'MS' => 'Mississippi (MS)',
									'MO' => 'Missouri (MO)',
									'MT' => 'Montana (MT)',
									'NE' => 'Nebraska (NE)',
									'NV' => 'Nevada (NV)',
									'NH' => 'New Hampshire (NH)',
									'NJ' => 'New Jersey (NJ)',
									'NM' => 'New Mexico (NM)',
									'NY' => 'New York (NY)',
									'NC' => 'North Carolina (NC)',
									'ND' => 'North Dakota (ND)',
									'OH' => 'Ohio (OH)',
									'OK' => 'Oklahoma (OK)',
									'OR' => 'Oregon (OR)',
									'PA' => 'Pennsylvania (PA)',
									'RI' => 'Rhode Island (RI)',
									'SC' => 'South Carolina (SC)',
									'SD' => 'South Dakota (SD)',
									'TN' => 'Tennessee (TN)',
									'TX' => 'Texas (TX)',
									'UT' => 'Utah (UT)',
									'VT' => 'Vermont',
									'VA' => 'Virginia',
									'WA' => 'Washington',
									'WV' => 'West Virginia',
									'WI' => 'Wisconsin',
									'WY' => 'Wyoming',); ?>
									<?php echo form_dropdown('astate', $data_astate, 'astate', 'class="dropbox"');
									echo form_error('astate');?>
	
									    				    
							</div>
							<div style="padding-left: 10px;width: 30%" class="column">    
							    <label for="Nombre">Código Postal	</label> <br>
							    <?php  $data_apostal = array(
									                        'name' => 'apostal',
									                        'id' => 'apostal',
									                        'class' => 'input_box',
									                        'placeholder' => 'Ciudad'
									                    );
									                    echo form_input($data_apostal);
									                    echo form_error('apostal');
                    									
									                     ?>

							    
							    

					    	</div>
					    	</div>					    
						<?php echo form_submit (array('id' => 'asubmit', 'value' => 'Registrarse','class' => 'submit', 'style' => 'margin-left:10px'));?>	
						<hr class="popupline" COLOR="#F0F0F0">
						<a href="<?php echo base_url(); ?>Register"><input   type="button" value="Cerrar" style="margin-left: 450px; background-color:#A9A9A9" ></a>
					</div>
		</div>
		</form>
	</div>

</body>

</html>