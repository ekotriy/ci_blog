<?php 
class Coba extends CI_Controller{

    public function index()
    {
        $this->load->view('templates/header_in');
        $this->load->view('coba/blog');
        $this->load->view('templates/footer_in');
    }
}
