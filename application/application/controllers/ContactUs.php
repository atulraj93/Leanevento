<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

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
		$this->load->view('contact_view');		
		$this->load->view('footer_view');
		
	}

	public function form_valid()
	{
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$email=$this->input->post('email');
		$topic=$this->input->post('topic');		
		$message=$this->input->post('message');
		$timestamp=date(DATE_W3C, time());



		$this->form_validation->set_rules('fname', 'First Name',  'required|regex_match[/^[a-zA-z\.\s]+$/]');
		$this->form_validation->set_rules('lname', 'Last Name',  'required|regex_match[/^[a-zA-z\.\s]+$/]');
		$this->form_validation->set_rules('email', 'Email',  'required|valid_email');
		$this->form_validation->set_rules('topic', 'Topic',  'required|regex_match[/^[a-zA-z0-9\.\-\s]+$/]');
		$this->form_validation->set_rules('message', 'Message',  'required');
		$this->form_validation->set_error_delimiters('<div class="phpvalid">', '</div>');


		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('header_view');
		$this->load->view('contact_view');
		$this->load->view('footer_view');
		}

		else
		{

			$dataContact = array(
	            'First_Name' => $fname,
	            'Last_Name' => $lname,
	            'Email' => $email,
	            'Topic' => $topic,
	            'Message'=> $message,
	            'Time'=>$timestamp
	        );
			$this->Contact_model->insertcontact($dataContact);
			$this->load->view('header_view');
			$this->load->view('contact_view');
			$this->load->view('footer_view');

		}
		
	}

		
}
?>
