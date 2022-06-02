<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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
    public function index()
    {

        $this->load->view('auth/home_login');
    }

    public function index_mhs()
    {
        if ($this->session->has_userdata('nrp')) {
            redirect('user/editprofil_mhs');
        }
        $data['title'] = 'Login Mahasiswa Itenas';
        $this->form_validation->set_rules('nrp', 'NRP', 'required|trim');
        $this->form_validation->set_rules('pin', 'PIN', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login_mhs');
        } else {
            $this->_loginmhs();
        }
    }

    public function index_dsn()
    {
        if ($this->session->has_userdata('nip')) {
            redirect('user/kuesioner_dsn');
        }
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('pin', 'PIN', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login_dsn');
        } else {
            $this->_logindsn();
        }
    }

    public function index_tendik()
    {
        if ($this->session->has_userdata('nip')) {
            redirect('user/kuesioner_tendik');
        }
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('pin', 'PIN', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login_tendik');
        } else {
            $this->_logintendik();
        }
    }

    public function index_kry()
    {
        if ($this->session->has_userdata('nik')) {
            redirect('user/kuesioner_kry');
        }
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('pin', 'PIN', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login_kry');
        } else {
            $this->_loginkry();
        }
    }

    private function _loginmhs()
    {
        $nrpmhs = $this->input->post('nrp'); #'nrp' = name di view
        $pinmhs = $this->input->post('pin');

        $this->load->model('User_model', 'datamhs'); #'datamhs' disini alias dari nama modelnya

        $user = $this->datamhs->userCheckLogin($nrpmhs);

        $user = $this->db->get_where('datamhs', ['nrpmhs' => $nrpmhs])->row_array(); #'datamhs' disini nama tabel dari db

        if ($user != null) {
            if ($pinmhs == $user['pinmhs']) {
                $data = [
                    'nrp' => $user['nrpmhs'],
                    'nama' => $user['namamhs'],
                    'noktp' => $user['noktpmhs'],
                    'nohp' => $user['nohpmhs'],
                    'status' => 'mahasiswa'
                ];
                if("63" == substr($nrpmhs,0,2)){
                    $this->session->set_userdata($data);
                redirect('user/editprofil_mhs_s2sipil');
                } else{
                    $this->session->set_userdata($data);
                    redirect('user/editprofil_mhs');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">Password salah.</div>');
                redirect('auth/index_mhs');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">NRP anda tidak ditemukan.</div>');
            redirect('auth/index_mhs');
        }
    }

    private function _logindsn()
    {
        $id_dsn = $this->input->post('nip'); #'nip' = name di view
        $passw_dsn = $this->input->post('pin');

        $this->load->model('user_model_dsn', 'dosen'); #'datamhs' disini alias dari nama modelnya

        $user = $this->dosen->userCheckLogin($id_dsn);

        $user = $this->db->get_where('dosen', ['id_dsn' => $id_dsn])->row_array(); #'datamhs' disini nama tabel dari db

        if ($user != null) {
            if ($passw_dsn == $user['passw_dsn']) {
                $data = [
                    'nip' => $user['id_dsn'],
                    'nama_dsn' => $user['nama_dsn'],
                    'status' => 'dosen'
                ];
                $this->session->set_userdata($data);
                redirect('user/kuesioner_dsn');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">Password salah.</div>');
                redirect('auth/index_dsn');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">NIP anda tidak ditemukan.</div>');
            redirect('auth/index_dsn');
        }
    }

    private function _logintendik()
    {
        $nip = $this->input->post('nip'); #'nik' = name di view
        $passw_tendik = $this->input->post('pin');

        $this->load->model('User_model_tendik', 'tendik'); #'datamhs' disini alias dari nama modelnya

        $user = $this->tendik->userCheckLogin($nip);

        $user = $this->db->get_where('tendik', ['id_tendik' => $nip])->row_array(); #'datamhs' disini nama tabel dari db

        if ($user != null) {
            if ($passw_tendik == $user['passw_tendik']) {
                $data = [
                    'id_tendik' => $user['id_tendik'],
                    'nama_tendik' => $user['namatendik'],
                    'status' => 'tendik'
                ];
                $this->session->set_userdata($data);
                redirect('user/kuebku_tendik');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">Password salah.</div>');
                redirect('auth/index_tendik');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">NIP anda tidak ditemukan.</div>');
            redirect('auth/index_tendik');
        }
    }

    private function _loginkry()
    {
        $nik = $this->input->post('nik'); #'nik' = name di view
        $passw_kry = $this->input->post('nik');

        $this->load->model('user_model_kry', 'pegawai'); #'datamhs' disini alias dari nama modelnya

        $user = $this->pegawai->userCheckLogin($nik);

        $user = $this->db->get_where('pegawai', ['nik' => $nik])->row_array(); #'datamhs' disini nama tabel dari db

        if ($user != null) {
            if ($passw_kry == $user['passw_kry']) {
                $data = [
                    'nik' => $user['nik'],
                    'nama_kry' => $user['namapegawai'],
                ];
                $this->session->set_userdata($data);
                redirect('user/kuesioner_kry');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">Password salah.</div>');
                redirect('auth/index_kry');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">NIK anda tidak ditemukan.</div>');
            redirect('auth/index_kry');
        }
    }

    public function logout_mhs()
    {
        $this->unset_only();
        // $this->session->unset_userdata('nama');
        // $this->session->unset_userdata('noktp');
        // $this->session->unset_userdata('nohp');
        $this->session->set_flashdata('message_logoutmhs', '<div class="alert alert-success" style="max-width:326px" role="alert">Berhasil Logout!</div>');
        redirect('auth/index_mhs');
    }

    public function logout_dsn()
    {
        $this->unset_only();
        // $this->session->unset_userdata('nama_dsn');
        // $this->session->unset_userdata('noktp');
        // $this->session->unset_userdata('nohp');
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="max-width:326px" role="alert">Berhasil Logout!</div>');
        redirect('auth/index_dsn');
    }

    public function logout_tendik()
    {
        $this->unset_only();
        // $this->session->unset_userdata('nama_dsn');
        // $this->session->unset_userdata('noktp');
        // $this->session->unset_userdata('nohp');
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="max-width:326px" role="alert">Berhasil Logout!</div>');
        redirect('auth/index_tendik');
    }

    public function logout_kry()
    {
        $this->unset_only();
        // $this->session->unset_userdata('nama_dsn');
        // $this->session->unset_userdata('noktp');
        // $this->session->unset_userdata('nohp');
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="max-width:326px" role="alert">Berhasil Logout!</div>');
        redirect('auth/index_kry');
    }

    function unset_only()
    {
        $user_data = $this->session->all_userdata();

        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    }
}
