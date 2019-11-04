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
	Lista de Fundaciones
</title>
</head>


<body>
<div id="wrapper">
	<div class="eventtable">
	  	<table class="eventtablestyle">
	    <caption style="font-size: 150%;margin-bottom: 50px;">Lista de Fundaciones</caption>
	    <tr class="colhead">
	      <th style="width: 10px"></th>	
	      <th style="width: 600px">NOMBRE DE LA FUNDACION</th>	
	      <th>EVENTO</th>
	      <th>RESPONSABLE</th>
	      <th>COMISION</th>
	      <th>CONFIRMAR</th>
	    </tr>
	    	    
	   
                    <?php foreach ($event->result() as $item):?>
	            	<?php echo form_open('Agent/assignComm'); ?>

					<tr>
		            	 <td> <?php $btn_search = array(
															'type'      => 'image',
															'src'        => 'data:image/jpeg;base64,'.base64_encode( $item->Photo ),
															 'name'        => 'image',
															 'width'     => '100',
															 'height'    => '125'   
												);

								     
					 				echo form_input($btn_search);
						           echo "<br><span style='font-size:70%;'>"; ?></td>
					     <td style="text-align: center;"><?php echo "".$item->First_Name." ".$item->Last_Name.""?></td>
					     <td><?php echo "".$item->Event_Name.""?> </td>
					     <td><?php echo "".$item->Responsible.""?> </td>
					     <!-- <td> <input type ="text" style="text-align: center;width: 25%;" name="asg" value="<?php echo $row1[4];?>"></td> -->
					     <td> <?php $btn_search = array(
															'type'      => 'inputbox',
															 'name'		=>'comm['.$item->Donator_ID."-".$item->Event_ID.']',
															 'width'     => '100',
															 'style'	=> 'text-align: center;width: 25%;',
															 'height'    => '125' ,
															 'value'	=> $item->Commission
												);

								     
					 				echo form_input($btn_search);
					 				echo form_error('comm['.$item->Donator_ID."-".$item->Event_ID.']');
						           echo "<br><span style='font-size:70%;'>"; ?></td>
					     <!-- <td><button type="submit" name="asgBtn" value="<?php echo $row1[5]."-".$row1[6];?>" class="fgbtn"style="background-color: #FFC300;
  							color: white;  width: 90%;  height: 40%;  padding: 9px 20px;  border: none;  border-radius: 20px;  cursor: pointer;  text-align: center;  margin-left: 300px;margin-left: 10px; margin-bottom: 10px;">Assignar</button></td> -->
  							<td><?php $upd_btn=array(
														'id'=>'asgBtn',
														'name'=>'asgBtn',
														'class'=>'assignBtn',
														'style'=>'background-color: #FFC300;
  							color: white;  width: 90%;  height: 30%;  padding: 9px 20px;  border: none;  border-radius: 20px;  cursor: pointer;  text-align: center;  margin-left: 300px;margin-left: 10px; margin-bottom: 10px;',
														'content'=>'Asignar',
														'type'=>'submit',
														'value'=>$item->Donator_ID."-".$item->Event_ID
													);
													echo form_button($upd_btn);
							?></td>
					</tr>
		<?php endforeach;?>
		<?php echo form_close();?>
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