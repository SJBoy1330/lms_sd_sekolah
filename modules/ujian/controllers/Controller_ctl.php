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
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Bank Soal';

        // LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('bank_soal', $mydata, TRUE);
		$this->display();
	}

    public function grup_soal()
	{
		// LOAD TITLE
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Grup Soal';

        // LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('grup_soal', $mydata, TRUE);
		$this->display();
	}
}
