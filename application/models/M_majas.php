<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_majas extends CI_Model
{
    public function simpanData($data)
    {
        return $this->db->insert('komisi_map', $data);
    }
}