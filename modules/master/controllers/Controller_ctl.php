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

		//LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/master/siswa.js"></script>';

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

		//LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/master/kelas.js"></script>';

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

		//LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/master/guru.js"></script>';

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

		//LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/master/matapelajaran.js"></script>';

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

		//LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/master/bidang_tugas.js"></script>';


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

		//LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/master/jenis_tugas_staf.js"></script>';

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

	public function modal_edit_tambah()
	{
		$id_staf = $this->input->post('id_staf');
		$mydata['is_edit'] = $id_staf !== null;

		if ($mydata['is_edit']) {
			$mydata['modal_title'] = "Ubah Staf";
			$mydata['url_action'] = "func_master/edit_staf/" . $id_staf;

			$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');

			$request_filter = [
				'id_sekolah' => $idsekolah,
				'id_staf' => $id_staf
			];

			$response = curl_get('staf', $request_filter);
			$mydata['staf_data'] = $response->data;
		} else {
			$mydata['modal_title'] = "Tambah Staf";
			$mydata['url_action'] = "func_master/insert_staf";
		}

		$this->load->view("modal/modal_tambah_edit_staf", $mydata);
	}
}
