<?php
class Akses extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('akses_model');
        // $this->load->library('template');
    }

    // function index()
    // {
    //     $data['akses'] = $this->admin_model->getAkses();
    //     $this->template->tampil('crud/home_akses', $data);
    // }

    function Profil()
    {
        $data['user'] = $this->akses_model->getProfil()->row_array();
        $this->template->tampil('system_view\admin\profil_view', $data);
    }

    function updateProfile()
    {
        $id = $this->input->post('id');
        $ubah_foto = $this->input->post('ubah_foto');

        if ($ubah_foto) {
            $foto = $this->_uploadImage('foto');

            if ($foto == '') {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak ada foto terpilih. Foto maximal berukuran 2 mb<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('akses/profil');
            }

            $data = array(
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => $this->input->post('jk'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'foto' => $foto
            );
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => $this->input->post('jk'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username')
            );
        }


        if ($this->akses_model->updateProfile($id, $data)) {
            redirect('Akses/Profil');
        }
    }



    public function gantiPassword()
    {
        $this->template->tampil('system_view\admin\ganti_password_view');
    }

    public function updatePassword()
    {
        $paslam = md5($this->input->post('paslam'));
        $pasnew = md5($this->input->post('pasnew'));
        $conpas = md5($this->input->post('conpas'));

        $data = $this->akses_model->getProfil()->row_array();

        if ($paslam != $data['password']) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama anda salah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('akses/gantiPassword');
        } else {
            if ($pasnew != $conpas) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Konfirmasi Password tidak sama<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('akses/gantiPassword');
            } else {
                if ($this->db->update('tb_user', ['password' => $pasnew], ['id' => $data['id']])) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil rubah password<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect('akses/gantiPassword');
                    redirect('akses/gantiPassword');
                }
            }
        }
    }



    private function _uploadImage($name)
    {
        // konfigurasi
        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['encrypt_name']         = TRUE; //Enkripsi nama yang terupload
        $config['overwrite']            = TRUE;
        $config['max_size']             = 2048; // 2MB
        $config['file_ext_tolower']     = TRUE;
        $this->load->library('upload', $config);
        // bila berhasil
        if ($this->upload->do_upload($name)) {
            // ambil nama file foto
            return $this->upload->data("file_name");
        } else {
            return "";
        }
    }
}
