<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Individual extends CI_Controller {

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
		$eventRes['event']=$this->Ind_model->getEvents();
		$this->load->view('indhead_view');
		$this->load->view('indhome_view',$eventRes);		
		$this->load->view('indfoot_view');
		
	}

	public function vol_valid()
	{
		
		$email=$_SESSION['useremail'];
		$eveid=$this->input->post('addCart');
		$indid=$this->Ind_model->getid($email);



		if($this->Ind_model->checkvol($indid,$eveid) ==0)
		{

			$dataVol = array(
	            'Volunteer_ID' => $indid,
	            'Event_ID' => $eveid
	            
	        );
			$this->Ind_model->insertvol($dataVol);
			$eventRes['popid']="vol_valid#welcome"; 
		
			$eventRes['event']=$this->Ind_model->getEvents();
			$this->load->view('indhead_view');
			$this->load->view('indhome_view',$eventRes);		
			$this->load->view('indfoot_view');
		}
		else{
			$eventRes['popid']="vol_valid#noaddpopup"; 

			$eventRes['event']=$this->Ind_model->getEvents();
		
		
			$this->load->view('indhome_view',$eventRes);
			$this->load->view('indhead_view');		
			$this->load->view('indfoot_view');

			 
		}
	}

	public function viewProf()
	{
		
		$email=$_SESSION['useremail'];
		$indid=$this->Ind_model->getid($email);
		$eventRes['event']=$this->Ind_model->getProf($indid);
		$this->load->view('indhead_view');
		$this->load->view('indprof_view',$eventRes);		
		$this->load->view('indfoot_view');
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
			$indid=$this->Ind_model->getid($email);
			$eventRes['event']=$this->Ind_model->getProf($indid);
			$this->load->view('indhead_view');
			$this->load->view('indprof_view',$eventRes);		
			$this->load->view('indfoot_view');	

		}
		else {
			$email=$_SESSION['useremail'];
			$indid=$this->Ind_model->getid($email);
			$dataUpdate = array(
	            'Telephone' => $phno,
	            'Password' => $pswd
	        );
	        $this->Ind_model->updateProf($email,$dataUpdate);
	        $eventRes['event']=$this->Ind_model->getProf($indid);
			$this->load->view('indhead_view');
			$this->load->view('indprof_view',$eventRes);		
			$this->load->view('indfoot_view');	

		}

	}

}