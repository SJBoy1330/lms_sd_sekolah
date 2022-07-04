<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <div class="row g-5 g-xl-8">
            <div class="col-xl-3">
                <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 40% auto; background-image: url(<?= base_url('assets/media/svg/shapes/abstract-1.svg');?>)">
                    <!--begin::Link-->
                    <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <span class="svg-icon svg-icon-3x mb-5">
                            <i class="fa-duotone fa-h1 mt-5 mb-7" style="font-size: 3rem;"></i>
                        </span>
                        <!--end::Svg Icon-->
                        <span class="fs-4 text-primary fw-bolder mb-2">Nama Grup Soal</span>
                        <span class="text-dark-75 fw-bold fs-5 m-0">Grup Soal 1</span>
                    </div>
                    <!--end::Link-->
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 40% auto; background-image: url(<?= base_url('assets/media/svg/shapes/abstract-2.svg');?>)">
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
                <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 40% auto; background-image: url(<?= base_url('assets/media/svg/shapes/abstract-3.svg');?>)">
                    <!--begin::Link-->
                    <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <span class="svg-icon svg-icon-3x mb-5">
                            <i class="fa-duotone fa-head-side-brain mt-5 mb-7" style="font-size: 3rem;"></i>
                        </span>
                        <!--end::Svg Icon-->
                        <span class="fs-4 text-primary fw-bolder mb-2">Pembuat Grup Soal</span>
                        <span class="text-dark-75 fw-bold fs-5 m-0">Max Smith</span>
                    </div>
                    <!--end::Link-->
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 40% auto; background-image: url(<?= base_url('assets/media/svg/shapes/abstract-4.svg');?>)">
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
        </div>

        <div class="card shadow-sm mb-5">
            <div class="card-header border-0">
                <!--begin::Card title-->
                <div class="card-title">
                    <a href="<?= base_url('ujian')?>" class="btn btn-sm btn-light">
                        <span class="svg-icon svg-icon-2 me-0">
                            <i class="fa-duotone fa-arrow-left-long" style="font-size: 1rem;"></i>
                        </span>
                        Kembali</a>
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <div class="d-flex align-items-center position-relative my-1  me-2">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid form-control-sm w-250px ps-14" placeholder="Pencarian">
                        </div>
                        <button type="button" class="btn btn-sm btn-light-success" data-bs-toggle="modal" data-bs-target="#modalTambahSoal">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-plus" style="font-size: 18px;"></i>
                            </span>
                            Soal</button>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div> 
            <div class="row p-5">
                <div class="col-md-12 pe-md-10 mb-10 mb-md-0">
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
    <!--end::Container-->
</div>

