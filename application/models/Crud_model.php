<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model { 
  
	function __construct() 
    { 
        parent::__construct(); 
    }

    function reg_user()
    {
    	$email = $this->input->post("email");
    	if ($email != ''){
	        if ($this->check_email($email)) {
	            return array(
		            'inserted' => 'fail',
		            'msg' => 'Email Already Exist'
		        );
	            die();
	        }
    	}

        $pwd = sha1( $this->config->item('salt').$this->input->post("password"));
        $user_data = array(
            'FULL_NAME' => $this->input->post("name"),
            'EMAIL' => $email,
            'PHONE' => $this->input->post("phone"),
            'COUNTRY' => $this->input->post("country"),
            'STATE' => $this->input->post("state"),
            'PASSWORD' => $pwd,
        );

        $this->db->insert('users', $user_data);
        $user_id = $this->db->insert_id();

        return array(
            'inserted' => 'done',
            'msg' => 'Registration Successful',
            'user_id' => $user_id,
            'user_email' => $email,
        );
    }

    //check if email exist
    function check_email($email='')
    {
    	$email = $this->db->get_where('users', array('EMAIL' => $email));

        if ($email->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}