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
	function admin($param1='')
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
	    		redirect(base_url() . 'auth/settings','refresh');
	    	}
        }

        if ($param1=='addBtc') {
        	$addBtc = $this->Crud_model->addBtc(); 
	    	if($addBtc['inserted']=='done'){
	    		$this->session->set_flashdata('btcsuccess', $addBtc['msg']);
	    		redirect(base_url() . 'user/settings','refresh');
	    	} else{
	    		$this->session->set_flashdata('btcerror', $addBtc['msg']);
	    		redirect(base_url() . 'auth/settings','refresh');
	    	}
        }

        if ($param1=='addEth') {
        	$addEth = $this->Crud_model->addEth(); 
	    	if($addEth['inserted']=='done'){
	    		$this->session->set_flashdata('ethsuccess', $addEth['msg']);
	    		redirect(base_url() . 'user/settings','refresh');
	    	} else{
	    		$this->session->set_flashdata('etherror', $addEth['msg']);
	    		redirect(base_url() . 'auth/settings','refresh');
	    	}
        }
	}

}
