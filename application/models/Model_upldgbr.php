<?php
class Model_upldgbr extends CI_Model {

    
    var $tabel = 'tb_buku';

    function __construct() {
        parent::__construct();
    }
    //fungsi untuk menampilkan semua data dari tabel database untuk buku

 function get_allimage() {
     // var_dump($data);die();  
        $this->db->from($this->tabel);
        $query = $this->db->get();
        return $query->result();
 }
 //    public function all(){
 //    //query semua record di table products
 //    $hasil = $this->db->get('tb_buku');
 //    if($hasil->num_rows() > 0){
 //        return $hasil->result();
 //    } else {
 //        return array();
 //        }
 //    }
 //    public function find($id){
 //        //Query mencari record berdasarkan ID-nya
 //        $hasil = $this->db->where('id', $id)
 //                          ->get('tb_buku');
 //        if($hasil->num_rows() > 0){
 //            return $hasil->row();
 //        } else {
 //            return array();
 //        }
 //    }
 //    function get($id)
 //    {
 //        $this->db->from('tb_buku');
 //        if($id) {
 //            $this->db->where('id', $id);
 //        }
 //        $query = $this->db->get();
 //        return $query;
 //    }
 //    //fungsi insert ke database untuk user
 //    function get_insert($data){
 //       $this->db->insert('order', $data);
 //       return TRUE;
 //    }
 //    public function get_all(){
 //        //query semua record di table  untuk user
 //        $hasil = $this->db->get('order');
 //        if($hasil->num_rows() > 0){
 //            return $hasil->result();
 //        } else {
 //            return array();
 //            }
 //    }

 //    public function getfind($id){
 //        //Query mencari record berdasarkan ID-nya
 //        $hasil = $this->db->where('id', $id)
 //                          ->get('order');
 //        if($hasil->num_rows() > 0){
 //            return $hasil->row();
 //        } else {
 //            return array();
 //        }
 //    }

 //    public function get_del($where,$table)
 //     //Query mengahapus berdasarkan id pada tabel order di dabatase dan ini untuk user
	// {
 //        $this->db->where($where);

 //        $this->db->delete($table);
	// }

    public function get_by_id($kondisi)
     //Query mengeupdate atau meng-edit berdasarkan idnya
    {
        $this->db->from('tb_buku');
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }
    function get_insert2($data)
    //Query untuk memasukkan data ke dalam database untuk admin
    {
        $this->db->insert('tb_buku', $data);
        return TRUE;
     }
    public function update2($data,$kondisi)
    //Query untuk mengupdate data berdasarkan kondisi yaitu get_by_id
  {
    var_dump($data);die();
      $this->db->update('tb_buku',$data,$kondisi);
      return TRUE;
  }

  public function delete($where)
  //Query untuk menghapus berdasarkan id 
  {
      $this->db->where($where);
      $this->db->delete('tb_buku');
      return TRUE;
  }
  

}

?>