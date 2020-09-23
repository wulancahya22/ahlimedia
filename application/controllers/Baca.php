<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baca extends CI_Controller {

    public function index() {
        //view yang tampil jika fungsi add diakses pada url
        $this->load->view('system_view/embed/index');
    }
}