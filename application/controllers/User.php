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

    public function edit()
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
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
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
            redirect('user/edit');
        }
    }

    public function kuesioner_mhs()
    {
        $data['title'] = 'Kuesioner Mahasiswa';
        $this->load->model('pertanyaan_model');
        //$data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('datamhs', ['nrpmhs' => $this->session->userdata('nrp')])->row_array();
        //$data['pertanyaan'] = $this->pertanyaan_model->getPertanyaan();
        $data['matkul'] = $this->db->select('jadwal.*, matkul.*, dosen.*')->from('datamhs')
            ->join('jadwal', 'jadwal.nrpmhs = datamhs.nrpmhs', 'inner')
            ->join('matkul', 'matkul.kode_mk = jadwal.kode_mk', 'left')
            ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn', 'left')
            ->where('datamhs.nrpmhs=' . $this->session->userdata('nrp') . '')
            ->get()->result();
        // var_dump($data['matkul']);
        // die();
        $data['pertanyaan'] = $this->db->select('*')
            ->from('pertanyaan')->where('level', 'mahasiswa')
            ->get()->result_array();
        //$data['user'] = $this->db->get_where('datamhs', ['pinmhs' => $this->session->userdata('pin')])->row_array();
        // var_dump($data['matkul']);
        // die;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kuesioner', $data);
        $this->load->view('templates/footer');
    }
    public function kuesioner_dsn()
    {
        $data['title'] = 'Kuesioner Dosen';
        $this->load->model('pertanyaan_model');
        //$data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('dosen', ['id_dsn' => $this->session->userdata('nip')])->row_array();
        //$data['pertanyaan'] = $this->pertanyaan_model->getPertanyaan();
        $data['matkul'] = $this->db->select('distinct jadwal.kode_mk, jadwal.kelas', false)->from('dosen')
            ->join('jadwal', 'jadwal.id_dsn = dosen.id_dsn', 'inner')
            ->join('matkul', 'matkul.kode_mk = jadwal.kode_mk', 'left')
            // ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn', 'left')
            ->where('dosen.id_dsn=' . $this->session->userdata('nip') . '')
            ->get()->result();
        $data['pertanyaan'] = $this->db->select('*')
            ->from('pertanyaan')->where('level', 'dosen')
            ->get()->result_array();
        //$data['user'] = $this->db->get_where('datamhs', ['pinmhs' => $this->session->userdata('pin')])->row_array();
        // var_dump($data['user']);
        // die;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_dsn', $data);
        $this->load->view('templates/topbar_dsn', $data);
        $this->load->view('user/kuesioner_dsn', $data);
        $this->load->view('templates/footer');
    }
    public function jwb_mhs()
    {
        //$data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('datamhs', ['nrpmhs' => $this->session->userdata('nrp')])->row_array();
        //$data['user'] = $this->db->get_where('datamhs', ['pinmhs' => $this->session->userdata('pin')])->row_array();
        // var_dump($data['user']);
        // die;

        $this->form_validation->set_rules('noktpmhs', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nohpmhs', 'No.Handphone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Profil';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/kuesioner', $data);
            $this->load->view('templates/footer');
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
            redirect('user/edit');
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

    // public function getNamaMatkul_dsn()
    // {
    //     $idmatkul = $this->input->post('idmatkul');
    //     $matakuliah = $this->db->select('*')->from('matkul')
    //         ->join('jadwal', 'jadwal.kode_mk=matkul.kode_mk')
    //         ->join('dosen', 'dosen.id_dsn = jadwal.id_dsn')
    //         ->where('jadwal.kode_mk', $idmatkul)->where('jadwal.id_dsn', $this->session->userdata('nip'))->get()->first_row();
    //     echo json_encode($matakuliah);
    // }

    public function logout()
    {
        $this->session->unset_userdata('nrpmhs');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout</div>');
        redirect('auth');
    }

    public function logout_dsn()
    {
        $this->session->unset_userdata('id_dsn');
        // $this->session->unset_userdata('nama_dsn');
        // $this->session->unset_userdata('noktp');
        // $this->session->unset_userdata('nohp');
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="max-width:326px" role="alert">Berhasil Logout</div>');
        redirect('auth');
    }
}
