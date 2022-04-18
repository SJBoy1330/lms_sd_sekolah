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
		$this->data['title'] = 'Pengaturan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Pengaturan';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}

	public function hari_libur()
	{
		// LOAD TITLE
		$this->data['title'] = 'Hari Libur';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Hari Libur';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/harilibur/harilibur.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('hari_libur', $mydata, TRUE);
		$this->display();
	}

    public function presensi_staf()
	{
		// LOAD TITLE
		$this->data['title'] = 'Pengaturan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Presensi Staf';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('presensi_staf', $mydata, TRUE);
		$this->display();
	}

    public function presensi_siswa()
	{
		// LOAD TITLE
		$this->data['title'] = 'Pengaturan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Presensi Siswa';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('presensi_siswa', $mydata, TRUE);
		$this->display();
	}
}
