<?php
if (!defined('BASEPATH'))  exit('No direct script access allowed');

class User_Model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    // check username and password match with database.
    public function login($username, $password) {
        $this->db-> select('user_id, username, password');
        $this->db-> from('users');
        $this->db-> where('username', $username);
        $this->db-> where('password', MD5($password));
        $this->db-> where('activated', 1);
        $this->db-> limit(1);

        $query = $this->db-> get();

        if($query->num_rows() == 1)
        {
         return $query->result();
        }
        else
        {
         return false;
        }
    }

}