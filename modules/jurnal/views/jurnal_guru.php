<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container mb-4">
        <div class="card shodow-sm mb-4 fadein anim-4">
            <div class="card-body">
                <form action="">
                    <div class="row">

                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Tanggal</label>
                            <input class="form-select form-select-solid form-select-sm" type="text" name="tanggal" value="" />
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Guru</label>
                            <div>
                                <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">Admin Sidoarjo</option>
                                    <option value="2">Saka Dana Asmara</option>
                                    <option value="2">Staf 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Kelas</label>
                            <div>
                                <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">X IPA 1</option>
                                    <option value="2">XI IPA 1</option>
                                    <option value="2">XII IPA 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-12 align-self-end text-end" style="padding:5px; margin-top:7px;">
                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampil</button>
                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>

    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card fadein-bottom anim-4">
            <!--begin::Card header-->
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
                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Pencarian" />
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
                    </div>
                </div>
                <!--begin::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 DataTable no-footer" id="kt_table_guru">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" name="maincheckbox" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_guru .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px text-center">Aksi</th>
                                <th class="min-w-100px text-center">No</th>
                                <th class="min-w-175px text-center">Guru</th>
                                <th class="min-w-175px text-center">Pelajaran</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-bold">
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
                                            <a data-bs-toggle="modal" href="#modalEditJurnalGuru" role="button" class="menu-link px-3" class="menu-link px-3">Edit</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a data-bs-toggle="modal" href="#modalDetail" role="button" class="menu-link px-3" class="menu-link px-3">Detail</a>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <p class="text-center mb-0">1</p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        Cahyani Fitri, S.Pd.
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        Pendidikan jasmani, olahraga, dan kesehatan
                                    </p>
                                </td>
                            </tr>
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

<div class="modal fade" id="modalEditJurnalGuru" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Edit Junral Guru</h2>
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
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Kelas</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-screen-users" style="font-size: 1.3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="Kelas Abu Bakar" readonly />
                                <!--end::Datepicker-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Pelajaran</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-brands fa-stack-overflow" style="font-size: 1.5rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="Pendidikan jasmani, olahraga, dan kesehatan" readonly/>
                                <!--end::Datepicker-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Materi</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <textarea class="form-control form-control-solid" rows="3" placeholder="Materi"></textarea>
                                <!--end::Datepicker-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Kegiatan Guru</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <textarea class="form-control form-control-solid" rows="3" placeholder="Kegiatan guru"></textarea>
                                <!--end::Datepicker-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Kegiatan Siswa</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <textarea class="form-control form-control-solid" rows="3" placeholder="Kegiatan siswa"></textarea>
                                <!--end::Datepicker-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Kejadian Kelas</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <textarea class="form-control form-control-solid" rows="3" placeholder="Kegiatan siswa"></textarea>
                                <!--end::Datepicker-->
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

