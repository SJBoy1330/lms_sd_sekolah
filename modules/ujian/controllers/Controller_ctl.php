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
		$mydata['breadcrumb']['menu'] = 'Grup Soal';

		// LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// Load JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/banksoal.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('bank_soal', $mydata, TRUE);
		$this->display();
	}

	public function grup_soal()
	{
		// LOAD TITLE
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Bank Soal';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/ujian/soal.css') . '">';

		// Load JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/bank_soal.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('grup_soal', $mydata, TRUE);
		$this->display();
	}

	public function paket_ujian()
	{
		// LOAD TITLE
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Paket Ujian';

		// LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('paket_ujian', $mydata, TRUE);
		$this->display();
	}

	public function detail_paket()
	{
		// LOAD TITLE
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Paket Ujian';

		// LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_paket', $mydata, TRUE);
		$this->display();
	}

	public function tambah_soal()
	{
		// LOAD TITLE
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Tambah Soal';

		// LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('tambah_soal', $mydata, TRUE);
		$this->display();
	}

	public function tambah_peserta_ujian()
	{
		// LOAD TITLE
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Tambah Peserta';

		// LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('tambah_peserta_ujian', $mydata, TRUE);
		$this->display();
	}

	public function koreksi_ujian()
	{
		// LOAD TITLE
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Koreksi Jawaban';

		// LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('koreksi_ujian', $mydata, TRUE);
		$this->display();
	}

	public function hasil_ujian()
	{
		// LOAD TITLE
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Hasil Ujian';

		// LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('hasil_ujian', $mydata, TRUE);
		$this->display();
	}

	public function detail_hasil_ujian()
	{
		// LOAD TITLE
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Hasil Ujian';

		// LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_hasil_ujian', $mydata, TRUE);
		$this->display();
	}

	public function monitoring_ujian()
	{
		// LOAD TITLE
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Monitoring Ujian';

		// LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('monitoring_ujian', $mydata, TRUE);
		$this->display();
	}

	public function tambah_paket_ujian()
	{
		// LOAD TITLE
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Tambah Paket Ujian';

		// LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('tambah_paket_ujian', $mydata, TRUE);
		$this->display();
	}

	public function analisa_soal()
	{
		// LOAD TITLE
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Analisa Butir Soal';

		// LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('analisa_soal', $mydata, TRUE);
		$this->display();
	}

	public function detail_analisa_soal()
	{
		// LOAD TITLE
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Detail Analisa Soal';

		// LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_analisa_soal', $mydata, TRUE);
		$this->display();
	}

	public function instruksi_ujian()
	{
		// LOAD TITLE
		$this->data['title'] = 'Ujian';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Instruksi Ujian';

		// LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// Load JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/instruksi_ujian.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('instruksi_ujian', $mydata, TRUE);
		$this->display();
	}
}
