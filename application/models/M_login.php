<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	// login admin
    function auth_user($username,$level,$password){
    	$query = $this->db->get_where('tbl_user', ['username'  => $username,
          'level'     => $level,
          'password'  =>  md5($password),]);
        return $query;
    }

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */