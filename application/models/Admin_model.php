<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    
    public function register($data){
        $this->db->insert('admin', $data);
    }

    public function login($email, $password){
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');
        return $query->row_array(); // Return user data if found, otherwise return false
    }
    public function logout()
    {
        // Unset user data and destroy session
        $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
        return true; // Indicate successful logout
    }
}
?>
