<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <a href="<?= base_url('ujian/detail_paket');?>" class="btn btn-light">
							<i class="bi bi-arrow-left"></i> Kembali
						</a>
                    </div>
                    <!--end::Search-->
                </div>

                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-sm btn-light-success" data-bs-toggle="modal" data-bs-target="#modalKelompokSoal">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-plus" style="font-size: 18px;"></i>
                            </span>
                            Kelompok Soal</button>
                    </div>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <div class="row g-5 g-xl-8">
                    <div class="col-xl-3">
                        <div class="card bgi-no-repeat card-xl-stretch mb-xl-8 shadow-sm" style="background-position: right top; background-size: 40% auto; background-image: url(http://localhost/lms_sd/lms_sd_sekolah/assets/media/svg/shapes/abstract-1.svg)">
                            <!--begin::Link-->
                            <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                <span class="svg-icon svg-icon-3x mb-5">
                                    <i class="fa-duotone fa-h1 mt-5 mb-7" style="font-size: 3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-4 text-primary fw-bolder mb-2">Nama Paket Ujian</span>
                                <span class="text-dark-75 fw-bold fs-5 m-0">Paket Ujian 1</span>
                            </div>
                            <!--end::Link-->
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card bgi-no-repeat card-xl-stretch mb-xl-8 shadow-sm" style="background-position: right top; background-size: 40% auto; background-image: url(http://localhost/lms_sd/lms_sd_sekolah/assets/media/svg/shapes/abstract-2.svg)">
                            <!--begin::Link-->
                            <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                <span class="svg-icon svg-icon-3x mb-5">
                                    <i class="fa-brands fa-stack-overflow mt-5 mb-7" style="font-size: 3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-4 text-primary fw-bolder mb-2">Pelajaran</span>
                                <span class="text-dark-75 fw-bold fs-5 m-0">Ilmu Pengetahuan Alam</span>
                            </div>
                            <!--end::Link-->
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card bgi-no-repeat card-xl-stretch mb-xl-8 shadow-sm" style="background-position: right top; background-size: 40% auto; background-image: url(http://localhost/lms_sd/lms_sd_sekolah/assets/media/svg/shapes/abstract-4.svg)">
                            <!--begin::Link-->
                            <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                <span class="svg-icon svg-icon-3x mb-5">
                                    <i class="fa-duotone fa-ball-pile mt-5 mb-7" style="font-size: 3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-4 text-primary fw-bolder mb-2">Jumlah Soal</span>
                                <span class="text-dark-75 fw-bold fs-5 m-0">25 Soal</span>
                            </div>
                            <!--end::Link-->
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card bgi-no-repeat card-xl-stretch mb-xl-8 shadow-sm" style="background-position: right top; background-size: 40% auto; background-image: url(http://localhost/lms_sd/lms_sd_sekolah/assets/media/svg/shapes/abstract-3.svg)">
                            <!--begin::Link-->
                            <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                <span class="svg-icon svg-icon-3x mb-5">
                                    <i class="fa-duotone fa-star mt-5 mb-7" style="font-size: 3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-4 text-primary fw-bolder mb-2">Total Skor</span>
                                <span class="text-dark-75 fw-bold fs-5 m-0">100 Poin</span>
                            </div>
                            <!--end::Link-->
                        </div>
                    </div>
                </div>

                <div class="card border-1">
                    <div class="card-header bg-light">
                        <div class="card-toolbar justify-content-between" style="width:100vw">
                            <h5>Kelompok 1</h5>
                            <div>
                                <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary">
                                    <p class="mb-0" style="font-weight: medium;">
                                        100</p>
                                </button>
                                <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                            </g>
                                        </svg>
                                    </span>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-225px py-3" data-kt-menu="true" style="">
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Aksi</div>
                                    </div>
                                    <div class="separator border-gray-200"></div>
                                    <div class="menu-item px-3">
                                        <a data-bs-toggle="modal" href="#modalTambahSoal"  class="menu-link px-3"><i class="fa-duotone fa-plus me-3" style="font-size:1.5rem;"></i>Tambah Soal</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a data-bs-toggle="modal" href="#kelompoksoalModal" class="menu-link px-3"><i class="fa-duotone fa-pen-to-square me-3" style="font-size:1.5rem;"> </i>Edit Kelompok Soal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body border">
                        <div class="row">
                            <div class="col-md-12 mb-10 mb-md-0">
                                <!-- Pilihan Ganda -->
                                <div class="card border cursor-pointer mb-3 m-0">
                                    <div class="card-header bg-light d-flex align-items-center collapsible py-3 toggle mb-0 collapsed" data-bs-toggle="collapse" data-bs-target="#soal_1">
                                        <div style="display:flex; justify-content:center; flex-direction: column; width:75%;">
                                            <div style="display : flex;align-items:center; flex-wrap: wrap;">
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                            </div>
                                            <p class="text-dark fw-normal mb-0" style="width: 100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laudantium facere sint officia velit, non impedit hic. Quo recusandae doloribus reiciendis sit minima eius quam totam quidem aspernatur pariatur!</p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="me-3">
                                                <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary"  data-bs-toggle="modal" data-bs-target="#modalInputSkor">
                                                    <p class="mb-0" style="font-weight: medium;">
                                                        20</p>
                                                </button>
                                                <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Aksi</div>
                                                    </div>
                                                    <div class="separator border-gray-200"></div>
                                                    <div class="menu-item px-3">
                                                        <a class="menu-link px-3" data-bs-toggle="modal" href="#exampleModalToggle"><i class="fa-duotone fa-pen-to-square me-3" style="font-size:1.5rem;"></i></i>Edit Soal</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a class="menu-link px-3" data-bs-toggle="modal" href="#modal_delete_instruksi"><i class="fa-duotone fa-trash me-3" style="font-size:1.5rem;"></i></i>Hapus Soal</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1 svg_manual">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                        <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                    </svg>
                                                </span>
                                                <span class="svg-icon toggle-off svg-icon-1 svg_manual">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
                                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="soal_1" class="collapse fs-6 ms-1">
                                        <div class="my-5 text-gray-600 fw-bold fs-6 px-7">
                                            <div>
                                                <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4">
                                                    <input class="form-check-input" type="radio" disabled="" checked="">
                                                        <div style="display:flex; justify-content:center; flex-direction: column ;padding-left : 20px;">
                                                            <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam.</span>
                                                        </div>
                                                </label>

                                                <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4">
                                                    <input class="form-check-input" type="radio" disabled="">
                                                        <div style="display:flex; justify-content:center; flex-direction: column ;padding-left : 20px;">
                                                            <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam.</span>
                                                        </div>
                                                </label>

                                                <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4">
                                                    <input class="form-check-input" type="radio" disabled="">
                                                        <div style="display:flex; justify-content:center; flex-direction: column ;padding-left : 20px;">
                                                            <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam.</span>
                                                        </div>
                                                </label>

                                                <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4">
                                                    <input class="form-check-input" type="radio" disabled="">
                                                        <div style="display:flex; justify-content:center; flex-direction: column ;padding-left : 20px;">
                                                            <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam.</span>
                                                        </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- Akhir Pilihan Ganda -->

                                <!-- Pilihan Ganda Kompleks -->
                                <div class="card border cursor-pointer mb-3 m-0">
                                    <div class="card-header bg-light d-flex align-items-center collapsible py-3 toggle mb-0 collapsed" data-bs-toggle="collapse" data-bs-target="#soal_2">
                                        <div style="display:flex; justify-content:center; flex-direction: column; width:75%;">
                                            <div style="display : flex;align-items:center; flex-wrap: wrap;">
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                            </div>
                                            <p class="text-dark fw-normal mb-0" style="width: 100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laudantium facere sint officia velit, non impedit hic. Quo recusandae doloribus reiciendis sit minima eius quam totam quidem aspernatur pariatur!</p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="me-3">
                                                <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary"  data-bs-toggle="modal" data-bs-target="#modalInputSkor">
                                                    <p class="mb-0" style="font-weight: medium;">
                                                        20</p>
                                                </button>
                                                <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Aksi</div>
                                                    </div>
                                                    <div class="separator border-gray-200"></div>
                                                    <div class="menu-item px-3">
                                                        <a class="menu-link px-3" data-bs-toggle="modal" href="#exampleModalToggle"><i class="fa-duotone fa-pen-to-square me-3" style="font-size:1.5rem;"></i></i>Edit Soal</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a class="menu-link px-3" data-bs-toggle="modal" href="#modal_delete_instruksi"><i class="fa-duotone fa-trash me-3" style="font-size:1.5rem;"></i></i>Hapus Soal</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1 svg_manual">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                        <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                    </svg>
                                                </span>
                                                <span class="svg-icon toggle-off svg-icon-1 svg_manual">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
                                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="soal_2" class="collapse fs-6 ms-1">
                                        <div class="my-5 text-gray-600 fw-bold fs-6 px-7">
                                            <div>
                                                <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4">
                                                    <input class="form-check-input" type="checkbox" disabled="" checked="">
                                                        <div style="display:flex; justify-content:center; flex-direction: column ;padding-left : 20px;">
                                                            <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam.</span>
                                                        </div>
                                                </label>

                                                <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4">
                                                    <input class="form-check-input" type="checkbox" disabled="">
                                                        <div style="display:flex; justify-content:center; flex-direction: column ;padding-left : 20px;">
                                                            <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam.</span>
                                                        </div>
                                                </label>

                                                <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4">
                                                    <input class="form-check-input" type="checkbox" disabled="">
                                                        <div style="display:flex; justify-content:center; flex-direction: column ;padding-left : 20px;">
                                                            <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam.</span>
                                                        </div>
                                                </label>

                                                <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4">
                                                    <input class="form-check-input" type="checkbox" disabled="">
                                                        <div style="display:flex; justify-content:center; flex-direction: column ;padding-left : 20px;">
                                                            <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam.</span>
                                                        </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- Akhir Pilihan Ganda Kompleks -->

                                <!-- Uraian Singkat -->
                                <div class="card border cursor-pointer mb-3 m-0">
                                    <div class="card-header bg-light d-flex align-items-center collapsible py-3 toggle mb-0 collapsed" data-bs-toggle="collapse" data-bs-target="#soal_3">
                                        <div style="display:flex; justify-content:center; flex-direction: column; width:75%;">
                                            <div style="display : flex;align-items:center; flex-wrap: wrap;">
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                            </div>
                                            <p class="text-dark fw-normal mb-0" style="width: 100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laudantium facere sint officia velit, non impedit hic. Quo recusandae doloribus reiciendis sit minima eius quam totam quidem aspernatur pariatur!</p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="me-3">
                                                <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary"  data-bs-toggle="modal" data-bs-target="#modalInputSkor">
                                                    <p class="mb-0" style="font-weight: medium;">
                                                        20</p>
                                                </button>
                                                <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Aksi</div>
                                                    </div>
                                                    <div class="separator border-gray-200"></div>
                                                    <div class="menu-item px-3">
                                                        <a class="menu-link px-3" data-bs-toggle="modal" href="#exampleModalToggle"><i class="fa-duotone fa-pen-to-square me-3" style="font-size:1.5rem;"></i></i>Edit Soal</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a class="menu-link px-3" data-bs-toggle="modal" href="#modal_delete_instruksi"><i class="fa-duotone fa-trash me-3" style="font-size:1.5rem;"></i></i>Hapus Soal</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1 svg_manual">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                        <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                    </svg>
                                                </span>
                                                <span class="svg-icon toggle-off svg-icon-1 svg_manual">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
                                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="soal_3" class="collapse fs-6 ms-1">
                                        <div class="my-5 text-gray-600 fw-bold fs-6 px-7">
                                            <div>
                                                <input type="text" class="form-control form-control-solid mb-3 bg-light-success"  placeholder="lorem" value="buaya" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- Akhir Uraian Singkat -->

                                <!-- Uraian Panjang -->
                                <div class="card border cursor-pointer mb-3 m-0">
                                    <div class="card-header bg-light d-flex align-items-center collapsible py-3 toggle mb-0 collapsed" data-bs-toggle="collapse" data-bs-target="#soal_4">
                                        <div style="display:flex; justify-content:center; flex-direction: column; width:75%;">
                                            <div style="display : flex;align-items:center; flex-wrap: wrap;">
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                            </div>
                                            <p class="text-dark fw-normal mb-0" style="width: 100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laudantium facere sint officia velit, non impedit hic. Quo recusandae doloribus reiciendis sit minima eius quam totam quidem aspernatur pariatur!</p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="me-3">
                                                <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary"  data-bs-toggle="modal" data-bs-target="#modalInputSkor">
                                                    <p class="mb-0" style="font-weight: medium;">
                                                        20</p>
                                                </button>
                                                <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Aksi</div>
                                                    </div>
                                                    <div class="separator border-gray-200"></div>
                                                    <div class="menu-item px-3">
                                                        <a class="menu-link px-3" data-bs-toggle="modal" href="#exampleModalToggle"><i class="fa-duotone fa-pen-to-square me-3" style="font-size:1.5rem;"></i></i>Edit Soal</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a class="menu-link px-3" data-bs-toggle="modal" href="#modal_delete_instruksi"><i class="fa-duotone fa-trash me-3" style="font-size:1.5rem;"></i></i>Hapus Soal</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1 svg_manual">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                        <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                    </svg>
                                                </span>
                                                <span class="svg-icon toggle-off svg-icon-1 svg_manual">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
                                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="soal_4" class="collapse fs-6 ms-1">
                                        <div class="my-5 text-gray-600 fw-bold fs-6 px-7">
                                            <div>
                                                <textarea class="form-control form-control-solid mb-3 bg-light-success" placeholder="lorem" style="height: 150px;" disabled="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto doloribus delectus obcaecati sint maxime quo cumque ratione fuga, placeat perspiciatis exercitationem sequi asperiores saepe corrupti corporis, commodi tenetur natus magni?</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- Akhir Uraian Panjang -->

                                <!-- Penjodohan -->
                                <div class="card border cursor-pointer mb-3 m-0">
                                    <div class="card-header bg-light d-flex align-items-center collapsible py-3 toggle mb-0 collapsed" data-bs-toggle="collapse" data-bs-target="#soal_5">
                                        <div style="display:flex; justify-content:center; flex-direction: column; width:75%;">
                                            <div style="display : flex;align-items:center; flex-wrap: wrap;">
                                                <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                            </div>
                                            <p class="text-dark fw-normal mb-0" style="width: 100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laudantium facere sint officia velit, non impedit hic. Quo recusandae doloribus reiciendis sit minima eius quam totam quidem aspernatur pariatur!</p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="me-3">
                                                <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary"  data-bs-toggle="modal" data-bs-target="#modalInputSkor">
                                                    <p class="mb-0" style="font-weight: medium;">
                                                        20</p>
                                                </button>
                                                <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Aksi</div>
                                                    </div>
                                                    <div class="separator border-gray-200"></div>
                                                    <div class="menu-item px-3">
                                                        <a class="menu-link px-3" data-bs-toggle="modal" href="#exampleModalToggle"><i class="fa-duotone fa-pen-to-square me-3" style="font-size:1.5rem;"></i></i>Edit Soal</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a class="menu-link px-3" data-bs-toggle="modal" href="#modal_delete_instruksi"><i class="fa-duotone fa-trash me-3" style="font-size:1.5rem;"></i></i>Hapus Soal</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1 svg_manual">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                        <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                    </svg>
                                                </span>
                                                <span class="svg-icon toggle-off svg-icon-1 svg_manual">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
                                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="soal_5" class="collapse fs-6 ms-1">
                                        <div class="my-5 text-gray-600 fw-bold fs-6 px-7">
                                            <div style="width :100%; height : auto; display :flex; justify-content : center; flex-wrap : wrap;">
                                                <div class="card shadow-sm" style="width:30rem; margin:5px;">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item bg-secondary">
                                                            <div style="display:flex; justify-content:center; flex-direction: column;padding-left : 20px;">
                                                            </div>
                                                            <table class="table mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Pertanyaan</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center p-4">
                                                            <span>1. Jeje</span>
                                                            <span">[A]</span">
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card shadow-sm" style="width:30rem; margin:5px;">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item bg-secondary">
                                                            <div style="display:flex; justify-content:center; flex-direction: column;padding-left : 20px;">
                                                            </div>
                                                            <table class="table mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Jawaban</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center p-4">
                                                            <span>A. Programmer</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- Akhir Penjodohan -->
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>

<div class="modal fade" id="modalKelompokSoal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Tambah Kelompok Soal</h2>
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

                <div class="row mb-8">
                    <label class="fs-6 fw-bold required mb-2">Nama Kelompok Soal</label>
                    <div class="position-relative d-flex align-items-center">
                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                            <i class="fa-duotone fa-h1" style="font-size: 1.3rem;"></i>
                        </span>
                        <input class="form-control form-control-solid ps-12" placeholder="Masukkan nama instruksi"/>
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

<div class="modal fade" id="modalTambahSoal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <p><span class="fw-bolder fs-2">Tambah Soal</span> <br> <span class="fw-medium fs-6 ms-1">Kelompok Soal 1</span> </p>
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
                    <div class="col-md-12 col-xl-4">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Pencarian</span>
                        </label>
                        <div class="d-flex align-items-center position-relative my-1">
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid ps-14" placeholder="Pencarian">
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Pilih Grup Soal</span>
                            </label>
                            <div>
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih">
                                    <option></option>
                                    <option value="1">Grup Soal 1</option>
                                    <option value="2">Grup Soal 2</option>
                                    <option value="2">Grup Soal 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Pilih Tipe Soal</span>
                            </label>
                            <div>
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih">
                                    <option></option>
                                    <option value="1">Pilihan Ganda</option>
                                    <option value="2">Pilihan Ganda Kompleks</option>
                                    <option value="3">Uraian Singkat</option>
                                    <option value="4">Uraian Panjang</option>
                                    <option value="5">Penjodohan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12 section">
                        <div class="card border" style="width: 100%;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-white bg-success">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="text-white"><strong>Grup Soal 01</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li class="list-group-item p-4" style="cursor : default;">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between align-items-center">
                                            <span class="badge badge-light-success me-2">Uraian Panjang</span>
                                            <button type="button" class="btn btn-sm btn-light-success">
                                                <span class="svg-icon svg-icon-2 me-0">
                                                    <i class="fa-duotone fa-plus" style="font-size: 18px;"></i>
                                                </span>
                                            Tambah</button>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-12 col-md-12 col-lg-12">
                                            <figure class="ms-2 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></figure>
                                            <p class="ms-2 mt-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non provident, officiis illo blanditiis pariatur repellendus. Vel odit repellat, mollitia facere commodi qui? Reprehenderit harum beatae culpa. At assumenda adipisci sint. ?</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item p-4 bg-light-success" style="cursor : default;">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between align-items-center">
                                            <span class="badge badge-success me-2">Uraian Panjang</span>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-12 col-md-12 col-lg-12">
                                            <figure class="ms-2 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg')?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></figure>
                                            <p class="ms-2 mt-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non provident, officiis illo blanditiis pariatur repellendus. Vel odit repellat, mollitia facere commodi qui? Reprehenderit harum beatae culpa. At assumenda adipisci sint. ?</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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

<div class="modal fade" id="modalInputSkor" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Cloning</h2>
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

                <div class="row mb-8">
                    <div class="col-md-12 col-xl-6">
                        <label class="fs-6 fw-bold required mb-2">Input Skor Benar</label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-star" style="font-size: 1.3rem;"></i>
                            </span>
                            <input class="form-control form-control-solid ps-12" type="number" placeholder="Masukkan skor benar"/>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-6">
                        <label class="fs-6 fw-bold required mb-2">Input Skor Salah</label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-star" style="font-size: 1.3rem;"></i>
                            </span>
                            <input class="form-control form-control-solid ps-12" type="number" placeholder="Masukkan skor salah"/>
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
