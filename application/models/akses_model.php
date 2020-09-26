<?php
class akses_model extends CI_Model
{
    function getProfil()
    {
        $id = $this->session->userdata("session_id"); // dapatkan id user yg login
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('tb_user');
        $this->db->join('tb_akses', 'tb_user.id_akses=tb_akses.id_akses');
        $query = $this->db->get("");
        return $query;
    }

    function updateProfile($id,$data)
    {
        return $this->db->update('tb_user',$data,['id'=>$id]);
    }
}