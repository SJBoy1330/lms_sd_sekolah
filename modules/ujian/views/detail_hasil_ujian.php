<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body pb-4">
                <div class="row mb-4">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <h5 class="mb-3">Keterangan Detail Paket Ujian</h5>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
                    </div>
                </div>
                <div>    
                    <div class="table-responsive">
                        <table class="table table-bordered gs-7 gy-4 gx-7 no-footer" style="border:0.5pt solid #C0C0C0;">
                            <tbody>
                                <tr style="border:0.5pt solid #C0C0C0; vertical-align:middle;">
                                    <th scope="row" width="300" class="bg-light fw-bolder">Nama Paket</th>
                                    <td>Paket 1</td>
                                </tr>
                                <tr style="border:0.5pt solid #C0C0C0; vertical-align:middle;">
                                    <th scope="row" width="300" class="bg-light fw-bolder">Jumlah Benar</th>
                                    <td>10 Soal</td>
                                </tr>
                                <tr style="border:0.5pt solid #C0C0C0; vertical-align:middle;">
                                    <th scope="row" width="300" class="bg-light fw-bolder">Jumlah Salah</th>
                                    <td>0 Soal</td>
                                </tr>
                                <tr style="border:0.5pt solid #C0C0C0; vertical-align:middle;">
                                    <th scope="row" width="300" class="bg-light fw-bolder">Jumlah Kosong</th>
                                    <td>0 Soal</td>
                                </tr>
                                <tr style="border:0.5pt solid #C0C0C0; vertical-align:middle;">
                                    <th scope="row" width="300" class="bg-light fw-bolder">Nilai Ujian</th>
                                    <td>90</td>
                                </tr>
                                <tr style="border:0.5pt solid #C0C0C0; vertical-align:middle;">
                                    <th scope="row" width="300" class="bg-light fw-bolder">Waktu Pengerjaan</th>
                                    <td>30 Menit</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-10">
            <!--begin::Card body-->
            <div class="card-body py-4">
                <div class="card border-1">
                    <div class="card-header bg-light">
                        <div class="card-toolbar justify-content-between" style="width:100vw">
                            <h5>Kelompok 1</h5>
                            <div>
                                <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary">
                                    <p class="mb-0" style="font-weight: medium;">
                                        100</p>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body border">
                        <div class="row">
                            <div class="col-md-12 mb-10 mb-md-0">

                                <!-- Design Pilihan Ganda Baru -->
                                <div class="card border cursor-pointer mb-3 m-0">
                                    <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary position-absolute btn-aksi"  data-bs-toggle="modal" data-bs-target="#modalInputSkor">
                                        <p class="mb-0" style="font-weight: medium;">
                                            0/10</p>
                                    </button>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalPilgan" class="card-header bg-light d-flex align-items-center py-3 toggle mb-0">
                                        <div style="display:flex; justify-content:center; flex-direction: column;">
                                            <div class="d-flex flex-column text-start mt-2 mb-4">
                                                <p class="text-dark fw-bolder text-hover-primary mb-0 fs-5">Tipe Soal</p>
                                                <span class="text-muted fw-bold d-block fs-7">Pilihan Ganda</span>
                                            </div>
                                            <div style="display : flex;align-items:center; flex-wrap: wrap;">
                                                <div class="me-3 mb-3 rounded-2" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3 rounded-2" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                            </div>
                                            <p class="text-dark fw-normal mb-0" style="width: 100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laudantium facere sint officia velit, non impedit hic. Quo recusandae doloribus reiciendis sit minima eius quam totam quidem aspernatur pariatur!</p>
                                        </div>
                                    </a>
                                </div>
                                <!-- Akhir Design Pilihan Ganda Baru -->

                                <!-- Design Pilihan Ganda Kompleks Baru -->
                                <div class="card border cursor-pointer mb-3 m-0">
                                    <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary position-absolute btn-aksi"  data-bs-toggle="modal" data-bs-target="#modalInputSkor">
                                        <p class="mb-0" style="font-weight: medium;">
                                            0/10</p>
                                    </button>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalPilganKompleks" class="card-header bg-light d-flex align-items-center py-3 toggle mb-0">
                                        <div class="d-flex flex-column text-start mt-2 mb-4">
                                            <p class="text-dark fw-bolder text-hover-primary mb-0 fs-5">Tipe Soal</p>
                                            <span class="text-muted fw-bold d-block fs-7">Pilihan Ganda Kompleks</span>
                                        </div>
                                        <div style="display:flex; justify-content:center; flex-direction: column;">
                                            <div style="display : flex;align-items:center; flex-wrap: wrap;">
                                                <div class="me-3 mb-3 rounded-2" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3 rounded-2" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                            </div>
                                            <p class="text-dark fw-normal mb-0" style="width: 100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laudantium facere sint officia velit, non impedit hic. Quo recusandae doloribus reiciendis sit minima eius quam totam quidem aspernatur pariatur!</p>
                                        </div>
                                    </a>
                                </div>
                                <!-- Akhir Pilihan Ganda Kompleks Baru -->

                                <!-- Design Uraian Singkat -->
                                <div class="card border cursor-pointer mb-3 m-0">
                                    <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary position-absolute btn-aksi"  data-bs-toggle="modal" data-bs-target="#modalInputSkor">
                                        <p class="mb-0" style="font-weight: medium;">
                                            0/10</p>
                                    </button>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalUraianSingkat" class="card-header bg-light d-flex align-items-center py-3 toggle mb-0">
                                        <div class="d-flex flex-column text-start mt-2 mb-4">
                                            <p class="text-dark fw-bolder text-hover-primary mb-0 fs-5">Tipe Soal</p>
                                            <span class="text-muted fw-bold d-block fs-7">Uraian Singkat</span>
                                        </div>
                                        <div style="display:flex; justify-content:center; flex-direction: column;">
                                            <div style="display : flex;align-items:center; flex-wrap: wrap;">
                                                <div class="me-3 mb-3 rounded-2" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3 rounded-2" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                            </div>
                                            <p class="text-dark fw-normal mb-0" style="width: 100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laudantium facere sint officia velit, non impedit hic. Quo recusandae doloribus reiciendis sit minima eius quam totam quidem aspernatur pariatur!</p>
                                        </div>
                                    </a>
                                </div>
                                <!-- Akhir Uraian Singkat -->

                                <!-- Design Uraian Panjang -->
                                <div class="card border cursor-pointer mb-3 m-0">
                                    <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary position-absolute btn-aksi"  data-bs-toggle="modal" data-bs-target="#modalInputSkor">
                                        <p class="mb-0" style="font-weight: medium;">
                                            0/10</p>
                                    </button>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalUraianPanjang" class="card-header bg-light d-flex align-items-center py-3 toggle mb-0">
                                        <div class="d-flex flex-column text-start mt-2 mb-4">
                                            <p class="text-dark fw-bolder text-hover-primary mb-0 fs-5">Tipe Soal</p>
                                            <span class="text-muted fw-bold d-block fs-7">Uraian Panjang</span>
                                        </div>
                                        <div style="display:flex; justify-content:center; flex-direction: column;">
                                            <div style="display : flex;align-items:center; flex-wrap: wrap;">
                                                <div class="me-3 mb-3 rounded-2" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3 rounded-2" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                            </div>
                                            <p class="text-dark fw-normal mb-0" style="width: 100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laudantium facere sint officia velit, non impedit hic. Quo recusandae doloribus reiciendis sit minima eius quam totam quidem aspernatur pariatur!</p>
                                        </div>
                                    </a>
                                </div>
                                <!-- Akhir Uraian Panjang -->

                                <!-- Design Penjodohan -->
                                <div class="card border cursor-pointer mb-3 m-0">
                                    <button class="btn btn-sm btn-icon bg-secondary btn-active-color-primary position-absolute btn-aksi"  data-bs-toggle="modal" data-bs-target="#modalInputSkor">
                                        <p class="mb-0" style="font-weight: medium;">
                                            0/10</p>
                                    </button>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalPenjodohan" class="card-header bg-light d-flex align-items-center py-3 toggle mb-0">
                                        <div class="d-flex flex-column text-start mt-2 mb-4">
                                            <p class="text-dark fw-bolder text-hover-primary mb-0 fs-5">Tipe Soal</p>
                                            <span class="text-muted fw-bold d-block fs-7">Penjodohan</span>
                                        </div>
                                        <div style="display:flex; justify-content:center; flex-direction: column;">
                                            <div style="display : flex;align-items:center; flex-wrap: wrap;">
                                                <div class="me-3 mb-3 rounded-2" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                                <div class="me-3 mb-3 rounded-2" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                            </div>
                                            <p class="text-dark fw-normal mb-0" style="width: 100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laudantium facere sint officia velit, non impedit hic. Quo recusandae doloribus reiciendis sit minima eius quam totam quidem aspernatur pariatur!</p>
                                        </div>
                                    </a>
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

