<?php

class Product_model extends CI_Model
{
    public function getAllProduct()
    {
        $query = $this->db->get('product_data');
        return $query->result_array();
    }
}
