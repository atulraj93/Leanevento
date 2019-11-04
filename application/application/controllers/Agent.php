<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct() {


        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->library('session');
        
    }

	public function index()
	{
		//$eventRes['event']=$this->Age_model->getEvents();
		$this->load->view('agehead_view');
		$this->load->view('agehome_view');		
		$this->load->view('agefoot_view');
		
	}

	public function disp_listvol()
	{
		$eventRes['event']=$this->Age_model->getEvents();
		$this->load->view('agehead_view');
		$this->load->view('agelistvol_view',$eventRes);		
		$this->load->view('agefoot_view');

	}
	public function disp_listdon()
	{
		$eventRes['event']=$this->Age_model->getEventsComm();
		$this->load->view('agehead_view');
		$this->load->view('agelistdon_view',$eventRes);		
		$this->load->view('agefoot_view');

	}


	public function assignComm()
	{
		$ind=$this->input->post('asgBtn');	
		$comm =$this->input->post('comm['.$ind."".']');
	
		//echo "am here".$comm;
		$this->form_validation->set_rules('comm['.$ind."".']','Commission','required|regex_match[/^[0-9]{2}+$/]');
		$this->form_validation->set_error_delimiters('<div class="phpvalid">', '</div>');
		
		$str_Split=explode("-",$this->input->post('asgBtn'));
		$eventId=$str_Split[1];
		$bisId =$str_Split[0];

		if ($this->form_validation->run() == FALSE)
		{
			$eventRes['event']=$this->Age_model->getEventsComm();
			$this->load->view('agehead_view');
			$this->load->view('agelistdon_view',$eventRes);		
			$this->load->view('agefoot_view');
		}
		else
		{
			$this->Age_model->addComm($comm,$eventId,$bisId);
			$eventRes['event']=$this->Age_model->getEventsComm();			
			$this->load->view('agehead_view');
			$this->load->view('agelistdon_view',$eventRes);		
			$this->load->view('agefoot_view');

		}




	}

	public function disp_listeve()
	{
		$eventRes['event']=$this->Age_model->getEventsList();
		$this->load->view('agehead_view');
		$this->load->view('agelisteve_view',$eventRes);		
		$this->load->view('agefoot_view');

	}

	public function addEvent()
	{
		
		$this->load->view('agehead_view');
		$this->load->view('ageaddevent_view');		
		$this->load->view('agefoot_view');

	}

	public function eventValid()
	{
		
		$ename=$this->input->post('ename');
		$resp=$this->input->post('resp');
		$place=$this->input->post('place');
		$edate=$this->input->post('edate');
		$ehour=$this->input->post('ehour');
		$amt=$this->input->post('amt');


		$this->form_validation->set_rules('ename', 'Event Name',  'required|regex_match[/^[a-zA-z\.\s]+$/]');
		$this->form_validation->set_rules('resp', 'Responsible',  'required|regex_match[/^[a-zA-z\.\s]+$/]');
		$this->form_validation->set_rules('place', 'Place',  'required|regex_match[/^[a-zA-z\.\s]+$/]');
		$this->form_validation->set_rules('edate', 'Date',  'required');
		$this->form_validation->set_rules('ehour', 'Hour',  'required');
		$this->form_validation->set_rules('amt', 'Amount',  'required|regex_match[/^\d{1,}[\.]?\d{1,}$/]');
		$this->form_validation->set_error_delimiters('<div class="phpvalid">', '</div>');

		if ($this->form_validation->run() == FALSE)
		{

		$this->load->view('agehead_view');
		$this->load->view('ageaddevent_view');		
		$this->load->view('agefoot_view');

		}
		else
		{
			$dataAddEvent = array(
	            'Event_Name' => $ename,
	            'Responsible' => $resp,
	            'Place' => $place,
	            'Date' => $edate,
	            'Hour'=> $ehour,
	            'Price'=>$amt
	        );
			if($this->Age_model->addEvent($dataAddEvent)==true)
			{
				$eventRes['event']=$this->Age_model->getEventsList();
				$this->load->view('agehead_view');
				$this->load->view('agelisteve_view',$eventRes);		
				$this->load->view('agefoot_view');
			}
		}


	}

	public function modEvent()
	{	
		$eveid=$this->input->post('modBtn');
		$eventRes['event']=$this->Age_model->getEventsDet($eveid);
		$this->load->view('agehead_view');
		$this->load->view('agemodeve_view',$eventRes);		
		$this->load->view('agefoot_view');

	}

	public function updateEvent()
	{
		$ename=$this->input->post('ename');
		$resp=$this->input->post('resp');
		$place=$this->input->post('place');
		$edate=$this->input->post('edate');
		$ehour=$this->input->post('ehour');
		$amt=$this->input->post('amt');
		$eveid=$this->input->post('modBtn');


		$this->form_validation->set_rules('ename', 'Event Name',  'required|regex_match[/^[a-zA-z\.\s]+$/]');
		$this->form_validation->set_rules('resp', 'Responsible',  'required|regex_match[/^[a-zA-z\.\s]+$/]');
		$this->form_validation->set_rules('place', 'Place',  'required|regex_match[/^[a-zA-z\.\s]+$/]');
		$this->form_validation->set_rules('edate', 'Date',  'required');
		$this->form_validation->set_rules('ehour', 'Hour',  'required');
		$this->form_validation->set_rules('amt', 'Amount',  'required|regex_match[/^\d{1,}[\.]?\d{1,}$/]');
		$this->form_validation->set_error_delimiters('<div class="phpvalid">', '</div>');

		if ($this->form_validation->run() == FALSE)
		{
			//echo "abcd";
		$eventRes['event']=$this->Age_model->getEventsDet($eveid);
		$this->load->view('agehead_view');
		$this->load->view('agemodeve_view',$eventRes);		
		$this->load->view('agefoot_view');

		}
		else
		{
			
			$dataUpdEvent = array(
	            'Event_Name' => $ename,
	            'Responsible' => $resp,
	            'Place' => $place,
	            'Date' => $edate,
	            'Hour'=> $ehour,
	            'Price'=>$amt
	        );
			if($this->Age_model->updEvent($dataUpdEvent,$eveid)==true)
			{
				$eventRes['event']=$this->Age_model->getEventsList();
				$this->load->view('agehead_view');
				$this->load->view('agelisteve_view',$eventRes);		
				$this->load->view('agefoot_view');
			}
		}	
	}

	public function delEvent()
	{
		$eveid=$this->input->post('delBtn');
		if($this->Age_model->delEvent($eveid)==true)
		{
		$eventRes['event']=$this->Age_model->getEventsList();
		$this->load->view('agehead_view');
		$this->load->view('agelisteve_view',$eventRes);		
		$this->load->view('agefoot_view');
		}

	}
	public function disp_prof()
	{
		$email=$_SESSION['useremail'];
		$indid=$this->Age_model->getid($email);
		$eventRes['event']=$this->Age_model->getProf($indid);
		$this->load->view('agehead_view');
		$this->load->view('ageprof_view',$eventRes);		
		$this->load->view('agefoot_view');

	}

	public function validProf()
	{
		$phno=$this->input->post('phno');
		$pswd=$this->input->post('pswd');

		$this->form_validation->set_rules('pswd', 'Password',  'required|regex_match[/^([A-Z]{1}[a-zA-Z0-9\.\!\@\#\$\%\^\&\*]{7,})+$/]');
		$this->form_validation->set_rules('phno', 'Telephone',  'required|regex_match[/^[[2-9]{1}[0-9]{9}+$/]');
		$this->form_validation->set_error_delimiters('<div class="phpvalid">', '</div>');

		if ($this->form_validation->run() == FALSE)
		{
			$email=$_SESSION['useremail'];
			$indid=$this->Age_model->getid($email);
			$eventRes['event']=$this->Age_model->getProf($indid);
			$this->load->view('agehead_view');
			$this->load->view('ageprof_view',$eventRes);		
			$this->load->view('agefoot_view');		

		}
		else {
			$email=$_SESSION['useremail'];
			$indid=$this->Age_model->getid($email);
			$dataUpdate = array(
	            'Telephone' => $phno,
	            'Password' => $pswd
	        );
	        $this->Age_model->updateProf($email,$dataUpdate);
	        $eventRes['event']=$this->Age_model->getProf($indid);
			$this->load->view('agehead_view');
			$this->load->view('ageprof_view',$eventRes);		
			$this->load->view('agefoot_view');	

		}

	}

	
}