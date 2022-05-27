<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Login
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
	}


	public function index()
	{
		if ($this->session->userdata('lms_sekolah_id_user')) {
			redirect('dashboard');
		}
		// LOAD TITLE
		$mydata['title'] = 'Landing Page';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/landing/acces.js') . '"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}

	public function logout()
	{
		$this->session->unset_userdata('lms_sd_sekolah_server');
		$this->session->unset_userdata('lms_sekolah_id_sekolah');
		$this->session->unset_userdata('lms_sekolah_role');
		$this->session->unset_userdata('lms_sekolah_id_user');


		$this->session->set_flashdata('judul', 'PEMBERITAHUAN');
		$this->session->set_flashdata('message', 'Anda telah keluar !');
		$this->session->set_flashdata('icon', 'success');
		redirect('auth');
	}
}
