<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/CSS/leanevent.css">
	<link rel='stylesheet' href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>
		Comprar Boletos
	</title>
</head>
<body>


	<div id="wrapper">
		

		<div>
			<img class ="bannerpic" src="<?php echo base_url(); ?>Images/bannercboleto.jpg" alt="Leanevento bannerregistro" >
		</div>

		<div id="ImageTextContacto">
			COMPRAR BOLETOS	
		</div>

		<div id="SubTextLogin">
			<span style="color: #FFC300">INICIO</span>  &nbsp &nbsp COMPRAR BOLETOS	
		</div>
		<?php echo form_open('BuyFromUs/event_insert'); ?> 
  		<tr><?php foreach ($event->result() as $item):?> </tr>

		<div class="ColumnInfo" style="left: 275px;top: 400px;">
			<div class="column" style="margin-left: 10%">
				<div>
						<?php echo form_open('BuyFromUs/event_insert'); ?> 
						<?php $btn_search = array(
															'type'      => 'image',
															'src'        => 'data:image/jpeg;base64,'.base64_encode( $item->Photo ),
															 'name'        => 'image',
															 'width'     => '150%',
															 'height'    => '300',
															  'value'        => $item->Event_ID   
												);

								     
					 				echo form_input($btn_search);
						           echo "<br><span style='font-size:70%;'>";?>

					
				</div>
			</div>

			<div class="column">
				<div style="width: 300%;margin-left: 60%">
					


					<?php echo "<p style='font-weight:bold'> ".$item->Event_Name." </p>"?>
					<?php echo "<p style='font-weight:bold'> "?>
					<?php echo "$".$item->Price.".00</p>"; ?>

					<span style="padding-left:40%">
							
						<span class="fa fa-star" style="color:#ffc300"></span>
						<span class="fa fa-star" style="color:#ffc300"></span>
						<span class="fa fa-star" style="color:#ffc300"></span>
						<span class="fa fa-star" style="color:#ffc300"></span>
						<span class="fa fa-star" style="color:#ffc300"></span>(74 Rating)
					</span>
					</p>
					<p>
					
					</p>
					<?php echo "<p style='font-weight:bold'>Numero de Entradas: ".$item->Total_Tickets." </p>"?>

					<div >
					    
						<?php echo "<p>".$item->Event_Desc." </p>"?>
					    <!-- <input type='button' value='-' class='qtyminus' field='quantity' />
					    <input type='text' name='quantity' value='1' class=iLa fe no se puede perder JAMAS! Es imprescindible para todo en nuestras vidas,poco a poco las cosas irán mejorando. No  cambiarán de la noche a la mañana,pero van a cambiar y solo  cambiarán si te lo propones. Si hoy tuvimos un mal día,neustra meta será tener uno mejor mañana.Es básicamente hacer nuestra la frase "Hoy no me daré por vencido",repitela tados los días, hazla parte de tu filosofía de vida'qty' style="width:15px;padding: 0px;margin:5px;"/>
					    <input type='button' value='+' class='qtyplus' field='quantity' style="padding: 0px;margin:0px;"/> -->

					    <?php 
							$minus_data=array(
							'type' => 'button',
							'content' => '-',
							'name' => 'minusBtn',
							'id' => 'minusBtn',
							'style' => 'border-radius:0%;background-color:#D7DBDD;'
						);
						 echo form_button($minus_data);
						$count_data=array(
							'name'=>'tickcount',
							'id' =>'tickcount',
						'style' => 'width:40px;margin:0px;padding:0px;height:20px;text-align:center;',
														    		'value'=>'1'
						);
						echo form_input($count_data);
						$plus_data=array(
							'type' => 'button',
							'content' => '+',
							'name' => 'plusBtn',
							'id' => 'plusBtn',
							'style' => 'border-radius:0%;background-color:#D7DBDD;'
							);
						 echo form_button($plus_data);
						?>
						 <script type="text/javascript">
														     
						var minusbutton = document.getElementById('minusBtn');
							 var plusbutton = document.getElementById('plusBtn');
							var display = document.getElementById('tickcount');
						 	var count = display.value;
							
						plusbutton.onclick = function(){
								count++;
								 display.value = count;
								 return false;
						  }
						 minusbutton.onclick =function(){
							count--;
							if(count< 1){
								count=1;
							}
							display.value = count;
							return false;
						}
						</script>

					</div>
					<br>

					<!-- <button class=shopcartbtn><i class="fas fa-shopping-cart" style="color:white;">&nbsp Comprar</i></button> -->
					<?php $cart_btn = array(
															'name'          => 'addCart',
															 'id'            => 'addCart',
															 'class'            => 'fas fa-shopping-cart',
															 'value'         => $item->Event_ID,
															 'type'          => 'submit',
															 'content'       => '&nbsp Comprar',
															 'style'			=> 'background-color: #FFC300;  color: white;  padding: 9px 20px;  border: none;  margin: 20px 0px 20px 0px;  cursor: pointer;  text-align: center;'
														);

														  echo form_button($cart_btn);
														  echo "</span><br>"; ?>
					
							
				</div>
			</div>
		<div class="row" style="width: 75%" >
						<ul style="list-style:none;float:left;text-decoration: none;padding-bottom: 0px;margin-bottom: 0px;">
					    <li style="margin-left: 20px" ><a style="background-color:#FFC300;color: white;padding: 10%;padding-right: 10px"href="#S3">PATROCINANTES</a></li>
					    <li style="margin-left: 20px"><a style="background-color:#FFC300;color: white;padding: 10%;"href="#S2">ENCARGADOS</a></li>
					    <li style="margin-left: 20px"><a style="background-color:#FFC300;color: white;padding: 10%;"href="#S1">DESCRIPCION </a></li> 
						</ul>
						<br>
						<br>
			</div>
			<div class="row" style="width:63%;margin-left: 11%">
				<section class="tabswitch">	

				    <section id="S1">
				      
				        <p>
				        	<?php echo "".$item->Event_Desc." "?>
				        </p>
				    </section>
				    <section id="S2">
				      
				        <p><?php echo "".$item->Event_Desc." "?></p>
				    </section>
				    <section id="S3">
				      
				        <p><?php echo "".$item->Event_Desc." "?></p>
				    </section>
				</section>
			</div>
		</div>
		</div>

			
		<?php endforeach;?>
		<?php echo form_close(); ?>
        	



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