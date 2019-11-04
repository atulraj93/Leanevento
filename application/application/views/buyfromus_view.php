<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	

?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/CSS/leanevent.css">
	<link rel='stylesheet' href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>
		Comprar Boletos
	</title>
</head>
<body>


	<div id="wrapper">
		
		<div>
			<img class ="bannerpic" src="<?php echo base_url(); ?>/Images/bannercboleto.jpg" alt="Leanevento bannerregistro" >
		</div>

		<div id="ImageTextContacto">
			COMPRAR BOLETOS	
		</div>

		<div id="SubTextLogin">
			<span style="color: #FFC300">INICIO</span>  &nbsp &nbsp COMPRAR BOLETOS	
		</div>

		

		<div class="ColumnInfo" style="left: 325px;top: 400px;"> 
			<div class="row"> 
  							
  							<div class="middleText">
  								<hr class="hr-text" style="margin-left: 325px;"COLOR="#FFC300"><span style="font-size: 110%; color:black;padding-left: 10px">NUESTROS EVENTOS</span><hr COLOR="#FFC133" class="hr-text" style="margin-left:10px;">

								<p style="font-size: 75%;margin-left: 250px">Tu asistencia es importante para nosotros visitanos en los eventos qu estamos realizando</p>
								
							</div>	

  			</div>
  		<div class="columnimage">
  					<?php
                    echo form_open('BuyFromUs/event_list'); ?>
  					<table>
  						
  						<tr><?php foreach ($event->result() as $item):?>
									     
						<td>
							<?php $btn_search = array(
															'type'      => 'image',
															'src'        => 'data:image/jpeg;base64,'.base64_encode( $item->Photo ),
															 'name'        => 'image',
															 'width'     => '250',
															 'height'    => '250',
															  'value'        => $item->Event_ID   
												);

								     
					 				echo form_input($btn_search);
						           echo "<br><span style='font-size:70%;'>";
						                 $data_btn = array(
															'name'          => 'viewDet',
															 'id'            => 'viewDet',
															 'value'         => $item->Event_ID,
															 'type'          => 'submit',
															 'content'       => $item->Event_Name,
															 'style'			=> 'font-size:150%;width:100%;border:none;background-color:white'
														);
														  echo form_button($data_btn);
														  echo "</span><br>";


								                 echo "<span style='color:#FFC300;padding-left:42%'>";
								                   if($item->Price==0){
								                   	echo "Entrada Gratis</span>";
								                   }
								                   else{
								                   	echo "$".$item->Price.".00</span>";
								                   }
								                   echo form_close();
					?>
								            
						</td>

					<?php endforeach;?>


						</tr>
				</table>


				
  			</div>

</div>

		<div class="rectangle" style="top: 1600px" >
			
				
			    <p style="float: left;margin-left: 475px;margin-top: 30px;font-weight: bold"><i  class='far fa-paper-plane'> </i>&nbsp Registrese para recibir un<br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp boletin</p>
			
			    <?php
		                    
		                    
		                    $data_name = array(
		                        'name' => 'subscribe',
		                        'id' => 'subscribe',
		                        'class' => 'input_box',
		                        'placeholder' => 'Introduce tu correo electrónico'
		                    );
		                    echo form_input($data_name);
		                    echo form_submit('submit', 'Suscribir', "class='submit'");
		                    
	            ?>
				
		</div>		
			
			

	    

	</div>

</body>
</html>