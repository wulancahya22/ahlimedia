<?php 
class BukuApi extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('BookApi');
        
    }
    public function Api(){
        $data = $this->BookApi->getAll();
        echo json_encode($data->result_array());

    }

    public function insert_daftar_buku()
    {
    	 $data['id'] = $this->input->post('id');
        $data['id_kategori'] = $this->input->post('id_kategori');
        $data['judul'] = $this->input->post('judul');
        $data['penulis'] = $this->input->post('penulis');
        $data['sinopsis'] = $this->input->post('sinopsis');
        $data['no_hp'] = $this->input->post('no_hp');
        $data['gambar'] = $this->input->post('gambar');

        $response = $this->M_android->inset->insert_daftar_buku($data);

        $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
    }
    
}