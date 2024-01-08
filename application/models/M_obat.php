<?php
class M_obat extends CI_Model
{
    public function insert_obat($data)
    {
        $this->db->insert('tbl_obat', $data);
    }

    public function get_obat()
    {
        return $this->db->get('tbl_obat')->result();
    }

    public function get_data_by_id($idobat)
    {
        return $this->db->get_where('tbl_obat', array('idobat' => $idobat))->row_array();
    }

    public function delete_obat($id)
    {
        $this->db->where('idobat', $id);
        $this->db->delete('tbl_obat');
    }
}
?>
