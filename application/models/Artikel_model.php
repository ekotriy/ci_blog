<?php 
class Artikel_model extends CI_Model{

    //method join tabel artikel dan kategori dari database ci_blog
    public function getJoin($limit,$mulai,$keyword=null)
    {
        if($keyword){
            $this->db->like('judul',$keyword);
            $this->db->or_like('konten',$keyword);
            $this->db->or_like('tanggal',$keyword);
        }
    $this->db->select('*');
    $this->db->from('artikel');
    $this->db->join('kategori', 'artikel.id_kat = kategori.id_kat');
    // $this->db->where('artikel.id_artikel',$limit,$mulai);
    $this->db->order_by('artikel.tanggal','asc');
    $this->db->limit($limit,$mulai);
    $query = $this->db->get();
    return $query->result_array();
    }

    //menhitung jumlah baris
    public function countAllArtikel()
    {
        return $this->db->get('artikel')->num_rows();
    }

    //method join tabel artikel dan kategori dari database ci_blog tanggal terbaru
    public function getJoinBaru()
    {
    $this->db->select('*');
    $this->db->from('artikel');
    $this->db->join('kategori', 'artikel.id_kat = kategori.id_kat');
    //$this->db->where('mahasiswa.nim',$nim);
    $this->db->order_by('artikel.tanggal','desc');
    $query = $this->db->get();
    return $query->result_array();
    }

    //method menampilkan tabel kategori dari database ci_blog
    public function getKategori()
    {
        $query = $this->db->get('kategori');
        return $query->result_array();
    }

    //method menyimpan nama file foto
    private function Ungah()
    {
        $config['upload_path'] = './assets/foto/';
        $config['allowed_types']= 'jpg|png';
        $config['file_name'] = url_title($this->input->post('judul'),'dash',TRUE);
        $config['overwrite'] = true;
        $config['max_size'] = 3024; //1MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
        return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

    //method mengambil foto berdasarkan nim
    public function getGambar($id)
    {
        return $this->db->get_where('artikel',array('id_artikel'=>$id))->row()->gambar; 
    }

    //method menghapus foto
    public function hapusGambar($id)
    {
        $gambar = $this->db->get_where('artikel',array('id_artikel'=>$id))->row()->gambar;     
        unlink("assets/foto/".$gambar);
    }

    //method tambah data ke tabel artikel
    public function setTambahArtikel()
    {
        $penulis = $this->session->userdata("fullname");
        $tgl=date('Y-m-d');
        $data=[
            "id_artikel"=>$this->input->post('id',true),
            "tanggal"=>$tgl,
            "id_kat"=>$this->input->post('kategori',true),
            "judul"=>$this->input->post('judul',true),
            "konten"=>$this->input->post('konten',true),
            "gambar"=>$this->Ungah(),
            "penulis"=>$penulis
        ];
        return $this->db->insert('artikel', $data);   
    }

    //method detail berdasarkan id
    public function getJoinById($id)
    {
    $this->db->select('*');
    $this->db->from('artikel');
    $this->db->join('kategori', 'artikel.id_kat = kategori.id_kat');
    $this->db->where('artikel.id_artikel',$id);
    // $this->db->order_by('mahasiswa.nim','asc');
    $query = $this->db->get();
    return $query->row_array();
    }

    //method edit berdasarkan nim
    public function getDataArtikelById($id)
    {
        return $this->db->get_where('artikel',['id_artikel'=>$id])->row_array();
    }

    //method edit data tabel arikel
    public function setEditArtikel($id)
    {
        if(!empty($_FILES['gambar']['name'])){
            $this->hapusGambar($id);
            $gambar = $this->Ungah();
            } else {
             $gambar = (!empty($this->getGambar($id))) ? $this->getGambar($id) : "default.png";
            }
        $penulis = $this->session->userdata("fullname");
        $tgl=date('Y-m-d');
        $data=[
           "id_artikel"=>$this->input->post('id',true),
            "tanggal"=>$tgl,
            "id_kat"=>$this->input->post('kategori',true),
            "judul"=>$this->input->post('judul',true),
            "konten"=>$this->input->post('konten',true),
            "gambar"=> $gambar,
            "penulis"=>$penulis
        ];
        
        $this->db->where('id_artikel',$this->input->post('id'));
        $this->db->update('artikel', $data,['id_artikel'=>$id]);
    }

     //method hapus tabel artikel
     public function setHapusArtikel($id)
     {
         $this->hapusGambar($id);
         $this->db->where('id_artikel', $id);
         $this->db->delete('artikel');  
     }
}