<!-- Modal Soal Pilihan Ganda -->
<div class="modal fade" id="modalPilgan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Pilihan Ganda</h2>
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
                    <div class="col-12 d-flex justify-content-center align-items-center flex-wrap">
                        <div style="display : flex; align-items: center; flex-wrap: wrap;">
                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                        </div>
                        <p class="text-dark text-center fw-normal mb-0" style="width: 100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laudantium facere sint officia velit, non impedit hic. Quo recusandae doloribus reiciendis sit minima eius quam totam quidem aspernatur pariatur!</p>
                    </div>

                    <div class="mt-10">
                        <div class="wrapper-detail-hasil-ujian">
                            <label class="form-check form-check-sm form-check-custom form-check-solid bg-light d-flex mx-2 mb-4 py-2 px-3 rounded-3">
                                <input class="form-check-input" type="radio" disabled="" checked="">
                                <div style="display:flex; justify-content:center; flex-direction: column ; padding-left : 20px;">
                                    <div style="display : flex;align-items:center; flex-wrap: wrap;">
                                        <div class="ms-2 mb-3 rounded-2" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                        <div class="ms-2 mb-3 rounded-2" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                    </div>
                                    <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam. <span class="badge badge-success">Jawaban Siswa</span></span>
                                </div>
                            </label>
                        </div>

                        <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4 bg-light py-2 px-3 rounded-3">
                            <input class="form-check-input" type="radio" disabled="">
                            <div style="display:flex; justify-content:center; flex-direction: column ;padding-left : 20px;">
                                <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam.</span>
                            </div>
                        </label>

                        <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4 bg-light py-2 px-3 rounded-3">
                            <input class="form-check-input" type="radio" disabled="">
                            <div style="display:flex; justify-content:center; flex-direction: column ;padding-left : 20px;">
                                <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam.</span>
                            </div>
                        </label>

                        <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4 bg-light py-2 px-3 rounded-3">
                            <input class="form-check-input" type="radio" disabled="">
                            <div style="display:flex; justify-content:center; flex-direction: column ;padding-left : 20px;">
                                <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam.</span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<!-- Modal Soal Pilihan Ganda Kompleks -->
