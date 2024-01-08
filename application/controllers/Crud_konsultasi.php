<?php
class Crud_konsultasi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_konsultasi');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['konsultasi'] = $this->M_konsultasi->get_konsultasi()->result_array();
        $this->load->view('auth/konsultasi', $data);
    }

    public function tambah_data()
    {
        $this->load->view('auth/konsultasi');
    }

    public function aksi_konsultasi()
    {
        //tangkap isian user
        $name = $this->input->post('name');
        $disease = $this->input->post('disease');
        $phone = $this->input->post('phone');
        $date = $this->input->post('date');
        $doctor = $this->input->post('doctor');
        $message = $this->input->post('message');

        //set rules upload
        $config['upload_path'] = './assets/keluhan/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        //load library upload
        $this->load->library('upload', $config);
        //proses upload
        if ($this->upload->do_upload('fileUpload')) {
            $data_file = $this->upload->data();

            //jadikan versi array
            $data_input = array(
                'nama' => $name,
                'penyakit' => $disease,
                'no_hp' => $phone,
                'tanggal' => $date,
                'dokter' => $doctor,
                'pesan' => $message,
                'foto' => $data_file['file_name']
            );

            //inputkan ke database dengan bantuan model
            $this->M_konsultasi->insert_konsultasi('tbl_konsultasi', $data_input);
            redirect('auth/checkkonsultasi');
        } else {
            redirect('auth/konsultasi');
        }
    }

    public function editkonsultasi($idkonsultasi)
    {
        $data['konsultasi'] = $this->M_konsultasi->get_data_by_id($idkonsultasi)->row_array();
        $this->load->view('auth/editkonsultasi', $data);
    }

    public function aksi_edit()
    {
        $id = $this->input->post('idKonsultasi');
        $name = $this->input->post('name');
        $disease = $this->input->post('disease');
        $phone = $this->input->post('phone');
        $doctor = $this->input->post('doctor');
        $message = $this->input->post('message');

        $foto = '';
        if (!empty($_FILES['fileUploadEdit']['name'])) {
            $config['upload_path'] = './assets/keluhan';
            $config['allowed_types'] = 'jpg|png|gif';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('fileUploadEdit')) {
                echo "Upload Gagal";
                die();
            } else {
                $fileData = $this->upload->data();
                $foto = $fileData['file_name'];
            }
        }

        $data = array(
            'idkonsultasi' => $id,
            'nama' => $name,
            'penyakit' => $disease,
            'no_hp' => $phone,
            'dokter' => $doctor,
            'foto' => $foto,
            'pesan' => $message
        );

        if ($id && $name && $disease && $phone && $doctor && $message) {
            $this->M_konsultasi->edit_konsultasi($data, $id);
            redirect('auth/checkkonsultasi');
        } else {
            echo "Data tidak lengkap atau ID tidak valid.";
        }
    }


    public function hapus_konsultasi($id)
    {
        $this->db->where('idkonsultasi', $id);
        $this->db->delete('tbl_konsultasi');
        redirect('auth/checkkonsultasi');
    }
}
?>