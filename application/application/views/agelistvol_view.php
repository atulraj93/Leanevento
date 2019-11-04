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
	Lista de Voluntarios
</title>
</head>


<body>
<div id="wrapper">
	<div class="eventtable">
	  	<table class="eventtablestyle">
	    <caption style="font-size: 150%;margin-bottom: 50px;">Lista de Voluntarios</caption>
	    <tr class="colhead">
	      <th style="width: 10px"></th>	
	      <th style="width: 600px">NOMBRE DE VOLUNTARIO</th>	
	      <th>CORREO</th>
	      <th>TELEPHONO</th>
	      <th>EVENTO</th>
	      <th>RESPONSABLE</th>
	    </tr>
	    	    
	   
                    <?php foreach ($event->result() as $item):?>
	            	<tr>
		            	 <td> <?php $btn_search = array(
															'type'      => 'image',
															'src'        => 'data:image/jpeg;base64,'.base64_encode( $item->Photo ),
															 'name'        => 'image',
															 'width'     => '100',
															 'height'    => '125'   
												);

								     
					 				echo form_input($btn_search);
						           echo "<br><span style='font-size:70%;'>"; ?></td></td>
					     <td style="text-align: center;"><?php echo "".$item->First_Name." ".$item->Last_Name.""?> </td>
					     <td><?php echo "".$item->Address.""?> </td>
					     <td><?php echo "".$item->Telephone.""?> </td>
					     <td><?php echo "".$item->Event_Name.""?> </td>
					     <td><?php echo "".$item->Responsible.""?> </td>
					</tr>
		<?php endforeach;?>
	  	</table>
	  </div>

      <!-- <div class="pagination">
		  <a href="#">&laquo;</a>
		  <a class="active" href="#">1</a>
		  <a href="#">2</a>
		  <a href="#">3</a>
		  <a href="#">4</a>
		  <a href="#">&raquo;</a>
	  </div> -->
	

	
	
			
			

    

</div>
</body>
</html>