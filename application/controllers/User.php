<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function editprofil_mhs()
    {
        $data['user'] = $this->db->get_where('datamhs', ['nrpmhs' => $this->session->userdata('nrp')])->row_array();

        $this->form_validation->set_rules('noktpmhs', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nohpmhs', 'No.Handphone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('user/editprofil_mhs', $data);
        } else {
            $noktp = $this->input->post('noktpmhs');
            $jkmhs = $this->input->post('jkmhs');
            $hpmhs = $this->input->post('nohpmhs');
            $nrpmhs = $this->input->post('nrpmhs');

            $this->db->set('noktpmhs', $noktp);
            $this->db->set('jkmhs', $jkmhs);
            $this->db->set('nohpmhs', $hpmhs);
            $this->db->where('nrpmhs', $nrpmhs);
            $this->db->update('datamhs');

            // var_dump($hpmhs);
            // die;

            $this->session->set_flashdata('message_editprofil', '<div class="alert alert-success" style="margin: 15px 15px" role="alert">Profil Anda berhasil di Update</div>');
            redirect('user/editprofil_mhs');
        }
    }

    public function kuesioner_mhs()
    {
        $this->load->model('Pertanyaan_model');

        $data['user'] = $this->db->get_where('datamhs', ['nrpmhs' => $this->session->userdata('nrp')])->row_array();

        $submit = $this->db->get_where('submit_mhs', ['nrpmhs' => $this->session->userdata('nrp')])->row_array();

        if ($submit != NULL) {
            $data['matkul'] = $this->db->distinct()->select('jadwal.*, matkul.*, dosen.*')->from('datamhs')
                ->join('jadwal', 'jadwal.nrpmhs = datamhs.nrpmhs', 'inner')
                ->join('matkul', 'matkul.kode_mk = jadwal.kode_mk', 'left')
                ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn', 'left')
                ->join('submit_mhs', 'submit_mhs.nrpmhs = datamhs.nrpmhs')
                ->where('datamhs.nrpmhs=' . $this->session->userdata('nrp') . '')
                // ->where("dosen.nama_dsn != 'DOSEN BARU/DOSEN BELUM ADA'")
                ->where("jadwal.kode_mk NOT IN (SELECT submit_mhs.kode_mk FROM submit_mhs WHERE submit_mhs.nrpmhs = " . $this->session->userdata('nrp') . ")")
                ->get()->result();
        } else {
            $data['matkul'] = $this->db->distinct()->select('jadwal.*, matkul.*, dosen.*')->from('datamhs')
                ->join('jadwal', 'jadwal.nrpmhs = datamhs.nrpmhs', 'inner')
                ->join('matkul', 'matkul.kode_mk = jadwal.kode_mk', 'left')
                ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn', 'left')
                ->join('submit_mhs', 'submit_mhs.nrpmhs = datamhs.nrpmhs', 'left')
                ->where('datamhs.nrpmhs=' . $this->session->userdata('nrp') . '')
                // ->where("dosen.nama_dsn != 'DOSEN BARU/DOSEN BELUM ADA'")
                ->get()->result();
        }
        // $matkul = $this->db->distinct()->select('jadwal.*, matkul.*, dosen.*')->from('datamhs')
        // ->join('jadwal', 'jadwal.nrpmhs = datamhs.nrpmhs', 'inner')
        // ->join('matkul', 'matkul.kode_mk = jadwal.kode_mk', 'left')
        // ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn', 'left')
        // ->join('submit_mhs', 'submit_mhs.nrpmhs = datamhs.nrpmhs', 'left')
        // ->where('datamhs.nrpmhs=' . $this->session->userdata('nrp') . '')
        // ->where("dosen.nama_dsn != 'DOSEN BARU/DOSEN BELUM ADA'")
        // ->get()->result();
        // var_dump($this->db->last_query());
        // die();
        $data['pertanyaan'] = $this->db->select('*')
            ->from('pertanyaan')->where('level', 'mahasiswa')
            ->get()->result_array();

        $this->form_validation->set_rules('nrpmhs', 'NRP', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('user/kuesioner_mhs', $data);
        } else {
            $jml = $this->input->post('jwb1') + $this->input->post('jwb2') + $this->input->post('jwb3') + $this->input->post('jwb4') + $this->input->post('jwb5') + $this->input->post('jwb6') +
                $this->input->post('jwb7') + $this->input->post('jwb8') + $this->input->post('jwb9') + $this->input->post('jwb10') + $this->input->post('jwb11') + $this->input->post('jwb12');
            $indeks_kml = $jml / 12;
            $data = [
                'nrpmhs' => $this->input->post('nrpmhs'),
                'kode_mk' => $this->input->post('kode_mk'),
                'kelas' => $this->input->post('kelas'),
                'jwb1' => $this->input->post('jwb1'),
                'jwb2' => $this->input->post('jwb2'),
                'jwb3' => $this->input->post('jwb3'),
                'jwb4' => $this->input->post('jwb4'),
                'jwb5' => $this->input->post('jwb5'),
                'jwb6' => $this->input->post('jwb6'),
                'jwb7' => $this->input->post('jwb7'),
                'jwb8' => $this->input->post('jwb8'),
                'jwb9' => $this->input->post('jwb9'),
                'jwb10' => $this->input->post('jwb10'),
                'jwb11' => $this->input->post('jwb11'),
                'jwb12' => $this->input->post('jwb12'),
                'indeks_kml' => $indeks_kml,
                'saran' => $this->input->post('saran'),
            ];
            $this->db->insert('submit_mhs', $data);

            $this->session->set_flashdata('message_kuesionermhs', '<div class="alert alert-success" role="alert">Penilaian Anda telah berhasil di Submit.</div>');
            redirect('user/kuesioner_mhs');
        }
    }

    public function kuesioner_dsn()
    {
        $data['title'] = 'Kuesioner Dosen';
        $this->load->model('Pertanyaan_model');
        //$data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('dosen', ['id_dsn' => $this->session->userdata('nip')])->row_array();

        $submit = $this->db->get_where('submit_dsn', ['id_dsn' => $this->session->userdata('nip')])->row_array();

        if ($submit != NULL) {
            $data['matkul'] = $this->db->distinct()->select('jadwal.kode_mk, jadwal.kelas')->from('jadwal')
                ->where('jadwal.id_dsn=' . $this->session->userdata('nip') . '')
                ->where("NOT EXISTS 
                (SELECT submit_dsn.kode_mk, submit_dsn.kelas from submit_dsn 
                WHERE submit_dsn.kelas = jadwal.kelas AND submit_dsn.kode_mk = jadwal.kode_mk AND jadwal.id_dsn=" . $this->session->userdata('nip') . ")")
                ->get()->result();
        } else {
            $data['matkul'] = $this->db->select('matkul.nama_mk, matkul.kode_mk, jadwal.kelas')->from('matkul')
                ->join('jadwal', 'jadwal.kode_mk = matkul.kode_mk', 'left')
                ->where('jadwal.id_dsn=' . $this->session->userdata('nip') . '')
                ->group_by('matkul.kode_mk, jadwal.kelas')
                ->order_by('matkul.kode_mk, jadwal.kelas')
                ->get()->result();
        }

        $data['pertanyaan'] = $this->db->select('*')
            ->from('pertanyaan')->where('level', 'dosen')
            ->get()->result_array();

        $this->form_validation->set_rules('id_dsn', 'NIP', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('user/kuesioner_dsn', $data);
        } else {
            $jml_dsn = $this->input->post('jwb13') + $this->input->post('jwb14') + $this->input->post('jwb15') + $this->input->post('jwb16') + $this->input->post('jwb17') + $this->input->post('jwb18') +
                $this->input->post('jwb19') + $this->input->post('jwb20') + $this->input->post('jwb21') + $this->input->post('jwb22') + $this->input->post('jwb23') + $this->input->post('jwb24');
            $indeks_kml_dsn = $jml_dsn / 12;
            $data = [
                'id_dsn' => $this->input->post('id_dsn'),
                'kode_mk' => $this->input->post('kode_mk'),
                'kelas' => $this->input->post('kelas'),
                'jwb13' => $this->input->post('jwb13'),
                'jwb14' => $this->input->post('jwb14'),
                'jwb15' => $this->input->post('jwb15'),
                'jwb16' => $this->input->post('jwb16'),
                'jwb17' => $this->input->post('jwb17'),
                'jwb18' => $this->input->post('jwb18'),
                'jwb19' => $this->input->post('jwb19'),
                'jwb20' => $this->input->post('jwb20'),
                'jwb21' => $this->input->post('jwb21'),
                'jwb22' => $this->input->post('jwb22'),
                'jwb23' => $this->input->post('jwb23'),
                'jwb24' => $this->input->post('jwb24'),
                'indeks_kml' => $indeks_kml_dsn,
                'saran' => $this->input->post('saran'),
            ];
            $this->db->insert('submit_dsn', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penilaian Anda telah berhasil di Submit.</div>');
            redirect('user/kuesioner_dsn');
        }
    }

    public function kuelp2m_dsn()
    {
        $this->load->model('Pertanyaanlp2m_model');

        $data['user'] = $this->db->get_where('dosen', ['id_dsn' => $this->session->userdata('nip')])->row_array();

        $submit = $this->db->get_where('submit_lp2m', ['id_dsn' => $this->session->userdata('nip')])->row_array();

        $data['pertanyaan_lp2m'] = $this->db->select('*')
            ->from('pertanyaan_lp2m')->where('level', 'dosen')
            ->get()->result_array();

        $this->form_validation->set_rules('id_dsn', 'NIP', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('user/kuelp2m_dsn', $data);
        } else {
            $jml_lp2m = $this->input->post('jwb1') + $this->input->post('jwb2') + $this->input->post('jwb3') + $this->input->post('jwb4') + $this->input->post('jwb5') + $this->input->post('jwb6') +
                $this->input->post('jwb7') + $this->input->post('jwb8') + $this->input->post('jwb9') + $this->input->post('jwb10') + $this->input->post('jwb11') + $this->input->post('jwb12') + $this->input->post('jwb13') + $this->input->post('jwb14') + $this->input->post('jwb15');
            $indeks_kml_lp2m = $jml_lp2m / 15;
            $data = [
                'id_dsn' => $this->input->post('id_dsn'),
                'jwb1' => $this->input->post('jwb1'),
                'jwb2' => $this->input->post('jwb2'),
                'jwb3' => $this->input->post('jwb3'),
                'jwb4' => $this->input->post('jwb4'),
                'jwb5' => $this->input->post('jwb5'),
                'jwb6' => $this->input->post('jwb6'),
                'jwb7' => $this->input->post('jwb7'),
                'jwb8' => $this->input->post('jwb8'),
                'jwb9' => $this->input->post('jwb9'),
                'jwb10' => $this->input->post('jwb10'),
                'jwb11' => $this->input->post('jwb11'),
                'jwb12' => $this->input->post('jwb12'),
                'jwb13' => $this->input->post('jwb13'),
                'jwb14' => $this->input->post('jwb14'),
                'jwb15' => $this->input->post('jwb15'),
                'indeks_kml' => $indeks_kml_lp2m,
                'saran' => $this->input->post('saran'),
            ];
            $this->db->insert('submit_lp2m', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penilaian Anda telah berhasil di Submit.</div>');

            redirect('user/kuelp2m_dsn');
        }
    }
    public function kuefkl_dsn()
    {
        $this->load->model('Pertanyaanfkl_model');

        $data['user'] = $this->db->get_where('dosen', ['id_dsn' => $this->session->userdata('nip')])->row_array();

        $submit = $this->db->get_where('submit_fkl', ['id_dsn' => $this->session->userdata('nip')])->row_array();

        $data['pertanyaan_fkl'] = $this->db->select('*')
            ->from('pertanyaan_fkl')->where('level', 'dosen')
            ->get()->result_array();

        $this->form_validation->set_rules('id_dsn', 'NIP', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('user/kuefkl_dsn', $data);
        } else {
            $jml_fkl = $this->input->post('jwb1') + $this->input->post('jwb2') + $this->input->post('jwb3') + $this->input->post('jwb4') + $this->input->post('jwb5') + $this->input->post('jwb6') +
                $this->input->post('jwb7') + $this->input->post('jwb8') + $this->input->post('jwb9') + $this->input->post('jwb10') + $this->input->post('jwb11') + $this->input->post('jwb12') +
                $this->input->post('jwb13') + $this->input->post('jwb14') + $this->input->post('jwb15') + $this->input->post('jwb16') + $this->input->post('jwb17') + $this->input->post('jwb18')
                + $this->input->post('jwb19') + $this->input->post('jwb20') + $this->input->post('jwb21') + $this->input->post('jwb22') + $this->input->post('jwb23') + $this->input->post('jwb24')
                + $this->input->post('jwb25') + $this->input->post('jwb26') + $this->input->post('jwb27') + $this->input->post('jwb28') + $this->input->post('jwb29') + $this->input->post('jwb30');
            $indeks_kml_fkl = $jml_fkl / 30;
            $data = [
                'id_dsn' => $this->input->post('id_dsn'),
                'jwb1' => $this->input->post('jwb1'),
                'jwb2' => $this->input->post('jwb2'),
                'jwb3' => $this->input->post('jwb3'),
                'jwb4' => $this->input->post('jwb4'),
                'jwb5' => $this->input->post('jwb5'),
                'jwb6' => $this->input->post('jwb6'),
                'jwb7' => $this->input->post('jwb7'),
                'jwb8' => $this->input->post('jwb8'),
                'jwb9' => $this->input->post('jwb9'),
                'jwb10' => $this->input->post('jwb10'),
                'jwb11' => $this->input->post('jwb11'),
                'jwb12' => $this->input->post('jwb12'),
                'jwb13' => $this->input->post('jwb13'),
                'jwb14' => $this->input->post('jwb14'),
                'jwb15' => $this->input->post('jwb15'),
                'jwb16' => $this->input->post('jwb16'),
                'jwb17' => $this->input->post('jwb17'),
                'jwb18' => $this->input->post('jwb18'),
                'jwb19' => $this->input->post('jwb19'),
                'jwb20' => $this->input->post('jwb20'),
                'jwb21' => $this->input->post('jwb21'),
                'jwb22' => $this->input->post('jwb22'),
                'jwb23' => $this->input->post('jwb23'),
                'jwb24' => $this->input->post('jwb24'),
                'jwb25' => $this->input->post('jwb25'),
                'jwb26' => $this->input->post('jwb26'),
                'jwb27' => $this->input->post('jwb27'),
                'jwb28' => $this->input->post('jwb28'),
                'jwb29' => $this->input->post('jwb29'),
                'jwb30' => $this->input->post('jwb30'),
                'indeks_kml' => $indeks_kml_fkl,
                'saran' => $this->input->post('saran'),
            ];
            $this->db->insert('submit_fkl', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penilaian Anda telah berhasil di Submit.</div>');
            redirect('user/kuefkl_dsn');
        }
    }
    public function kuesioner_kry()
    {
        $this->load->model('Pertanyaankry_model');

        $data['user'] = $this->db->get_where('dosen', ['idpegawai' => $this->session->userdata('nik')])->row_array();

        $submit = $this->db->get_where('submit_kry', ['idpegawai' => $this->session->userdata('nik')])->row_array();

        $data['pertanyaan_kry'] = $this->db->select('*')
            ->from('pertanyaan_kry')->where('level', 'karyawan')
            ->get()->result_array();

        $this->form_validation->set_rules('id_pegawai', 'NIK', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('user/kuesioner_kry', $data);
        } else {
            $jml_kry = $this->input->post('jwb1') + $this->input->post('jwb2') + $this->input->post('jwb3') + $this->input->post('jwb4') + $this->input->post('jwb5') + $this->input->post('jwb6') +
                $this->input->post('jwb7') + $this->input->post('jwb8') + $this->input->post('jwb9') + $this->input->post('jwb10') + $this->input->post('jwb11') + $this->input->post('jwb12') + $this->input->post('jwb13');
            $indeks_kml_kry = $jml_kry / 13;
            $data = [
                'idpegawai' => $this->input->post('idpegawai'),
                'jwb1' => $this->input->post('jwb1'),
                'jwb2' => $this->input->post('jwb2'),
                'jwb3' => $this->input->post('jwb3'),
                'jwb4' => $this->input->post('jwb4'),
                'jwb5' => $this->input->post('jwb5'),
                'jwb6' => $this->input->post('jwb6'),
                'jwb7' => $this->input->post('jwb7'),
                'jwb8' => $this->input->post('jwb8'),
                'jwb9' => $this->input->post('jwb9'),
                'jwb10' => $this->input->post('jwb10'),
                'jwb11' => $this->input->post('jwb11'),
                'jwb12' => $this->input->post('jwb12'),
                'jwb13' => $this->input->post('jwb13'),
                'indeks_kml' => $indeks_kml_kry,
                'saran' => $this->input->post('saran'),
            ];
            $this->db->insert('submit_kry', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penilaian Anda telah berhasil di Submit.</div>');
            redirect('user/kuesioner_kry');
        }
    }

    public function kuebku_dsn()
    {
        $data['pertanyaan_sarpras'] = $this->db->select('*')
            ->from('pertanyaan_sarpras')->where('level', 'dosen')
            ->get()->result_array();
        $this->form_validation->set_rules('id_dsn', 'NIP', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('user/kuebku_dsn', $data);
        } else {
            // var_dump($this->input->post());
            // die();
            $jml_dsn = $this->input->post('jwb_1') + $this->input->post('jwb_2') + $this->input->post('jwb_3') + $this->input->post('jwb_4') + $this->input->post('jwb_5') + $this->input->post('jwb_6') +
                $this->input->post('jwb_7') + $this->input->post('jwb_8') + $this->input->post('jwb_9') + $this->input->post('jwb_10') + $this->input->post('jwb_11') + $this->input->post('jwb_12')
                + $this->input->post('jwb_13')
                + $this->input->post('jwb_14')
                + $this->input->post('jwb_15')
                + $this->input->post('jwb_16')
                + $this->input->post('jwb_17')
                + $this->input->post('jwb_18')
                + $this->input->post('jwb_19')
                + $this->input->post('jwb_20')
                + $this->input->post('jwb_21')
                + $this->input->post('jwb_22')
                + $this->input->post('jwb_23')
                + $this->input->post('jwb_24')
                + $this->input->post('jwb_25')
                + $this->input->post('jwb_26')
                + $this->input->post('jwb_27')
                + $this->input->post('jwb_28')
                + $this->input->post('jwb_29')
                + $this->input->post('jwb_30')
                + $this->input->post('jwb_31')
                + $this->input->post('jwb_32')
                + $this->input->post('jwb_33')
                + $this->input->post('jwb_34')
                + $this->input->post('jwb_35')
                + $this->input->post('jwb_36')
                + $this->input->post('jwb_37')
                + $this->input->post('jwb_38')
                + $this->input->post('jwb_39')
                + $this->input->post('jwb_40')
                + $this->input->post('jwb_41')
                + $this->input->post('jwb_42')
                + $this->input->post('jwb_43');
            $indeks_kml = $jml_dsn / 43;
            $data = [
                'nip' => $this->input->post('id_dsn'),
                'jwb_1' => $this->input->post('jwb_1'),
                'jwb_2' => $this->input->post('jwb_2'),
                'jwb_3' => $this->input->post('jwb_3'),
                'jwb_4' => $this->input->post('jwb_4'),
                'jwb_5' => $this->input->post('jwb_5'),
                'jwb_6' => $this->input->post('jwb_6'),
                'jwb_7' => $this->input->post('jwb_7'),
                'jwb_8' => $this->input->post('jwb_8'),
                'jwb_9' => $this->input->post('jwb_9'),
                'jwb_10' => $this->input->post('jwb_10'),
                'jwb_11' => $this->input->post('jwb_11'),
                'jwb_12' => $this->input->post('jwb_12'),
                'jwb_13' => $this->input->post('jwb_13'),
                'jwb_14' => $this->input->post('jwb_14'),
                'jwb_15' => $this->input->post('jwb_15'),
                'jwb_16' => $this->input->post('jwb_16'),
                'jwb_17' => $this->input->post('jwb_17'),
                'jwb_18' => $this->input->post('jwb_18'),
                'jwb_19' => $this->input->post('jwb_19'),
                'jwb_20' => $this->input->post('jwb_20'),
                'jwb_21' => $this->input->post('jwb_21'),
                'jwb_22' => $this->input->post('jwb_22'),
                'jwb_23' => $this->input->post('jwb_23'),
                'jwb_24' => $this->input->post('jwb_24'),
                'jwb_25' => $this->input->post('jwb_25'),
                'jwb_26' => $this->input->post('jwb_26'),
                'jwb_27' => $this->input->post('jwb_27'),
                'jwb_28' => $this->input->post('jwb_28'),
                'jwb_29' => $this->input->post('jwb_29'),
                'jwb_30' => $this->input->post('jwb_30'),
                'jwb_31' => $this->input->post('jwb_31'),
                'jwb_32' => $this->input->post('jwb_32'),
                'jwb_33' => $this->input->post('jwb_33'),
                'jwb_34' => $this->input->post('jwb_34'),
                'jwb_35' => $this->input->post('jwb_35'),
                'jwb_36' => $this->input->post('jwb_36'),
                'jwb_37' => $this->input->post('jwb_37'),
                'jwb_38' => $this->input->post('jwb_38'),
                'jwb_39' => $this->input->post('jwb_39'),
                'jwb_40' => $this->input->post('jwb_40'),
                'jwb_41' => $this->input->post('jwb_41'),
                'jwb_42' => $this->input->post('jwb_42'),
                'jwb_43' => $this->input->post('jwb_43'),
                'indeks_kml' => $indeks_kml,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ];
            $this->db->insert('sarpras_dosen', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penilaian Anda telah berhasil di Submit.</div>');
            redirect('user/kuebku_dsn');
        }
    }

    public function kuebku_mhs()
    {
        $data['pertanyaan_sarpras'] = $this->db->select('*')
            ->from('pertanyaan_sarpras')->where('level', 'mahasiswa')
            ->get()->result_array();
        $this->form_validation->set_rules('nrpmhs', 'NIP', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('user/kuebku_mhs', $data);
        } else {
            // var_dump($this->input->post());
            // die();
            $jml_dsn = $this->input->post('jwb_1') + $this->input->post('jwb_2') + $this->input->post('jwb_3') + $this->input->post('jwb_4') + $this->input->post('jwb_5') + $this->input->post('jwb_6') +
                $this->input->post('jwb_7') + $this->input->post('jwb_8') + $this->input->post('jwb_9') + $this->input->post('jwb_10') + $this->input->post('jwb_11') + $this->input->post('jwb_12')
                + $this->input->post('jwb_13')
                + $this->input->post('jwb_14')
                + $this->input->post('jwb_15')
                + $this->input->post('jwb_16')
                + $this->input->post('jwb_17')
                + $this->input->post('jwb_18')
                + $this->input->post('jwb_19')
                + $this->input->post('jwb_20')
                + $this->input->post('jwb_21')
                + $this->input->post('jwb_22')
                + $this->input->post('jwb_23')
                + $this->input->post('jwb_24')
                + $this->input->post('jwb_25')
                + $this->input->post('jwb_26')
                + $this->input->post('jwb_27')
                + $this->input->post('jwb_28')
                + $this->input->post('jwb_29')
                + $this->input->post('jwb_30')
                + $this->input->post('jwb_31')
                + $this->input->post('jwb_32')
                + $this->input->post('jwb_33')
                + $this->input->post('jwb_34')
                + $this->input->post('jwb_35')
                + $this->input->post('jwb_36')
                + $this->input->post('jwb_37')
                + $this->input->post('jwb_38')
                + $this->input->post('jwb_39')
                + $this->input->post('jwb_40')
                + $this->input->post('jwb_41')
                + $this->input->post('jwb_42');
            $indeks_kml = $jml_dsn / 42;
            $data = [
                'nrp' => $this->input->post('nrpmhs'),
                'jwb_1' => $this->input->post('jwb_1'),
                'jwb_2' => $this->input->post('jwb_2'),
                'jwb_3' => $this->input->post('jwb_3'),
                'jwb_4' => $this->input->post('jwb_4'),
                'jwb_5' => $this->input->post('jwb_5'),
                'jwb_6' => $this->input->post('jwb_6'),
                'jwb_7' => $this->input->post('jwb_7'),
                'jwb_8' => $this->input->post('jwb_8'),
                'jwb_9' => $this->input->post('jwb_9'),
                'jwb_10' => $this->input->post('jwb_10'),
                'jwb_11' => $this->input->post('jwb_11'),
                'jwb_12' => $this->input->post('jwb_12'),
                'jwb_13' => $this->input->post('jwb_13'),
                'jwb_14' => $this->input->post('jwb_14'),
                'jwb_15' => $this->input->post('jwb_15'),
                'jwb_16' => $this->input->post('jwb_16'),
                'jwb_17' => $this->input->post('jwb_17'),
                'jwb_18' => $this->input->post('jwb_18'),
                'jwb_19' => $this->input->post('jwb_19'),
                'jwb_20' => $this->input->post('jwb_20'),
                'jwb_21' => $this->input->post('jwb_21'),
                'jwb_22' => $this->input->post('jwb_22'),
                'jwb_23' => $this->input->post('jwb_23'),
                'jwb_24' => $this->input->post('jwb_24'),
                'jwb_25' => $this->input->post('jwb_25'),
                'jwb_26' => $this->input->post('jwb_26'),
                'jwb_27' => $this->input->post('jwb_27'),
                'jwb_28' => $this->input->post('jwb_28'),
                'jwb_29' => $this->input->post('jwb_29'),
                'jwb_30' => $this->input->post('jwb_30'),
                'jwb_31' => $this->input->post('jwb_31'),
                'jwb_32' => $this->input->post('jwb_32'),
                'jwb_33' => $this->input->post('jwb_33'),
                'jwb_34' => $this->input->post('jwb_34'),
                'jwb_35' => $this->input->post('jwb_35'),
                'jwb_36' => $this->input->post('jwb_36'),
                'jwb_37' => $this->input->post('jwb_37'),
                'jwb_38' => $this->input->post('jwb_38'),
                'jwb_39' => $this->input->post('jwb_39'),
                'jwb_40' => $this->input->post('jwb_40'),
                'jwb_41' => $this->input->post('jwb_41'),
                'jwb_42' => $this->input->post('jwb_42'),
                'indeks_kml' => $indeks_kml,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ];
            $this->db->insert('sarpras_mahasiswa', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penilaian Anda telah berhasil di Submit.</div>');
            redirect('user/kuebku_dsn');
        }
    }

    public function getNamaMatkul()
    {
        $idmatkul = $this->input->post('idmatkul');
        $matakuliah = $this->db->select('*')->from('matkul')
            ->join('jadwal', 'jadwal.kode_mk=matkul.kode_mk')
            ->join('datamhs', 'datamhs.nrpmhs = jadwal.nrpmhs')
            ->where('jadwal.kode_mk', $idmatkul)->where('jadwal.nrpmhs', $this->session->userdata('nrp'))->get()->first_row();
        echo json_encode($matakuliah);
    }

    public function getNamaMatkul_dsn()
    {
        $idmatkul = $this->input->post('idmatkul');
        $string = explode('-', $idmatkul);
        $kode_mk = $string[0];
        $kelas_mk = $string[1];
        $matakuliah = $this->db->select('*')->from('matkul')
            ->join('jadwal', 'jadwal.kode_mk=matkul.kode_mk')
            ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn')
            ->where('jadwal.kode_mk', $kode_mk)->where('jadwal.kelas', $kelas_mk)->where('jadwal.id_dsn', $this->session->userdata('nip'))->get()->first_row();
        echo json_encode($matakuliah);
    }

    public function logout_mhs()
    {
        $this->session->unset_userdata('nrpmhs');
        $this->session->set_flashdata('message_logoutmhs', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
        redirect('auth/index_mhs');
    }

    public function logout_dsn()
    {
        $this->session->unset_userdata('id_dsn');
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="max-width:326px" role="alert">Berhasil Logout!</div>');
        redirect('auth/index_dsn');
    }
}
