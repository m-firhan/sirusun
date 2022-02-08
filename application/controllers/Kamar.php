<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->database(); 
        $this->load->model("kamar_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		redirect(site_url('Admin/kamar'));
		// $data["data"] = $this->kamar_model->getAll();
		// $this->load->view('hnf/header');
		// $this->load->view('kamar/daftar_kamar',$data);
		// $this->load->view('hnf/footer');
	}

	public function tambah_kamar(){
		$kamar_model = $this->kamar_model;
        $validation = $this->form_validation;
        $validation->set_rules($kamar_model->rules());

		$data["str_response"] = null;
		
        if ($validation->run()) {
			$data["str_response"] = $kamar_model->save();
        }else{
			
		}

		$this->index();
		//redirect(site_url('Admin/kamar'));
	}

	public function edit_kamar($id = null){
		//echo $id;
		//if (!isset($id)) redirect('kamar/');
		$kamar_model = $this->kamar_model;
        $validation = $this->form_validation;
        $validation->set_rules($kamar_model->rules());

		$data["str_response"] = null;
		
        if ($validation->run()) {
			$data["str_response"] = $kamar_model->save();
        }else{
			
		}

		$this->load->view('hnf/header');
		$this->load->view('kamar/edit_kamar',$data);
		$this->load->view('hnf/footer');
	}

	public function delete($id = null){
		$this->kamar_model->delete($id);

		$this->index();
	}
}
