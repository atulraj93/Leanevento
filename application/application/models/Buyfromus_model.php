<?php

class Buyfromus_model extends CI_Model {



public function getEvents()
{
	return $this->db->query("SELECT * FROM `events`;");
}
public function getEventsDetail($evid){
	return $this->db->query("SELECT * FROM `events` WHERE Event_ID='".$evid."';");
}

public function insertbuy($datainsert)
{
	
	$this->db->insert('buy_from_us',$datainsert);
            
}


}
?>