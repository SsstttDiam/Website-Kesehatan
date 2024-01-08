<?php
class Register extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_register');
    }

    public function index()
    {
        $this->load->view('auth/register');
    }

    public function register() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'username' => $username,
            'password' => $password
        );

        $insert_id = $this->M_register->insert_user($data);

        if ($insert_id) {
            redirect('login');
        } else {
            echo "Pendaftaran gagal. Silakan coba lagi.";
        }
    }
}
?>
