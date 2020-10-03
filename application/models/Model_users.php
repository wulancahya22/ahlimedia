<?php
class Model_users extends CI_Model{

    function getAll(){
    $this->db->select('*');
    $this->db->from('tb_user');
    $this->db->join('tb_akses', 'tb_user.id_akses = tb_akses.id_akses');
    $query = $this->db->get();
    return $query;
  }
  function proseslogin($Username, $Password)
  {
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    return $this->db->get('tb_user')->row();
  }

}