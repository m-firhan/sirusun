<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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
}