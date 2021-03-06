<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		access_url(['pengaturan/modal_tambah_edit_hari_libur']);

		$this->idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
	}


	public function index()
	{
		// LOAD TITLE
		$this->data['title'] = 'Pengaturan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Identitas Sekolah';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/identitas-sekolah.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/pengaturan/identitas.js') . '"></script>';

		// Meta Data
		$request_filter = ['id_sekolah' => $this->idsekolah];
		$response = null;

		if (is_siswa()) {
			$response = curl_get_wali('profil/tentang_sekolah', $request_filter);
		}

		if (
			is_staf() || is_operator() || is_admin()
		) {
			$response = curl_get_staf('profil/tentang_sekolah', $request_filter);
		}

		if (is_wali()) {
			$response = curl_get_wali('profil/tentang_sekolah', $request_filter);
		}

		$mydata['data_sekolah'] = $response->data;

		// LOAD VIEW
		$this->data['content'] = $this->load->view('identitas_sekolah', $mydata, TRUE);
		$this->display();
	}

	public function hari_libur()
	{
		// LOAD TITLE
		$this->data['title'] = 'Hari Libur';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Hari Libur';

		// Meta Data
		$response = curl_get('hari_libur', ['id_sekolah' => $this->idsekolah]);
		$mydata['data_hari_libur'] = $response->data;

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/pengaturan/libur.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/pengaturan/harilibur.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('hari_libur', $mydata, TRUE);
		$this->display();
	}

	public function presensi_staf()
	{
		// LOAD TITLE
		$this->data['title'] = 'Pengaturan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Presensi Staf';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/pengaturan/presensistaf.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('presensi_staf', $mydata, TRUE);
		$this->display();
	}

	public function presensi_siswa()
	{
		// LOAD TITLE
		$this->data['title'] = 'Pengaturan';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Presensi Siswa';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/pengaturan/presensisiswa.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('presensi_siswa', $mydata, TRUE);
		$this->display();
	}

	public function modal_tambah_edit_hari_libur()
	{
		$id_hari_libur = $this->input->post('id_hari_libur');
		$mydata['is_edit'] = $id_hari_libur !== null;

		if ($mydata['is_edit']) {
			$mydata['modal_title'] = "Ubah Hari Libur";
			$mydata['url_action'] = base_url("func_pengaturan/edit_hari_libur/" . $id_hari_libur);

			$response = curl_get('hari_libur', ['id_sekolah' => $this->idsekolah, 'id_hari_libur' => $id_hari_libur]);
			$mydata['data_hari_libur'] = $response->data;
		} else {
			$mydata['modal_title'] = "Tambah Hari Libur";
			$mydata['url_action'] = base_url("func_pengaturan/insert_hari_libur");
		}

		$this->load->view("modal/modal_tambah_edit_hari_libur", $mydata);
	}
}
