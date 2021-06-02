<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model_dsn extends CI_Model
{
    // Users Data
    public function getUserData()
    {
        $query = $this->db->get_where('dosen', ['id_dsn' => $this->session->userdata('id_dsn')]);
        return $query->row_array();
    }
    public function getUserDataAll()
    {
        $query = $this->db->get('dosen');
        return $query->result_array();
    }

    // Login
    public function userCheckLogin($id_dsn)
    {
        $this->db->where("id_dsn =  '$id_dsn'");
        $query = $this->db->get('dosen');
        return $query->row_array();
    }
}
