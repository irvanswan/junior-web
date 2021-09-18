<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    private $table = 'users';
    public function check_user($email)
    {
        $query = "SELECT * FROM users WHERE email = '$email' ";
        return $this->db->query($query)->row_array();
    }
    public function register_user($data)
    {
        $this->db->insert($this->table, $data);
		return $this->db->insert_id();
    }

    public function get_by_id($id){
        $query = "SELECT email, photo, name FROM users WHERE id = '$id'";
        return $this->db->query($query);
    }
}
