<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		access_url(['master/modal_detail_staf', 'master/modal_edit_tambah', 'master/modal_detail_siswa', 'master/modal_edit_tambah_siswa']);
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

		// Load Meta Data
		$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');

		$response_tahun_ajaran = curl_get('atribut/tahun_ajaran');
		$mydata['tahun_ajaran'] = $response_tahun_ajaran->data;

		$response_tingkat = curl_get('atribut/tingkat', ['id_sekolah' => $idsekolah]);
		$mydata['tingkat'] = $response_tingkat->data;

		$response_kelas = curl_get('kelas', ['id_sekolah' => $idsekolah]);
		$mydata['kelas'] = $response_kelas->data;

		$request_filter = ['id_sekolah' => $idsekolah];
		if ($_GET['tingkat']) {
			$request_filter['id_tingkat'] = $_GET['tingkat'];
		}

		if ($_GET['kelas']) {
			$request_filter['id_kelas'] = $_GET['kelas'];
		}

		if ($_GET['tahun_ajaran']) {
			$request_filter['id_tahun_ajaran'] = $_GET['tahun_ajaran'];
		}

		$response_siswa = curl_get('siswa', $request_filter);
		$mydata['data_siswa'] = $response_siswa->data;

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

		// Load Meta Data
		$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');

		$request_filter['id_sekolah'] = $idsekolah;
		if ($_GET['tahun_ajaran']) {
			$request_filter['id_tahun_ajaran'] = $_GET['tahun_ajaran'];
		}

		$response_kelas = curl_get('kelas', $request_filter);
		$mydata['data_kelas'] = $response_kelas->data;

		$response_tahun_ajaran = curl_get('atribut/tahun_ajaran');
		$mydata['tahun_ajaran'] = $response_tahun_ajaran->data;

		$response_tingkat = curl_get('atribut/tingkat', ['id_sekolah' => $idsekolah]);
		$mydata['tingkat'] = $response_tingkat->data;

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

	public function wali()
	{
		// LOAD TITLE
		$this->data['title'] = 'Master';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Orang Tua';

		//LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/master/wali.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('wali', $mydata, TRUE);
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
	// staf
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

	// siswa
	public function modal_detail_siswa()
	{
		$id_siswa = $this->input->post('id_siswa');

		// Load Meta Data
		$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');

		$request_filter = [
			'id_sekolah' => $idsekolah,
			'id_siswa' => $id_siswa
		];

		$response = curl_get('siswa', $request_filter);

		$this->load->view("modal/modal_detail_siswa", $response->data);
	}

	public function modal_edit_tambah_siswa()
	{
		$id_siswa = $this->input->post('id_siswa');
		$mydata['is_edit'] = $id_siswa !== null;

		$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
		$response_kelas = curl_get('kelas', ['id_sekolah' => $idsekolah]);
		$mydata['kelas'] = $response_kelas->data;

		$response_wali = curl_get('wali', ['id_sekolah' => $idsekolah]);
		$mydata['wali'] = $response_wali->data;

		if ($mydata['is_edit']) {
			$mydata['modal_title'] = "Ubah siswa";
			$mydata['url_action'] = "func_master/edit_siswa/" . $id_siswa;


			$request_filter = [
				'id_sekolah' => $idsekolah,
				'id_siswa' => $id_siswa
			];

			$response = curl_get('siswa', $request_filter);
			$mydata['siswa_data'] = $response->data;
		} else {
			$mydata['modal_title'] = "Tambah Siswa";
			$mydata['url_action'] = base_url("func_master/insert_siswa");
		}

		$this->load->view("modal/modal_tambah_edit_siswa", $mydata);
	}
}
