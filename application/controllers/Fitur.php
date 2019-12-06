<?php 
class Fitur extends CI_Controller{
    //
    public function __construct()
    {
        parent::__construct();
        
        
        if($this->session->userdata('status') != "logged"){
			redirect(base_url("admin/login"));
		}
    }
    //method index about
    public function index()
    {
        $this->load->view('templates/header_das');
        $this->load->view('about/index');
        $this->load->view('templates/footer_das');
    }
}