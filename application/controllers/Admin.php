<?php 
class Admin extends CI_Controller{
    public function __construct()
    {         
        parent::__construct();         
            $this->load->model('Admin_model');    
    }  

    public function index()
    {         
        if($this->session->userdata('status')=='logged') {             
            $this->load->view('templates/header_das');
            $this->load->view('login/index');
            $this->load->view('templates/footer_das');         
        } else { 
            $this->load->view('login/login');        
            }     
    } 


    public function login(){         
        $username = $this->input->post('username');         
        $password = $this->input->post('password');         
        $where = array(             
            'username' => $username,             
            'password' => md5($password)         
        );   
        // $query = $this->db->get('users');
        $query = $this->db->get_where('users', array('username' => $username));
        $row = $query->row();      
        $cek = $this->Admin_model->login($where)->num_rows();         
        if($cek > 0){             
            $data_session = array(                 
                'nama'          => $username,   
                'fullname'      => $row->fullname,
                'nim'           => $row->nim,
                'pendidikan'    => $row->pendidikan,
                'alamat'        => $row->alamat,
                'skill'         => $row->skill,
                'foto'          => $row->foto,
                'status' => 'logged'             
            );             
            $this->session->set_userdata($data_session);                      
        }          
        redirect(site_url('admin'));     
    }          
    public function logout(){         
        $this->session->sess_destroy();         
        redirect(site_url('home'));     
    } 
} 