<div class="modal fade" id="modalDetail" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Detail Jurnal Guru</h2>
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
                    <div class="col-6">
                        <!--begin:Option-->
                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                            <!--begin:Label-->
                            <span class="d-flex me-2">
                                <!--begin:Icon-->
                                <span class="symbol symbol-50px me-6">
                                    <span class="symbol-label bg-light-secondary">
                                        <i class="fa-duotone fa-calendar" style="font-size: 1.5rem;"></i>
                                    </span>
                                </span>
                                <!--end:Icon-->
                                <!--begin:Info-->
                                <span class="d-flex flex-column">
                                    <span class="fw-bolder fs-6">Tanggal</span>
                                    <span class="fs-7 text-muted">Sabtu, Desember 2022</span>
                                </span>
                                <!--end:Info-->
                            </span>
                        </label>
                        <!--end::Option-->
                        <!--begin:Option-->
                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                            <!--begin:Label-->
                            <span class="d-flex me-2">
                                <!--begin:Icon-->
                                <span class="symbol symbol-50px me-6">
                                    <span class="symbol-label bg-light-secondary">
                                        <i class="fa-duotone fa-screen-users" style="font-size: 1.5rem;"></i>
                                    </span>
                                </span>
                                <!--end:Icon-->
                                <!--begin:Info-->
                                <span class="d-flex flex-column">
                                    <span class="fw-bolder fs-6">Kelas</span>
                                    <span class="fs-7 text-muted">Kelas Abu Abu Bakar</span>
                                </span>
                                <!--end:Info-->
                            </span>
                        </label>
                        <!--end::Option-->
                        <!--begin:Option-->
                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                            <!--begin:Label-->
                            <span class="d-flex me-2">
                                <!--begin:Icon-->
                                <span class="symbol symbol-50px me-6">
                                    <span class="symbol-label bg-light-secondary">
                                        <i class="fa-duotone fa-book-open-cover" style="font-size: 1.5rem;"></i>
                                    </span>
                                </span>
                                <!--end:Icon-->
                                <!--begin:Info-->
                                <span class="d-flex flex-column">
                                    <span class="fw-bolder fs-6">Materi</span>
                                    <span class="fs-7 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laborum repellendus</span>
                                </span>
                                <!--end:Info-->
                            </span>
                        </label>
                        <!--end::Option-->
                    </div>
                    <div class="col-6">
                        <!--begin:Option-->
                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                            <!--begin:Label-->
                            <span class="d-flex me-2">
                                <!--begin:Icon-->
                                <span class="symbol symbol-50px me-6">
                                    <span class="symbol-label bg-light-secondary">
                                        <i class="fa-duotone fa-person-running" style="font-size: 1.5rem;"></i>
                                    </span>
                                </span>
                                <!--end:Icon-->
                                <!--begin:Info-->
                                <span class="d-flex flex-column">
                                    <span class="fw-bolder fs-6">Kegiatan guru</span>
                                    <span class="fs-7 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime iusto quasi possimus id? Facilis, consectetur in! Ex expedita non fuga deserunt accusantium vel modi, neque ipsa saepe, eligendi, aperiam quisquam.</span>
                                </span>
                                <!--end:Info-->
                            </span>
                        </label>
                        <!--end::Option-->
                        <!--begin:Option-->
                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                            <!--begin:Label-->
                            <span class="d-flex me-2">
                                <!--begin:Icon-->
                                <span class="symbol symbol-50px me-6">
                                    <span class="symbol-label bg-light-secondary">
                                        <i class="fa-duotone fa-person-running" style="font-size: 1.5rem;"></i>
                                    </span>
                                </span>
                                <!--end:Icon-->
                                <!--begin:Info-->
                                <span class="d-flex flex-column">
                                    <span class="fw-bolder fs-6">Kegiatan siswa</span>
                                    <span class="fs-7 text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non sit id repellendus consequuntur, possimus inventore ab perferendis necessitatibus ea nulla cumque eius explicabo velit itaque facilis ducimus placeat labore dolorum.</span>
                                </span>
                                <!--end:Info-->
                            </span>
                        </label>
                        <!--end::Option-->
                        <!--begin:Option-->
                        <label class="d-flex flex-stack cursor-pointer">
                            <!--begin:Label-->
                            <span class="d-flex me-2">
                                <!--begin:Icon-->
                                <span class="symbol symbol-50px me-6">
                                    <span class="symbol-label bg-light-secondary">
                                        <i class="fa-duotone fa-person-running" style="font-size: 1.5rem;"></i>
                                    </span>
                                </span>
                                <!--end:Icon-->
                                <!--begin:Info-->
                                <span class="d-flex flex-column">
                                    <span class="fw-bolder fs-6">Kegiatan kelas</span>
                                    <span class="fs-7 text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum distinctio consectetur voluptate sed quidem harum praesentium eos doloribus, non, soluta esse autem excepturi odio magnam pariatur animi laborum nostrum porro.</span>
                                </span>
                                <!--end:Info-->
                            </span>
                        </label>
                        <!--end::Option-->
                    </div>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>