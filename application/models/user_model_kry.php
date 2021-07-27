<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model_kry extends CI_Model
{
    // Users Data
    public function getUserData()
    {
        $query = $this->db->get_where('pegawai', ['nik' => $this->session->userdata('nik')]);
        return $query->row_array();
    }
    public function getUserDataAll()
    {
        $query = $this->db->get('pegawai');
        return $query->result_array();
    }

    // Login
    public function userCheckLogin($nik)
    {
        $this->db->where("nik =  '$nik'");
        $query = $this->db->get('pegawai');
        return $query->row_array();
    }
}
