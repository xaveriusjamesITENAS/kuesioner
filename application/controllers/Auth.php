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
        if ($this->session->has_userdata('nrp')) {
            redirect('user/edit');
        }
        $data['title'] = 'Login Mahasiswa Itenas';
        $this->form_validation->set_rules('nrp', 'NRP', 'required|trim');
        $this->form_validation->set_rules('pin', 'PIN', 'required|trim');

        if ($this->form_validation->run() == false) {
            // $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            // $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
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
                redirect('user/index');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">Password salah.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" style="max-width:326px" role="alert">NRP anda tidak ditemukan.</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nrp');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('noktp');
        $this->session->unset_userdata('nohp');
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="max-width:326px" role="alert">Berhasil Logout</div>');
        redirect('auth');
    }
}
