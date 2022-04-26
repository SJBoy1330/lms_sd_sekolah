<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
	}


	public function index()
	{
		// LOAD TITLE
		$this->data['title'] = 'Akademik';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Waktu';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('waktu', $mydata, TRUE);
		$this->display();
	}

    public function jadwal_mengajar()
	{
		// LOAD TITLE
		$this->data['title'] = 'Akademik';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Jadwal Mengajar';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('jadwal_mengajar', $mydata, TRUE);
		$this->display();
	}
}
