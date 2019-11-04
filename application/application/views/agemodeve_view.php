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
	Registro de Evento
</title>


</head>


<body>
<div id="wrapper">
	
	<div>
		<img class ="bannerpic" src="<?php echo base_url(); ?>/Images/bannerregistro.jpg" alt="Leanevento bannercontacto" >
	</div>

	<div id="ImageTextContacto">
		REGISTRO DE EVENTO	
	</div>

	<div id="SubTextInicio">
		<span style="color: #FFC300">EVENTOS</span>  &nbsp &nbsp REGISTRO
	</div>
    
    <div class=ColumnInfo>
    	
    		
	    <div style="height: 700px" class="container">
		    <div class="row">
					
				
				<?php echo form_open('Agent/updateEvent'); ?>
				<?php foreach ($event->result() as $item):?>	    
		    	<h2 style="font-weight: normal;font-size: 16px;margin-bottom: 20px">Registro de Evento</h2>
		    	<hr color="#F0F0F0">

		    	<div style="padding: 0px" class="column">
				    <label for="fname">Nombres</label>  <br>
				    <!-- <input style="width: 450px; margin-bottom: 35px;" type="text" id="ename" name="ename" required placeholder="Nombre del Evento"> <br> -->	
				    <?php $data_ename = array(
									                        'name' => 'ename',
									                        'id' => 'ename',
									                        'class' => 'input_box',
									                        'style' => 'width:450px',
									                        'placeholder' => 'Nombre del Evento',
									                        'value' => $item->Event_Name
									                    );
									                    echo form_input($data_ename);
									                    echo form_error('ename');
									                     ?>
				    		    				    
				    <label for="Responible">Responsable	</label> <br>
				    <!-- <input style="width: 450px" type="text" id="responsible" name="responsible" required placeholder="Nombre del Responsable"> <br> -->
				    <?php $data_resp = array(
									                        'name' => 'resp',
									                        'id' => 'resp',
									                        'class' => 'input_box',
									                        'style' => 'width:450px',
									                        'placeholder' => 'Nombre del Responsable',
									                        'value' => $item->Responsible
									                    );
									                    echo form_input($data_resp);
									                    echo form_error('resp');
									                     ?>
				    
			    </div>
			    
			    <div class="column">
				    <!-- <img style="width: 125px;height: 125px;margin-left: 445px" src="<?php echo base_url(); ?>/Images/imagensubir.png" alt="Seleccionar imagen" > <br> <br> -->
				    <?php $btn_search = array(
															'type'      => 'image',
															'src'        => 'data:image/jpeg;base64,'.base64_encode( $item->Photo ),
															 'name'        => 'image',
															 'style'		=> 'width: 125px;height: 125px;margin-left: 445px',
															  'value'        => $item->Event_ID   
												);

								     
					 				echo form_input($btn_search);
						           echo "<br><span style='font-size:70%;'>"; ?> <br><br>
				    <input style="margin-left: 400px;width: 200%" type="submit" value="Seleccionar imagen">

			    </div>

			</div>

		    <label for="topic">Lugar	</label> <br>
		   <!--  <input type="text" id="place" name="place" required placeholder="Direccion del Lugar	del Eventos"> <br> -->
		   <?php $data_place = array(
									                        'name' => 'place',
									                        'id' => 'place',
									                        'class' => 'input_box',
									                        'placeholder' => 'Direccion del Lugar del Eventos',
									                        'value' => $item->Place
									                    );
									                    echo form_input($data_place);
									                    echo form_error('place');
									                     ?>
		    

		    
	    	<div  class="row">    
			    <div style="width: 252px;padding: 0px" class="column">
			    <label for="message">Fecha	</label> <br> 
			    <!-- <input style="height: 30px; width: 200px; " type="date" required id="edate" name="edate" placeholder="00/00/0000">  -->
			    

			    <?php $data_date = array(
									                        'name' => 'edate',
									                        'id' => 'edate',
									                        'type'=> 'date',
									                        'class' => 'input_box',
									                        'style' => 'padding-top: 15px; margin-top: 5px;padding-bottom: 15px;border: 1px solid #F0F0F0;margin-left:10px; width:90%;',
									                        'placeholder' => '00/00/0000',
									                        'value' => $item->Date
									                    );
									                    echo form_input($data_date);
									                    echo form_error('edate');
									                     ?>
			    
			    </div>
			    <div style="width: 252px;padding: 0px 20px 0px 20px" class="column">
			    <label for="message">Hora	</label> 
			    <!-- <input type="text" id="ehour" required name="ehour" placeholder="00:00"> --> 
			    
			    <?php $data_hour = array(
									                        'name' => 'ehour',
									                        'id' => 'ehour',
									                        'type'=> 'time',
									                        'class' => 'input_box',
									                        'style' => 'padding-top: 15px; margin-top: 5px;padding-bottom: 15px;border: 1px solid #F0F0F0;margin-left:10px; width:90%;',
									                        'placeholder' => '00:00',
									                        'value' => $item->Hour
									                    );
									                    echo form_input($data_hour);
									                    echo form_error('ehour');
									                     ?>
			    
			    </div>
			    <div style="width: 252px;padding: 0px" class="column">
			    <label for="message">Valor de Boleto		</label> 
			    <!-- <input type="text" required id="amount" name="amount" placeholder="$000.0"> -->
			    <?php $data_amt = array(
									                        'name' => 'amt',
									                        'id' => 'amt',
									                        'class' => 'input_box',
									                        'placeholder' => '$000.0',
									                        'value' => $item->Price
									                    );
									                    echo form_input($data_amt);
									                    echo form_error('amt');
									                     ?>
			    
				</div>
		    </div>
				
			    <!-- <input style="margin-left: 350px" type="submit" value="Guardar"> -->
			    <?php $create_btn=array(
														'id'=>'modBtn',
														'name'=>'modBtn',
														'class'=>'modifyButton',
														'content'=>'Guardar',
														'style' =>'margin-left: 350px; width:10%;color:white;background-color:#FFC300',
														'type'=>'submit',
														'value'=> $item->Event_ID
													);
													echo form_button($create_btn);
							?>
			    
	    </div>
	    <?php endforeach;?>
	<?php echo form_close();?>
	</div>



	

</div>    
</div>
</body>