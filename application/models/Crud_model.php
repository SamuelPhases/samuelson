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

    function newpackage()
    {
        $package_data = array(
            'NAME' => $this->input->post("name"),
            'PRICE' => $this->input->post("price"),
            'ROI' => $this->input->post("roi"),
        );

        $this->db->insert('packages', $package_data);
        $package_id = $this->db->insert_id();

        return array(
            'inserted' => 'done',
            'msg' => 'New Package Added Successfully',
            'package_id' => $package_id
        );
    }

    function addBtc()
    {
        $btc_data = array(
            'BTC_ADDRESS' => $this->input->post("btcAccount"),
        );

        $this->db->where('ID', 1);
        $this->db->update('system_settings', $btc_data);

        return array(
            'inserted' => 'done',
            'msg' => 'New BTC Address Added Successfully',
        );
    }

    function addEth()
    {
        $eth_data = array(
            'ETH_ADDRESS' => $this->input->post("etherAccount"),
        );

        $this->db->where('ID', 1);
        $this->db->update('system_settings', $eth_data);

        return array(
            'inserted' => 'done',
            'msg' => 'New ETH Address Added Successfully',
        );
    }

    function purchase_pac($user_id, $purchase_id)
    {
        $purchase_data = array(
            'USER_ID' => $user_id,
            'PACKAGE_ID' => $purchase_id,
            'STATUS' => 'INACTIVE',
        );

        $this->db->insert('purchase', $purchase_data);

        return array(
            'inserted' => 'done',
            'msg' => 'Your purchase was Successful'
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