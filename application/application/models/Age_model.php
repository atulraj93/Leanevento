<?php

class Age_model extends CI_Model {

public function getEvents()
{
	return $this->db->query("SELECT a.Photo, a.First_Name, a.Last_Name, a.Address, a.Telephone, b.Event_Name,b.Responsible FROM events AS b, individual AS a, volunteer AS c WHERE a.Individual_ID=c.Volunteer_ID AND b.Event_ID=c.Event_ID;");
}


public function getEventsComm()
{
	return $this->db->query("SELECT a.Photo, a.First_Name, a.Last_Name, b.Event_Name,b.Responsible, c.Commission, c.Donator_ID, b.Event_ID FROM events AS b, business AS a, donation AS c WHERE a.Business_ID=c.Donator_ID AND b.Event_ID=c.Event_ID;");
}

public function addComm($comm,$eventId,$bisId)
{
	return $this->db->query("UPDATE donation SET Commission = '$comm' WHERE Event_ID='$eventId' and Donator_ID='$bisId';");
}

public function getEventsList()
{
	return $this->db->query("SELECT `Event_ID`, `Event_Name`,`Place`, `Date`, `Photo` FROM `events`;");
}

public function addEvent($dataAddEvent)
{
	return $this->db->insert('events',$dataAddEvent);
}

public function getEventsDet($eveid)
{
	echo "SELECT * FROM `events` WHERE Event_ID='$eveid';";
	return $this->db->query("SELECT * FROM `events` WHERE Event_ID='$eveid';");
}


public function updEvent($dataUpdEvent,$eveid)
{
	return $this->db->update('events', $dataUpdEvent, "Event_ID = '$eveid'");
}

public function delEvent($eveid)
{
	return $this->db->query("DELETE FROM `events` WHERE `Event_ID`='$eveid';");
}

public function getid($email)
{
	return $this->db->query("SELECT Agent_ID FROM `agent` WHERE Email ='".$email."' ;")->row()->Agent_ID;
}

public function getProf($indid)
{
	return $this->db->query("SELECT * FROM `agent` WHERE Agent_ID ='".$indid."' ;");
}

public function updateProf($email,$dataUpdate)
{
	//echo "UPDATE `individual` SET Password = '".$dataUpdate['Password']."' , Telephone = '".$dataUpdate['Telephone']."' WHERE Email ='".$email."' ;";
	if(($this->db->query("UPDATE `agent` SET Password = '".$dataUpdate['Password']."' , Telephone = '".$dataUpdate['Telephone']."' WHERE Email ='".$email."' ;"))==true)
	{
		$this->db->query("UPDATE `login` SET Password = '".$dataUpdate['Password']."' WHERE Email ='".$email."' ;");
	}
}



// public function checkvol($indid,$eveid)
// {
// 	return $this->db->query("SELECT * FROM `volunteer` WHERE Volunteer_ID ='".$indid."' AND Event_ID ='".$eveid."';")->num_rows();
// }

// public function getid($email)
// {
// 	return $this->db->query("SELECT Individual_ID FROM `individual` WHERE Email ='".$email."' ;")->row()->Individual_ID;
// }

// public function insertvol($datainsert)
// {
// 	$this->db->insert('volunteer',$datainsert);
// }

// public function getProf($indid)
// {
// 	return $this->db->query("SELECT * FROM `individual` WHERE Individual_ID ='".$indid."' ;");
// }

// public function updateProf($email,$dataUpdate)
// {
// 	//echo "UPDATE `individual` SET Password = '".$dataUpdate['Password']."' , Telephone = '".$dataUpdate['Telephone']."' WHERE Email ='".$email."' ;";
// 	if(($this->db->query("UPDATE `individual` SET Password = '".$dataUpdate['Password']."' , Telephone = '".$dataUpdate['Telephone']."' WHERE Email ='".$email."' ;"))==true)
// 	{
// 		$this->db->query("UPDATE `login` SET Password = '".$dataUpdate['Password']."' WHERE Email ='".$email."' ;");
// 	}
// }


}

