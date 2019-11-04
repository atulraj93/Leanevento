<?php

class Register_model extends CI_Model {

public function addIndividual($datainsert)
{
	
	return $this->db->insert('individual',$datainsert);
            
}

public function addBusiness($databinsert)
{
	
	return $this->db->insert('business',$databinsert);
            
}

public function addAgent($dataainsert)
{
	
	return $this->db->insert('agent',$dataainsert);
            
}


public function inslog($dataindlog)
{
	$this->db->insert('login',$dataindlog);
}

public function insblog($databuslog)
{
	$this->db->insert('login',$databuslog);
}

public function insalog($dataagelog)
{
	$this->db->insert('login',$dataagelog);
}


public function loginvalid($email)
{	
	
	$checkResult=$this->db->query("SELECT * FROM `login` WHERE Email ='".$email."';");
	
	if ($checkResult->num_rows()==0)
	{
		echo "success";
		return true;
	}
	else
	{
		echo "The user is already registered";
		return false;
	}
}



}
?>