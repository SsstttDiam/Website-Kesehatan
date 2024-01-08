<?php
class M_admin extends CI_Model{
    public function cek_min($u, $p){
        return $this->db->get_where('tbl_admin', array('username'=>$u, 'password'=>$p));
    }
}
?>