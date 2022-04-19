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
		$this->data['title'] = 'Keuangan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Kategori Biaya';

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

		// LOAD VIEW
		$this->data['content'] = $this->load->view('transaksi_keuangan', $mydata, TRUE);
		$this->display();
	}
}
