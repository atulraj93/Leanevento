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
	Eventos
</title>
</head>


<body>
<div id="wrapper">
	<div class="eventtable">
	  	<table class="eventtablestyle">
	    <caption style="font-size: 150%;margin-bottom: 50px;">Lista de Eventos</caption>
	    <div>
		
		<!-- <a href="AddEvent.php"><input type="submit" value="Aggregar" class="fgbtn" style="background-color: #3CB371; margin-left: 1190px;"></a> -->
		<?php echo form_open('Agent/addEvent'); ?>
		<?php $add_btn = array(
														'id'=>'addBtn',
														'name'=>'addBtn',
														'class'=>'modifyButton',
														'content'=>'Aggregar',
														'type'=>'submit',
														'style'=>'background-color: #3CB371;width:75px;color:white; margin-left: 1190px;',
														'value'=>''
													);
					     							
													echo form_button($add_btn);
						           echo "<br><span style='font-size:70%;'>"; ?></td>
		<?php echo form_close();?>
		</div>
	    <tr class="colhead">
	      <th style="width: 10px"></th>	
	      <th style="width: 600px">DETALLES DEL EVENTOS</th>	
	      <th>LUGAR</th>
	      <th>FECHA</th>
	      <th>MODIFICAR</th>
	      <th>ELIMINAR</th>
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
						           echo "<br><span style='font-size:70%;'>"; ?></td>
					     <td style="text-align: center;"><?php echo "".$item->Event_Name.""?></td>
					     <td><?php echo "".$item->Place.""?> </td>
					     <td><?php echo "".$item->Date.""?> </td>
					     <!-- <td> <input type ="text" style="text-align: center;width: 25%;" name="asg" value="<?php echo $row1[4];?>"></td> -->
					     <?php echo form_open('Agent/modEvent'); ?>
					     <td><?php $mod_btn=array(
														'id'=>'modBtn',
														'name'=>'modBtn',
														'class'=>'modifyButton',
														'content'=>'<i class="far fa-edit" style="font-size:16px; color: white;""></i>',
														'type'=>'submit',
														'value'=>$item->Event_ID													);
					     							
													echo form_button($mod_btn);
							?></td>
							<?php echo form_close();?>
					     <!-- <td><button type="submit" name="asgBtn" value="<?php echo $row1[5]."-".$row1[6];?>" class="fgbtn"style="background-color: #FFC300;
  							color: white;  width: 90%;  height: 40%;  padding: 9px 20px;  border: none;  border-radius: 20px;  cursor: pointer;  text-align: center;  margin-left: 300px;margin-left: 10px; margin-bottom: 10px;">Assignar</button></td> -->
  							<?php echo form_open('Agent/delEvent'); ?>
  							<td><?php $del_btn=array(
														'id'=>'delBtn',
														'name'=>'delBtn',
														'class'=>'deleteBtn',
														'content'=>'<i class="fas fa-trash-alt" style="font-size:13px;color:white"></i>',
														'type'=>'submit',
														'value'=> $item->Event_ID
													);
													echo form_button($del_btn);
							?></td>
							<?php echo form_close();?>
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