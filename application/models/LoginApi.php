<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class LoginApi extends CI_model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
	}

    function loginApi($Username, $Password)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where("'Username' = '$Username' 'Password' = '$Password'");
    $query = $this->db->get();
    return $query;
    }
    function getAllApi()
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->join('tb_akses', 'tb_user.id_akses = tb_akses.id_akses');
		$query = $this->db->get();
		return $query;
	}
}