<?php 
class OrderApi extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('OrdrApi');
        
    }
    public function Api(){
        $data = $this->BookApi->getAll();
        echo json_encode($data->result_array());
    }
    
}