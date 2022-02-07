<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("r");
    }

    private $_table = "user";
    private $_id = "id_user";

    public function rules()
    {
        return [
            ['field' => 'no_pokok',
            'label' => 'No. Pokok',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],
            
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get_where($this->_table, array('user_type' => '2'))->result();
    }
    
    public function getBy($field,$criteria)
    {
        return $this->db->get_where($this->_table, array($field => $criteria))->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, [$this->_id => $id])->row();
    }

    public function login()
    {
        $post = $this->input->post();
        $data = array(
            'email'     => $post['email'],
            'password'  => md5($post['password']),
        );

        return $this->db->get_where($this->_table, $data)->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $check = $this->getBy('email',$post["email"]);
        
        if( count($check) > 0 ){
            return $this->r->show(0,'Gagal menambahkan data, alamat email sudah terdaftar!');
        } 

        $data = array(
            'no_pokok'          => $post["no_pokok"],
            'nama'              => $post["nama"],
            'tgl_lahir'         => $post["tgl_lahir"],
            'jk'                => $post["r_jk"],
            'alamat'            => $post["alamat"],
            'no_hp'             => $post["no_hp"],
            'email'             => $post["email"],
            'password'          => md5("11223344"),
            'user_type'         => 2,
            'registered_date'   => date('Y-m-d H:i:s'),
        );
    
        $this->db->set($data);
        if ($this->db->insert($this->_table, $this)){
            return $this->r->show(1,'Data berhasil ditambahkan');
        }else{
            return $this->r->show(0,'Gagal dalam mendambah data');
        }
    }

    public function update($id)
    {
        $post = $this->input->post();
        $check = $this->getById($id);
        
        if ($check === null) {
            return $this->r->show(0,'Gagal memperbarui data, id tidak diketahui');
        }

        if (isset($post["is_reset"])){
           $data = array(
                'no_pokok'          => $post["no_pokok"],
                'nama'              => $post["nama"],
                'tgl_lahir'         => $post["tgl_lahir"],
                'jk'                => $post["r_jk"],
                'alamat'            => $post["alamat"],
                'no_hp'             => $post["no_hp"],
                'email'             => $post["email"],
                'password'          => md5('123123123')
            ); 
        }else{
            $data = array(
                'no_pokok'          => $post["no_pokok"],
                'nama'              => $post["nama"],
                'tgl_lahir'         => $post["tgl_lahir"],
                'jk'                => $post["r_jk"],
                'alamat'            => $post["alamat"],
                'no_hp'             => $post["no_hp"],
                'email'             => $post["email"],
            );
        }

        $result = $this->db->update($this->_table, $data, array($this->_id => $id));
        if ($result){
            return $this->r->show(1,'Data berhasil diperbarui');
        }else{
            return $this->r->show(0,'Gagal dalam memperbarui data');
        }
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array($this->_id => $id));
    }

}
