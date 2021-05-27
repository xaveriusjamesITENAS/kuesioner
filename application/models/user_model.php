<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    // Users Data
    public function getUserData()
    {
        $query = $this->db->get_where('datamhs', ['nrpmhs' => $this->session->userdata('nrpmhs')]);
        return $query->row_array();
    }
    public function getUserDataAll()
    {
        $query = $this->db->get('datamhs');
        return $query->result_array();
    }

    // Login
    public function userCheckLogin($nrpmhs)
    {
        $this->db->where("nrpmhs =  '$nrpmhs'");
        $query = $this->db->get('datamhs');
        return $query->row_array();
    }
}
