<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {


	public function _construct()
	{
		session_start();
		parent::__construct();
		$this->load->model('Perpus_model');
	}
	public function index(){
		$data['title']='Home Perpustakaan';
		$tmp['content']=$this->load->view('global/home',$data, TRUE);
		$this->load->view('global/layout',$tmp);
	}
}

/* End of file web.php */
/* Location: ./application/controllers/web.php */