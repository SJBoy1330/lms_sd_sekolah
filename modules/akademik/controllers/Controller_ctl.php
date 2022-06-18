<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		access_url(['akademik/materi_dokumen', 'akademik/materi_video', 'akademik/tugas_siswa', 'akademik/tugas_staf']);
	}


	public function index()
	{
		// LOAD TITLE
		$this->data['title'] = 'Akademik';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Waktu';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/akademik/waktu.js') . '"></script>';


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


		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/akademik/bab.js') . '"></script>';

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

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/akademik/materi.js') . '"></script>';

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

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/akademik/materidokumen.js') . '"></script>';


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

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/akademik/materivideo.js') . '"></script>';


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
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/akademik/kbm.js') . '"></script>';

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
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/akademik/tugas.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('tugas', $mydata, TRUE);
		$this->display();
	}

	public function tugas_siswa()
	{
		// LOAD TITLE
		$this->data['title'] = 'Akademik';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Tugas Siswa';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/akademik/tugas.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/akademik/tugassiswa.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('tugas_siswa', $mydata, TRUE);
		$this->display();
	}

	public function tugas_staf()
	{
		// LOAD TITLE
		$this->data['title'] = 'Akademik';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Tugas Staf';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/akademik/tugas.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/akademik/tugasstaf.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('tugas_staf', $mydata, TRUE);
		$this->display();
	}

	public function surat_ijin()
	{
		// LOAD TITLE
		$this->data['title'] = 'Akademik';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Surat Ijin';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/surat/surat_ijin.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/akademik/suratijin.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('surat_ijin', $mydata, TRUE);
		$this->display();
	}
}