<div class="modal fade" id="modalPilganKompleks" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Pilihan Ganda Kompleks</h2>
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
                    <div class="col-12 d-flex justify-content-center align-items-center flex-wrap">
                        <div style="display : flex; align-items: center; flex-wrap: wrap;">
                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                        </div>
                        <p class="text-dark text-center fw-normal mb-0" style="width: 100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laudantium facere sint officia velit, non impedit hic. Quo recusandae doloribus reiciendis sit minima eius quam totam quidem aspernatur pariatur!</p>
                    </div>

                    <div class="mt-10">
                        <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4 bg-light py-2 px-3 rounded-3">
                            <input class="form-check-input" type="checkbox" disabled="" checked="">
                            <div style="display:flex; justify-content:center; flex-direction: column ;padding-left : 20px;">
                                <div style="display : flex;align-items:center; flex-wrap: wrap;">
                                    <div class="ms-2 mb-3 rounded-2" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                    <div class="ms-2 mb-3 rounded-2" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                </div>
                                <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam. <span class="badge badge-success">Jawaban Siswa</span></span>
                            </div>
                        </label>

                        <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4 bg-light py-2 px-3 rounded-3">
                            <input class="form-check-input" type="checkbox" disabled="">
                            <div style="display:flex; justify-content:center; flex-direction: column ;padding-left : 20px;">
                                <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam.</span>
                            </div>
                        </label>

                        <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4 bg-light py-2 px-3 rounded-3">
                            <input class="form-check-input" type="checkbox" disabled="">
                            <div style="display:flex; justify-content:center; flex-direction: column ;padding-left : 20px;">
                                <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam.</span>
                            </div>
                        </label>

                        <label class="form-check form-check-sm form-check-custom form-check-solid mx-2 mb-4 bg-light py-2 px-3 rounded-3">
                            <input class="form-check-input" type="checkbox" disabled="">
                            <div style="display:flex; justify-content:center; flex-direction: column ;padding-left : 20px;">
                                <span class="form-check-label">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis minus earum dolorum qui similique nulla ullam soluta at dolorem illo enim iusto, in corporis autem rerum optio facere corrupti totam.</span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<!-- Modal Soal Uraian Singkat -->
