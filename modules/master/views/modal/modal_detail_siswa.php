    <div class="row">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center mb-15">
            <img src="<?= $foto ?>" alt="" class="img-responsive rounded-circle">
            <span class="d-flex flex-column fw-bolder fs-5 mt-3">
                <?= $nama ?>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <label class="d-flex flex-stack mb-5 cursor-pointer">
                <!--begin:Label-->
                <span class="d-flex align-items-center me-2">
                    <!--begin:Icon-->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-success">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                            <span class="svg-icon svg-icon-1">
                                <i class="fa-duotone fa-id-card-clip" style="font-size: 1.5rem; color: #009ef7;"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <!--end:Icon-->
                    <!--begin:Info-->
                    <span class="d-flex flex-column">
                        <span class="fw-bolder fs-6">NIS</span>
                        <span class="fs-7 text-muted"><?= $nis ?></span>
                    </span>
                    <!--end:Info-->
                </span>
                <!--end:Label-->
            </label>

            <label class="d-flex flex-stack mb-5 cursor-pointer">
                <!--begin:Label-->
                <span class="d-flex align-items-center me-2">
                    <!--begin:Icon-->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-primary">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                            <span class="svg-icon svg-icon-1">
                                <i class="fa-duotone fa-id-card-clip" style="font-size: 1.5rem; color: #B0DC00;"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <!--end:Icon-->
                    <!--begin:Info-->
                    <span class="d-flex flex-column">
                        <span class="fw-bolder fs-6">NISN</span>
                        <span class="fs-7 text-muted">Gak ada response API</span>
                    </span>
                    <!--end:Info-->
                </span>
                <!--end:Label-->
            </label>

            <label class="d-flex flex-stack mb-5 cursor-pointer">
                <!--begin:Label-->
                <span class="d-flex align-items-center me-2">
                    <!--begin:Icon-->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-info">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                            <span class="svg-icon svg-icon-1">
                                <i class="fa-duotone fa-location-dot" style="font-size: 1.5rem; color: #7239ea;"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <!--end:Icon-->
                    <!--begin:Info-->
                    <span class="d-flex flex-column">
                        <span class="fw-bolder fs-6">Alamat</span>
                        <span class="fs-7 text-muted"><?= $alamat ?></span>
                    </span>
                    <!--end:Info-->
                </span>
                <!--end:Label-->
            </label>



            <label class="d-flex flex-stack mb-5 cursor-pointer">
                <!--begin:Label-->
                <span class="d-flex align-items-center me-2">
                    <!--begin:Icon-->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-danger">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                            <span class="svg-icon svg-icon-1">
                                <i class="fa-duotone fa-envelope" style="font-size: 1.5rem; color: #ec3528;"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <!--end:Icon-->
                    <!--begin:Info-->
                    <span class="d-flex flex-column">
                        <span class="fw-bolder fs-6">Email</span>
                        <span class="fs-7 text-muted"><?= $email ?></span>
                    </span>
                    <!--end:Info-->
                </span>
                <!--end:Label-->
            </label>
        </div>

        <div class="col-4">
            <label class="d-flex flex-stack mb-5 cursor-pointer">
                <!--begin:Label-->
                <span class="d-flex align-items-center me-2">
                    <!--begin:Icon-->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-success">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                            <span class="svg-icon svg-icon-1">
                                <i class="fa-duotone fa-person-praying" style="font-size: 1.5rem; color: #009ef7;"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <!--end:Icon-->
                    <!--begin:Info-->
                    <span class="d-flex flex-column">
                        <span class="fw-bolder fs-6">Agama</span>
                        <span class="fs-7 text-muted">Gak ada response API</span>
                    </span>
                    <!--end:Info-->
                </span>
                <!--end:Label-->
            </label>

            <label class="d-flex flex-stack mb-5 cursor-pointer">
                <!--begin:Label-->
                <span class="d-flex align-items-center me-2">
                    <!--begin:Icon-->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-primary">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                            <span class="svg-icon svg-icon-1">
                                <i class="fa-duotone fa-venus-mars" style="font-size: 1.5rem; color: #B0DC00;"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <!--end:Icon-->
                    <!--begin:Info-->
                    <span class="d-flex flex-column">
                        <span class="fw-bolder fs-6">Jenis Kelamin</span>
                        <span class="fs-7 text-muted"><?= $gender === 'L' ? 'Laki - laki' : 'Perempuan' ?></span>
                    </span>
                    <!--end:Info-->
                </span>
                <!--end:Label-->
            </label>

            <label class="d-flex flex-stack mb-5 cursor-pointer">
                <!--begin:Label-->
                <span class="d-flex align-items-center me-2">
                    <!--begin:Icon-->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-info">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                            <span class="svg-icon svg-icon-1">
                                <i class="fa-duotone fa-id-card" style="font-size: 1.5rem; color: #7239ea;"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <!--end:Icon-->
                    <!--begin:Info-->
                    <span class="d-flex flex-column">
                        <span class="fw-bolder fs-6">Nama Orang Tua</span>
                        <span class="fs-7 text-muted">Gak ada response API</span>
                    </span>
                    <!--end:Info-->
                </span>
                <!--end:Label-->
            </label>


            <label class="d-flex flex-stack mb-5 cursor-pointer">
                <!--begin:Label-->
                <span class="d-flex align-items-center me-2">
                    <!--begin:Icon-->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-success">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                            <span class="symbol-label bg-light-warning">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <i class="fa-duotone fa-location-dot" style="font-size: 1.5rem; color: #ffc700;"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <!--end:Icon-->
                    <!--begin:Info-->
                    <span class="d-flex flex-column">
                        <span class="fw-bolder fs-6">Alamat Orang Tua</span>
                        <span class="fs-7 text-muted">Gak ada response API</span>
                    </span>
                    <!--end:Info-->
                </span>
                <!--end:Label-->
            </label>
        </div>

        <div class="col-4">
            <label class="d-flex flex-stack mb-5 cursor-pointer">
                <!--begin:Label-->
                <span class="d-flex align-items-center me-2">
                    <!--begin:Icon-->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-success">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                            <span class="svg-icon svg-icon-1">
                                <i class="fa-duotone fa-circle-dot" style="font-size: 1.5rem; color: #009ef7;"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <!--end:Icon-->
                    <!--begin:Info-->
                    <span class="d-flex flex-column">
                        <span class="fw-bolder fs-6">Status Siswa</span>
                        <?php if ($aktif === 'Y') : ?>
                            <span class="badge badge-success">Aktif</span>
                        <?php else : ?>
                            <span class="badge badge-danger">Tidak Aktif</span>
                        <?php endif; ?>
                    </span>
                    <!--end:Info-->
                </span>
                <!--end:Label-->
            </label>

            <label class="d-flex flex-stack mb-5 cursor-pointer">
                <!--begin:Label-->
                <span class="d-flex align-items-center me-2">
                    <!--begin:Icon-->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-primary">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                            <span class="symbol-label bg-light-warning">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <i class="fa-duotone fa-phone" style="font-size: 1.5rem; color: #B0DC00;"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <!--end:Icon-->
                    <!--begin:Info-->
                    <span class="d-flex flex-column">
                        <span class="fw-bolder fs-6">Telp Siswa</span>
                        <span class="fs-7 text-muted"><?= $telp ?></span>
                    </span>
                    <!--end:Info-->
                </span>
                <!--end:Label-->
            </label>


            <label class="d-flex flex-stack mb-5 cursor-pointer">
                <!--begin:Label-->
                <span class="d-flex align-items-center me-2">
                    <!--begin:Icon-->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label bg-light-info">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                            <span class="svg-icon svg-icon-1">
                                <i class="fa-duotone fa-phone" style="font-size: 1.5rem; color: #7239ea;"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <!--end:Icon-->
                    <!--begin:Info-->
                    <span class="d-flex flex-column">
                        <span class="fw-bolder fs-6">Telp Orang Tua</span>
                        <span class="fs-7 text-muted">Gak ada response API</span>
                    </span>
                    <!--end:Info-->
                </span>
                <!--end:Label-->
            </label>
        </div>
    </div>