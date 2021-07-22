<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaankry_model extends CI_Model
{
    public function getPertanyaanlp2m()
    {

        return $this->db->get('pertanyaan_kry')->result_array();
    }
}
