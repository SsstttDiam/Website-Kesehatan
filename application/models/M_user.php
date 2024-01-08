<?php
class M_user extends CI_Model
{

    public function insert_login($data)
    {
        $this->db->insert('tbl_login', $data);
    }
    public function get_login()
    {
        return $this->db->get('tbl_login')->result();
    }

    public function get_data_by_id($idlogin)
    {
        return $this->db->get_where('tbl_login', array('idlogin' => $idlogin))->row();
    }

    public function get_all_data($tabel)
    {
        return $this->db->get($tabel)->result();
    }

    public function hapus_user($id)
    {
        $this->db->where('idlogin', $id);
        $this->db->delete('tbl_login');
    }
}
