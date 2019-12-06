<?php 
class Kategori extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
        
        if($this->session->userdata('status') != "logged"){
			redirect(base_url("admin/login"));
		}
    }

    public function index()
    {
        $data['kategori']= $this->Kategori_model->getKategori();
        $data['judul']='Daftar kategori';
        $this->load->view('templates/header_das',$data);
        $this->load->view('kategori/index',$data);
        $this->load->view('templates/footer_das');
    }

    //method detail kategori
    public function detail($kategori)
    {
        $data['kategori']=$this->Kategori_model->getDetailKat($kategori);
        $data['judul']='Detail Kategori';
        $this->load->view('templates/header_das',$data);
        $this->load->view('kategori/detail',$data);
        $this->load->view('templates/footer_das');
    }

    //method tambah
    public function tambah()
    {
        $this->form_validation->set_rules('id_kat','Id Kategori','required');
        $this->form_validation->set_rules('kategori','Kategori','required');
        
        if($this->form_validation->run()===false){
            $data['judul']='Tambah Kategori';
            $this->load->view('templates/header_das',$data);
            $this->load->view('kategori/tambah');
            $this->load->view('templates/footer_das');
        } else {
            $this->Kategori_model->setTambahKategori();
            $this->session->set_flashdata('flash','ditambahkan');
                        redirect('kategori');
        }
    }

    //method edit
    public function edit($kategori)
    {
        $data['kategori']=$this->Kategori_model->getDataKategori($kategori);
        $data['judul']='Edit Kategori';
        $this->form_validation->set_rules('id_kat','Id Kategori','required');
        $this->form_validation->set_rules('kategori','Kategori','required');
        
        if($this->form_validation->run()===false){
            $this->load->view('templates/header_das',$data);
            $this->load->view('kategori/edit',$data);
            $this->load->view('templates/footer_das');
        } else {
            $this->Kategori_model->setEditKategori();
            $this->session->set_flashdata('flash','ditambahkan');
                        redirect('kategori');
        }
    }

    //method hapus
    public function hapus($kategori)
    {
        $this->Kategori_model->setHapusKategori($kategori);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('kategori');
    }

}