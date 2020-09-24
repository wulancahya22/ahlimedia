<?php 
class Kategori extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_m');
        $this->load->library('form_validation');
    }
    public function index()
    {   
        $data['title'] = 'Halaman Kategori';
        $data['ktg'] = $this->kategori_m->getAllKategori();
        
        $this->load->view('system_view/kategori/R_kategori',$data);
    }
    public function edit($id){


        $data['title'] = 'Edit Data';
        $data['ktg'] = $this->kategori_m->getAllKategoriById($id);
        $this->form_validation->set_rules('id_kategori', 'id_kategori', 'required');
        $this->form_validation->set_rules('tb_kategori', 'tb_kategori', 'required');
        
        if( $this->form_validation->run() == FALSE ){
            $this->load->view('system_view/kategori/U_kategori', $data);
        } else{
            $this->kategori_m->editKategori();
            $this->session->set_flashdata('msg', 'Diubah');
            redirect('tb_kategori');
        }
    }

    public function hapus($id){

        $this->kategori_m->hapusKategori($id);
        $this->session->set_flashdata('msg', 'Dihapus');
        redirect('tb_kategori');
    }
}
