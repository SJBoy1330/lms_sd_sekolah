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
		$this->data['title'] = 'Dashboard';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Dashboard';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/ujian/ujian.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/ujian/index.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}

	public function instruksi_ujian()
	{
		// LOAD TITLE
		$this->data['title'] = 'Instruksi & Aturan Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Instruksi & Aturan Ujian';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/ujian/ujian.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('instruksi_ujian', $mydata, TRUE);
		$this->display();
	}

	public function ujian()
	{
		// LOAD TITLE
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Halaman Ujian';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/ujian/ujian.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/ujian/penomoran.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('ujian', $mydata, TRUE);
		$this->display();
	}
}
