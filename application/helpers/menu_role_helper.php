<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// role constants
define("SISWA", "siswa");
define("STAF", "staf");
define("ADMIN", "admin");

function getRole()
{
    $ci = get_instance();

    return $ci->session->userdata('lms_sekolah_role');
}

function is_siswa()
{
    return getRole() === 'siswa';
}

function is_staf()
{
    return getRole() === 'staf';
}
function is_wali()
{
    return getRole() === 'wali';
}

function is_admin()
{
    return getRole() === 'admin';
}

function is_operator()
{
    return getRole() === 'operator';
}


function get_menu_by_role()
{
    $menu = [];
    $role = getRole();

    $menu_dashboard = get_dashboard();
    $menu_master = get_master();
    $menu_akademik = get_akademik($role);
    $menu_jurnal = get_jurnal();
    $menu_ujian = get_ujian($role);
    $menu_informasi = get_informasi($role);
    $menu_keuangan = get_keuangan();
    $menu_laporan = get_laporan($role);
    $menu_pengaturan = get_pengaturan();

    switch ($role) {
        case SISWA:
            array_push($menu, $menu_dashboard, $menu_akademik, $menu_ujian, $menu_informasi, $menu_laporan);
            break;
        case STAF:
            array_push($menu, $menu_dashboard, $menu_master, $menu_akademik, $menu_jurnal, $menu_ujian, $menu_informasi);
            break;
        case ADMIN:
            array_push($menu, $menu_dashboard, $menu_master, $menu_akademik, $menu_jurnal, $menu_ujian, $menu_informasi, $menu_keuangan, $menu_laporan, $menu_pengaturan);
            break;
    }

    return $menu;
}

function get_dashboard()
{
    $icon = '
        <span class="svg-icon svg-icon-2x">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
            </svg>
        </span>
        ';

    return [
        'menu_name' => 'Dashboard',
        'url' => 'dashboard',
        'icon' => $icon,
        'submenu' => null
    ];
}

function get_master()
{
    $master = [
        'menu_name' => 'Master',
        'url' => null,
        'icon' => '<i class="fa-duotone fa-brain" style="font-size: 2rem;"></i>',
        'submenu' => [
            [
                'menu_name' => 'Staf',
                'url' => 'master',
                'icon' => '<i class="fa-duotone fa-chalkboard-user" style="font-size: 1.3rem;"></i>',
            ],
            [
                'menu_name' => 'Siswa',
                'url' => 'master/siswa',
                'icon' => '<i class="fa-duotone fa-graduation-cap" style="font-size: 1.3rem;"></i>',
            ],
            [
                'menu_name' => 'Kelas',
                'url' => 'master/kelas',
                'icon' => '<i class="fa-duotone fa-screen-users" style="font-size: 1.3rem;"></i>',
            ],
            [
                'menu_name' => 'Guru',
                'url' => 'master/guru',
                'icon' => '<i class="fa-duotone fa-person-chalkboard" style="font-size: 1.3rem;"></i>',
            ],
            [
                'menu_name' => 'Mata Pelajaran',
                'url' => 'master/mapel',
                'icon' => '<i class="fa-brands fa-stack-overflow" style="font-size: 1.3rem;"></i>',
            ],
            [
                'menu_name' => 'Bidang Tugas',
                'url' => 'master/bidang_tugas',
                'icon' => '<i class="fa-duotone fa-list-check" style="font-size: 1.3rem;"></i>',
            ],
            [
                'menu_name' => 'Jenis Tugas Staf',
                'url' => 'master/jenis_tugas_staf',
                'icon' => '<i class="fa-duotone fa-bars-progress" style="font-size: 1.3rem;"></i>',
            ],
            [
                'menu_name' => 'Import',
                'url' => 'master/import',
                'icon' => '<i class="fa-duotone fa-file-import" style="font-size: 1.3rem;"></i>',
            ],
        ]
    ];
    return $master;
}

