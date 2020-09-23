<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dash extends CI_Controller {

public function index(){
		$data['title']='Home Perpustakaan';
		$tmp['content']=$this->load->view('system_view/dashboard',$data, TRUE);
		$this->load->view('system_view/dashboard');
    }
}