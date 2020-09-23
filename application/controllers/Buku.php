<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buku extends CI_Controller {


	public function __construct(){
		parent::__construct();

		//$this->load->model('Buku_model');
	}

	public function index(){

		$data['title']='Home Perpustakaan';
		$tmp['content']=$this->load->view('global/home', $data,TRUE);
		$this->load->view('global/layout',$tmp);
		
	}

	public function profile(){

		$data['title']='Profile Sekolah';
		$tmp['content']=$this->load->view('global/profile', $data,TRUE);
		$this->load->view('global/layout',$tmp);
		
	}
}
