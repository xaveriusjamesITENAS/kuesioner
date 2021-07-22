<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaanlp2m_model extends CI_Model
{
    public function getPertanyaanlp2m()
    {

        return $this->db->get('pertanyaan_lp2m')->result_array();
    }
}
