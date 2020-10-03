<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {
	
  function __construct()
  {
    parent::__construct();
    $this->load->model('Model_users');
    $this->load->library('session');
    $this->load->model('LoginApi');
    $this->load->helper('text');
  }
  public function index(){
    $this->load->view('system_view/login/login');
  }
  function ceklogin(){
    
      $Username = $this->input->post('Username');
      $Password = $this->input->post('Password');
      $q = $this->db->query("SELECT * FROM tb_user WHERE Username='$Username' AND Password='$Password'");
      if ($q->num_rows() > 0) {
        $d = $this->db->get_where('tb_user',array('Username'=>$Username, 'Password' => $Password))->row();
        $nama = $q->row()->Username;
        $this->session->set_userdata('Username',$nama);
        if($d->id_akses == '1'){
          redirect('dash');
        }elseif($d->id_akses == '2'){
          redirect('welcome');
        }
      }else{
         //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
         $data['error']='!! Wrong Username or Password !!';
        redirect('auth', $data);
      }
    }
 
  function dash(){
    $data["title"] = "Halaman Dash";
    $this->load->view('dash', $data);
  }
  function buku(){
    $data["title"] = "Halaman Moderator";
    $this->load->view('buku', $data);
  }
  function logout()
  {
    $this->session->sess_destroy(); 
    $data['logout'] = 'You have been logged out.';
    $this->load->view('system_view/login/login', $data);
  }
  public function Api()
  {
      $Username = $this->input->get('Username');
      $Password = $this->input->get('Password');
      $data = $this->LoginApi->loginApi($Username, $Password);
      echo json_encode($data->result_array());
  }
  

}