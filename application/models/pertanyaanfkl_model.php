<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaanfkl_model extends CI_Model
{
    public function getPertanyaanlp2m()
    {

        return $this->db->get('pertanyaan_fkl')->result_array();
    }
}
