<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <div class="card shadow-sm mb-4 fadein anim-4">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Tahun Ajaran</label>
                            <div>
                                <select id="select_tahun_ajaran" class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Semua">
                                    <option></option>
                                    <?php foreach ($tahun_ajaran as $ta) : ?>
                                        <option value="<?= $ta->id_tahun_ajaran ?>" <?= $_GET['tahun_ajaran'] === $ta->id_tahun_ajaran ? 'selected' : '' ?>><?= $ta->nama ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 align-self-end text-start" style="padding:5px; margin-top:7px;">
                            <button type="button" id="btn-filter" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!--begin::Card-->
        <div class="card fadein-bottom anim-4 ">
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
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-sm btn-light-danger me-2 " id="deleteall" style="display: none;">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-trash" style="font-size: 18px;"></i>
                            </span>
                            Hapus</button>
                        <button type="button" class="btn btn-sm btn-light-warning me-2" data-bs-toggle="modal" data-bs-target="#modalDistribusi">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-chart-network"></i>
                            </span>
                            Distribusi
                        </button>
                        <button type="button" class="btn btn-sm btn-light-success btn-tambah-edit-modal-kelas" data-bs-toggle="modal" data-bs-target="#modalTambahKelas">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-plus" style="font-size: 18px;"></i>
                            </span>
                            Kelas</button>
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
                    <table class="table align-middle table-row-dashed fs-6 gy-5 DataTable no-footer" id="kt_table_kelas">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" name="maincheckbox" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_kelas .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px text-center">Aksi</th>
                                <th class="min-w-100px text-center">No</th>
                                <th class="min-w-150px text-center">Kelas</th>
                                <th class="min-w-250px text-center">Tingkat</th>
                                <th class="min-w-175px text-center">Wali Kelas</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-bold">
                            <?php if ($data_kelas) : ?>
                                <?php foreach ($data_kelas as $i => $kelas) : ?>
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
                                                <div class="menu-item px-3">
                                                    <a class="menu-link px-3 btn-tambah-edit-modal-kelas" data-idkelas="<?= $kelas->id_kelas ?>" data-bs-toggle="modal" data-bs-target="#modalTambahKelas">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a class="menu-link px-3 btn-hapus-kelas" data-kt-users-table-filter="delete_row" data-idkelas="<?= $kelas->id_kelas ?>" data-idstaf="<?= $kelas->id_staf ?>">Hapus</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                        </td>

                                        <td>
                                            <p class="text-center mb-0"><?= $i + 1 ?></p>
                                        </td>

                                        <td>
                                            <p class="text-center">
                                                Kelas <?= $kelas->nama ?>
                                            </p>
                                        </td>

                                        <td>
                                            <p class="text-center">
                                                <?= $kelas->id_tingkat ?>
                                            </p>
                                        </td>

                                        <td>
                                            <p class="text-center">
                                                <?= $kelas->wali_kelas ?>
                                            </p>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="8">
                                        <center>Tidak ada data kelas</center>
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

<div class="modal fade" id="modalTambahKelas" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content" id="content-edit-tambah-kelas">
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<!-- Modal Distribusi -->
<div class="modal fade" id="modalDistribusi" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Modal Distribusi</h2>
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
            <div class="modal-body scroll-y mx-10 my-2">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Kelas</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <div style="width:100vw;">
                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih Kelas">
                                        <option></option>
                                        <option value="1">Kelas Abu Bakar</option>
                                        <option value="2">Kelas Umar bin Khatab</option>
                                        <option value="3">kelas Ustman bin Affan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <div class="table-responsive">
                            <table class="table align-middle gs-0 gy-4" id="kt_table_kelas_modal">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted bg-light">
                                        <th class="ps-4 w-100px rounded-start">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" name="mainmodalcheckbox" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_kelas_modal .form-check-input" value="1" />
                                            </div>
                                        </th>
                                        <th class="min-w-125px text-center">NIS</th>
                                        <th class="min-w-200px text-center rounded-end">Nama Siswa</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr class="anim-2" style="opacity: 0;">
                                        <td class="ps-4">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input deleteboxmodal" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-center mb-0">12345</p>
                                        </td>

                                        <td>
                                            <p class="text-center">
                                                Jhon Doe
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="anim-2" style="opacity: 0;">
                                        <td class="ps-4">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input deleteboxmodal" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-center mb-0">67890</p>
                                        </td>

                                        <td>
                                            <p class="text-center">
                                                Max Smith
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="anim-2" style="opacity: 0;">
                                        <td class="ps-4">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input deleteboxmodal" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-center mb-0">112233</p>
                                        </td>

                                        <td>
                                            <p class="text-center">
                                                Lisa On
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
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