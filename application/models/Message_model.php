<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("r");
    }

    private $_table = "message";
    private $_id = "id_message";

    public function rules()
    {
        return [
            ['field' => 'id_message',
            'label' => 'Id Message',
            'rules' => 'required'],

            ['field' => 'id_user_1',
            'label' => 'Id 1',
            'rules' => 'required'],

            ['field' => 'id_user_2',
            'label' => 'Id 2',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getListMessageAll()
    {
        $sql = "SELECT 
                    m.id_message,
                    m.id_user_1 AS user1,
                    m.id_user_2 AS user2,
                    m.last_message,
                    m.tgl,
                    u.nama AS nama1,
                    (SELECT nama FROM user WHERE id_user = user2) AS nama2
                FROM
                    message m
                INNER JOIN
                    user u
                WHERE
                    m.id_user_1 = u.id_user";

        return $this->db->query($sql)->result();
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
            'id_message'        => $post["id_message"],
            'id_user_1'         => $post["id_user_1"],
            'id_iser_2'         => $post["id_iser_2"],
            'last_message'      => $post["last_message"],
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
            'id_message'        => $post["id_message"],
            'id_user_1'         => $post["id_user_1"],
            'id_iser_2'         => $post["id_iser_2"],
            'last_message'      => $post["last_message"],
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
