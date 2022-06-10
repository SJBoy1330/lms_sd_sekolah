<?php defined('BASEPATH') or exit('No direct script access allowed');

class function_ctl extends MY_Login
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

    public function login_siswa()
    {
        $arrVar['kode_sekolah'] = 'Kode sekolah';
        $arrVar['username']     = 'Username';
        $arrVar['password']   = 'Kata sandi';
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
                'kode_sekolah' => $this->input->post('kode_sekolah'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );
            $response = curl_post('login/siswa', $request_data);

            $data['status'] = !$response->error;
            if ($response->error) {
                $data['alert']['title'] = 'PERINGATAN';
                $data['alert']['message'] = $response->message;
            } else {
                $userdata = [
                    "lms_sekolah_id_sekolah" => $response->data->id_sekolah,
                    "lms_sekolah_id_user" => $response->data->id_siswa,
                    "lms_sekolah_role" => $response->data->role,
                    "lms_sekolah_server" => $response->data->server
                ];
                $this->session->set_userdata($userdata);

                $data['redirect'] = base_url('dashboard');
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

    public function login_staf()
    {
        $arrVar['kode_sekolah'] = 'Kode sekolah';
        $arrVar['username']     = 'Username';
        $arrVar['password']   = 'Kata sandi';
        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);

            if (!$$var) {
                $data['required'][] = ['req_staf_' . $var, $value . ' tidak boleh kosong !'];
                $arrAccess[] = false;
            } else {
                $arrAccess[] = true;
            }
        }

        if (!in_array(false, $arrAccess)) {
            $request_data = array(
                'kode_sekolah' => $this->input->post('kode_sekolah'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );
            $response = curl_post('login/staf', $request_data);

            $data['status'] = !$response->error;
            if ($response->error) {
                $data['alert']['title'] = 'PERINGATAN';
                $data['alert']['message'] = $response->message;
            } else {
                $userdata = [
                    "lms_sekolah_id_sekolah" => $response->data->id_sekolah,
                    "lms_sekolah_id_user" => $response->data->id_staf,
                    "lms_sekolah_role" => $response->data->role,
                    "lms_sekolah_server" => $response->data->server
                ];
                $this->session->set_userdata($userdata);

                $data['redirect'] = base_url('dashboard');
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

    public function login_wali()
    {
        $arrVar['kode_sekolah'] = 'Kode sekolah';
        $arrVar['username']     = 'Username';
        $arrVar['password']   = 'Kata sandi';
        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);

            if (!$$var) {
                $data['required'][] = ['req_wali_' . $var, $value . ' tidak boleh kosong !'];
                $arrAccess[] = false;
            } else {
                $arrAccess[] = true;
            }
        }

        if (!in_array(false, $arrAccess)) {
            $request_data = array(
                'kode_sekolah' => $this->input->post('kode_sekolah'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );
            $response = curl_post('login/wali', $request_data);

            $data['status'] = !$response->error;
            if ($response->error) {
                $data['alert']['title'] = 'PERINGATAN';
                $data['alert']['message'] = $response->message;
            } else {
                $userdata = [
                    "lms_sekolah_id_sekolah" => $response->data->id_sekolah,
                    "lms_sekolah_id_user" => $response->data->id_wali,
                    "lms_sekolah_role" => $response->data->role,
                    "lms_sekolah_server" => $response->data->server
                ];
                $this->session->set_userdata($userdata);

                $data['redirect'] = base_url('dashboard');
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
