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
        $data['title'] = 'Vaksinasi | ITENAS';
        $this->load->view('auth/home_login');
    }

    public function index_dsn()
    {
        $data['title'] = 'Login Dosen Itenas';
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('pin', 'PIN', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login_dsn');
        } else {
            $this->_logindsn();
        }
    }

    public function index_kry()
    {
        $data['title'] = 'Login Karyawan Itenas';
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('pin', 'PIN', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login_kry');
        } else {
            $this->_loginkry();
        }
    }

    public function index_mhs()
    {
        if ($this->session->has_userdata('nrp')) {
            redirect('user/data_ortu');
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

    private function _logindsn()
    {
        $id_dsn = $this->input->post('nip'); #'nrp' = name di view
        $passw_dsn = $this->input->post('pin');

        $this->load->model('user_model_dsn', 'dosen'); #'datamhs' disini alias dari nama modelnya

        $user = $this->dosen->userCheckLogin($id_dsn);

        $user = $this->db->get_where('dosen', ['id_dsn' => $id_dsn])->row_array(); #'datamhs' disini nama tabel dari db
        // var_dump($user);
        // die;
        if ($user != null) {
            if ($passw_dsn == $user['passw_dsn']) {
                $data = [
                    'nip' => $user['id_dsn'],
                    'nama_dsn' => $user['nama_dsn'],
                ];
                $this->session->set_userdata($data);
                redirect('user/data_dsn');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">Password salah.</div>');
                redirect('auth/index_dsn');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">NIP anda tidak ditemukan.</div>');
            redirect('auth/index_dsn');
        }
    }

    // private function _loginkry()
    // {
    //     $id_dsn = $this->input->post('nip'); #'nrp' = name di view
    //     $passw_dsn = $this->input->post('pin');

    //     $this->load->model('user_model_dsn', 'karyawan'); #'datamhs' disini alias dari nama modelnya

    //     $user = $this->karyawan->userCheckLogin($id_kry);

    //     $user = $this->db->get_where('karyawan', ['id_kry' => $id_kry])->row_array(); #'datamhs' disini nama tabel dari db
    //     // var_dump($user);
    //     // die;
    //     if ($user != null) {
    //         if ($passw_kry == $user['passw_kry']) {
    //             $data = [
    //                 'nip' => $user['id_kry'],
    //                 'nama_kry' => $user['nama_kry'],
    //             ];
    //             $this->session->set_userdata($data);
    //             redirect('user/kuesioner_kry');
    //         } else {
    //             $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">Password salah.</div>');
    //             redirect('auth/index_kry');
    //         }
    //     } else {
    //         $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">NIP anda tidak ditemukan.</div>');
    //         redirect('auth/index_kry');
    //     }
    // }

    private function _loginmhs()
    {
        $nrpmhs = $this->input->post('nrp'); #'nrp' = name di view
        $pinmhs = $this->input->post('pin');

        $this->load->model('User_model', 'datamhs'); #'datamhs' disini alias dari nama modelnya

        $user = $this->datamhs->userCheckLogin($nrpmhs);

        $user = $this->db->get_where('datamhs', ['nrpmhs' => $nrpmhs])->row_array(); #'datamhs' disini nama tabel dari db
        // var_dump($user);
        // die;
        if ($user != null) {
            if ($pinmhs == $user['pinmhs']) {
                $data = [
                    'nrp' => $user['nrpmhs'],
                    'nama' => $user['namamhs'],
                    'noktp' => $user['noktpmhs'],
                    'nohp' => $user['nohpmhs']
                ];
                $this->session->set_userdata($data);
                redirect('user/edit_mhs');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">Password salah.</div>');
                redirect('auth/index_mhs');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">NRP anda tidak ditemukan.</div>');
            redirect('auth/index_mhs');
        }
    }

    public function logout_dsn()
    {
        $this->session->unset_userdata('nip');
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="max-width:326px" role="alert">Berhasil Logout</div>');
        redirect('auth');
    }

    public function logout_kry()
    {
        $this->session->unset_userdata('nip');
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="max-width:326px" role="alert">Berhasil Logout</div>');
        redirect('auth');
    }

    public function logout_mhs()
    {
        $this->session->unset_userdata('nrp');
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="max-width:326px" role="alert">Berhasil Logout</div>');
        redirect('auth');
    }
}
