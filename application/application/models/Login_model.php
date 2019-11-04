<?php

class Login_model extends CI_Model {

public function loginvalid($email,$psd)
{	
	
	$checkResult=$this->db->query("SELECT * FROM `login` WHERE Email ='".$email."' AND Password ='".$psd."' ;");
	
	if (($checkResult->num_rows()==0)) 
	{
		//echo "Invalid username/password";
		return false;

	}
	else
	{
		//echo "success";
		return true;
	}
}

public function geturole($email,$psd)
{
	return $this->db->query("SELECT User_Role,Email FROM `login` WHERE Email ='".$email."' AND Password ='".$psd."' ;")->row();
}



}