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
		// LOAD TITLE
		$this->data['title'] = 'Pengaturan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Identitas Sekolah';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/identitas-sekolah.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/pengaturan/identitas.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('identitas_sekolah', $mydata, TRUE);
		$this->display();
	}

	public function hari_libur()
	{
		// LOAD TITLE
		$this->data['title'] = 'Hari Libur';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Hari Libur';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/pengaturan/libur.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/pengaturan/harilibur.js') . '"></script>';

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

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/pengaturan/presensistaf.js') . '"></script>';

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

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/pengaturan/presensisiswa.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('presensi_siswa', $mydata, TRUE);
		$this->display();
	}
}
