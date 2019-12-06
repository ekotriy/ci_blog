<?php 
class Artikel extends CI_Controller{
    public function __construct()
    {         
        parent::__construct();         
        $this->load->model('Admin_model'); 
        $this->load->model('Artikel_model'); 
        $this->load->library('form_validation'); 
        if($this->session->userdata('status') != "logged"){
			redirect(base_url("admin/login"));
		}  
    }          

    public function index()
    {         
        // if($this->session->userdata('status')=='logged') 
        // {       
            $data['artikel'] = $this->Artikel_model->getJoinBaru();
            $this->load->view('templates/header_das');
            $this->load->view('artikel/daftar_artikel',$data);
            $this->load->view('templates/footer_das');        
        // } else { 
        // $this->load->view('login/login');         
        // }     
    }

    //method tambah
    public function tambah()
    {
        $data['artikel']=$this->Artikel_model->getKategori();

        
        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('konten','Konten','required');
        
        if($this->form_validation->run()===false){
            $this->load->view('templates/header_das',$data);
            $this->load->view('artikel/tambah',$data);
            $this->load->view('templates/footer_das');
        } else {
            $this->Artikel_model->setTambahArtikel();
            $this->session->set_flashdata('flash','ditambahkan');
                        redirect('artikel');
        }

        
    }
    
    //method edit artikel berdasarkan id
    public function edit($id)
    {
        $data['artikel']=$this->Artikel_model->getDataArtikelById($id);
        $data['kategori']=$this->Artikel_model->getkategori();

        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('konten','Konten','required');
        
        if($this->form_validation->run()===false){
            $this->load->view('templates/header_das');
            $this->load->view('artikel/edit',$data);
            $this->load->view('templates/footer_das');
        } else {
            $this->Artikel_model->setEditArtikel($id);
            $this->session->set_flashdata('flash','diedit');
                        redirect('artikel');
        }
    }

    //method hapus artikel berdasarkan id
    public function hapus($id)
    {
        $this->Artikel_model->setHapusArtikel($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('artikel');
    }
}