<?php 

class User_m extends CI_Model{

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('daftar_user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', $post['password']);
        $query = $this->db->get();
        return $query;
    }
    public function get($id = null)
    {
        $this->db->from('daftar_user');
        if($id != null) {
            $this->db->where('user_id', $id);
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

        $this->db->insert('daftar_user', $params);
    }

    public function edit($post)
    {
        $params['Nama_lengkap'] = $post['fullname'];
        $params['Username'] = $post['username'];
        $params['Password'] = $post['password'];
        $params['id_akses'] = $post['id_akses'];
        $this->db->where('user_id', $post['user_id']);
        $this->db->update('daftar_user', $params);
    }


    public function del($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('daftar_user');
    }

}