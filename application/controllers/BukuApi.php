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
        $data['nama_file'] = $this->input->post('nama_file');
        $data['dokumen'] = $this->input->post('dokumen');
        $data['judul_buku'] = $this->input->post('judul_buku');
        $data['kategori_buku'] = $this->input->post('kategori_buku');
        $data['pengarang_buku'] = $this->input->post('pengarang_buku');
        $data['penerbit_buku'] = $this->input->post('penerbit_buku');
        $data['jumlah_halaman'] = $this->input->post('jumlah_halaman');

        $response = $this->M_android->inset->insert_daftar_buku($data);

        $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
    }
    
}