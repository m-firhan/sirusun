<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("r");
    }

    private $_table = "kamar";
    private $_id = "id_kamar";

    public function rules()
    {
        return [
            ['field' => 'no_ruangan',
            'label' => 'No. Ruangan',
            'rules' => 'required'],

            ['field' => 'lantai',
            'label' => 'Lantai',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getBy($field,$criteria)
    {
        return $this->db->get_where($this->_table, array($field => $criteria))->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, [$this->_id => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $data = array(
            'no_ruangan'        => $post["no_ruangan"],
            'lantai'            => $post["lantai"],
            'fasilitas'         => $post["fasilitas"],
            'status'            => $post["status"],
            'harga'             => $post["harga"],
        );

        $this->db->set($data);
        $result = $this->db->insert($this->_table, $this);
        if ($result){
            return $this->r->show(1,'Data berhasil ditambahkan');
        }else{
            return $this->r->show(0,'Gagal dalam mendambah data');
        }
    }

    public function update()
    {
        $post = $this->input->post();
        $check = $this->getById($post[$this->_id]);

        if($check === null){
            return $this->r->show(0,'Gagal memperbarui data, id tidak dikenali');
        }

        $data = array(
            'no_ruangan'        => $post["no_ruangan"],
            'lantai'            => $post["lantai"],
            'fasilitas'         => $post["fasilitas"],
            'status'            => $post["status"],
            'harga'             => $post["harga"],
        );

        $this->db->set($data);
        $result = $this->db->update($this->_table, $this, array($this->_id => $post[$this->_id]));
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
