<?php

class Admin_model extends CI_Model
{
    public function getUser()
    {
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }
}
