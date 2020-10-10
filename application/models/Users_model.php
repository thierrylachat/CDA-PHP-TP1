<?php

class Users_model extends CI_Model
{

    public function __construct()
    {}

    public function set_user(){
        $data = $this->input->post(NULL);
        unset($data["csrf_field"]);
        return $this->db->insert('users', $data);
    } 

    public function get_users(){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('countries', 'users.birthCountry = countries.code', 'LEFT');
        return $this->db->get()->result();
    } 
}
