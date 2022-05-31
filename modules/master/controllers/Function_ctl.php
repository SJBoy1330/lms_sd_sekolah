<?php defined('BASEPATH') or exit('No direct script access allowed');

class Function_ctl extends MY_Admin
{
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
    }

    public function insert_staf()
    {
        $arrVar['nip'] = 'NIP';
        $arrVar['nama'] = 'Nama';
        $arrVar['username'] = 'Username';
        $arrVar['password'] = 'Password';
        $arrVar['password_ulang'] = 'Password Konfirmasi';
        $arrVar['gender'] = 'Gender';
        $arrVar['bidang_tugas'] = 'Bidang Tugas';
        $arrVar['tipe'] = 'Tipe';

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
            $idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
            $request_file['foto'] = $_FILES['gambar'];
            $request_data = array(
                'id_sekolah' => $idsekolah,
                'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'repeat_password' => $this->input->post('password_ulang'),
                'gender' => $this->input->post('gender'),
                'id_bidang_tugas' => $this->input->post('bidang_tugas'),
                'tipe' => $this->input->post('tipe'),
            );

            $response = curl_post_file('staf/tambah', $request_data, $request_file);

            $data['status'] = !$response->error;
            if ($response->error) {
                $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
            } else {
                $data['redirect'] = base_url('master');
                $data['alert'] = $this->set_alert('PEMBERITAHUAN', $response->message);
            }
            echo json_encode($data);
            exit;
        } else {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
    }

    public function edit_staf($id_staf)
    {
        $arrVar['nip'] = 'NIP';
        $arrVar['nama'] = 'Nama';
        $arrVar['username'] = 'Username';
        $arrVar['gender'] = 'Gender';
        $arrVar['bidang_tugas'] = 'Bidang Tugas';
        $arrVar['tipe'] = 'Tipe';
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
            $idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
            $request_data = array(
                'id_sekolah' => $idsekolah,
                'id_staf' => $id_staf,
                'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'repeat_password' => $this->input->post('password_ulang'),
                'gender' => $this->input->post('gender'),
                'id_bidang_tugas' => $this->input->post('bidang_tugas'),
                'tipe' => $this->input->post('tipe'),
            );

            if ($_FILES['gambar']['error'] === 0) {
                $request_file['foto'] = $_FILES['gambar'];
            } else {
                $request_file = null;
            }

            $response = curl_post_file('staf/edit', $request_data, $request_file);

            $data['status'] = !$response->error;
            if ($response->error) {
                $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
            } else {
                $data['redirect'] = base_url('master');
                $data['alert'] = $this->set_alert('PEMBERITAHUAN', $response->message);
            }
            echo json_encode($data);
            exit;
        } else {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
    }

    public function hapus_staf($id_staf)
    {
        $idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
        $request_data = array(
            'id_sekolah' => $idsekolah,
            'id_staf' => $id_staf,
        );

        $response = curl_post('staf/delete', $request_data);
        $data['status'] = !$response->error;
        if ($response->error) {
            $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
        } else {
            $data['redirect'] = base_url('master');
            $data['alert'] = $this->set_alert('PEMBERITAHUAN', $response->message);
        }
        echo json_encode($data);
        exit;
    }

    public function hapus_staf_multiple()
    {
        $idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
        $request_data = array(
            'id_sekolah' => $idsekolah,
            'id_staf' => $this->input->post('id_staf'),
        );

        $response = curl_post('staf/delete_multiple', $request_data);
        $data['status'] = !$response->error;
        if ($response->error) {
            $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
        } else {
            $data['redirect'] = base_url('master');
            $data['alert'] = $this->set_alert('PEMBERITAHUAN', $response->message);
        }
        echo json_encode($data);
        exit;
    }

    private function set_alert($title, $message)
    {
        $data['title'] = $title;
        $data['message'] = $message;
        return $data;
    }
}
