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
    // public function index()
    // {
    //     $data['title'] = 'Profil Mahasiswa';
    //     $data['user'] = $this->db->get_where('datamhs', ['nrpmhs' => $this->session->userdata('nrp')])->row_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/mahasiswa/sidebar_mhs', $data);
    //     $this->load->view('templates/mahasiswa/topbar_mhs', $data);
    //     $this->load->view('user/index', $data);
    //     //$this->load->view('templates/footer');
    // }

    public function editprofil_mhs()
    {
        // $data['title'] = 'Profil Mahasiswa';
        $data['user'] = $this->db->get_where('datamhs', ['nrpmhs' => $this->session->userdata('nrp')])->row_array();
        //$data['user'] = $this->db->get_where('datamhs', ['pinmhs' => $this->session->userdata('pin')])->row_array();
        // var_dump($data['user']);
        // die;

        $this->form_validation->set_rules('noktpmhs', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nohpmhs', 'No.Handphone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Profil Mahasiswa';
            // $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar', $data);
            // $this->load->view('templates/topbar', $data);
            // $this->load->view('user/edit', $data);
            $this->load->view('user/editprofil_mhs', $data);
            // $this->load->view('templates/footer');
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

            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin: 15px 15px" role="alert">Profil Anda berhasil di Update</div>');
            redirect('user/editprofil_mhs');
        }
    }

    public function kuesioner_mhs()
    {
        $data['title'] = 'Kuesioner Mahasiswa';
        $this->load->model('Pertanyaan_model');
        //$data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('datamhs', ['nrpmhs' => $this->session->userdata('nrp')])->row_array();
        $submit = $this->db->get_where('submit_mhs', ['nrpmhs' => $this->session->userdata('nrp')])->row_array();
        if ($submit != NULL) {
            $data['matkul'] = $this->db->distinct()->select('jadwal.*, matkul.*, dosen.*')->from('datamhs')
                ->join('jadwal', 'jadwal.nrpmhs = datamhs.nrpmhs', 'inner')
                ->join('matkul', 'matkul.kode_mk = jadwal.kode_mk', 'left')
                ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn', 'left')
                ->join('submit_mhs', 'submit_mhs.nrpmhs = datamhs.nrpmhs')
                ->where('datamhs.nrpmhs=' . $this->session->userdata('nrp') . '')
                ->where("dosen.nama_dsn != 'DOSEN BARU/DOSEN BELUM ADA'")
                ->where("jadwal.kode_mk NOT IN (SELECT submit_mhs.kode_mk FROM submit_mhs WHERE submit_mhs.nrpmhs = " . $this->session->userdata('nrp') . ")")
                ->get()->result();
        } else {
            $data['matkul'] = $this->db->distinct()->select('jadwal.*, matkul.*, dosen.*')->from('datamhs')
                ->join('jadwal', 'jadwal.nrpmhs = datamhs.nrpmhs', 'inner')
                ->join('matkul', 'matkul.kode_mk = jadwal.kode_mk', 'left')
                ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn', 'left')
                ->join('submit_mhs', 'submit_mhs.nrpmhs = datamhs.nrpmhs', 'left')
                ->where('datamhs.nrpmhs=' . $this->session->userdata('nrp') . '')
                ->where("dosen.nama_dsn != 'DOSEN BARU/DOSEN BELUM ADA'")
                ->get()->result();
        }
        //$data['pertanyaan'] = $this->pertanyaan_model->getPertanyaan();

        // $data['isi'] = $this->db->select('submit_mhs.*')->from('datamhs')
        //     ->join('submit_mhs', 'submit_mhs.nrpmhs = datamhs.nrpmhs', 'left')
        //     ->where('submit_mhs.nrpmhs = ' . $this->session->userdata('nrp') . '')
        //     ->get()->result();
        // var_dump($data['matkul']);
        // die();
        $data['pertanyaan'] = $this->db->select('*')
            ->from('pertanyaan')->where('level', 'mahasiswa')
            ->get()->result_array();
        //$data['user'] = $this->db->get_where('datamhs', ['pinmhs' => $this->session->userdata('pin')])->row_array();
        // var_dump($data['matkul']);
        // die;
        $this->form_validation->set_rules('nrpmhs', 'NRP', 'required|trim');
        if ($this->form_validation->run() == false) {
            // $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar', $data);
            // $this->load->view('templates/topbar', $data);
            $this->load->view('user/kuesioner_mhs', $data);
            // $this->load->view('templates/footer');
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

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penilaian Anda telah berhasil di Submit.</div>');
            redirect('user/kuesioner_mhs');
        }
    }

    public function kuesioner_dsn()
    {
        $data['title'] = 'Kuesioner Dosen';
        $this->load->model('Pertanyaan_model');
        //$data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('dosen', ['id_dsn' => $this->session->userdata('nip')])->row_array();
        //$data['pertanyaan'] = $this->pertanyaan_model->getPertanyaan();
        // $data['matkul'] = $this->db->select('distinct jadwal.kode_mk, jadwal.kelas', false)->from('dosen')
        //     ->join('jadwal', 'jadwal.id_dsn = dosen.id_dsn', 'inner')
        //     ->join('matkul', 'matkul.kode_mk = jadwal.kode_mk', 'left')
        //     // ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn', 'left')
        //     ->where('dosen.id_dsn=' . $this->session->userdata('nip') . '')
        //     ->get()->result();
        $submit = $this->db->get_where('submit_dsn', ['id_dsn' => $this->session->userdata('nip')])->row_array();
        if ($submit != NULL) {
            $data['matkul'] = $this->db->distinct()->select('jadwal.kode_mk, jadwal.kelas')->from('jadwal')
                ->where('jadwal.id_dsn=' . $this->session->userdata('nip') . '')
                // ->where("dosen.nama_dsn != 'DOSEN BARU/DOSEN BELUM ADA'")
                // ->where("jadwal.kode_mk NOT IN (SELECT submit_dsn.kode_mk FROM submit_dsn WHERE submit_dsn.id_dsn = " . $this->session->userdata('nip') . ")")
                // ->where("jadwal.kelas NOT IN (SELECT submit_dsn.kelas FROM submit_dsn WHERE submit_dsn.id_dsn = " . $this->session->userdata('nip') . ")")
                ->where("NOT EXISTS 
                (SELECT submit_dsn.kode_mk, submit_dsn.kelas from submit_dsn 
                WHERE submit_dsn.kelas = jadwal.kelas AND submit_dsn.kode_mk = jadwal.kode_mk AND jadwal.id_dsn=" . $this->session->userdata('nip') . ")")
                ->get()->result();
            // var_dump($this->db->last_query($data['matkul']));
            // die;
        } else {
            $data['matkul'] = $this->db->distinct()->select('jadwal.kode_mk, jadwal.kelas')->from('dosen')
                ->join('jadwal', 'jadwal.id_dsn = dosen.id_dsn', 'inner')
                ->join('matkul', 'matkul.kode_mk = jadwal.kode_mk', 'left')
                // ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn', 'left')
                ->join('submit_dsn', 'submit_dsn.id_dsn = dosen.id_dsn', 'left')
                ->where('dosen.id_dsn=' . $this->session->userdata('nip') . '')
                // ->where("dosen.nama_dsn != 'DOSEN BARU/DOSEN BELUM ADA'")
                ->get()->result();
        }
        // var_dump($data['matkul']);
        // die;
        $data['pertanyaan'] = $this->db->select('*')
            ->from('pertanyaan')->where('level', 'dosen')
            ->get()->result_array();
        //$data['user'] = $this->db->get_where('datamhs', ['pinmhs' => $this->session->userdata('pin')])->row_array();


        $this->form_validation->set_rules('id_dsn', 'NIP', 'required|trim');
        if ($this->form_validation->run() == false) {
            // $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar_dsn', $data);
            // $this->load->view('templates/topbar_dsn', $data);
            $this->load->view('user/kuesioner_dsn', $data);
            // $this->load->view('templates/footer');
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

    public function kuelp2m_kry()
    {
        $data['title'] = 'Kuesioner Dosen';
        $this->load->model('Pertanyaanlp2m_model');
        //$data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('dosen', ['id_dsn' => $this->session->userdata('nip')])->row_array();
        //$data['pertanyaan'] = $this->pertanyaan_model->getPertanyaan();
        // $data['matkul'] = $this->db->select('distinct jadwal.kode_mk, jadwal.kelas', false)->from('dosen')
        //     ->join('jadwal', 'jadwal.id_dsn = dosen.id_dsn', 'inner')
        //     ->join('matkul', 'matkul.kode_mk = jadwal.kode_mk', 'left')
        //     // ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn', 'left')
        //     ->where('dosen.id_dsn=' . $this->session->userdata('nip') . '')
        //     ->get()->result();
        $submit = $this->db->get_where('submit_lp2m', ['id_dsn' => $this->session->userdata('nip')])->row_array();
        // if ($submit != NULL) {
        // $data['matkul'] = $this->db->distinct()->select('jadwal.kode_mk, jadwal.kelas')->from('jadwal')
        //     ->where('jadwal.id_dsn=' . $this->session->userdata('nip') . '')
        //     // ->where("dosen.nama_dsn != 'DOSEN BARU/DOSEN BELUM ADA'")
        //     // ->where("jadwal.kode_mk NOT IN (SELECT submit_dsn.kode_mk FROM submit_dsn WHERE submit_dsn.id_dsn = " . $this->session->userdata('nip') . ")")
        //     // ->where("jadwal.kelas NOT IN (SELECT submit_dsn.kelas FROM submit_dsn WHERE submit_dsn.id_dsn = " . $this->session->userdata('nip') . ")")
        //     ->where("NOT EXISTS 
        //     (SELECT submit_dsn.kode_mk, submit_dsn.kelas from submit_dsn 
        //     WHERE submit_dsn.kelas = jadwal.kelas AND submit_dsn.kode_mk = jadwal.kode_mk AND jadwal.id_dsn=" . $this->session->userdata('nip') . ")")
        //     ->get()->result();
        // var_dump($this->db->last_query($data['matkul']));
        // die;
        // } else {
        //     $data['matkul'] = $this->db->distinct()->select('jadwal.kode_mk, jadwal.kelas')->from('dosen')
        //         ->join('jadwal', 'jadwal.id_dsn = dosen.id_dsn', 'inner')
        //         ->join('matkul', 'matkul.kode_mk = jadwal.kode_mk', 'left')
        //         // ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn', 'left')
        //         ->join('submit_dsn', 'submit_dsn.id_dsn = dosen.id_dsn', 'left')
        //         ->where('dosen.id_dsn=' . $this->session->userdata('nip') . '')
        //         // ->where("dosen.nama_dsn != 'DOSEN BARU/DOSEN BELUM ADA'")
        //         ->get()->result();
        // }
        // var_dump($data['matkul']);
        // die;
        $data['pertanyaan_lp2m'] = $this->db->select('*')
            ->from('pertanyaan_lp2m')->where('level', 'dosen')
            ->get()->result_array();
        //$data['user'] = $this->db->get_where('datamhs', ['pinmhs' => $this->session->userdata('pin')])->row_array();


        $this->form_validation->set_rules('id_dsn', 'NIP', 'required|trim');
        if ($this->form_validation->run() == false) {
            // $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar_dsn', $data);
            // $this->load->view('templates/topbar_dsn', $data);
            $this->load->view('user/kuelp2m_kry', $data);
            // $this->load->view('templates/footer');
        } else {
            $jml_lp2m = $this->input->post('jwb1') + $this->input->post('jwb2') + $this->input->post('jwb3') + $this->input->post('jwb4') + $this->input->post('jwb5') + $this->input->post('jwb6') +
                $this->input->post('jwb7') + $this->input->post('jwb8') + $this->input->post('jwb9') + $this->input->post('jwb10') + $this->input->post('jwb11') + $this->input->post('jwb12') + $this->input->post('jwb13') + $this->input->post('jwb14') + $this->input->post('jwb15');
            $indeks_kml_lp2m = $jml_lp2m / 15;
            $data = [
                'id_dsn' => $this->input->post('id_dsn'),
                // 'kode_mk' => $this->input->post('kode_mk'),
                // 'kelas' => $this->input->post('kelas'),
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
            redirect('user/kuelp2m_kry');
        }
    }
    public function kuefkl_kry()
    {
        $data['title'] = 'Kuesioner Dosen';
        $this->load->model('Pertanyaanfkl_model');
        //$data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('dosen', ['id_dsn' => $this->session->userdata('nip')])->row_array();
        //$data['pertanyaan'] = $this->pertanyaan_model->getPertanyaan();
        // $data['matkul'] = $this->db->select('distinct jadwal.kode_mk, jadwal.kelas', false)->from('dosen')
        //     ->join('jadwal', 'jadwal.id_dsn = dosen.id_dsn', 'inner')
        //     ->join('matkul', 'matkul.kode_mk = jadwal.kode_mk', 'left')
        //     // ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn', 'left')
        //     ->where('dosen.id_dsn=' . $this->session->userdata('nip') . '')
        //     ->get()->result();
        $submit = $this->db->get_where('submit_lp2m', ['id_dsn' => $this->session->userdata('nip')])->row_array();
        // if ($submit != NULL) {
        // $data['matkul'] = $this->db->distinct()->select('jadwal.kode_mk, jadwal.kelas')->from('jadwal')
        //     ->where('jadwal.id_dsn=' . $this->session->userdata('nip') . '')
        //     // ->where("dosen.nama_dsn != 'DOSEN BARU/DOSEN BELUM ADA'")
        //     // ->where("jadwal.kode_mk NOT IN (SELECT submit_dsn.kode_mk FROM submit_dsn WHERE submit_dsn.id_dsn = " . $this->session->userdata('nip') . ")")
        //     // ->where("jadwal.kelas NOT IN (SELECT submit_dsn.kelas FROM submit_dsn WHERE submit_dsn.id_dsn = " . $this->session->userdata('nip') . ")")
        //     ->where("NOT EXISTS 
        //     (SELECT submit_dsn.kode_mk, submit_dsn.kelas from submit_dsn 
        //     WHERE submit_dsn.kelas = jadwal.kelas AND submit_dsn.kode_mk = jadwal.kode_mk AND jadwal.id_dsn=" . $this->session->userdata('nip') . ")")
        //     ->get()->result();
        // var_dump($this->db->last_query($data['matkul']));
        // die;
        // } else {
        //     $data['matkul'] = $this->db->distinct()->select('jadwal.kode_mk, jadwal.kelas')->from('dosen')
        //         ->join('jadwal', 'jadwal.id_dsn = dosen.id_dsn', 'inner')
        //         ->join('matkul', 'matkul.kode_mk = jadwal.kode_mk', 'left')
        //         // ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn', 'left')
        //         ->join('submit_dsn', 'submit_dsn.id_dsn = dosen.id_dsn', 'left')
        //         ->where('dosen.id_dsn=' . $this->session->userdata('nip') . '')
        //         // ->where("dosen.nama_dsn != 'DOSEN BARU/DOSEN BELUM ADA'")
        //         ->get()->result();
        // }
        // var_dump($data['matkul']);
        // die;
        $data['pertanyaan_fkl'] = $this->db->select('*')
            ->from('pertanyaan_fkl')->where('level', 'dosen')
            ->get()->result_array();
        //$data['user'] = $this->db->get_where('datamhs', ['pinmhs' => $this->session->userdata('pin')])->row_array();


        $this->form_validation->set_rules('id_dsn', 'NIP', 'required|trim');
        if ($this->form_validation->run() == false) {
            // $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar_dsn', $data);
            // $this->load->view('templates/topbar_dsn', $data);
            $this->load->view('user/kuefkl_kry', $data);
            // $this->load->view('templates/footer');
        } else {
            $jml_lp2m = $this->input->post('jwb1') + $this->input->post('jwb2') + $this->input->post('jwb3') + $this->input->post('jwb4') + $this->input->post('jwb5') + $this->input->post('jwb6') +
                $this->input->post('jwb7') + $this->input->post('jwb8') + $this->input->post('jwb9') + $this->input->post('jwb10') + $this->input->post('jwb11') + $this->input->post('jwb12') + $this->input->post('jwb13') + $this->input->post('jwb14') + $this->input->post('jwb15');
            $indeks_kml_lp2m = $jml_lp2m / 15;
            $data = [
                'id_dsn' => $this->input->post('id_dsn'),
                // 'kode_mk' => $this->input->post('kode_mk'),
                // 'kelas' => $this->input->post('kelas'),
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
            $this->db->insert('submit_fkl', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penilaian Anda telah berhasil di Submit.</div>');
            redirect('user/kuelp2m_kry');
        }
    }
    public function kuesioner_kry()
    {
        $data['title'] = 'Kuesioner Dosen';
        $this->load->model('Pertanyaankry_model');
        //$data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('dosen', ['id_dsn' => $this->session->userdata('nip')])->row_array();
        //$data['pertanyaan'] = $this->pertanyaan_model->getPertanyaan();
        // $data['matkul'] = $this->db->select('distinct jadwal.kode_mk, jadwal.kelas', false)->from('dosen')
        //     ->join('jadwal', 'jadwal.id_dsn = dosen.id_dsn', 'inner')
        //     ->join('matkul', 'matkul.kode_mk = jadwal.kode_mk', 'left')
        //     // ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn', 'left')
        //     ->where('dosen.id_dsn=' . $this->session->userdata('nip') . '')
        //     ->get()->result();
        // $submit = $this->db->get_where('submit_lp2m', ['id_dsn' => $this->session->userdata('nip')])->row_array();
        // if ($submit != NULL) {
        // $data['matkul'] = $this->db->distinct()->select('jadwal.kode_mk, jadwal.kelas')->from('jadwal')
        //     ->where('jadwal.id_dsn=' . $this->session->userdata('nip') . '')
        //     // ->where("dosen.nama_dsn != 'DOSEN BARU/DOSEN BELUM ADA'")
        //     // ->where("jadwal.kode_mk NOT IN (SELECT submit_dsn.kode_mk FROM submit_dsn WHERE submit_dsn.id_dsn = " . $this->session->userdata('nip') . ")")
        //     // ->where("jadwal.kelas NOT IN (SELECT submit_dsn.kelas FROM submit_dsn WHERE submit_dsn.id_dsn = " . $this->session->userdata('nip') . ")")
        //     ->where("NOT EXISTS 
        //     (SELECT submit_dsn.kode_mk, submit_dsn.kelas from submit_dsn 
        //     WHERE submit_dsn.kelas = jadwal.kelas AND submit_dsn.kode_mk = jadwal.kode_mk AND jadwal.id_dsn=" . $this->session->userdata('nip') . ")")
        //     ->get()->result();
        // var_dump($this->db->last_query($data['matkul']));
        // die;
        // } else {
        //     $data['matkul'] = $this->db->distinct()->select('jadwal.kode_mk, jadwal.kelas')->from('dosen')
        //         ->join('jadwal', 'jadwal.id_dsn = dosen.id_dsn', 'inner')
        //         ->join('matkul', 'matkul.kode_mk = jadwal.kode_mk', 'left')
        //         // ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn', 'left')
        //         ->join('submit_dsn', 'submit_dsn.id_dsn = dosen.id_dsn', 'left')
        //         ->where('dosen.id_dsn=' . $this->session->userdata('nip') . '')
        //         // ->where("dosen.nama_dsn != 'DOSEN BARU/DOSEN BELUM ADA'")
        //         ->get()->result();
        // }
        // var_dump($data['matkul']);
        // die;
        $data['pertanyaan_kry'] = $this->db->select('*')
            ->from('pertanyaan_kry')->where('level', 'karyawan')
            ->get()->result_array();
        //$data['user'] = $this->db->get_where('datamhs', ['pinmhs' => $this->session->userdata('pin')])->row_array();


        $this->form_validation->set_rules('id_dsn', 'NIP', 'required|trim');
        if ($this->form_validation->run() == false) {
            // $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar_dsn', $data);
            // $this->load->view('templates/topbar_dsn', $data);
            $this->load->view('user/kuesioner_kry', $data);
            // $this->load->view('templates/footer');
        } else {
            $jml_lp2m = $this->input->post('jwb1') + $this->input->post('jwb2') + $this->input->post('jwb3') + $this->input->post('jwb4') + $this->input->post('jwb5') + $this->input->post('jwb6') +
                $this->input->post('jwb7') + $this->input->post('jwb8') + $this->input->post('jwb9') + $this->input->post('jwb10') + $this->input->post('jwb11') + $this->input->post('jwb12') + $this->input->post('jwb13');
            $indeks_kml_lp2m = $jml_lp2m / 15;
            $data = [
                'id_dsn' => $this->input->post('id_dsn'),
                // 'kode_mk' => $this->input->post('kode_mk'),
                // 'kelas' => $this->input->post('kelas'),
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
                'indeks_kml' => $indeks_kml_lp2m,
                'saran' => $this->input->post('saran'),
            ];
            $this->db->insert('submit_kry', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penilaian Anda telah berhasil di Submit.</div>');
            redirect('user/kuesioner_kry');
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
        // $idmatkul = 'IFA303-AA';
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
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
        redirect('auth/index_mhs');
    }

    public function logout_kry()
    {
        $this->session->unset_userdata('id_dsn');
        // $this->session->unset_userdata('nama_dsn');
        // $this->session->unset_userdata('noktp');
        // $this->session->unset_userdata('nohp');
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="max-width:326px" role="alert">Berhasil Logout!</div>');
        redirect('auth/index_kry');
    }
}
