<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Login
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
	}


	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Landing Page';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/landing/acces.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}
}
