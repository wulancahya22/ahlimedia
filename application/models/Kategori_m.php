<?php

class Kategori_m extends CI_model{

    public function getAllKategori(){
        return $this->db->get('tb_kategori')->result_array();
    }

    public function getAllKategoriById($id){
        $options=array('id'=>$id);
        $query = $this->db->get_where('tb_kategori',$options);
        $ret = $query->row();
        return $ret;
    }

    public function tambahKategori(){
        $ktgdata = [
            'id_kategori' => $this->input->post('id_kategori', true),
            'tb_kategori' => $this->input->post('tb_kategori') 
             
        ];        
        $this->db->insert('tb_kategori', $ktgdata);
    }

    public function editKategori(){
        $ktgdata = [
            'id_kategori' => $this->input->post('id_kategori', true),
            'tb_kategori' => $this->input->post('tb_kategori') 
             
        ];        
        $this->db->where('id_kategori', $this->input->post('id_kategori', true));
        $this->db->update('tb_kategori', $ktgdata);
    }

    public function hapusKategori($id){
        $this->db->where('id_kategori', $id);
        $this->db->delete('tb_kategori');
    }

}