<?php 

class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
        
    }

    //method index
    public function index()
    {
        //load library
        $this->load->library('pagination');
        //ambil pencarian
        if($this->input->post('submit')){
            $data['keyword']=$this->input->post('keyword');
            $this->session->set_userdata('keyword',$data['keyword']);
        }else{
            $data['keyword']=$this->session->userdata('keyword');
        }
        //config
        $this->db->like('judul',$data['keyword']);
        $this->db->or_like('konten',$data['keyword']);
        $this->db->or_like('tanggal',$data['keyword']);
        $this->db->from('artikel');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 3;
        //initialize
        $this->pagination->initialize($config);

        $data['mulai']=$this->uri->segment(3);

        $data['artikel'] = $this->Artikel_model->getJoin($config['per_page'],$data['mulai'],$data['keyword']);
        $data['baru'] = $this->Artikel_model->getJoinBaru();
        $data['kategori']= $this->Artikel_model->getKategori();
        $data['judul']='Home';
        $this->load->view('templates/header_in',$data);
        $this->load->view('utama/index',$data);
        $this->load->view('templates/footer_in');
    }

    //method detail artikel
    public function artikel($id)
    {
        $data['artikel']=$this->Artikel_model->getJoinById($id);
        $data['judul']='Artikel';
        $this->load->view('templates/header_in',$data);
        $this->load->view('utama/artikel');
        $this->load->view('templates/footer_in');
    }

    //method kategori
    public function kategori($kategori)
    {
        $data['kategori']=$this->Kategori_model->getDetailKat($kategori);
        $data['judul']='Kategori';
        $this->load->view('templates/header_in',$data);
        $this->load->view('utama/kategori',$data);
        $this->load->view('templates/footer_in');
    }

    //method menampilkan halaman about me
    public function about()
    {
        $data['judul']='About me';
        $this->load->view('templates/header_in',$data);
        $this->load->view('utama/about');
        $this->load->view('templates/footer_in');
    }

    //method menampilkan halaman contact
    public function contact()
    {
        $data['judul']='Contact';
        $this->load->view('templates/header_in',$data);
        $this->load->view('utama/contact');
        $this->load->view('templates/footer_in');
    }
    
}