<?php

class Contact_model extends CI_Model {

public function insertcontact($datainsert)
{
	$this->db->insert('contact_us',$datainsert);
            
}

}
?>