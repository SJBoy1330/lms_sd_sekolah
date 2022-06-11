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
		$this->data['title'] = 'Rekap';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/laporan/style.css') . '">';
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/laporan/stylettes.css') . '">';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Rekap Presensi Siswa';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}

	public function presensi_kelas()
	{
		// LOAD TITLE
		$this->data['title'] = 'Rekap';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Rekap Presensi Kelas';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/laporan/presensikelas.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('presensi_kelas', $mydata, TRUE);
		$this->display();
	}

	public function presensi_mapel_guru()
	{
		// LOAD TITLE
		$this->data['title'] = 'Rekap';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Presensi Mapel Guru';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/laporan/presensimapelguru.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('presensi_mapel_guru', $mydata, TRUE);
		$this->display();
	}

	public function presensi_staf()
	{
		// LOAD TITLE
		$this->data['title'] = 'Rekap';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Presensi Staf';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/laporan/presensistaf.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('presensi_staf', $mydata, TRUE);
		$this->display();
	}

	public function detail_presensi_staf()
	{
		// LOAD TITLE
		$this->data['title'] = 'Rekap';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Detail Presensi Staf';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_presensi_staf', $mydata, TRUE);
		$this->display();
	}

	public function jurnal_guru()
	{
		// LOAD TITLE
		$this->data['title'] = 'Jurnal';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Rekap Jurnal Guru';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/laporan/jurnalguru.js') . '"></script>';


		// LOAD VIEW
		$this->data['content'] = $this->load->view('jurnal_guru', $mydata, TRUE);
		$this->display();
	}

	public function jurnal_staf()
	{
		// LOAD TITLE
		$this->data['title'] = 'Jurnal';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Rekap Jurnal Staf';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/laporan/jurnalstaf.js') . '"></script>';


		// LOAD VIEW
		$this->data['content'] = $this->load->view('jurnal_staf', $mydata, TRUE);
		$this->display();
	}

	public function sisa_tagihan()
	{
		// LOAD TITLE
		$this->data['title'] = 'Tagihan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Laporan Sisa Tagihan';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('sisa_tagihan', $mydata, TRUE);
		$this->display();
	}

	public function tagihan()
	{
		// LOAD TITLE
		$this->data['title'] = 'Tagihan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Laporan Tagihan';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('tagihan', $mydata, TRUE);
		$this->display();
	}

	public function pembayaran()
	{
		// LOAD TITLE
		$this->data['title'] = 'Tagihan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Laporan Pembayaran';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('pembayaran', $mydata, TRUE);
		$this->display();
	}

	public function laporan_ujian()
	{
		// LOAD TITLE
		$this->data['title'] = 'Laporan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Laporan Ujian';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('laporan_ujian', $mydata, TRUE);
		$this->display();
	}
}