function get_akademik($role)
{

    $waktu = [
        'menu_name' => 'Waktu',
        'url' => 'akademik',
        'icon' => '<i class="fa-duotone fa-timer" style="font-size: 1.3rem;"></i>',
    ];

    $jadwal_mengajar = [
        'menu_name' => 'Jadwal Mengajar',
        'url' => 'akademik/jadwal_mengajar',
        'icon' => '<i class="fa-duotone fa-calendar-days" style="font-size: 1.3rem;"></i>',
    ];

    $bab = [
        'menu_name' => 'Bab',
        'url' => 'akademik/bab',
        'icon' => '<i class="fa-duotone fa-chart-bar" style="font-size: 1.3rem;"></i>',
    ];

    $materi = [
        'menu_name' => 'Materi',
        'url' => 'akademik/materi',
        'icon' => '<i class="fa-duotone fa-book-open-cover" style="font-size: 1.3rem;"></i>',
    ];

    $kbm = [
        'menu_name' => 'KBM',
        'url' => 'akademik/kbm',
        'icon' => '<i class="fa-duotone fa-screen-users" style="font-size: 1.3rem;"></i>',
    ];

    $tugas = [
        'menu_name' => 'Tugas',
        'url' => 'akademik/tugas',
        'icon' => '<i class="fa-duotone fa-list-check" style="font-size: 1.3rem;"></i>',
    ];

    $surat_ijin = [
        'menu_name' => 'Surat Ijin',
        'url' => 'akademik/surat_ijin',
        'icon' => '<i class="fa-duotone fa-envelope-open-text" style="font-size: 1.3rem;"></i>',
    ];

    $mapel = [
        'menu_name' => 'Mata Pelajaran',
        'url' => 'master/mapel',
        'icon' => '<i class="fa-brands fa-stack-overflow" style="font-size: 1.3rem;"></i>',
    ];


    // main menu
    $akademik = [
        'menu_name' => 'Akademik',
        'url' => null,
        'icon' => '<i class="fa-duotone fa-book-atlas" style="font-size: 2rem;"></i>',
        'submenu' => array()
    ];

    switch ($role) {
        case SISWA:
            array_push($akademik['submenu'], $bab, $materi, $kbm, $tugas, $mapel);
            break;
        case STAF:
            array_push($akademik['submenu'], $jadwal_mengajar, $bab, $materi, $kbm, $tugas);
            break;
        case ADMIN:
            array_push($akademik['submenu'], $waktu, $jadwal_mengajar, $bab, $materi, $kbm, $tugas, $surat_ijin);
            break;
    }

    return $akademik;
}

function get_jurnal()
{
    $jurnal = [
        'menu_name' => 'Jurnal',
        'url' => null,
        'icon' => '<i class="fa-duotone fa-book" style="font-size: 2rem;"></i>',
        'submenu' => [
            [
                'menu_name' => 'Jurnal Staf',
                'url' => 'jurnal',
                'icon' => '<i class="fa-duotone fa-book" style="font-size: 1.3rem;"></i>',
            ],
            [
                'menu_name' => 'Jurnal Guru',
                'url' => 'jurnal/jurnal_guru',
                'icon' => '<i class="fa-duotone fa-book" style="font-size: 1.3rem;"></i>',
            ],
        ]
    ];

    return $jurnal;
}

