<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function index(){
		$this->login();
	}

	function login()
	{
		$this->load->view('auth/login');
	}

	function register()
	{
		$this->load->view('auth/register');
	}

	function forgotpwd()
	{
		$this->load->view('auth/forgot-password');
	}

	function resetpwd()
	{
		$this->load->view('auth/new-password');
	}

	function reg_user()
	{
		$reg_user = $this->Crud_model->reg_user(); 
    	if($reg_user['inserted']=='done'){
    		$this->session->set_flashdata('success', $reg_user['msg']);
    		$this->session->set_userdata('login_id', $reg_user['user_id']);
            $this->session->set_userdata('login_email', $reg_user['user_email']);
            $this->session->set_userdata('login_check', 'go@yes');
    		redirect(base_url() . 'user','refresh');
    	} else{
    		$this->session->set_flashdata('error', $reg_user['msg']);
    		redirect(base_url() . 'auth/register','refresh');
    	}
	}

	function auth_user()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$check = $this->validatelogin($email, $password);
		if ($check == 'active') {
			redirect(base_url() . 'user','refresh');
		} else{
			$this->session->set_flashdata('error', 'Invalid Credentials');
			redirect(base_url(),'refresh');
		}
	}

	function validatelogin($email, $password)
	{
		$this->db->where('PASSWORD', sha1( $this->config->item('salt') . $password ));
        $this->db->where('EMAIL', $email);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
        	$row = $query->row();
            $this->session->set_userdata('login_id', $row->ID);
            $this->session->set_userdata('login_email', $row->EMAIL);
            $this->session->set_userdata('login_check', 'go@yes');
            return 'active';
        }

        return 'inactive';
	}

	function logout() {
        $this->session->sess_destroy();
        redirect(base_url(),'refresh');
    }

	function get_state($country)
    {
        $states = $this->db->get_where('states' , array('country_id'=>$country))->result_array();
        foreach ($states as $row) {
            echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
        }
    }

}