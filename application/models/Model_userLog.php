<?php
class Model_userLog extends CI_Model{

    function getAll(){
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->join('tb_akses', 'tb_user.id_akses = tb_akses.id_akses');
		$query = $this->db->get();
		return $query;
	}
    function login($Username,$Password,$table){
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('Username',$Username);
		$this->db->where('Password',$Password);
		$query = $this->db->get();
		return $query;
	}
}