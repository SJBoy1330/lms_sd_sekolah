<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <div class="card shadow-sm mb-4 fadein anim-2">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Tahun Ajaran</label>
                            <select id="select_tahun_ajaran" class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Semua" data-allow-clear="">
                                <option></option>
                                <?php foreach ($tahun_ajaran as $ta) : ?>
                                    <option value="<?= $ta->id_tahun_ajaran ?>" <?= $_GET['tahun_ajaran'] === $ta->id_tahun_ajaran ? 'selected' : '' ?>><?= $ta->nama ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Tingkat</label>
                            <select id="select_tingkat" class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Semua" data-allow-clear="">
                                <option></option>
                                <?php foreach ($tingkat as $t) : ?>
                                    <option value="<?= $t->id_tingkat ?>" <?= $_GET['tingkat'] === $t->id_tingkat ? 'selected' : '' ?>><?= $t->nama ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Kelas</label>
                            <select id="select_kelas" class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Semua" data-allow-clear="">
                                <option></option>
                                <?php foreach ($kelas as $k) : ?>
                                    <option value="<?= $k->id_kelas ?>" <?= $_GET['kelas'] === $k->id_kelas ? 'selected' : '' ?>><?= $k->nama ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-4 offset-md-8 offset-xl-8 d-flex justify-content-end" style="padding:5px;">
                            <button type="button" id="btn-filter" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!--begin::Card-->
        <div class="card fadein-bottom anim-4">
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid form-control-sm w-250px ps-14" placeholder="Pencarian" />
                    </div>
                    <!--end::Search-->
                </div>
                <div class="card-toolbar float-end  d-block d-sm-none">
                    <button class=" btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="bi bi-three-dots fs-3"></i>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3"> <i class="fa-duotone fa-file-excel me-3" style="font-size: 20px;"></i>Download Excel</a>
                        </div>
                        <div class="menu-item px-3">
                            <a id="btn-export-pdf" class="menu-link px-3"> <i class="fa-duotone fa-file-pdf me-3" style="font-size: 20px;"></i> Download PDF</a>
                        </div>
                    </div>
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-sm btn-light-danger me-2 " id="deleteall" style="display: none;">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-trash" style="font-size: 18px;"></i>
                            </span>
                            Hapus</button>
                        <button type="button" class="btn btn-sm btn-light-success me-2 btn-tambah-edit-modal-siswa" data-bs-toggle="modal" data-bs-target="#modalTambahSiswa">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-plus" style="font-size: 18px;"></i>
                            </span>
                            Siswa</button>

                        <button type="button" class="btn btn-sm btn-light-info me-2" data-bs-toggle="modal" data-bs-target="#modalUnggah">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-upload" style="font-size: 20px;"></i>
                            </span>
                            Unggah</button>
                        <button class="d-none d-sm-block btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="bi bi-three-dots fs-3"></i>
                        </button>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> <i class="fa-duotone fa-file-excel me-3" style="font-size: 20px;"></i>Download Excel</a>
                            </div>
                            <div class="menu-item px-3">
                                <a id="btn-export-pdf-siswa" class="menu-link px-3"> <i class="fa-duotone fa-file-pdf me-3" style="font-size: 20px;"></i> Download PDF</a>
                            </div>
                        </div>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 DataTable no-footer" id="kt_table_siswa">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" name="maincheckbox" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_siswa .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px text-center">Aksi</th>
                                <th class="min-w-100px text-center">No</th>
                                <th class="min-w-150px text-center">Foto</th>
                                <th class="min-w-250px text-center">Nama</th>
                                <th class="min-w-175px text-center">Kelas</th>
                                <th class="min-w-175px text-center">Jenis Kelamin</th>
                                <th class="min-w-175px text-center">Status</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-bold">
                            <?php if ($data_siswa) : ?>
                                <?php foreach ($data_siswa as $i => $siswa) : ?>
                                    <tr class="anim-2" style="opacity: 0;">
                                        <!--begin::Checkbox-->
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input deletebox" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <!--end::Checkbox-->
                                        <!--begin::User=-->
                                        <td class="text-center">
                                            <button type="button" class="btn btn-icon btn-light-danger btn-sm fs-7" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="fa-duotone fa-bars fs-4"></i>
                                            </button>
                                            <!--end::Svg Icon--></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a data-bs-toggle="modal" href="#modalDetail" role="button" class="menu-link px-3 detail-siswa-btn" data-idsiswa="<?= $siswa->id_siswa ?>">Detail</a>
                                                </div>
                                                <div class=" menu-item px-3">
                                                    <a href="#" class="menu-link px-3 btn-tambah-edit-modal-siswa" data-idsiswa="<?= $siswa->id_siswa ?>" data-bs-toggle="modal" data-bs-target="#modalTambahSiswa">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Hapus</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                        </td>
                                        <!--end::User=-->
                                        <!--begin::Role=-->
                                        <td>
                                            <p class="text-center mb-0"><?= $i + 1 ?></p>
                                        </td>
                                        <!--end::Role=-->
                                        <!--begin::Last login=-->
                                        <td class="text-center mb-0">
                                            <div class="symbol symbol-60px">
                                                <img alt="Logo" src="<?= $siswa->foto ?>">
                                            </div>
                                        </td>

                                        <td>
                                            <p class="text-center">
                                                <?= $siswa->nama ?>
                                            </p>
                                        </td>

                                        <td>
                                            <p class="text-center">
                                                <?= $siswa->kelas ?>
                                            </p>
                                        </td>

                                        <td>
                                            <p class="text-center">
                                                <?= $siswa->gender === 'L' ? 'Laki - laki' : 'Perempuan' ?>
                                            </p>
                                        </td>

                                        <td>
                                            <p class="text-center">
                                                <?php if ($siswa->aktif === 'Y') : ?>
                                                    <span class="badge badge-success mx-3 my-2">Aktif</span>
                                                <?php else : ?>
                                                    <span class="badge badge-danger mx-3 my-2">Tidak Aktif</span>
                                                <?php endif; ?>
                                            </p>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="8">
                                        <center>Tidak ada data siswa</center>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
            <div class="card-footer py-5 d-flex justify-content-end align-items-center">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">&laquo;</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">&raquo;</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->

