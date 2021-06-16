<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function edit_mhs()
    {
        $data['user'] = $this->db->get_where('datamhs', ['nrpmhs' => $this->session->userdata('nrp')])->row_array();

        $this->form_validation->set_rules('noktpmhs', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nohpmhs', 'No.Handphone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Profil Mahasiswa';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_mhs', $data);
            $this->load->view('templates/topbar_mhs', $data);
            $this->load->view('user/edit_mhs', $data);
            $this->load->view('templates/footer_mhs');
        } else {
            $noktp = $this->input->post('noktpmhs');
            $jkmhs = $this->input->post('jkmhs');
            $hpmhs = $this->input->post('nohpmhs');
            $nrpmhs = $this->input->post('nrpmhs');
            $alamatktp = $this->input->post('alamatktp');
            $alamatnow = $this->input->post('alamatnow');

            $this->db->set('noktpmhs', $noktp);
            $this->db->set('jkmhs', $jkmhs);
            $this->db->set('nohpmhs', $hpmhs);
            $this->db->set('alamat_ktp', $alamatktp);
            $this->db->set('alamat_now', $alamatnow);
            $this->db->where('nrpmhs', $nrpmhs);
            $this->db->update('datamhs');

            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin: 15px 15px" role="alert">Profil Anda berhasil di Update</div>');
            redirect('user/edit_mhs');
        }
    }

    public function data_dsn()
    {
        $data['user'] = $this->db->get_where('dosen', ['id_dsn' => $this->session->userdata('nip')])->row_array();

        $this->form_validation->set_rules('nik_ayah', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nik_ibu', 'NIK', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Data Dosen';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_dsn', $data);
            $this->load->view('templates/topbar_dsn', $data);
            $this->load->view('user/dosen', $data);
            $this->load->view('templates/footer_dsn', $data);
        } else {
            $nik_ayah = $this->input->post('nik_ayah');
            $nik_ibu = $this->input->post('nik_ibu');

            // $jkmhs = $this->input->post('jkmhs');
            // $hpmhs = $this->input->post('nohpmhs');
            $nip = $this->input->post('id_dsn');
            // $alamatktp = $this->input->post('alamatktp');
            // $alamatnow = $this->input->post('alamatnow');

            $this->db->set('nik_ayah', $nik_ayah);
            $this->db->set('nik_ibu', $nik_ibu);
            // $this->db->set('jkmhs', $jkmhs);
            // $this->db->set('nohpmhs', $hpmhs);
            // $this->db->set('alamat_ktp', $alamatktp);
            // $this->db->set('alamat_now', $alamatnow);
            $this->db->where('id_dsn', $nip);
            $this->db->update('dosen');

            var_dump($data['user']);
            die;

            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin: 15px 15px" role="alert">Profil Anda berhasil di Update</div>');
            redirect('user/data_dosen');
        }
    }

    // public function data_kry()
    // {
    //     $data['user'] = $this->db->get_where('datamhs', ['nrpmhs' => $this->session->userdata('nrp')])->row_array();

    //     $this->form_validation->set_rules('nik_ayah', 'NIK', 'required|trim');
    //     $this->form_validation->set_rules('nik_ibu', 'NIK', 'required|trim');

    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = 'Data Orangtua';
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar_mhs', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('user/ortu', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $nik_ayah = $this->input->post('nik_ayah');
    //         $nik_ibu = $this->input->post('nik_ibu');

    //         // $jkmhs = $this->input->post('jkmhs');
    //         // $hpmhs = $this->input->post('nohpmhs');
    //         $nrpmhs = $this->input->post('nrpmhs');
    //         // $alamatktp = $this->input->post('alamatktp');
    //         // $alamatnow = $this->input->post('alamatnow');

    //         $this->db->set('nik_ayah', $nik_ayah);
    //         $this->db->set('nik_ibu', $nik_ibu);
    //         // $this->db->set('jkmhs', $jkmhs);
    //         // $this->db->set('nohpmhs', $hpmhs);
    //         // $this->db->set('alamat_ktp', $alamatktp);
    //         // $this->db->set('alamat_now', $alamatnow);
    //         $this->db->where('nrpmhs', $nrpmhs);
    //         $this->db->update('datamhs');

    //         var_dump($data['user']);
    //         die;

    //         $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin: 15px 15px" role="alert">Profil Anda berhasil di Update</div>');
    //         redirect('user/data_ortu');
    //     }
    // }
    public function data_ortu()
    {
        $data['user'] = $this->db->get_where('datamhs', ['nrpmhs' => $this->session->userdata('nrp')])->row_array();

        $this->form_validation->set_rules('nik_ayah', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nik_ibu', 'NIK', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Data Orangtua';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_mhs', $data);
            $this->load->view('templates/topbar_mhs', $data);
            $this->load->view('user/ortu', $data);
            $this->load->view('templates/footer_mhs');
        } else {
            $nik_ayah = $this->input->post('nik_ayah');
            $nik_ibu = $this->input->post('nik_ibu');

            // $jkmhs = $this->input->post('jkmhs');
            // $hpmhs = $this->input->post('nohpmhs');
            $nrpmhs = $this->input->post('nrpmhs');
            // $alamatktp = $this->input->post('alamatktp');
            // $alamatnow = $this->input->post('alamatnow');

            $this->db->set('nik_ayah', $nik_ayah);
            $this->db->set('nik_ibu', $nik_ibu);
            // $this->db->set('jkmhs', $jkmhs);
            // $this->db->set('nohpmhs', $hpmhs);
            // $this->db->set('alamat_ktp', $alamatktp);
            // $this->db->set('alamat_now', $alamatnow);
            $this->db->where('nrpmhs', $nrpmhs);
            $this->db->update('datamhs');

            var_dump($data['user']);
            die;

            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin: 15px 15px" role="alert">Profil Anda berhasil di Update</div>');
            redirect('user/data_ortu');
        }
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

    public function logout_kry()
    {
        $this->session->unset_userdata('id_kry');
        // $this->session->unset_userdata('nama_dsn');
        // $this->session->unset_userdata('noktp');
        // $this->session->unset_userdata('nohp');
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="max-width:326px" role="alert">Berhasil Logout</div>');
        redirect('auth');
    }

    public function logout_mhs()
    {
        $this->session->unset_userdata('nrpmhs');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout</div>');
        redirect('auth');
    }
}
