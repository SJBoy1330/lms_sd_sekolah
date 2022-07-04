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
                        <a href="<?= base_url('ujian/paket_ujian');?>" class="btn btn-light">
							<i class="bi bi-arrow-left"></i> Kembali
						</a>
                    </div>
                    <!--end::Search-->
                </div>

                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('ujian/tambah_soal')?>" class="btn btn-sm btn-light-info me-2">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-plus" style="font-size: 18px;"></i>
                            </span>
                            Soal</a>
                        <!--begin::Filter-->
                        <a href="<?= base_url('ujian/tambah_peserta_ujian')?>" class="btn btn-sm btn-light-success me-3">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-plus" style="font-size: 18px;"></i>
                            </span>
                            <!--end::Svg Icon-->Peserta Ujian
                        </a>
                    </div>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <div>
                    <h5 class="mb-3">Keterangan Detail Paket Ujian</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered gs-7 gy-4 gx-7 no-footer" style="border:0.5pt solid #C0C0C0;">
                            <tbody>
                                <tr style="border:0.5pt solid #C0C0C0; vertical-align:middle;">
                                    <th scope="row" width="300" class="bg-light fw-bolder">Nama Paket</th>
                                    <td>Paket 1</td>
                                </tr>
                                <tr style="border:0.5pt solid #C0C0C0; vertical-align:middle;">
                                    <th scope="row" width="300" class="bg-light fw-bolder">Nama Pelajaran</th>
                                    <td>Ilmu Pengetahuan Alam</td>
                                </tr>
                                <tr style="border:0.5pt solid #C0C0C0; vertical-align:middle;">
                                    <th scope="row" width="300" class="bg-light fw-bolder">Jadwal</th>
                                    <td>12:00, 12 May 2022</td>
                                </tr>
                                <tr style="border:0.5pt solid #C0C0C0; vertical-align:middle;">
                                    <th scope="row" width="300" class="bg-light fw-bolder">Waktu Pengerjaan</th>
                                    <td>90 Menit</td>
                                </tr>
                                <tr style="border:0.5pt solid #C0C0C0; vertical-align:middle;">
                                    <th scope="row" width="300" class="bg-light fw-bolder">Jumlah Soal</th>
                                    <td>10 Soal</td>
                                </tr>
                                <tr style="border:0.5pt solid #C0C0C0; vertical-align:middle;">
                                    <th scope="row" width="300" class="bg-light fw-bolder">Total Skor</th>
                                    <td>100 Poin</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-10">
            <!--begin::Card header-->
            <div class="card-header border-0">
                <!--begin::Card title-->
                <div class="card-title">
                </div>

                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('ujian/koreksi_ujian')?>" class="btn btn-sm btn-light-info me-2">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-badge-check" style="font-size: 18px;"></i>
                            </span>
                            Koreksi Ujian</a>
                        <!--begin::Filter-->
                        <a href="<?= base_url('ujian/hasil_ujian')?>" class="btn btn-sm btn-light-success me-3">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-square-poll-vertical" style="font-size: 18px;"></i>
                            </span>
                            Hasil Ujian
                        </a>
                    </div>
                </div>
            </div>
            <!--end::Card header-->
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
