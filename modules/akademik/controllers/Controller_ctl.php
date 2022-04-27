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
		$this->data['title'] = 'Akademik';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Waktu';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('waktu', $mydata, TRUE);
		$this->display();
	}

    public function jadwal_mengajar()
	{
		// LOAD TITLE
		$this->data['title'] = 'Akademik';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Jadwal Mengajar';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('jadwal_mengajar', $mydata, TRUE);
		$this->display();
	}

	public function bab()
	{
		// LOAD TITLE
		$this->data['title'] = 'Akademik';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Bab';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('bab', $mydata, TRUE);
		$this->display();
	}

	public function materi()
	{
		// LOAD TITLE
		$this->data['title'] = 'Akademik';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Materi';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('materi', $mydata, TRUE);
		$this->display();
	}

	public function materi_dokumen()
	{
		// LOAD TITLE
		$this->data['title'] = 'Akademik';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Materi Dokumen';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('materi_dokumen', $mydata, TRUE);
		$this->display();
	}

	public function materi_video()
	{
		// LOAD TITLE
		$this->data['title'] = 'Akademik';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Materi Video';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('materi_video', $mydata, TRUE);
		$this->display();
	}

	public function kbm()
	{
		// LOAD TITLE
		$this->data['title'] = 'Akademik';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'KBM';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/kbm/kbm.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('kbm', $mydata, TRUE);
		$this->display();
	}

	public function tugas()
	{
		// LOAD TITLE
		$this->data['title'] = 'Akademik';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Tugas';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/tugas/tugas.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('tugas', $mydata, TRUE);
		$this->display();
	}

	public function surat_ijin()
	{
		// LOAD TITLE
		$this->data['title'] = 'Akademik';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Surat Ijin';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/surat_ijin/surat_ijin.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('surat_ijin', $mydata, TRUE);
		$this->display();
	}
}