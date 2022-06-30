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
		$this->data['title'] = 'Profil';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Profil';

		// Meta Data 
		$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
		$idstaf = $this->session->userdata('lms_sekolah_id_user');
		$response = curl_get_staf("profil", ['id_sekolah' => $idsekolah, 'id_staf' => $idstaf]);
		$mydata['data_profile'] = $response->data;

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/profil/profil.css') . '">';

		// Load JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/profile/profile.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('account', $mydata, TRUE);
		$this->display();
	}

	public function ubah_password()
	{
		// LOAD TITLE
		$this->data['title'] = 'Profil';

		// Meta Data 
		$idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
		$idstaf = $this->session->userdata('lms_sekolah_id_user');
		$response = curl_get_staf("profil", ['id_sekolah' => $idsekolah, 'id_staf' => $idstaf]);
		$mydata['data_profile'] = $response->data;

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Ubah Kata Sandi';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('ubah_password', $mydata, TRUE);
		$this->display();
	}
}