<div class="modal fade" id="modalUraianSingkat" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Uraian Singkat</h2>
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
                    <div class="col-12 d-flex justify-content-center align-items-center flex-wrap">
                        <div style="display : flex; align-items: center; flex-wrap: wrap;">
                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                        </div>
                        <p class="text-dark text-center fw-normal mb-0" style="width: 100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laudantium facere sint officia velit, non impedit hic. Quo recusandae doloribus reiciendis sit minima eius quam totam quidem aspernatur pariatur!</p>
                    </div>

                    <div class="mt-10">
                        <span class="badge badge-danger mb-3">Kunci Jawaban</span>
                        <div class="form-control form-control-solid mb-3 bg-light-danger">
                            <p class="mb-0 text-dark fw-normal">Lorem</p>
                        </div>

                        <span class="badge badge-success my-3">Jawaban Siswa</span>
                        <div class="form-control form-control-solid mb-3 bg-light-success">
                            <p class="mb-0 text-dark fw-normal">Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<!-- Modal Soal Uraian Panjang -->
<div class="modal fade" id="modalUraianPanjang" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Uraian Panjang</h2>
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
                    <div class="col-12 d-flex justify-content-center align-items-center flex-wrap">
                        <div style="display : flex; align-items: center; flex-wrap: wrap;">
                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                        </div>
                        <p class="text-dark text-center fw-normal mb-0" style="width: 100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laudantium facere sint officia velit, non impedit hic. Quo recusandae doloribus reiciendis sit minima eius quam totam quidem aspernatur pariatur!</p>
                    </div>

                    <div class="mt-10">
                        <span class="badge badge-danger mb-3">Kunci Jawaban</span>
                        <div class="form-control form-control-solid mb-3 bg-light-danger">
                            <p class="mb-0 text-dark fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi obcaecati quaerat nesciunt et voluptatum fuga quas, voluptatibus culpa asperiores earum eos dicta,</p>
                        </div>

                        <span class="badge badge-success my-3">Jawaban Siswa</span>
                        <div class="form-control form-control-solid mb-3 bg-light-success">
                            <p class="mb-0 text-dark fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi obcaecati quaerat nesciunt et voluptatum fuga quas, voluptatibus culpa asperiores earum eos dicta, repellendus voluptas perspiciatis illum exercitationem ipsum. Accusamus, eveniet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi obcaecati quaerat nesciunt et voluptatum fuga quas, voluptatibus culpa asperiores earum eos dicta, repellendus voluptas perspiciatis illum exercitationem ipsum. Accusamus, eveniet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi obcaecati quaerat nesciunt et voluptatum fuga quas, voluptatibus culpa asperiores earum eos dicta, repellendus voluptas perspiciatis illum exercitationem ipsum. Accusamus, eveniet.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<!-- Modal Soal Penjodohan -->
<div class="modal fade" id="modalPenjodohan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Penjodohan</h2>
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
                    <div class="col-12 d-flex justify-content-center align-items-center flex-wrap">
                        <div style="display : flex; align-items: center; flex-wrap: wrap;">
                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                        </div>
                        <p class="text-dark text-center fw-normal mb-0" style="width: 100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum eligendi laudantium facere sint officia velit, non impedit hic. Quo recusandae doloribus reiciendis sit minima eius quam totam quidem aspernatur pariatur!</p>
                    </div>

                    <div class="mt-10 text-gray-600 fw-bold fs-6 px-7">
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
                                    <li class="list-group-item d-flex flex-column p-4">
                                        <div style="display : flex; align-items: center; flex-wrap: wrap;">
                                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                        </div>
                                        <span class="text-start">1. Jeje <span class="badge badge-danger">Kunci Jawaban</span></span>
                                        <span class="position-absolute" style="right: 12px;">[A]</span>
                                    </li>
                                    <li class="list-group-item d-flex flex-column p-4">
                                        <div style="display : flex; align-items: center; flex-wrap: wrap;">
                                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                        </div>
                                        <span class="text-start">2. Saka</span>
                                        <span class="position-absolute" style="right: 12px;">[B]</span>
                                    </li>
                                    <li class="list-group-item d-flex flex-column p-4">
                                        <div style="display : flex; align-items: center; flex-wrap: wrap;">
                                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                        </div>
                                        <span class="text-start">3. Harya</span>
                                        <span class="position-absolute" style="right: 12px;">[C]</span>
                                    </li>
                                    <li class="list-group-item d-flex flex-column p-4">
                                        <div style="display : flex; align-items: center; flex-wrap: wrap;">
                                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/about.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                            <div class="me-3 mb-3" style="background-image: url(<?= base_url('assets/img/adult-only.jpg') ?>); background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></div>
                                        </div>
                                        <span class="text-start">4. Rama</span>
                                        <span class="position-absolute" style="right: 12px;">[D]</span>
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
                                        <span>A. BE Programmer <span class="badge badge-success">Jawaban Siswa</span></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-4">
                                        <span>B. Design Programmer</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-4">
                                        <span>C. Android Programmer</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-4">
                                        <span>D. Quality Ansurrance</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>