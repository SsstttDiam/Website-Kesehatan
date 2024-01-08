<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('M_admin');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $cek_admin = $this->M_admin->cek_min($username, $password)->num_rows();
        
        $cek_user = $this->M_login->cek_admin($username, $password)->num_rows();

        if ($cek_admin > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect('auth/homeadmin');
        } elseif ($cek_user > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect('auth/home');
        } else {
            echo "Username dan Password Salah!";
        }
    }
}
?>
