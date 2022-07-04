<?php

use FontLib\Table\Type\post;

defined('BASEPATH') or exit('No direct script access allowed');

class function_ctl extends MY_Admin
{
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();

        $this->idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
    }

    public function index()
    {
        echo "nyambung";
    }

    public function edit_data_sekolah()
    {
        $arrVar['nama_sekolah'] = 'Nama Sekolah';
        $arrVar['email'] = 'Email Sekolah';
        $arrVar['npsn'] = 'NPSN Sekolah';
        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);

            if (!$$var) {
                $data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
                $arrAccess[] = false;
            } else {
                $arrAccess[] = true;
            }
        }

        if (!in_array(false, $arrAccess)) {
            $request_data = array(
                'id_sekolah' => $this->idsekolah,
                'nama_sekolah' => $this->input->post('nama_sekolah'),
                'email' => $this->input->post('email'),
                'npsn' => $this->input->post('npsn'),
                'telp_sekolah' => $this->input->post('telp_sekolah'),
                'telp_admin' => $this->input->post('telp_admin'),
                'alamat' => $this->input->post('alamat'),
                'telp_keuangan' => $this->input->post('telp_keuangan'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
            );
            $response = curl_post('pengaturan/edit_identitas', $request_data);

            $data['status'] = !$response->error;
            if ($response->error) {
                $data['alert']['title'] = 'PERINGATAN';
                $data['alert']['message'] = $response->message;
            } else {
                $data['redirect'] = base_url('pengaturan');
                $data['alert']['title'] = 'PEMBERITAHUAN';
                $data['alert']['message'] = $response->message;
            }

            echo json_encode($data);
            exit;
        } else {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
    }
}
