<?php
class Crud_obat extends CI_Controller {
    
    function __construct() {
        parent::__construct(); 
        $this->load->model('M_obat'); 
        $this->load->helper('url');
    }

    public function index() {
        $data['obat'] = $this->M_obat->get_obat()->result_array(); 
        $this->load->view('auth/obat', $data);
    }

    public function tambah_data(){
        $this->load->view('auth/obat');
    }

    public function aksi_obat() {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jumlah = $this->input->post('jumlah');
        $no = $this->input->post('nohp');
        $obat = $this->input->post('obat');
        $pembayaran = $this->input->post('metode_pembayaran');
        $pesantambahan = $this->input->post('pesantambahan');

        $hargaobat = 0;
        switch ($obat) {
            case 'Promag Double Action':
                $hargaobat = 26500;
                break;
            case 'Imboost Force':
                $hargaobat = 99500;
                break;
            case 'Cetirgri 10mg':
                $hargaobat = 42300;
                break;
            case 'Sunmol Forte 4 Table':
                $hargaobat = 3100;
                break;
            case 'Paracetamol 500mg':
                $hargaobat = 4500;
                break;
            case 'Axaprofen':
                $hargaobat = 6500;
                break;
            case 'Zelface 20% Cream 10g':
                $hargaobat = 38500;
                break;
            case 'Cataflam 25mg 10 Tabler':
                $hargaobat = 39700;
                break;
            default:
                $hargaobat = 0;
        }

        $harga = $hargaobat * $jumlah;

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'jumlah' => $jumlah,
            'nohp' => $no,
            'obat' => $obat,
            'pembayaran' => $pembayaran,
            'pesantambahan' => $pesantambahan,
            'harga' => $harga
        );
    
        $this->M_obat->insert_obat($data);  
    
        redirect('auth/checkobat');
    }
    
    public function hapus_obat($id) {
        $this->db->where('idobat', $id);
        $this->db->delete('tbl_obat');
        redirect('auth/checkobat');
    }
}
?>