<div class="modal fade" id="modalTambahSoal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Tambah Soal</h2>
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
                <div class="row mb-4">
                    <div class="col-12 mb-10">
                        <div class="tab d-flex justify-content-center align-items-center">
                            <button class="tablinks active" onclick="openCity(event, 'pilgan')">Pilihan Ganda</button>
                            <button class="tablinks" onclick="openCity(event, 'pilgankompleks')">Pilihan Ganda Kompleks</button>
                            <button class="tablinks" onclick="openCity(event, 'uraiansingkat')">Uraian Singkat</button>
                            <button class="tablinks" onclick="openCity(event, 'uraianpanjang')">Uraian Panjang</button>
                            <button class="tablinks" onclick="openCity(event, 'penjodohan')">Penjodohan</button>
                        </div>
                    </div>
                </div>
                <!-- Inputan untuk mengisi soal -->
                    <div class="row">
                        <div class="col-12">
                            <div class="upload__img-wrap"></div>
                        </div>
                        <div class="col-10">
                            <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
                                <!--begin::Editor-->
                                <div id="kt_forms_widget_1_editor_grupsoal" class="py-6"></div>
                                <!--end::Editor-->
                                <div class="separator"></div>
                                <!--begin::Toolbar-->
                                <div id="kt_forms_widget_1_editor_toolbar_grupsoal" class="ql-toolbar d-flex flex-stack py-2">
                                    <div class="me-2">
                                        <span class="ql-formats ql-size ms-0">
                                            <select class="ql-size w-75px"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-bold"></button>
                                            <button class="ql-italic"></button>
                                            <button class="ql-underline"></button>
                                            <button class="ql-strike"></button>
                                            <button class="ql-link"></button>
                                            <button class="ql-clean"></button>
                                        </span>
                                    </div>
                                    <div class="me-n3">
                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                            <i class="flaticon2-clip-symbol icon-ms"></i>
                                        </span>
                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                            <i class="flaticon2-pin icon-ms"></i>
                                        </span>
                                    </div>
                                </div>
                                <!--end::Toolbar-->
                            </form>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <!-- Upload Image Soal -->
                                <div class="upload__box me-3">
                                    <div class="upload__btn-box mb-0">
                                        <label class="btn btn-icon btn-bg-light btn-active-color-primary upload__btn" style="min-width : 40px; min-height : 40px">
                                            <i class="fa-duotone fa-images" style="font-size: 1.5rem;"></i>
                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                        </label>
                                    </div>
                                </div>
                            <!-- Akhir Image Soal -->

                            <!-- Upload Audio Soal -->
                                <label class="btn btn-icon btn-bg-light btn-active-color-primary me-3" style="min-width : 40px; min-height : 40px">
                                    <input type="file" hidden="">
                                    <i class="fa-duotone fa-microphone" style="font-size: 1.5rem;"></i>
                                </label>
                            <!-- Akhir Audio Soal -->
                        </div>
                    </div>
                <!-- Akhir inputan untuk mengisi soal -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div id="pilgan" class="tabcontent" style="display: block;">
                            <div class="pilgan">
                                <!-- Inputan untuk jawaban -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="upload__img-wrap"></div>
                                        </div>
                                        <div class="col-1 d-flex justify-content-center align-items-center">
                                            <label class="form-check form-check-sm form-check-custom form-check-solid d-block">
                                                <input class="form-check-input" type="radio">
                                            </label>
                                        </div>
                                        <div class="col-10 ps-0">
                                            <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
                                                <!--begin::Editor-->
                                                <div id="kt_forms_widget_1_editor_jawabanpilgan" class="py-6"></div>
                                                <!--end::Editor-->
                                                <div class="separator"></div>
                                                <!--begin::Toolbar-->
                                                <div id="kt_forms_widget_1_editor_toolbar_jawabanpilgan" class="ql-toolbar d-flex flex-stack py-2">
                                                    <div class="me-2">
                                                        <span class="ql-formats ql-size ms-0">
                                                            <select class="ql-size w-75px"></select>
                                                        </span>
                                                        <span class="ql-formats">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-underline"></button>
                                                            <button class="ql-strike"></button>
                                                            <button class="ql-link"></button>
                                                            <button class="ql-clean"></button>
                                                        </span>
                                                    </div>
                                                    <div class="me-n3">
                                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                                            <i class="flaticon2-clip-symbol icon-ms"></i>
                                                        </span>
                                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                                            <i class="flaticon2-pin icon-ms"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--end::Toolbar-->
                                            </form>
                                        </div>
                                        <div class="col-1  d-flex justify-content-center align-items-center">
                                            <!-- Upload Image Soal -->
                                            <div class="upload__box me-3">
                                                    <div class="upload__btn-box mb-0">
                                                        <label class="btn btn-icon btn-bg-light btn-active-color-primary upload__btn" style="min-width : 40px; min-height : 40px">
                                                            <i class="fa-duotone fa-images" style="font-size: 1.5rem;"></i>
                                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                                        </label>
                                                    </div>
                                                </div>
                                            <!-- Akhir Image Soal -->
                                        </div>
                                    </div>
                                <!-- Akhir inputan untuk jawaban -->

                                <!-- Inputan ketika tambah opsi -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="upload__img-wrap"></div>
                                        </div>
                                        <div class="col-1 d-flex justify-content-center align-items-center">
                                            <label class="form-check form-check-sm form-check-custom form-check-solid d-block">
                                                <input class="form-check-input" type="radio">
                                            </label>
                                        </div>
                                        <div class="col-9 ps-0">
                                            <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
                                                <!--begin::Editor-->
                                                <div id="kt_forms_widget_1_editor_tambahopsipilgan" class="py-6"></div>
                                                <!--end::Editor-->
                                                <div class="separator"></div>
                                                <!--begin::Toolbar-->
                                                <div id="kt_forms_widget_1_editor_toolbar_tambahopsipilgan" class="ql-toolbar d-flex flex-stack py-2">
                                                    <div class="me-2">
                                                        <span class="ql-formats ql-size ms-0">
                                                            <select class="ql-size w-75px"></select>
                                                        </span>
                                                        <span class="ql-formats">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-underline"></button>
                                                            <button class="ql-strike"></button>
                                                            <button class="ql-link"></button>
                                                            <button class="ql-clean"></button>
                                                        </span>
                                                    </div>
                                                    <div class="me-n3">
                                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                                            <i class="flaticon2-clip-symbol icon-ms"></i>
                                                        </span>
                                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                                            <i class="flaticon2-pin icon-ms"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--end::Toolbar-->
                                            </form>
                                        </div>
                                        <div class="col-2 d-flex justify-content-center align-items-center">
                                            <!-- Upload Image Soal -->
                                                <div class="upload__box me-3">
                                                    <div class="upload__btn-box mb-0">
                                                        <label class="btn btn-icon btn-bg-light btn-active-color-primary upload__btn" style="min-width : 40px; min-height : 40px">
                                                            <i class="fa-duotone fa-images" style="font-size: 1.5rem;"></i>
                                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                                        </label>
                                                    </div>
                                                </div>
                                            <!-- Akhir Image Soal -->

                                            <!-- Hapus Tambah Opsi -->
                                                <button type="button" class="btn btn-icon btn-bg-light btn-active-color-primary">                                    
                                                    <i class="fa-duotone fa-trash" style="font-size: 1.5rem;"></i>                                
                                                </button>
                                            <!-- Akhir Hapus Tambah -->
                                        </div>
                                    </div>
                                <!-- Akhir inputan ketika tambah opsi -->

                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-4">
                                    <button class="btn btn-sm btn-light-primary ms-4">
                                        <span class="svg-icon svg-icon-2 me-0">
                                            <i class="fa-duotone fa-plus" style="font-size: 1.3rem;"></i>
                                        </span>    
                                    Tambah Opsi</button>
                                </label>
                            </div>
                        </div>

                        <div id="pilgankompleks" class="tabcontent">
                            <div class="pilgan-kompleks">
                                <!-- Inputan untuk jawaban -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="upload__img-wrap"></div>
                                        </div>
                                        <div class="col-1 d-flex justify-content-center align-items-center">
                                            <label class="form-check form-check-sm form-check-custom form-check-solid d-block">
                                                <input class="form-check-input" type="checkbox">
                                            </label>
                                        </div>
                                        <div class="col-10 ps-0">
                                            <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
                                                <!--begin::Editor-->
                                                <div id="kt_forms_widget_1_editor_jawabanpilgankompleks" class="py-6"></div>
                                                <!--end::Editor-->
                                                <div class="separator"></div>
                                                <!--begin::Toolbar-->
                                                <div id="kt_forms_widget_1_editor_toolbar_jawabanpilgankompleks" class="ql-toolbar d-flex flex-stack py-2">
                                                    <div class="me-2">
                                                        <span class="ql-formats ql-size ms-0">
                                                            <select class="ql-size w-75px"></select>
                                                        </span>
                                                        <span class="ql-formats">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-underline"></button>
                                                            <button class="ql-strike"></button>
                                                            <button class="ql-link"></button>
                                                            <button class="ql-clean"></button>
                                                        </span>
                                                    </div>
                                                    <div class="me-n3">
                                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                                            <i class="flaticon2-clip-symbol icon-ms"></i>
                                                        </span>
                                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                                            <i class="flaticon2-pin icon-ms"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--end::Toolbar-->
                                            </form>
                                        </div>
                                        <div class="col-1  d-flex justify-content-center align-items-center">
                                            <!-- Upload Image Soal -->
                                            <div class="upload__box me-3">
                                                    <div class="upload__btn-box mb-0">
                                                        <label class="btn btn-icon btn-bg-light btn-active-color-primary upload__btn" style="min-width : 40px; min-height : 40px">
                                                            <i class="fa-duotone fa-images" style="font-size: 1.5rem;"></i>
                                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                                        </label>
                                                    </div>
                                                </div>
                                            <!-- Akhir Image Soal -->
                                        </div>
                                    </div>
                                <!-- Akhir inputan untuk jawaban -->

                                <!-- Inputan ketika tambah opsi -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="upload__img-wrap"></div>
                                        </div>
                                        <div class="col-1 d-flex justify-content-center align-items-center">
                                            <label class="form-check form-check-sm form-check-custom form-check-solid d-block">
                                                <input class="form-check-input" type="checkbox">
                                            </label>
                                        </div>
                                        <div class="col-9 ps-0">
                                            <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
                                                <!--begin::Editor-->
                                                <div id="kt_forms_widget_1_editor_tambahopsipilgankompleks" class="py-6"></div>
                                                <!--end::Editor-->
                                                <div class="separator"></div>
                                                <!--begin::Toolbar-->
                                                <div id="kt_forms_widget_1_editor_toolbar_tambahopsipilgankompleks" class="ql-toolbar d-flex flex-stack py-2">
                                                    <div class="me-2">
                                                        <span class="ql-formats ql-size ms-0">
                                                            <select class="ql-size w-75px"></select>
                                                        </span>
                                                        <span class="ql-formats">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-underline"></button>
                                                            <button class="ql-strike"></button>
                                                            <button class="ql-link"></button>
                                                            <button class="ql-clean"></button>
                                                        </span>
                                                    </div>
                                                    <div class="me-n3">
                                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                                            <i class="flaticon2-clip-symbol icon-ms"></i>
                                                        </span>
                                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                                            <i class="flaticon2-pin icon-ms"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--end::Toolbar-->
                                            </form>
                                        </div>
                                        <div class="col-2 d-flex justify-content-center align-items-center">
                                            <!-- Upload Image Soal -->
                                                <div class="upload__box me-3">
                                                    <div class="upload__btn-box mb-0">
                                                        <label class="btn btn-icon btn-bg-light btn-active-color-primary upload__btn" style="min-width : 40px; min-height : 40px">
                                                            <i class="fa-duotone fa-images" style="font-size: 1.5rem;"></i>
                                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                                        </label>
                                                    </div>
                                                </div>
                                            <!-- Akhir Image Soal -->

                                            <!-- Hapus Tambah Opsi -->
                                                <button type="button" class="btn btn-icon btn-bg-light btn-active-color-primary">                                    
                                                    <i class="fa-duotone fa-trash" style="font-size: 1.5rem;"></i>                                
                                                </button>
                                            <!-- Akhir Hapus Tambah -->
                                        </div>
                                    </div>
                                <!-- Akhir inputan ketika tambah opsi -->

                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-4">
                                    <a href="#" class="btn btn-sm btn-light-primary ms-4">
                                        <span class="svg-icon svg-icon-2 me-0">
                                            <i class="fa-duotone fa-plus" style="font-size: 1.3rem;"></i>
                                        </span>    
                                    Tambah Opsi</a>
                                </label>
                            </div>
                        </div>

                        <div id="uraiansingkat" class="tabcontent">
                            <div class="uraian-singkat">
                                <div class="row">
                                    <p><strong>Kunci Jawaban</strong></p>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4">
                                        <input type="text" class="form-control form-control-solid" id="floatingInput" placeholder="Jawaban ini benar">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div id="uraianpanjang" class="tabcontent">
                            <div class="uraian-panjang">
                                <div class="row">
                                    <p><strong>Kunci Jawaban</strong></p>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4">
                                        <textarea class="form-control form-control-solid" placeholder="Jawaban ini benar" style="height: 150px"></textarea>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div id="penjodohan" class="tabcontent">
                            <div class="penjodohan">
                                <div class="row">
                                    <p class="fw-bolder ms-0 ps-0">Daftar Pertanyaan</p>
                                </div>
                                <!-- inputan untuk pertanyaan -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="upload__img-wrap"></div>
                                        </div>
                                        <div class="col-10 ps-0">
                                            <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
                                                <!--begin::Editor-->
                                                <div id="kt_forms_widget_1_editor_jawabanpenjodohan" class="py-6"></div>
                                                <!--end::Editor-->
                                                <div class="separator"></div>
                                                <!--begin::Toolbar-->
                                                <div id="kt_forms_widget_1_editor_toolbar_jawabanpenjodohan" class="ql-toolbar d-flex flex-stack py-2">
                                                    <div class="me-2">
                                                        <span class="ql-formats ql-size ms-0">
                                                            <select class="ql-size w-75px"></select>
                                                        </span>
                                                        <span class="ql-formats">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-underline"></button>
                                                            <button class="ql-strike"></button>
                                                            <button class="ql-link"></button>
                                                            <button class="ql-clean"></button>
                                                        </span>
                                                    </div>
                                                    <div class="me-n3">
                                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                                            <i class="flaticon2-clip-symbol icon-ms"></i>
                                                        </span>
                                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                                            <i class="flaticon2-pin icon-ms"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--end::Toolbar-->
                                            </form>
                                        </div>
                                        <div class="col-2  d-flex justify-content-center align-items-center">
                                            <!-- Pilih Jawaban -->
                                                <div class="me-3">
                                                    <select class="form-select form-select-solid" data-control="select2" >
                                                        <option></option>
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="2">C</option>
                                                    </select>
                                                </div>
                                            <!-- Akhir Pilih Jawaban -->
                                            <!-- Upload Image Soal -->
                                                <div class="upload__box">
                                                    <div class="upload__btn-box mb-0">
                                                        <label class="btn btn-icon btn-bg-light btn-active-color-primary upload__btn" style="min-width : 40px; min-height : 40px">
                                                            <i class="fa-duotone fa-images" style="font-size: 1.5rem;"></i>
                                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                                        </label>
                                                    </div>
                                                </div>
                                            <!-- Akhir Image Soal -->
                                        </div>
                                    </div>
                                <!-- Akhir inputan pertanyaan -->

                                <!-- Inputan ketika tambah opsi -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="upload__img-wrap"></div>
                                        </div>
                                        <div class="col-9 ps-0">
                                            <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
                                                <!--begin::Editor-->
                                                <div id="kt_forms_widget_1_editor_tambahopsipenjodohan" class="py-6"></div>
                                                <!--end::Editor-->
                                                <div class="separator"></div>
                                                <!--begin::Toolbar-->
                                                <div id="kt_forms_widget_1_editor_toolbar_tambahopsipenjodohan" class="ql-toolbar d-flex flex-stack py-2">
                                                    <div class="me-2">
                                                        <span class="ql-formats ql-size ms-0">
                                                            <select class="ql-size w-75px"></select>
                                                        </span>
                                                        <span class="ql-formats">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-underline"></button>
                                                            <button class="ql-strike"></button>
                                                            <button class="ql-link"></button>
                                                            <button class="ql-clean"></button>
                                                        </span>
                                                    </div>
                                                    <div class="me-n3">
                                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                                            <i class="flaticon2-clip-symbol icon-ms"></i>
                                                        </span>
                                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                                            <i class="flaticon2-pin icon-ms"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--end::Toolbar-->
                                            </form>
                                        </div>
                                        <div class="col-3  d-flex justify-content-center align-items-center">
                                            <!-- Pilih Jawaban -->
                                                <div class="me-3">
                                                    <select class="form-select form-select-solid" data-control="select2" >
                                                        <option></option>
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="2">C</option>
                                                    </select>
                                                </div>
                                            <!-- Akhir Pilih Jawaban -->

                                            <!-- Upload Image Soal -->
                                                <div class="upload__box me-3">
                                                    <div class="upload__btn-box mb-0">
                                                        <label class="btn btn-icon btn-bg-light btn-active-color-primary upload__btn" style="min-width : 40px; min-height : 40px">
                                                            <i class="fa-duotone fa-images" style="font-size: 1.5rem;"></i>
                                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                                        </label>
                                                    </div>
                                                </div>
                                            <!-- Akhir Image Soal -->

                                            <!-- Hapus Tambah Opsi -->
                                            <button id="3" type="button" class="btn btn-icon btn-bg-light btn-active-color-primary">                                    
                                                    <i class="fa-duotone fa-trash" style="font-size: 1.5rem;"></i>                                
                                                </button>
                                            <!-- Akhir Hapus Tambah -->
                                        </div>
                                    </div>
                                <!-- Inputan ketika tambah opsi -->

                                <!-- Button tambah pertanyaan -->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-4">
                                        <a href="#" class="btn btn-sm btn-light-primary ms-4">
                                            <span class="svg-icon svg-icon-2 me-0">
                                                <i class="fa-duotone fa-plus" style="font-size: 1.3rem;"></i>
                                            </span>    
                                        Tambah Pertanyaan</a>
                                    </label>
                                <!-- Akhir button tambah pertanyaan -->

                                <!-- Inputan untuk jawaban -->
                                    <div class="row">
                                        <p class="fw-bolder ms-0 ps-0">Daftar Jawaban</p>
                                    </div>

                                    <div class="row">
                                        <div class="d-flex mb-4">
                                            <div class="numbered d-flex justify center align-items-center fs-5 me-3">1</div>  
                                            <label class="form-check form-check-sm form-check-custom form-check-solid" style="width:100%;">                        
                                                <input type="text" class="form-control form-control form-control-solid me-3" placeholder="Daftar Jawaban">                    
                                            </label> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="d-flex mb-4">                
                                            <div class="numbered d-flex justify center align-items-center fs-5 me-3">2</div>                  
                                            <label class="form-check form-check-sm form-check-custom form-check-solid" style="width:100%;">                        
                                                <input type="text" class="form-control form-control form-control-solid me-3" placeholder="Daftar Jawaban">                    
                                            </label>                    
                                            <button class="btn btn-icon btn-bg-light btn-active-color-primary" style="width:60px;">                        
                                                <i class="fa-duotone fa-trash" style="font-size: 1.5rem;"></i>                    
                                            </button>            
                                        </div>
                                    </div>
                                <!-- Akhir inputan jawaban -->

                                <!-- Button tambah jawaban -->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-4">
                                        <a href="#" class="btn btn-sm btn-light-primary ms-4">
                                            <span class="svg-icon svg-icon-2 me-0">
                                                <i class="fa-duotone fa-plus" style="font-size: 1.3rem;"></i>
                                            </span>    
                                        Tambah Jawaban</a>
                                    </label>
                                <!-- Akhir button tambah jawaban -->
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

