<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->database();
      $this->load->model("user_model");
      $this->load->library('form_validation');
      $this->load->library('session');
  }

  public function index()
  {
    $data['judul'] = 'Beranda' ;
    $this->load->view('templates/header',$data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('admin/index');
    $this->load->view('templates/footer');
  }
  public function warga()
  {
    $data['judul'] = 'Tabel Warga' ;
    $this->load->view('templates/header',$data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('admin/warga');
    $this->load->view('templates/footer');
  }
  public function kamar()
  {
    $data['judul'] = 'Tabel Kamar Warga' ;
    $this->load->view('templates/header',$data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('admin/kamar');
    $this->load->view('templates/footer');
  }
  public function getWarga(){
    $data["data"] = $this->user_model->getAll();
    print(json_encode($data));
  }
}