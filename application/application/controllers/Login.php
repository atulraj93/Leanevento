<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('header_view');
		$this->load->view('login_view');		
		$this->load->view('footer_view');
		
	}

	public function login_valid()
	{		
		$email=$this->input->post('uname');
		$psd=$this->input->post('psd');		
		
		
		$this->form_validation->set_rules('uname', 'Username',  'required|valid_email');
		$this->form_validation->set_rules('psd', 'Password',  'required|callback_validateuname');		
		$this->form_validation->set_error_delimiters('<div class="phpvalid">', '</div>');


		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('header_view');
		$this->load->view('login_view');
		$this->load->view('footer_view');
		}
		else
		{
		$roleFetch=$this->Login_model->geturole($email,$psd);
		$role=$roleFetch->User_Role;
		$userEmail=$this->Login_model->geturole($email,$psd)->Email;
		$this->session->set_userdata('useremail', $userEmail);
		//echo $role;
		if($role=='Individual')
		{
		$eventRes['event']=$this->Ind_model->getEvents();
		$this->load->view('indhead_view');
		$this->load->view('indhome_view',$eventRes);		
		$this->load->view('indfoot_view');
		}
		elseif ($role=='Business') {
		$eventRes['event']=$this->Bus_model->getEvents();
		$this->load->view('bushead_view');
		$this->load->view('bushome_view',$eventRes);		
		$this->load->view('indfoot_view');
		}
		elseif ($role=='Agent') {
		$this->load->view('agehead_view');
		$this->load->view('agehome_view');		
		$this->load->view('agefoot_view');
		
		}
		}

		
	}

public function validateuname($psd)
	{
		
		$email=$this->input->post('uname');
		if($this->Login_model->loginvalid($email,$psd)){
			return true;
		}
		else{
			$this->form_validation->set_message('validateuname','Invalid username/password');
			return false;
		}
	}

}