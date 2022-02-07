<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("r");
    }

    public function getAll()
    {
        $sql = "SELECT 
                    COUNT(id_user) AS jmlUser,
                    (SELECT COUNT(id_kamar) FROM kamar) AS jmlKamar,
                    (SELECT COUNT(id_informasi)  FROM informasi) AS jmlInformasi,
                    (SELECT COUNT(id_user)  FROM user WHERE user_type=1) AS jmlAdmin,
                    (SELECT COUNT(id_piket)  FROM piket) AS jmlPiket,
                    (SELECT COUNT(id_message)  FROM message_detail WHERE is_read=0) AS jmlUnread
                FROM
                    `user`
                WHERE user_type=2";
        $sql2 = "SELECT
                    ii.id_informasi, 
                    ii.judul,
                    ii.konten,
                    ii.tgl,
                    ii.id_user,
                    uu.nama,
                    uu.profile_pic
                FROM
                    informasi ii
                LEFT JOIN 
                    user uu
                ON
                    ii.id_user = uu.id_user";

        $hasil1 = $this->db->query($sql)->row();
        $hasil2 = $this->db->query($sql2)->result();

        $res = array('dashboard' => $hasil1, 'informations' => $hasil2);
        return $this->r->show(1,'Fetch Data', $res);
    }
}
