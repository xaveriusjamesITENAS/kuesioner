<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaan_model extends CI_Model
{
    public function getPertanyaan()
    {

        return $this->db->get('pertanyaan')->result_array();
    }
}
