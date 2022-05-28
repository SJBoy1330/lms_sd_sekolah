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
		$this->data['title'] = 'Informasi';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Kategori Berita';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('kategori_berita', $mydata, TRUE);
		$this->display();
	}

    public function berita()
	{
		// LOAD TITLE
		$this->data['title'] = 'Informasi';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Berita';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('berita', $mydata, TRUE);
		$this->display();
	}

	public function pengumuman()
	{
		// LOAD TITLE
		$this->data['title'] = 'Informasi';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Pengumuman';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('pengumuman', $mydata, TRUE);
		$this->display();
	}
}
