<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        
    }

	public function index()
	{
		$this->load->view('home_view');
		$this->load->view('header_view');
		$this->load->view('footer_view');
		
	}

	public function subscribe()
	{
		$to_email = $this->input->post('subscribe');
		$config = Array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'wleanevento@gmail.com',
		    'smtp_pass' => 'Wdm@9876',
		    'mailtype'  => 'html', 
		    'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		// Set to, from, message, etc.
		$this->email->from('wleanevento@gmail.com', 'WDM LeanEvento');
        $this->email->to($to_email); 

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');  

		$result = $this->email->send();
	if($result){
		echo "mail sent";
	}
	else{
		echo "not sent";
	}
	}

	
}
?>