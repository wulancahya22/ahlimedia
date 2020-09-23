<?php
class Model_users extends CI_Model{

    function getAll(){
    $this->db->select('*');
    $this->db->from('daftar_user');
    $this->db->join('akses', 'daftar_user.id_akses = akses.id_akses');
    $query = $this->db->get();
    return $query;
  }
  function proseslogin($Username, $Password)
  {
    $this->db->where('Username',$Username);
    $this->db->where('Password',$Password);
    return $this->db->get('daftar_user')->row();
  }

}