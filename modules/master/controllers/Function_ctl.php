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

    public function export_pdf_staf()
    {
        $idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');

        $response = curl_get('staf', ['id_sekolah' => $idsekolah]);
        $data['data_staf'] = $response->data;

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "export_staf.pdf";
        $this->pdf->load_view('pdf/export_pdf_staf.php', $data);
    }

    public function export_pdf_siswa()
    {
        $idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');

        $response_siswa = curl_get('siswa', ['id_sekolah' => $idsekolah]);
        $data['data_siswa'] = $response_siswa->data;

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "export_siswa.pdf";
        $this->pdf->load_view('pdf/export_pdf_siswa.php', $data);
    }

    public function insert_siswa()
    {
        $arrVar['idkelas'] = 'Kelas';
        $arrVar['agama'] = 'Agama';
        $arrVar['gender'] = 'Jenis Kelamin';
        $arrVar['status_aktif'] = 'Aktif';
        $arrVar['idwali'] = 'Orang Tua';
        $arrVar['nama'] = 'Nama';
        $arrVar['nis'] = 'NIS';
        $arrVar['username'] = 'Username';
        $arrVar['sandi'] = 'Kata Sandi Siswa';
        $arrVar['sandi_ulang'] = 'Konfirmasi Kata Sandi Siswa';

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

            if ($_FILES['gambar']['error'] === 0) {
                $request_file['foto'] = $_FILES['gambar'];
            } else {
                $request_file = null;
            }

            $request_data = array(
                'id_sekolah' => $idsekolah,
                'id_kelas' => $this->input->post('idkelas'),
                'id_agama' => $this->input->post('agama'),
                'gender' => $this->input->post('gender'),
                'aktif' => $this->input->post('status_aktif'),
                'id_wali' => $this->input->post('idwali'),
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('sandi'),
                'repeat_password' => $this->input->post('sandi_ulang'),
                'alamat' => $this->input->post('alamat'),
                'telp' => $this->input->post('telp'),
                'email' => $this->input->post('email'),
            );

            $response = curl_post_file('siswa/tambah', $request_data, $request_file);

            if ($response) {
                $data['response_raw'] = $response;
                $data['gambar'] = $_FILES['gambar'];

                $data['status'] = !$response->error;
                if ($response->error) {
                    $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
                } else {
                    $data['redirect'] = base_url('master/siswa');
                    $data['alert'] = $this->set_alert('PEMBERITAHUAN', $response->message);
                }
            } else {
                $data['status'] = false;
                $data['alert'] = $this->set_alert('PERINGATAN', "Server tidak memberi response, hubungi");
            }
            echo json_encode($data);
            exit;
        } else {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
    }

    public function insert_kelas()
    {
        $arrVar['tahun_ajaran'] = 'Tahun Ajaran';
        $arrVar['tingkat'] = 'Tingkat';
        $arrVar['wali_kelas'] = 'Wali Kelas';
        $arrVar['nama_kelas'] = 'Nama Kelas';

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
                'id_tahun_ajaran' => $this->input->post('tahun_ajaran'),
                'id_tingkat' => $this->input->post('tingkat'),
                'id_staf' => $this->input->post('wali_kelas'),
                'nama' => $this->input->post('nama_kelas'),
            );

            $response = curl_post('kelas/tambah', $request_data);

            if ($response) {
                $data['status'] = !$response->error;
                if ($response->error) {
                    $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
                } else {
                    $data['redirect'] = base_url('master/kelas');
                    $data['alert'] = $this->set_alert('PEMBERITAHUAN', $response->message);
                }
            } else {
                $data['status'] = false;
                $data['alert'] = $this->set_alert('PERINGATAN', "Server tidak memberi response, hubungi pengembang!");
            }
            echo json_encode($data);
            exit;
        } else {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
    }

    public function edit_kelas($id_kelas)
    {
        $arrVar['tahun_ajaran'] = 'Tahun Ajaran';
        $arrVar['tingkat'] = 'Tingkat';
        $arrVar['wali_kelas'] = 'Wali Kelas';
        $arrVar['nama_kelas'] = 'Nama Kelas';

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
                'id_kelas' => $id_kelas,
                'id_tahun_ajaran' => $this->input->post('tahun_ajaran'),
                'id_tingkat' => $this->input->post('tingkat'),
                'id_staf' => $this->input->post('wali_kelas'),
                'nama' => $this->input->post('nama_kelas'),
            );

            $response = curl_post('kelas/edit', $request_data);

            $data['status'] = !$response->error;
            if ($response->error) {
                $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
            } else {
                $data['redirect'] = base_url('master/kelas');
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

    public function hapus_kelas()
    {
        $idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
        $request_data = array(
            'id_sekolah' => $idsekolah,
            'id_kelas' => $this->input->post("id_kelas"),
            'id_staf' => $this->input->post("id_staf"),
        );

        $response = curl_post('kelas/hapus', $request_data);
        $data['status'] = !$response->error;
        if ($response->error) {
            $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
        } else {
            $data['redirect'] = base_url('master/kelas');
            $data['alert'] = $this->set_alert('PEMBERITAHUAN', $response->message);
        }
        echo json_encode($data);
        exit;
    }

    public function insert_bidang_tugas()
    {
        $arrVar['nama'] = 'Nama Bidang Tugas';

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
                'nama' => $this->input->post('nama'),
            );

            $response = curl_post('bidang_tugas/tambah', $request_data);

            if ($response) {
                $data['status'] = !$response->error;
                if ($response->error) {
                    $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
                } else {
                    $data['redirect'] = base_url('master/bidang_tugas');
                    $data['alert'] = $this->set_alert('PEMBERITAHUAN', $response->message);
                }
            } else {
                $data['status'] = false;
                $data['alert'] = $this->set_alert('PERINGATAN', "Server tidak memberi response, hubungi pengembang!");
            }
            echo json_encode($data);
            exit;
        } else {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
    }

    public function edit_bidang_tugas($id_bidang_tugas)
    {
        $arrVar['nama'] = 'Nama Bidang Tugas';

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
                'id_bidang_tugas' => $id_bidang_tugas,
                'nama' => $this->input->post('nama'),
            );

            $response = curl_post('kelas/edit', $request_data);

            $data['status'] = !$response->error;
            if ($response->error) {
                $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
            } else {
                $data['redirect'] = base_url('master/kelas');
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

    public function hapus_bidang_tugas($id_bidang_tugas)
    {
        $idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
        $request_data = array(
            'id_sekolah' => $idsekolah,
            'id_bidang_tugas' => $id_bidang_tugas,
        );

        $response = curl_post('bidang_tugas/hapus', $request_data);
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

    public function insert_mapel()
    {
        $arrVar['tingkat'] = 'Tingkat';
        $arrVar['nama'] = 'Nama Pelajaran';

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
                'nama' => $this->input->post('nama'),
                'id_tingkat' => $this->input->post('tingkat'),
            );

            $response = curl_post('pelajaran/tambah', $request_data);

            if ($response) {
                $data['status'] = !$response->error;
                if ($response->error) {
                    $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
                } else {
                    $data['redirect'] = base_url('master/mapel');
                    $data['alert'] = $this->set_alert('PEMBERITAHUAN', $response->message);
                }
            } else {
                $data['status'] = false;
                $data['alert'] = $this->set_alert('PERINGATAN', "Server tidak memberi response, hubungi pengembang!");
            }
            echo json_encode($data);
            exit;
        } else {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
    }

    public function edit_mapel($idmapel)
    {
        $arrVar['tingkat'] = 'Tingkat';
        $arrVar['nama'] = 'Nama Pelajaran';

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
                'id_pelajaran' => $idmapel,
                'nama' => $this->input->post('nama'),
                'id_tingkat' => $this->input->post('tingkat'),
            );

            $response = curl_post('pelajaran/edit', $request_data);

            if ($response) {
                $data['status'] = !$response->error;
                if ($response->error) {
                    $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
                } else {
                    $data['redirect'] = base_url('master/mapel');
                    $data['alert'] = $this->set_alert('PEMBERITAHUAN', $response->message);
                }
            } else {
                $data['status'] = false;
                $data['alert'] = $this->set_alert('PERINGATAN', "Server tidak memberi response, hubungi pengembang!");
            }
            echo json_encode($data);
            exit;
        } else {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
    }

    public function hapus_mapel($id_mapel)
    {
        $idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
        $id_staf = $this->session->userdata('lms_sekolah_id_user');
        $request_data = array(
            'id_sekolah' => $idsekolah,
            'id_pelajaran' => $id_mapel,
            'id_staf' => $id_staf,
        );

        $response = curl_post('pelajaran/hapus', $request_data);
        $data['status'] = !$response->error;
        if ($response->error) {
            $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
        } else {
            $data['redirect'] = base_url('master/mapel');
            $data['alert'] = $this->set_alert('PEMBERITAHUAN', $response->message);
        }
        echo json_encode($data);
        exit;
    }

    public function insert_jenis_tugas()
    {
        $arrVar['bidang_tugas'] = 'Nama Bidang Tugas';
        $arrVar['nama'] = 'Nama Jenis Tugas Bidang Staf';

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
                'nama' => $this->input->post('nama'),
                'id_bidang_tugas' => $this->input->post('bidang_tugas'),
            );

            $response = curl_post('jenis_tugas_staf/tambah', $request_data);

            if ($response) {
                $data['status'] = !$response->error;
                if ($response->error) {
                    $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
                } else {
                    $data['redirect'] = base_url('master/jenis_tugas_staf');
                    $data['alert'] = $this->set_alert('PEMBERITAHUAN', $response->message);
                }
            } else {
                $data['status'] = false;
                $data['alert'] = $this->set_alert('PERINGATAN', "Server tidak memberi response, hubungi pengembang!");
            }
            echo json_encode($data);
            exit;
        } else {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
    }

    public function edit_jenis_tugas($idjenis_tugas)
    {
        $arrVar['bidang_tugas'] = 'Nama Bidang Tugas';
        $arrVar['nama'] = 'Nama Jenis Tugas Bidang Staf';

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
                'id_jenis_tugas_staf' => $idjenis_tugas,
                'id_bidang_tugas' => $this->input->post('bidang_tugas'),
                'nama' => $this->input->post('nama'),
            );

            $response = curl_post('jenis_tugas_staf/edit', $request_data);

            if ($response) {
                $data['status'] = !$response->error;
                if ($response->error) {
                    $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
                } else {
                    $data['redirect'] = base_url('master/jenis_tugas_staf');
                    $data['alert'] = $this->set_alert('PEMBERITAHUAN', $response->message);
                }
            } else {
                $data['status'] = false;
                $data['alert'] = $this->set_alert('PERINGATAN', "Server tidak memberi response, hubungi pengembang!");
            }
            echo json_encode($data);
            exit;
        } else {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
    }

    public function hapus_jenis_tugas($idjenis_tugas)
    {
        $idsekolah = $this->session->userdata('lms_sekolah_id_sekolah');
        $request_data = array(
            'id_sekolah' => $idsekolah,
            'id_jenis_tugas_staf' => $idjenis_tugas,
        );

        $response = curl_post('jenis_tugas_staf/delete', $request_data);
        $data['status'] = !$response->error;
        if ($response->error) {
            $data['alert'] = $this->set_alert('PERINGATAN', $response->message);
        } else {
            $data['redirect'] = base_url('master/jenis_tugas_staf');
            $data['alert'] = $this->set_alert('PEMBERITAHUAN', $response->message);
        }
        echo json_encode($data);
        exit;
    }

}
