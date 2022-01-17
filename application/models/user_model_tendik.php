<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model_tendik extends CI_Model
{
    // Users Data
    public function getUserData()
    {
        $query = $this->db->get_where('tendik', ['id_tendik' => $this->session->userdata('nip')]);
        return $query->row_array();
    }
    public function getUserDataAll()
    {
        $query = $this->db->get('tendik');
        return $query->result_array();
    }

    // Login
    public function userCheckLogin($nip)
    {
        $this->db->where("id_tendik =  '$nip'");
        $query = $this->db->get('tendik');
        return $query->row_array();
    }
}
