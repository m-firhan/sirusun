<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen extends CI_Controller {
  public function fasilitasUmum()
  {
    $data['judul'] = 'Fasilitas Umum' ;

    $this->load->view('templates/header',$data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('manajemen/fasilitasUmum');
    $this->load->view('templates/footer');
  }
  public function jadwalPiket()
  {
    $data['judul'] = 'Jadwal Piket' ;

    $this->load->view('templates/header',$data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('manajemen/jadwalPiket');
    $this->load->view('templates/footer');
  }
  public function informasi()
  {
    $data['judul'] = 'Tabel Informasi' ;

    $this->load->view('templates/header',$data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('manajemen/informasi');
    $this->load->view('templates/footer');
  }
  public function setting()
  {
    $data['judul'] = 'Tabel Setting' ;

    $this->load->view('templates/header',$data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('manajemen/setting');
    $this->load->view('templates/footer');
  }
}
?>