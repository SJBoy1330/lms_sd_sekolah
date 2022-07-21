<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// LOAD TITLE
		$this->data['title'] = 'PDF';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Laporan PDF';

		// LOAD VIEW
		$this->load->view('index', $mydata);
	}

}
