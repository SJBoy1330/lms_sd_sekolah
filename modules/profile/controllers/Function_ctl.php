<?php

use FontLib\Table\Type\post;

defined('BASEPATH') or exit('No direct script access allowed');

class function_ctl extends MY_Admin
{
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
    }

    public function index()
    {
        echo "nyambung";
    }

    public function edit_profile()
    {
        $arrVar['username'] = 'Username';
        $arrVar['nama'] = 'Nama';
        $arrVar['alamat'] = 'Alamat';
        $arrVar['telp'] = 'No. Telepon';
        $arrVar['email']     = 'Email';
        $arrVar['kelamin']   = 'Jenis Kelamin';
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
                'id_sekolah' => $this->session->userdata('lms_sekolah_id_sekolah'),
                'id_staf' => $this->session->userdata('lms_sekolah_id_user'),
                'username' => $this->input->post('username'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telp' => $this->input->post('telp'),
                'email' => $this->input->post('email'),
                'gender' => $this->input->post('kelamin'),
            );
            $response = curl_post_staf('profil/edit', $request_data);

            $data['status'] = !$response->error;
            if ($response->error) {
                $data['alert']['title'] = 'PERINGATAN';
                $data['alert']['message'] = $response->message;
            } else {
                $data['redirect'] = base_url('profile');
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

    public function ubah_password()
    {
        $arrVar['password_lama'] = 'Kata Sandi Siswa';
        $arrVar['password_baru'] = 'Kata Sandi Baru';
        $arrVar['konfirmasi_password'] = 'Ulangi Kata Sandi';
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
                'id_sekolah' => $this->session->userdata('lms_sekolah_id_sekolah'),
                'id_staf' => $this->session->userdata('lms_sekolah_id_user'),
                'old_password' => $this->input->post('password_lama'),
                'new_password' => $this->input->post('password_baru'),
                'repeat_password' => $this->input->post('konfirmasi_password'),
            );
            $response = curl_post_staf('profil/edit_password', $request_data);

            $data['status'] = !$response->error;
            if ($response->error) {
                $data['alert']['title'] = 'PERINGATAN';
                $data['alert']['message'] = $response->message;
            } else {
                $data['redirect'] = base_url('profile');
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

    public function ubah_foto()
    {
        $request_file['foto'] = $_FILES['foto'];
        $request_data = array(
            'id_sekolah' => $this->session->userdata('lms_sekolah_id_sekolah'),
            'id_staf' => $this->session->userdata('lms_sekolah_id_user'),
        );
        $response = curl_post_file_staf('profil/edit_foto', $request_data, $request_file);

        $data['status'] = !$response->error;
        if ($response->error) {
            $data['alert']['title'] = 'PERINGATAN';
            $data['alert']['message'] = $response->message;
        } else {
            $data['redirect'] = base_url('profile');
            $data['alert']['title'] = 'PEMBERITAHUAN';
            $data['alert']['message'] = $response->message;
        }

        echo json_encode($data);
        exit;
    }
}
