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
	

	

	  <div class="eventtable">
	  	
	  	<table class="eventtablestyle">

	    <caption style="font-size: 150%;margin-bottom: 50px;">Lista de Eventos</caption>
	    <tr class="colhead">
	      <th style="width: 10px"></th>	
	      <th style="width: 600px">DETALLES DEL EVENTOS</th>	
	      <th>LUGAR</th>
	      <th>FECHA</th>
	      <th>HORA</th>
	      <th>ASSISTENCIA</th>
	    </tr>
	    <?php
                    echo form_open('Business/vol_valid'); ?>
                    <?php foreach ($event->result() as $item):?>
	    	<tr>
	      <td> <?php $btn_search = array(
															'type'      => 'image',
															'src'        => 'data:image/jpeg;base64,'.base64_encode( $item->Photo ),
															 'name'        => 'image',
															 'width'     => '100',
															 'height'    => '125',
															  'value'        => $item->Event_ID   
												);

								     
					 				echo form_input($btn_search);
						           echo "<br><span style='font-size:70%;'>"; ?></td>
	      <td style="text-align: center;"><?php echo "".$item->Event_Name.""?></td>
	      <td><?php echo "".$item->Place.""?></td>
	      <td><?php echo "".$item->Date.""?></td>
	      <td><?php echo "".$item->Hour.""?></td>
	      <td>
	      	<?php $cnfrm_btn = array(
															'name'          => 'addCart',
															 'id'            => 'addCart',
															 'class'            => 'fgbtn',
															 'value'         => $item->Event_ID,
															 'type'          => 'submit',
															 'content'       => 'Confirmar',
															 'style'			=> 'background-color: #FFC300;  color: white;  padding: 9px 20px;  border: none;  border-radius: 20px;  cursor: pointer;  text-align: center;  margin-left: 0px;'
														);

														  echo form_button($cnfrm_btn);
														  echo "</span><br>"; ?>
	      	<!-- <button style="background-color: #FFC300;  color: white;  padding: 9px 20px;  border: none;  border-radius: 20px;  cursor: pointer;  text-align: center;  margin-left: 0px;" type="submit" value="<?php echo $row1[0];?>" name="addEventBtn" class="fgbtn"style="margin-left: 10px; margin-bottom: 10px;">Confirmar</button> --></td>
	    </tr> 
	    
	    
	    <?php endforeach;
	    echo form_close();?>

	  	</table>
	  </div>

	    <?php if(isset($popid)){
	    	echo "<script>location.href = '".base_url()."Business/".$popid."';</script>";
	    }
	    ?>
    
	

    <div id="welcome" class="overlay">
					<div class="popup">
						<p  style=" padding-left: 10px;text-align: center;font-weight: bold;">Bienvenido</p>
						<hr class="popupline" COLOR="#F0F0F0">
						<label for="fgpsd" style="padding-top:0px; padding-left: 10px;">Gracias por ser parte en nuestros evento.</label><br>
						<hr class="popupline" COLOR="#F0F0F0">
							
						<a href="<?php echo base_url(); ?>/Business"><input   type="submit" value="Close" style="margin-left: 450px; margin-bottom: 10px;background-color:#A9A9A9" ></a>
					</div>
	</div>

	<div id="noaddpopup" class="overlay">
					<div class="popup">
						<p  style=" padding-left: 10px;text-align: center;font-weight: bold;">Bienvenido</p>
						<hr class="popupline" COLOR="#F0F0F0">
						<label for="fgpsd" style="padding-top:0px; padding-left: 10px;">Sorry, Already registered.</label><br>
						<hr class="popupline" COLOR="#F0F0F0">
							
						<a href="<?php echo base_url(); ?>/Business"><input   type="submit" value="Close" style="margin-left: 450px; margin-bottom: 10px;background-color:#A9A9A9" ></a>
					</div>
	</div>


</div>
</body>
</html>