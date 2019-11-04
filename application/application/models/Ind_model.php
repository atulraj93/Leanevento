<?php

class Ind_model extends CI_Model {

public function getEvents()
{
	return $this->db->query("SELECT * FROM `events`;");
}

public function checkvol($indid,$eveid)
{
	return $this->db->query("SELECT * FROM `volunteer` WHERE Volunteer_ID ='".$indid."' AND Event_ID ='".$eveid."';")->num_rows();
}

public function getid($email)
{
	return $this->db->query("SELECT Individual_ID FROM `individual` WHERE Email ='".$email."' ;")->row()->Individual_ID;
}

public function insertvol($datainsert)
{
	$this->db->insert('volunteer',$datainsert);
}

public function getProf($indid)
{
	return $this->db->query("SELECT * FROM `individual` WHERE Individual_ID ='".$indid."' ;");
}

public function updateProf($email,$dataUpdate)
{
	//echo "UPDATE `individual` SET Password = '".$dataUpdate['Password']."' , Telephone = '".$dataUpdate['Telephone']."' WHERE Email ='".$email."' ;";
	if(($this->db->query("UPDATE `individual` SET Password = '".$dataUpdate['Password']."' , Telephone = '".$dataUpdate['Telephone']."' WHERE Email ='".$email."' ;"))==true)
	{
		$this->db->query("UPDATE `login` SET Password = '".$dataUpdate['Password']."' WHERE Email ='".$email."' ;");
	}
}


}

