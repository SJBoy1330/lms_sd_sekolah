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
		$this->data['title'] = 'Keuangan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Kategori Biaya';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/keuangan/kategori.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('kategori_biaya', $mydata, TRUE);
		$this->display();
	}

	public function transaksi_keuangan()
	{
		// LOAD TITLE
		$this->data['title'] = 'Keuangan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Transaksi Keuangan';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/keuangan/transaksi.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('transaksi_keuangan', $mydata, TRUE);
		$this->display();
	}

	public function tagihan_spp()
	{
		// LOAD TITLE
		$this->data['title'] = 'Keuangan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Tagihan Keuangan';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('tagihan_keuangan', $mydata, TRUE);
		$this->display();
	}

	public function rekap_keuangan()
	{
		// LOAD TITLE
		$this->data['title'] = 'Keuangan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Rekap Keuangan';

		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/keuangan/rekap.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('rekap_keuangan', $mydata, TRUE);
		$this->display();
	}

	public function monitoring_keuangan()
	{
		// LOAD TITLE
		$this->data['title'] = 'Keuangan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Monitoring Keuangan';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/keuangan/monitoring.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('monitoring_keuangan', $mydata, TRUE);
		$this->display();
	}
}
