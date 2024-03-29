<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function index()
	{
		if ($this->session->userdata('login_check') != 'go@yes')
            redirect(base_url(), 'refresh');
        
		$page_data['page_name'] = 'dashboard';
		$page_data['page_title'] = 'Dashboard';
		$this->load->view('admin/dashboard', $page_data);
	}
	function profile()
	{
		if ($this->session->userdata('login_check') != 'go@yes')
            redirect(base_url(), 'refresh');

		$page_data['page_name'] = 'profile';
		$page_data['page_title'] = 'My Profile';
		$this->load->view('admin/profile', $page_data);
	}
	function investment_packages()
	{
		if ($this->session->userdata('login_check') != 'go@yes')
            redirect(base_url(), 'refresh');

		$page_data['page_name'] = 'investment_packages';
		$page_data['page_title'] = 'Investment Packages';
		$this->load->view('admin/investment_packages', $page_data);
	}
	function myinvestments()
	{
		if ($this->session->userdata('login_check') != 'go@yes')
            redirect(base_url(), 'refresh');

		$page_data['page_name'] = 'myinvestments';
		$page_data['page_title'] = 'My Investments';
		$this->load->view('admin/investments', $page_data);
	}
	function users()
	{
		if ($this->session->userdata('login_check') != 'go@yes')
            redirect(base_url(), 'refresh');

		$page_data['page_name'] = 'users';
		$page_data['page_title'] = 'All Users';
		$this->load->view('admin/users', $page_data);
	}
	function alltickets()
	{
		if ($this->session->userdata('login_check') != 'go@yes')
            redirect(base_url(), 'refresh');

		$page_data['page_name'] = 'alltickets';
		$page_data['page_title'] = 'All Tickets';
		$this->load->view('admin/alltickets', $page_data);
	}
	function allinvestment()
	{
		if ($this->session->userdata('login_check') != 'go@yes')
            redirect(base_url(), 'refresh');

		$page_data['page_name'] = 'allinvestment';
		$page_data['page_title'] = 'All Investments';
		$this->load->view('admin/allinvestments', $page_data);
	}
	function tickets()
	{
		if ($this->session->userdata('login_check') != 'go@yes')
            redirect(base_url(), 'refresh');
        
		$page_data['page_name'] = 'tickets';
		$page_data['page_title'] = 'Tickets';
		$this->load->view('admin/tickets', $page_data);
	}
	function settings()
	{
		if ($this->session->userdata('login_check') != 'go@yes')
            redirect(base_url(), 'refresh');

		$page_data['page_name'] = 'settings';
		$page_data['page_title'] = 'Settings';
		$this->load->view('admin/settings', $page_data);
	}

	
	////// BACKEND CODE ///////////////
	function admin($param1='', $param2='')
	{
		if ($this->session->userdata('login_check') != 'go@yes')
            redirect(base_url(), 'refresh');

        if ($param1=='newpackage') {
        	$newpackage = $this->Crud_model->newpackage(); 
	    	if($newpackage['inserted']=='done'){
	    		$this->session->set_flashdata('success', $newpackage['msg']);
	    		redirect(base_url() . 'user/settings','refresh');
	    	} else{
	    		$this->session->set_flashdata('error', $newpackage['msg']);
	    		redirect(base_url() . 'user/settings','refresh');
	    	}
        }

        if ($param1=='addBtc') {
        	$addBtc = $this->Crud_model->addBtc(); 
	    	if($addBtc['inserted']=='done'){
	    		$this->session->set_flashdata('btcsuccess', $addBtc['msg']);
	    		redirect(base_url() . 'user/settings','refresh');
	    	} else{
	    		$this->session->set_flashdata('btcerror', $addBtc['msg']);
	    		redirect(base_url() . 'user/settings','refresh');
	    	}
        }

        if ($param1=='addEth') {
        	$addEth = $this->Crud_model->addEth(); 
	    	if($addEth['inserted']=='done'){
	    		$this->session->set_flashdata('ethsuccess', $addEth['msg']);
	    		redirect(base_url() . 'user/settings','refresh');
	    	} else{
	    		$this->session->set_flashdata('etherror', $addEth['msg']);
	    		redirect(base_url() . 'user/settings','refresh');
	    	}
        }

        if ($param1 == 'activate_plan') {
        	$purchase_id = $param2;
        	$pur_data = array(
	            'STATUS' => 'ACTIVE',
	        );
        	$this->db->where('ID', $purchase_id);
	        $this->db->update('purchase', $pur_data);

	        $this->session->set_flashdata('activesuccess', 'Plan activated successfully');
    		redirect(base_url() . 'user/allinvestment','refresh');
        }
	}

	function usersactivities($param1='', $param2='', $param3='')
	{
		if ($this->session->userdata('login_check') != 'go@yes')
            redirect(base_url(), 'refresh');

        if ($param1=='purchase') {
        	$user_id = $param2;
        	$purchase_id = $param3;
        	$purchase_pac = $this->Crud_model->purchase_pac($user_id, $purchase_id); 
	    	if($purchase_pac['inserted']=='done'){
	    		$this->session->set_flashdata('pursuccess', $purchase_pac['msg']);
	    		redirect(base_url() . 'user/investment_packages','refresh');
	    	} else{
	    		$this->session->set_flashdata('purerror', $purchase_pac['msg']);
	    		redirect(base_url() . 'user/investment_packages','refresh');
	    	}
        }

        if ($param1=='activate') {
        	$user_id = $this->input->post("user_id");
        	$purchase_id = $this->input->post("purchase_id");
        	
	        if (move_uploaded_file($_FILES['pop']['tmp_name'], 'uploads/pop/'. $purchase_id .'.png')) {
	        	
	        	$pur_data = array(
		            'POP' => 1,
		        );
	        	$this->db->where('ID', $purchase_id);
		        $this->db->where('USER_ID', $user_id);
		        $this->db->update('purchase', $pur_data);

		        $this->session->set_flashdata('popsuccess', 'Proof uploaded successfully');
	    		redirect(base_url() . 'user/myinvestments','refresh');
	        } else{
	        	$this->session->set_flashdata('poperror', 'Something went wrong during upload, please try again.');
	    		redirect(base_url() . 'user/myinvestments','refresh');
	        }
        }

        if ($param1=='addwallet') {
        	$user_id = $this->session->userdata('login_id');
        	$wallet_data = array(
	            'WALLET' => $this->input->post('walletaddress'),
	        );
	        $this->db->where('ID', $user_id);
	        $this->db->update('users', $wallet_data);

	        $this->session->set_flashdata('walletsuccess', 'BTC wallet added successfully');
    		redirect(base_url() . 'user/profile','refresh');
        }

        if ($param1=='changepwd') {
        	$user_id = $this->session->userdata('login_id');
        	$pwd1 = $this->input->post('newPassword');
        	$pwd2 = $this->input->post('confirmPassword');

        	if ($pwd1 === $pwd2) {
        		$pwd_data = array(
		            'PASSWORD' => sha1( $this->config->item('salt').$pwd1 ),
		        );
		        $this->db->where('ID', $user_id);
		        $this->db->update('users', $pwd_data);

		        $this->session->set_flashdata('pwdsuccess', 'Password changed successfully');
	    		redirect(base_url() . 'user/profile','refresh');
        	} else{
        		$this->session->set_flashdata('pwderror', 'Password missmatch. Please make sure both password fields match!');
	    		redirect(base_url() . 'user/profile','refresh');
        	}
        }
	}

}
