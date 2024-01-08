<?php
class M_register extends CI_Model {

    public function insert_user($data) {
        $this->db->insert('tbl_login', $data);
        return $this->db->insert_id();
    }
}
?>
