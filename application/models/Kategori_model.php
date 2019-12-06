<?php 
class Kategori_model extends CI_Model{

    //ambil data kategori dari tabel kategori
    public function getKategori()
    {
        $query= $this->db->get('kategori');
        return $query->result_array();
    }

    //method detail prodi 
    public function getDetailKat($kategori)
    {
    $this->db->select('*');
    $this->db->from('artikel');
    $this->db->join('kategori', 'artikel.id_kat = kategori.id_kat');
    $this->db->where('kategori.id_kat',$kategori);
    // $this->db->order_by('mahasiswa.nim','asc');
    $query = $this->db->get();
    return $query->result_array();
    }

    //method tambah prodi
    public function setTambahKategori()
    {
        $data=[
            "id_kat"=>$this->input->post('id_kat',true),
            "kategori"=>$this->input->post('kategori',true)
        ];
        return $this->db->insert('kategori', $data);   
    }

    //method ambil id_kat
    public function getDataKategori($kategori)
    {
        return $this->db->get_where('kategori',['id_kat'=>$kategori])->row_array();
    }

    //method edit kategori
    public function setEditKategori()
    {
        $data=[
            "id_kat"=>$this->input->post('id_kat',true),
            "kategori"=>$this->input->post('kategori',true)
        ];
        $this->db->where('id_kat',$this->input->post('id_kat'));
        $this->db->update('kategori', $data);  
    }

    //method hapus kategori
    public function setHapusKategori($kategori)
    {
        
        $this->db->where('id_kat', $kategori);
        $this->db->delete('kategori');
    }

    // method berdasarkan kategori
    //hiburan
    public function getHiburan()
    {
        $query = $this->db->get_where('kategori', array('kategori' => 'hiburan'));
        return $query->result_array();
    }

}