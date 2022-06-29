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
		redirect('informasi/kategori_berita');
	}
	public function kategori_berita()
	{
		// LOAD TITLE
		$this->data['title'] = 'Informasi';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Kategori Berita';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/informasi/kategori.js') . '"></script>';

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

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/berita/berita.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/informasi/berita.js') . '"></script>';

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

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/berita/berita.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/informasi/pengumuman.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('pengumuman', $mydata, TRUE);
		$this->display();
	}
}
