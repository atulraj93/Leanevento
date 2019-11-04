<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuyFromUs extends CI_Controller {

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
		$eventRes['event']=$this->Buyfromus_model->getEvents();
		$this->load->view('header_view');
		$this->load->view('buyfromus_view',$eventRes);
		$this->load->view('footer_view');
		
	}

	public function event_list()
	{
		$eveid=$this->input->post('viewDet');
		$eventRes['event']=$this->Buyfromus_model->getEventsDetail($eveid);
		$this->load->view('header_view');
		$this->load->view('buyfromusdesc_view',$eventRes);
		$this->load->view('footer_view');

	}

	public function event_insert()
	{	
		$qty=$this->input->post('tickcount');
		$eveid=$this->input->post('addCart');
		$dataBuy = array(
	            'No_of_tickets' => $qty,
	            'Event_ID' => $eveid
	            
	        );
		$this->Buyfromus_model->insertbuy($dataBuy);

		$eveid=$this->input->post('addCart');
		$eventRes['event']=$this->Buyfromus_model->getEventsDetail($eveid);
		$this->load->view('header_view');
		$this->load->view('buyfromusdesc_view',$eventRes);
		$this->load->view('footer_view');
	}


}