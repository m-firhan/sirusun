<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->database();
      $this->load->library('form_validation');
      $this->load->library('session');
  }

  public function index()
  {
    $this->load->model("beranda_model");

    $data['judul'] = 'Beranda' ;
    $data['str_response'] = $this->beranda_model->getAll();

    $this->load->view('templates/header',$data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('admin/index',$data);
    $this->load->view('templates/footer');
  }
  public function warga()
  {
    $this->load->model("user_model");

    $data['judul'] = 'Tabel Warga' ;
    $data["data"] = $this->user_model->getAll();

    $this->load->view('templates/header',$data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('admin/warga',$data);
    $this->load->view('templates/footer');
  }
  public function kamar()
  {
    $this->load->model("kamar_model");

    $data['judul'] = 'Tabel Kamar Warga' ;
    $data["data"] = $this->kamar_model->getAll();

    $this->load->model("kamar_model");
    $this->load->view('templates/header',$data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('admin/kamar',$data);
    $this->load->view('templates/footer');
  }
  public function getWarga(){
    $data["data"] = $this->user_model->getAll();
    print(json_encode($data));
  }
}