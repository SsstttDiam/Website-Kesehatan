<?php
class User extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('M_user'); 
        $this->load->helper('url');
    }

    public function index() {
        $data['user_accounts'] = $this->M_user->get_login();
        $this->load->view('auth/checkuser', $data);
    }

    public function aksi_user() {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $data = array(
            'username' => $user,
            'password' => $pass
        );

        $this->M_user->insert_login($data);  
        redirect('auth/checkuser');
    }

    public function hapus_user($id) {
        $this->M_user->hapus_user($id);
        redirect('auth/checkuser');
    }
}