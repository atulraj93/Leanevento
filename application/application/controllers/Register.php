<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
        
    }

	public function index()
	{
		
		$this->load->view('header_view');
		$this->load->view('register_view');
		$this->load->view('footer_view');
		
	}

	public function ind_valid()
	{
		$fname=$this->input->post('ifname');
		$lname=$this->input->post('ilname');
		$email=$this->input->post('iemail');
		$password=$this->input->post('ipassword');
		$address=$this->input->post('iaddress');
		$city=$this->input->post('icity');
		$state=$this->input->post('istate');
		$postal=$this->input->post('ipostal');



		$this->form_validation->set_rules('ifname', 'First Name',  'required|regex_match[/^[a-zA-z\.\s]+$/]');
		$this->form_validation->set_rules('ilname', 'Last Name',  'required|regex_match[/^[a-zA-z\.\s]+$/]');
		$this->form_validation->set_rules('iemail', 'Email',  'required|valid_email|callback_validatemail');
		$this->form_validation->set_rules('ipassword', 'Password',  'required|regex_match[/^([A-Z]{1}[a-zA-Z0-9\.\!\@\#\$\%\^\&\*]{7,})+$/]');
		$this->form_validation->set_rules('iaddress', 'Address',  'required');
		$this->form_validation->set_rules('icity', 'City',  'required|regex_match[/^[a-zA-z\s]+$/]');
		$this->form_validation->set_rules('istate', 'State', 'required|callback_stateSelectCheck');
		$this->form_validation->set_rules('ipostal', 'Postal Code',  'required|regex_match[/^[0-9]{5}+$/]');
		$this->form_validation->set_error_delimiters('<div class="phpvalid">', '</div>');


		if ($this->form_validation->run() == FALSE)
		{
		$temp= array('popid'=>"ind_valid#IndividualRegister"); 
		$this->load->view('register_view',$temp);
		$this->load->view('header_view');
		
		$this->load->view('footer_view'); 

		}

		else
		{

			$dataIndRegister = array(
	            'Email' => $email,
	            'Password' => $password,
	            'First_Name' => $fname,
	            'Last_Name' => $lname,
	            'Address'=> $address,
	            'City'=>$city,
	            'State'=>$state,
	            'Postal_Code'=>$postal
	        );
			if ($this->Register_model->addIndividual($dataIndRegister))
			{


			$dataIndLogin = array(
	            'Email' => $email,
	            'Password' => $password,
	            'User_Role' => "Individual")
	            ;
				$this->Register_model->inslog($dataIndLogin);
				
			}

			$this->load->view('header_view');
			$this->load->view('register_view');
			$this->load->view('footer_view');

		}
	}

		public function stateSelectCheck($state){
		if($state=='-1'){
			//echo "am here";
			$this->form_validation->set_message('stateSelectCheck','State field is required');
			return false;
		}else{
			return true;
		}

		}


		public function bus_valid()
	{
		$fname=$this->input->post('bfname');
		$lname=$this->input->post('blname');
		$email=$this->input->post('bemail');
		$password=$this->input->post('bpassword');
		$address=$this->input->post('baddress');
		$city=$this->input->post('bcity');
		$state=$this->input->post('bstate');
		$type=$this->input->post('typeBusiness');
		$postal=$this->input->post('bpostal');



		$this->form_validation->set_rules('bfname', 'First Name',  'required|regex_match[/^[a-zA-z\.\s]+$/]');
		$this->form_validation->set_rules('blname', 'Last Name',  'required|regex_match[/^[a-zA-z\.\s]+$/]');
		$this->form_validation->set_rules('bemail', 'Email',  'required|valid_email|callback_validatemail');
		$this->form_validation->set_rules('bpassword', 'Password',  'required|regex_match[/^([A-Z]{1}[a-zA-Z0-9\.\!\@\#\$\%\^\&\*]{7,})+$/]');
		$this->form_validation->set_rules('baddress', 'Address',  'required');
		$this->form_validation->set_rules('bcity', 'City',  'required|regex_match[/^[a-zA-z\s]+$/]');
		$this->form_validation->set_rules('bstate', 'State', 'required|callback_stateSelectCheck');
		$this->form_validation->set_rules('bpostal', 'Postal Code',  'required|regex_match[/^[0-9]{5}+$/]');
		$this->form_validation->set_error_delimiters('<div class="phpvalid">', '</div>');


		if ($this->form_validation->run() == FALSE)
		{
		$temp= array('popid'=>"bus_valid#BusinessRegister"); 
		$this->load->view('register_view',$temp);
		$this->load->view('header_view');
		
		$this->load->view('footer_view'); 

		}

		else
		{

			$dataBusRegister = array(
	            'Email' => $email,
	            'Password' => $password,
	            'First_Name' => $fname,
	            'Last_Name' => $lname,
	            'Address'=> $address,
	            'City'=>$city,
	            'State'=>$state,
	            'Business_Type'=>$type,
	            'Postal_Code'=>$postal
	        );
			if ($this->Register_model->addBusiness($dataBusRegister))
			{


			$dataBusLogin = array(
	            'Email' => $email,
	            'Password' => $password,
	            'User_Role' => "Business")
	            ;
				$this->Register_model->insblog($dataBusLogin);
				
			}

			$this->load->view('header_view');
			$this->load->view('register_view');
			$this->load->view('footer_view');

		}
	}


	public function age_valid()
	{
		$fname=$this->input->post('afname');
		$lname=$this->input->post('alname');
		$email=$this->input->post('aemail');
		$password=$this->input->post('apassword');
		$address=$this->input->post('aaddress');
		$city=$this->input->post('acity');
		$state=$this->input->post('astate');
		$postal=$this->input->post('apostal');



		$this->form_validation->set_rules('afname', 'First Name',  'required|regex_match[/^[a-zA-z\.\s]+$/]');
		$this->form_validation->set_rules('alname', 'Last Name',  'required|regex_match[/^[a-zA-z\.\s]+$/]');
		$this->form_validation->set_rules('aemail', 'Email',  'required|valid_email|callback_validatemail');
		$this->form_validation->set_rules('apassword', 'Password',  'required|regex_match[/^([A-Z]{1}[a-zA-Z0-9\.\!\@\#\$\%\^\&\*]{7,})+$/]');
		$this->form_validation->set_rules('aaddress', 'Address',  'required');
		$this->form_validation->set_rules('acity', 'City',  'required|regex_match[/^[a-zA-z\s]+$/]');
		$this->form_validation->set_rules('astate', 'State', 'required|callback_stateSelectCheck');
		$this->form_validation->set_rules('apostal', 'Postal Code',  'required|regex_match[/^[/^[0-9]{5}+$/]');
		$this->form_validation->set_error_delimiters('<div class="phpvalid">', '</div>');


		if ($this->form_validation->run() == FALSE)
		{
		$temp= array('popid'=>"age_valid#AgentRegister"); 
		$this->load->view('register_view',$temp);
		$this->load->view('header_view');
		
		$this->load->view('footer_view'); 

		}

		else
		{

			$dataAgeRegister = array(
	            'Email' => $email,
	            'Password' => $password,
	            'First_Name' => $fname,
	            'Last_Name' => $lname,
	            'Address'=> $address,
	            'City'=>$city,
	            'State'=>$state,
	            'Postal_Code'=>$postal
	        );
			if ($this->Register_model->addAgent($dataAgeRegister))
			{


			$dataAgeLogin = array(
	            'Email' => $email,
	            'Password' => $password,
	            'User_Role' => "Agent")
	            ;
				$this->Register_model->insalog($dataAgeLogin);
				
			}

			$this->load->view('header_view');	
			$this->load->view('register_view');
			$this->load->view('footer_view');

		}
	}

	public function validatemail($email)
	{
		
		if($this->Register_model->loginvalid($email)){
			return true;
		}
		else{
			$this->form_validation->set_message('validatemail','The user is already registered');
			return false;
		}
	}

}