<?php 
defined('BASEPATH') OR exit('No direct access allowed');
class Home extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if(!$this->session->userdata('Username'))
    {
        redirect('auth');
    }
  }
  public function index(){
      $d['Username'] = $this->session->userdata('Username');
      $this->load->view('system_view/login/login', $d);
  }
}