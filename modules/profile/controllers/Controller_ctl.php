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
		$this->data['title'] = 'Profil';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Profil';

        // LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('account', $mydata, TRUE);
		$this->display();
	}

    public function ubah_password()
	{
		// LOAD TITLE
		$this->data['title'] = 'Profil';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Ubah Password';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('ubah_password', $mydata, TRUE);
		$this->display();
	}
}
