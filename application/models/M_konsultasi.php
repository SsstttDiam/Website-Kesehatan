<?php
class M_konsultasi extends CI_Model
{

    public function insert_konsultasi($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function get_konsultasi()
    {
        return $this->db->get('tbl_konsultasi');
    }

    public function get_data_by_id($idkonsultasi)
    {
        return $this->db->get_where('tbl_konsultasi', array('idkonsultasi' => $idkonsultasi));
    }

    public function get_all_data($tabel)
    {
        $q = $this->db->get($tabel);
        return $q;
    }

    public function edit_konsultasi($data, $id)
    {
        $this->db->where('idKonsultasi', $id);
        $this->db->update('tbl_konsultasi', $data);
    }

    public function hapus_konsultasi($id)
    {
        $this->db->where('idkonsultasi', $id);
        $this->db->delete('tbl_konsultasi');
    }
}