<div class="modal fade" id="detailberitaModal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px modal-dialog-centered">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-xl-10 pt-5 pb-15">
                <div>
                    <img src="<?= base_url('assets/img/news.jpg') ?>" height="300" alt="" style="width: 100%; border-radius: 10px;">
                    <div class="text-center my-8">
                        <h2 class="mb-3">Ternyata Koran itu adalah sebuah berita</h2>
                    </div>
                    <!--begin::List-->
                    <div class="mh-300px scroll-y me-n7 pe-7">

                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->
                <!--begin::Notice-->
                <div>
                    <p style="text-indent: 0.3in">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus sunt eaque blanditiis odit voluptas, reprehenderit eveniet obcaecati error, labore sequi doloribus ipsam quos est quo dolores architecto totam dolore beatae?</p>
                    <p style="text-indent: 0.3in">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus sunt eaque blanditiis odit voluptas, reprehenderit eveniet obcaecati error, labore sequi doloribus ipsam quos est quo dolores architecto totam dolore beatae?</p>
                    <p style="text-indent: 0.3in">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus sunt eaque blanditiis odit voluptas, reprehenderit eveniet obcaecati error, labore sequi doloribus ipsam quos est quo dolores architecto totam dolore beatae?</p>
                </div>

                <div class="text-start">
                    <p class="fw-bolder mb-1">Dipublikasikan pada:</p>
                    <p>2020 - 08 - 17</p>
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>


<!-- Modal Unggah -->
<div class="modal fade" id="modalUnggah" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Upload</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" data-kt-users-modal-action="close" type="button">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <div class="modal-body scroll-y mx-10 my-2">
                <div class="row mb-5">
                    <div class="col-md-4 col-xl-4" style="padding:5px;">
                        <label class="form-label fw-bold">Tahun Ajaran</label>
                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Semua" data-allow-clear="">
                            <option></option>
                            <option value="1">2021/2022</option>
                            <option value="2">2022/2023</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-xl-4" style="padding:5px;">
                        <label class="form-label fw-bold">Tingkat</label>
                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Semua" data-allow-clear="">
                            <option></option>
                            <option value="1">XII</option>
                            <option value="2">XI</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-xl-4" style="padding:5px;">
                        <label class="form-label fw-bold">Kelas</label>
                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Semua" data-allow-clear="">
                            <option></option>
                            <option value="1">XI IPA 1</option>
                            <option value="2">XI IPA 2</option>
                        </select>
                    </div>
                </div>
                <div class="row d-flex justify-content-around align-items-center">
                    <div class="col-xl-5 col-md-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">File</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Contoh Format Excel</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <a href="#" class="btn btn-light w-auto  text-start ps-8">
                                    <img alt="Logo" src="<?= base_url('assets/img/xls.png') ?>" class="h-20px me-3">Download Excel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fa-duotone fa-floppy-disk" style="font-size: 1.3rem;"></i>
                            </span>
                            <!--end::Svg Icon-->Simpan
                        </button>
                        <!--end::Add user-->
                    </div>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<!-- Modal Tambah Siswa -->
<div class="modal fade" id="modalTambahSiswa" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content" id="content-edit-tambah-siswa">
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<!-- Modal Siswa -->
<div class="modal fade" id="modalDetail" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Detail Siswa</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" data-kt-users-modal-action="close" type="button">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-10 my-2" id="detail-siswa-display">
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>