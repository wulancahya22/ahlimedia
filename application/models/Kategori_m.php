<?php

class Kategori_m extends CI_model{

    public function getAllKategori(){
        return $this->db->get('kategori')->result_array();
    }

    public function getAllKategoriById($id){
        $options=array('id'=>$id);
        $query = $this->db->get_where('kategori',$options);
        $ret = $query->row();
        return $ret;
    }

    public function tambahKategori(){
        $ktgdata = [
            'id' => $this->input->post('id', true),
            'kategori' => $this->input->post('kategori'),
            'id_kategori' => $this->input->post('id_kategori')
        ];        
        $this->db->insert('kategori', $ktgdata);
    }

    public function editKategori(){
        $ktgdata = [
            'id' => $this->input->post('id', true),
            'kategori' => $this->input->post('kategori'),
            'id_kategori' => $this->input->post('id_kategori')
        ];        
        $this->db->where('id', $this->input->post('id', true));
        $this->db->update('kategori', $ktgdata);
    }

    public function hapusKategori($id){
        $this->db->where('id', $id);
        $this->db->delete('kategori');
    }

}