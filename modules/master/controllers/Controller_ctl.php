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
		$this->data['title'] = 'Master';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Staf';

		// Load Meta Data
		$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');

		$request_filter = [
			'id_sekolah' => $idsekolah,
		];

		$response = curl_get('staf', $request_filter);
		$mydata['data_staf'] = $response->data;

		// Load JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/master/staf.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}

	public function siswa()
	{
		// LOAD TITLE
		$this->data['title'] = 'Master';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Siswa';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('siswa', $mydata, TRUE);
		$this->display();
	}

	public function kelas()
	{
		// LOAD TITLE
		$this->data['title'] = 'Master';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Kelas';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('kelas', $mydata, TRUE);
		$this->display();
	}

	public function guru()
	{
		// LOAD TITLE
		$this->data['title'] = 'Master';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Guru';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('guru', $mydata, TRUE);
		$this->display();
	}

	public function mapel()
	{
		// LOAD TITLE
		$this->data['title'] = 'Master';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Mata Pelajaran';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('mata_pelajaran', $mydata, TRUE);
		$this->display();
	}

	public function bidang_tugas()
	{
		// LOAD TITLE
		$this->data['title'] = 'Master';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Bidang Tugas';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('bidang_tugas', $mydata, TRUE);
		$this->display();
	}

	public function jenis_tugas_staf()
	{
		// LOAD TITLE
		$this->data['title'] = 'Master';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Jenis Tugas Staf';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('jenis_tugas_staf', $mydata, TRUE);
		$this->display();
	}

	public function import()
	{
		// LOAD TITLE
		$this->data['title'] = 'Master';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Jenis Tugas Staf';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('import', $mydata, TRUE);
		$this->display();
	}

	// MODAL
	public function modal_detail_staf()
	{
		$id_staf = $this->input->post('id_staf');

		// Load Meta Data
		$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');

		$request_filter = [
			'id_sekolah' => $idsekolah,
			'id_staf' => $id_staf
		];

		$response = curl_get('staf', $request_filter);

		$this->load->view("modal/modal_detail_staf", $response->data);
	}
}
