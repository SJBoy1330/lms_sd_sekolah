<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		access_url([
			'master/modal_detail_staf',
			'master/modal_edit_tambah',
			'master/modal_detail_siswa',
			'master/modal_edit_tambah_siswa',
			'master/modal_edit_tambah_kelas',
			'master/modal_edit_tambah_bidang_tugas',
			'master/modal_edit_tambah_mapel',
			'master/modal_edit_tambah_jenis_tugas'
		]);
	}


	public function index()
	{
		redirect('master/staf');
	}
	public function staf()
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

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/master/staf.css') . '">';

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

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/master/siswa.css') . '">';

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

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/master/kelas.css') . '">';

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

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/master/guru.css') . '">';


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

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/master/wali.css') . '">';

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

		// Meta Data
		$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');

		$request_filter['id_sekolah'] = $idsekolah;
		if ($_GET['tingkat']) {
			$request_filter['id_tingkat'] = $_GET['tingkat'];
		}

		$response_mapel = curl_get('pelajaran', $request_filter);
		$mydata['data_mapel'] = $response_mapel->data;

		$response_tingkat = curl_get('atribut/tingkat', ['id_sekolah' => $idsekolah]);
		$mydata['tingkat'] = $response_tingkat->data;

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/master/matapelajaran.css') . '">';


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

		// Meta Data
		$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
		$response_bidang_tugas = curl_get('bidang_tugas', ['id_sekolah' => $idsekolah]);
		$mydata['data_bidang_tugas'] = $response_bidang_tugas->data;

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/master/bidang_tugas.css') . '">';


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

		// Meta Data
		$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
		$request_filter['id_sekolah'] = $idsekolah;
		if ($_GET['bidang_tugas']) {
			$request_filter['id_bidang_tugas'] = $_GET['bidang_tugas'];
		}
		$response_bidang_tugas = curl_get('bidang_tugas', $request_filter);
		$mydata['data_bidang_tugas'] = $response_bidang_tugas->data;

		$response_jenis_tugas = curl_get('jenis_tugas_staf', ['id_sekolah' => $idsekolah]);
		$mydata['data_jenis_tugas'] = $response_jenis_tugas->data;

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/master/jenis_tugas_staf.css') . '">';


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

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/master/import.css') . '">';

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

		$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
		$response_bidang_tugas = curl_get('bidang_tugas', ['id_sekolah' => $idsekolah]);
		$mydata['bidang_tugas'] = $response_bidang_tugas->data;

		if ($mydata['is_edit']) {
			$mydata['modal_title'] = "Ubah Staf";
			$mydata['url_action'] = "func_master/edit_staf/" . $id_staf;


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

	public function modal_edit_tambah_kelas()
	{
		$id_kelas = $this->input->post('id_kelas');
		$mydata['is_edit'] = $id_kelas !== null;

		$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
		$response_tahun_ajaran = curl_get('atribut/tahun_ajaran');
		$mydata['tahun_ajaran'] = $response_tahun_ajaran->data;

		$response_tingkat = curl_get('atribut/tingkat', ['id_sekolah' => $idsekolah]);
		$mydata['tingkat'] = $response_tingkat->data;

		$response_staf = curl_get('staf', ['id_sekolah' => $idsekolah, 'tipe' => '3']);
		$mydata['staf'] = $response_staf->data;

		if ($mydata['is_edit']) {
			$mydata['modal_title'] = "Ubah Kelas";
			$mydata['url_action'] = base_url("func_master/edit_kelas/" . $id_kelas);

			$request_filter = [
				'id_sekolah' => $idsekolah,
				'id_kelas' => $id_kelas
			];

			$response = curl_get('kelas', $request_filter);
			$mydata['kelas_data'] = $response->data;
		} else {
			$mydata['modal_title'] = "Tambah Kelas";
			$mydata['url_action'] = base_url("func_master/insert_kelas");
		}

		$this->load->view("modal/modal_tambah_edit_kelas", $mydata);
	}

	public function modal_edit_tambah_bidang_tugas()
	{
		$id_bidang_tugas = $this->input->post('id_bidang_tugas');
		$mydata['is_edit'] = $id_bidang_tugas !== null;

		if ($mydata['is_edit']) {
			$mydata['modal_title'] = "Ubah Bidang Tugas";
			$mydata['url_action'] = base_url("func_master/edit_bidang_tugas/" . $id_bidang_tugas);

			$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
			$response_bidang_tugas = curl_get('bidang_tugas', ['id_sekolah' => $idsekolah]);
			$mydata['data_bidang_tugas'] = $response_bidang_tugas->data;
		} else {
			$mydata['modal_title'] = "Tambah Bidang Tugas";
			$mydata['url_action'] = base_url("func_master/insert_bidang_tugas");
		}

		$this->load->view("modal/modal_tambah_edit_bidang_tugas", $mydata);
	}

	public function modal_edit_tambah_mapel()
	{
		$id_mapel = $this->input->post('id_mapel');
		$mydata['is_edit'] = $id_mapel !== null;

		$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
		$response_tingkat = curl_get('atribut/tingkat', ['id_sekolah' => $idsekolah]);
		$mydata['tingkat'] = $response_tingkat->data;

		if ($mydata['is_edit']) {
			$mydata['modal_title'] = "Ubah Mata Pelajaran";
			$mydata['url_action'] = base_url("func_master/edit_mapel/" . $id_mapel);

			$response_mapel = curl_get('pelajaran', ['id_sekolah' => $idsekolah, 'id_pelajaran' => $id_mapel]);
			$mydata['data_mapel'] = $response_mapel->data;
		} else {
			$mydata['modal_title'] = "Tambah Mata Pelajaran";
			$mydata['url_action'] = base_url("func_master/insert_mapel");
		}

		$this->load->view("modal/modal_tambah_edit_mapel", $mydata);
	}

	public function modal_edit_tambah_jenis_tugas()
	{
		$id_jenis_tugas = $this->input->post('id_jenis_tugas');
		$mydata['is_edit'] = $id_jenis_tugas !== null;

		$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
		$response_bidang_tugas = curl_get('bidang_tugas', ['id_sekolah' => $idsekolah]);
		$mydata['data_bidang_tugas'] = $response_bidang_tugas->data;

		if ($mydata['is_edit']) {
			$mydata['modal_title'] = "Ubah Jenis Tugas Staf";
			$mydata['url_action'] = base_url("func_master/edit_jenis_tugas/" . $id_jenis_tugas);

			$response_jenis_tugas = curl_get('jenis_tugas_staf', ['id_sekolah' => $idsekolah, 'id_jenis_tugas_staf' => $id_jenis_tugas]);
			$mydata['data_jenis_tugas'] = $response_jenis_tugas->data;
		} else {
			$mydata['modal_title'] = "Tambah Jenis Tugas Staf";
			$mydata['url_action'] = base_url("func_master/insert_jenis_tugas");
		}

		$this->load->view("modal/modal_tambah_edit_jenis_tugas", $mydata);
	}
}
