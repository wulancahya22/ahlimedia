<?php 
class LogApi extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('LoginApi');
        
    }
    public function Api(){
        $data = $this->LoginApi->getAll();
        echo json_encode($data->result_array());
    }
    
}