function get_ujian($role)
{
    $bank_soal = [
        'menu_name' => 'Bank Soal',
        'url' => '',
        'icon' => '<i class="fa-duotone fa-box" style="font-size: 1.3rem;"></i>',
    ];

    $paket_ujian = [
        'menu_name' => 'Paket Ujian',
        'url' => '',
        'icon' => '<i class="fa-duotone fa-box-archive" style="font-size: 1.3rem;"></i>',
    ];

    $analisa_butir_soal = [
        'menu_name' => 'Analisa Butir Soal',
        'url' => '',
        'icon' => '<i class="fa-duotone fa-magnifying-glass-chart" style="font-size: 1.3rem;"></i>',
    ];

    $instruksi_ujian = [
        'menu_name' => 'Instruksi Ujian',
        'url' => '',
        'icon' => '<i class="fa-duotone fa-book-user" style="font-size: 1.3rem;"></i>',
    ];

    $cetak_ujian = [
        'menu_name' => 'Cetak Ujian',
        'url' => '',
        'icon' => '<i class="fa-duotone fa-print" style="font-size: 1.3rem;"></i>',
    ];

    // main menu
    $ujian = [
        'menu_name' => 'Ujian',
        'url' => null,
        'icon' => '<i class="fa-duotone fa-book-bookmark" style="font-size: 2rem;"></i>',
        'submenu' => array()
    ];

    switch ($role) {
        case SISWA:
            array_push($ujian['submenu'], $paket_ujian, $analisa_butir_soal);
            break;
        case STAF || ADMIN:
            array_push($ujian['submenu'], $bank_soal, $paket_ujian, $analisa_butir_soal, $instruksi_ujian, $cetak_ujian);
            break;
    }

    return $ujian;
}

function get_informasi($role)
{

    $kategori_berita = [
        'menu_name' => 'Kategori Berita',
        'url' => 'informasi',
        'icon' => '<i class="fa-duotone fa-folder-open" style="font-size: 1.3rem;"></i>',
    ];

    $berita = [
        'menu_name' => 'Berita',
        'url' => 'informasi/berita',
        'icon' => '<i class="fa-duotone fa-newspaper" style="font-size: 1.3rem;"></i>',
    ];

    $pengumuman = [
        'menu_name' => 'Pengumuman',
        'url' => 'informasi/pengumuman',
        'icon' => '<i class="fa-duotone fa-bullhorn" style="font-size: 1.3rem;"></i>',
    ];


    // main menu
    $informasi = [
        'menu_name' => 'Informasi',
        'url' => null,
        'icon' => '<i class="fa-duotone fa-memo-circle-info" style="font-size: 2rem;"></i>',
        'submenu' => array()
    ];

    switch ($role) {
        case SISWA:
            array_push($informasi['submenu'], $berita, $pengumuman);
            break;
        case STAF || ADMIN:
            array_push($informasi['submenu'], $berita, $pengumuman, $kategori_berita);
            break;
    }

    return $informasi;
}

function get_keuangan()
{
    $keuangan = [
        'menu_name' => 'Keuangan',
        'url' => null,
        'icon' => '<i class="fa-duotone fa-coins" style="font-size: 2rem;"></i>',
        'submenu' => [
            [
                'menu_name' => 'Kategori Biaya',
                'url' => 'keuangan',
                'icon' => '<i class="fa-duotone fa-money-check-pen" style="font-size: 1.3rem;"></i>',
            ],
            [
                'menu_name' => 'Transaksi Keuangan',
                'url' => 'keuangan/transaksi_keuangan',
                'icon' => '<i class="fa-duotone fa-money-simple-from-bracket" style="font-size: 1.3rem;"></i>',
            ],
            [
                'menu_name' => 'Rekap Keuangan',
                'url' => 'keuangan/rekap_keuangan',
                'icon' => '<i class="fa-duotone fa-wallet" style="font-size: 1.3rem;"></i>',
            ],
            [
                'menu_name' => 'Monitoring Keuangan',
                'url' => 'keuangan/monitoring_keuangan',
                'icon' => '<i class="fa-duotone fa-monitor-waveform" style="font-size: 1.3rem;"></i>',
            ],
        ]
    ];

    return $keuangan;
}

