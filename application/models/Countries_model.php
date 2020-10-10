<?php

class Countries_model extends CI_Model
{

    public function __construct()
    {}

    public function get_all(){
        return $this->db->get('countries')->result();
    } 

    public function get_ids(){
        $array = $this->db->select('code')->get('countries')->result_array();
        return implode(",", array_column($array,"code"));
    } 
}
