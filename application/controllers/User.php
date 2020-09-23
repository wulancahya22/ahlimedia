<?php 
class User extends CI_Controller{
    
    public function index()
    {
        $data['query'] = $this->user_m->get();
        
        $this->load->view('system_view/user/user_data',$data);

    }

    public function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fullname', 'Nama_lengkap', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('id_akses', 'id_akses', 'required');
        
        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ( $this->form_validation->run() == FALSE ){
                $this->load->view('system_view/user/user_form_add');
        }else{
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='".site_url('user')."';</script>";
        }
    }

    public function edit($id)
    {

        $this->form_validation->set_rules('fullname', 'Nama_lengkap', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('id_akses', 'id_akses', 'required');
        
        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ( $this->form_validation->run() == FALSE ){
                $query = $this->user_m->get($id);
                if($query->num_rows() > 0){
                    $data['row'] = $query->row();
                    $this->load->view('system_view/user/user_form_edit',$data);
                } else {
                    echo "<script>alert('Data Berhasil Di Simpan');";
                    echo "window.location='".site_url('user')."';</script>";
                }
                
        }else{
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);
            if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='".site_url('user')."';</script>";
        }
    }
    function username_check() {
        $post = $this->input->post(null, TRUE);
        $query= $this->db->query("SELECT * FROM daftar_user WHERE Username = '$post[Username]' AND user_id != '$post[user_id]'");
        if($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '{field} ini sudah ada bos');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function del()
    {
        $id = $this->input->post('user_id');
        $this->user_m->del($id);

        if($this->db->affected_rows() > 0){
            echo "<script>alert('Data Berhasil Di Hapus');</script>";
        }
        echo "<script>window.location='".site_url('user')."';</script>";
    }

    

}
