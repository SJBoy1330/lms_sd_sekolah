<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		access_url();
	}


	public function index()
	{
		redirect('jurnal_staf');
	}

	public function jurnal_staf()
	{
		// LOAD TITLE
		$this->data['title'] = 'Jurnal';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Jurnal Staf';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/jurnal/jurnal.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/jurnal/jurnalstaf.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('jurnal_staf', $mydata, TRUE);
		$this->display();
	}


	public function jurnal_guru()
	{
		// LOAD TITLE
		$this->data['title'] = 'Jurnal';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Jurnal Guru';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/jurnal/jurnal.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/jurnal/jurnalguru.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('jurnal_guru', $mydata, TRUE);
		$this->display();
	}
}
