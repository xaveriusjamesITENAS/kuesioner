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
    public function index()
    {
        $data['title'] = 'Profil Mahasiswa';
        $data['user'] = $this->db->get_where('datamhs', ['nrpmhs' => $this->session->userdata('nrp')])->row_array();

        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('user/edit', $data);
        // $this->load->view('templates/footer');
    }

    public function edit()
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
            // $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar', $data);
            // $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
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
            redirect('user/edit');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nrpmhs');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout</div>');
        redirect('auth');
    }
}
