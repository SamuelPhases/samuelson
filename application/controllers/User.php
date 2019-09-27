<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('login_check') != 'go@yes')
            redirect(base_url(), 'refresh');
        
		$page_data['page_name'] = 'dashboard';
		$page_data['page_title'] = 'Dashboard';
		$this->load->view('admin/dashboard', $page_data);
	}
	public function profile()
	{
		$page_data['page_name'] = 'profile';
		$page_data['page_title'] = 'My Profile';
		$this->load->view('admin/profile', $page_data);
	}
	public function investment_packages()
	{
		$page_data['page_name'] = 'investment_packages';
		$page_data['page_title'] = 'Investment Packages';
		$this->load->view('admin/investment_packages', $page_data);
	}
	public function myinvestments()
	{
		$page_data['page_name'] = 'myinvestments';
		$page_data['page_title'] = 'My Investments';
		$this->load->view('admin/investments', $page_data);
	}
	public function users()
	{
		$page_data['page_name'] = 'users';
		$page_data['page_title'] = 'All Users';
		$this->load->view('admin/users', $page_data);
	}
	public function alltickets()
	{
		$page_data['page_name'] = 'alltickets';
		$page_data['page_title'] = 'All Tickets';
		$this->load->view('admin/alltickets', $page_data);
	}
	public function allinvestment()
	{
		$page_data['page_name'] = 'allinvestment';
		$page_data['page_title'] = 'All Investments';
		$this->load->view('admin/allinvestments', $page_data);
	}
	public function tickets()
	{
		$page_data['page_name'] = 'tickets';
		$page_data['page_title'] = 'Tickets';
		$this->load->view('admin/tickets', $page_data);
	}
	public function settings()
	{
		$page_data['page_name'] = 'settings';
		$page_data['page_title'] = 'Settings';
		$this->load->view('admin/settings', $page_data);
	}

}
