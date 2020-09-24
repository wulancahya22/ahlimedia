<?php 

class User_m extends CI_Model{

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', $post['password']);
        $query = $this->db->get();
        return $query;
    }
    public function get($id = null)
    {
        $this->db->from('tbr_user');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['Nama_lengkap'] = $post['fullname'];
        $params['Username'] = $post['username'];
        $params['Password'] = $post['password'];
        $params['id_akses'] = $post['id_akses'];

        $this->db->insert('tb_user', $params);
    }

    public function edit($post)
    {
        $params['Nama_lengkap'] = $post['fullname'];
        $params['Username'] = $post['username'];
        $params['Password'] = $post['password'];
        $params['id_akses'] = $post['id_akses'];
        $this->db->where('id', $post['id']);
        $this->db->update('tb_user', $params);
    }


    public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_user');
    }

}