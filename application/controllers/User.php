<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$data["data"] = $this->user_model->getAll();
		$this->load->view('hnf/header');
		$this->load->view('warga/daftar_warga',$data);
		$this->load->view('hnf/footer');
	}

	public function tambah_warga(){
		$users = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($users->rules());

		$data["str_response"] = null;

        if ($validation->run()) {
			$data["str_response"] = $users->save();
        }

		redirect(site_url('admin/warga'));
	}

	public function edit_warga($id){
		$users = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($users->rules());

		$data["str_response"] = null;

        if ($validation->run()) {
			$data["str_response"] = $users->update($id);
			redirect(site_url('warga'));
		//	echo json_encode($data);
        }else{
		//	echo "belok";
		}

		$data['str_response'] = $users->getById($id);
		$this->load->view('hnf/header');
		$this->load->view('warga/edit_warga',$data);
		$this->load->view('hnf/footer');
	}

	public function login(){
		$users = $this->user_model;

		$rules = array(
            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],
            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required'],
		);

		$validation = $this->form_validation;
        $validation->set_rules($rules);

		$isLogin = $this->session->userdata('isLogin');

		if ($isLogin === true){
		redirect(site_url());
		}

		if ($validation->run()){
			$login_p = $users->login();
			if ($login_p){
				$this->session->set_userdata(
					array(
						'id_user' 	=> $login_p->id_user,
						'nama'		=> $login_p->nama,
						'isLogin'	=> true,
						'userType'	=> $login_p->user_type,
						'profile_pic' => $login_p->profile_pic,
					)
				);
				redirect(site_url());
			}
		}

		$this->load->view('login');
	}

	public function logout(){	
		$this->session->unset_userdata(
			array(
				'id_user',
				'nama',
				'isLogin',
				'userType',
				'profile_pic'
			)
		);
		redirect(site_url('login'));
	}

	public function delete($id = null){
		$this->user_model->delete($id);

		redirect(site_url('admin/warga'));
	}
}