function get_laporan($role)
{
    $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="black" />
    <rect x="7" y="17" width="6" height="2" rx="1" fill="black" />
    <rect x="7" y="12" width="10" height="2" rx="1" fill="black" />
    <rect x="7" y="7" width="6" height="2" rx="1" fill="black" />
    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
</svg>';

    $rekap_presensi_siswa = [
        'menu_name' => 'Rekap Presensi Siswa',
        'url' => 'laporan',
        'icon' => $icon,
    ];

    $presensi_kelas = [
        'menu_name' => 'Rekap Presensi Kelas',
        'url' => 'laporan/presensi_kelas',
        'icon' => $icon,
    ];

    $presensi_mapel_guru = [
        'menu_name' => 'Presensi Mapel Guru',
        'url' => 'laporan/presensi_mapel_guru',
        'icon' => $icon,
    ];

    $presensi_staf = [
        'menu_name' => 'Rekap Presensi Staf',
        'url' => 'laporan/presensi_staf',
        'icon' => $icon,
    ];

    $detail_presensi_staf = [
        'menu_name' => 'Detail Presensi Staf',
        'url' => 'laporan/detail_presensi_staf',
        'icon' => $icon,
    ];

    $jurnal_guru = [
        'menu_name' => 'Rekap Jurnal Guru',
        'url' => 'laporan/jurnal_guru',
        'icon' => $icon,
    ];

    $jurnal_staf = [
        'menu_name' => 'Rekap Jurnal Staf',
        'url' => 'laporan/jurnal_staf',
        'icon' => $icon,
    ];

    $sisa_tagihan = [
        'menu_name' => 'Laporan Sisa Tagihan',
        'url' => 'laporan/sisa_tagihan',
        'icon' => $icon,
    ];

    $tagihan = [
        'menu_name' => 'Laporan Tagihan',
        'url' => 'laporan/tagihan',
        'icon' => $icon,
    ];
    $laporan_ujian = [
        'menu_name' => 'Laporan Ujian',
        'url' => 'laporan/laporan_ujian',
        'icon' => $icon,
    ];
    $pembayaran = [
        'menu_name' => 'Laporan Pembayaran',
        'url' => 'laporan/pembayaran',
        'icon' => $icon,
    ];


    $laporan = [
        'menu_name' => 'Laporan',
        'url' => null,
        'icon' => '<i class="fa-duotone fa-file-chart-column" style="font-size: 2rem;"></i>',
        'submenu' => array()
    ];


    switch ($role) {
        case SISWA:
            array_push($laporan['submenu'], $rekap_presensi_siswa, $laporan_ujian);
            break;
            // case STAF:
            //     array_push($laporan['submenu'], $berita, $pengumuman, $kategori_berita);
            //     break;
        case ADMIN:
            array_push($laporan['submenu'], $rekap_presensi_siswa, $presensi_kelas, $presensi_mapel_guru, $presensi_staf, $detail_presensi_staf, $jurnal_guru, $jurnal_staf, $sisa_tagihan, $tagihan, $pembayaran, $laporan_ujian);
            break;
    }
    return $laporan;
}

function get_pengaturan()
{
    $pengaturan = [
        'menu_name' => 'Pengaturan',
        'url' => null,
        'icon' => '<i class="fa-duotone fa-gear" style="font-size: 2rem;"></i>',
        'submenu' => [
            [
                'menu_name' => 'Identitas Sekolah',
                'url' => 'pengaturan',
                'icon' => '<i class="fa-duotone fa-school-circle-check" style="font-size: 1.3rem;"></i>',
            ],
            [
                'menu_name' => 'Hari Libur',
                'url' => 'pengaturan/hari_libur',
                'icon' => '<i class="fa-duotone fa-calendar-week" style="font-size: 1.3rem;"></i>',
            ],
            [
                'menu_name' => 'Setting Presensi Staf',
                'url' => 'pengaturan/presensi_staf',
                'icon' => '<i class="fa-duotone fa-screwdriver-wrench" style="font-size: 1.3rem;"></i>',
            ],
            [
                'menu_name' => 'Setting Presensi Siswa',
                'url' => 'pengaturan/presensi_siswa',
                'icon' => '<i class="fa-duotone fa-screwdriver-wrench" style="font-size: 1.3rem;"></i>',
            ],
        ]
    ];

    return $pengaturan;
}
