<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_konsultasi');
        $this->load->model('M_obat');
        $this->load->model('M_user');
        $this->load->model('M_admin');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function home()
    {
        $this->load->view('auth/utama');
    }

    public function homeadmin()
    {
        $this->load->view('auth/homeadmin');
    }

    public function profil(){
        $this->load->view('auth/profil');
    }

    public function konsultasi()
    {
        $this->load->view('auth/konsultasi');
    }

    public function checkkonsultasi()
    {
        $data['pasien'] = $this->M_konsultasi->get_all_data('tbl_konsultasi')->result();
        $this->load->view('auth/checkkonsultasi', $data);
    }

    public function editkonsultasi($idkonsultasi = null)
    {
        if ($idkonsultasi === null) {
            redirect('auth/checkkonsultasi');
        }
        $data['konsultasi'] = $this->M_konsultasi->get_data_by_id($idkonsultasi)->row_array();
        $this->load->view('auth/editkonsultasi', $data);
    }

    public function listobat()
    {
        $this->load->view('auth/listobat');
    }

    public function checkobat()
    {
        $data['obat'] = $this->M_obat->get_obat();
        $this->load->view('auth/checkobat', $data);
    }

    public function pembelian()
    {
        $this->load->view('auth/pembelian');
    }

    public function checkuser()
    {
        $data['user_accounts'] = $this->M_user->get_login();
        $this->load->view('auth/checkuser', $data);
    }
    public function checkimage()
    {
        $this->load->view('auth/checkimage');
    }
    public function logout()
    {
        redirect('auth/index');
    }
}
?>
