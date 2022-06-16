<div class="row">
    <div class="col-12 d-flex flex-column justify-content-center align-items-center mb-15">
        <img src="<?= $foto ?>" alt="" class="img-responsive rounded-circle" style="width: 250px; height: 250px;">
        <span class="d-flex flex-column fw-bolder fs-5 mt-5">
            <?= $nama ?>
        </span>
    </div>
</div>
<div class="row">
    <div class="col-xl-6 col-md-12">
        <label class="d-flex flex-stack mb-5 cursor-pointer">
            <!--begin:Label-->
            <span class="d-flex align-items-center me-2">
                <!--begin:Icon-->
                <span class="symbol symbol-50px me-6">
                    <span class="symbol-label bg-light-success">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                        <span class="svg-icon svg-icon-1">
                            <i class="fa-duotone fa-id-badge" style="font-size: 1.5rem; color: #009ef7;"></i>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                </span>
                <!--end:Icon-->
                <!--begin:Info-->
                <span class="d-flex flex-column">
                    <span class="fw-bolder fs-6">User ID</span>
                    <span class="fs-7 text-muted"><?= $username ?></span>
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
                    <span class="fw-bolder fs-6">NIP (Nomor Identitas Pegawai)</span>
                    <span class="fs-7 text-muted"><?= $nip ?></span>
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
                    <span class="fw-bolder fs-6">Nama</span>
                    <span class="fs-7 text-muted"><?= $nama ?></span>
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
                                <i class="fa-duotone fa-list-check" style="font-size: 1.5rem; color: #ffc700;"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                </span>
                <!--end:Icon-->
                <!--begin:Info-->
                <span class="d-flex flex-column">
                    <span class="fw-bolder fs-6">Bidang Tugas</span>
                    <span class="fs-7 text-muted"><?= $nama_bidang === null || $nama_bidang === '' ? 'Belum diisi bidang tugas' : $nama_bidang ?></span>
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
                            <i class="fa-duotone fa-location-dot" style="font-size: 1.5rem; color: #ec3528;"></i>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                </span>
                <!--end:Icon-->
                <!--begin:Info-->
                <span class="d-flex flex-column">
                    <span class="fw-bolder fs-6">Alamat</span>
                    <span class="fs-7 text-muted"><?= $alamat === null || $alamat === '' ? 'Belum diisi' : $alamat ?></span>
                </span>
                <!--end:Info-->
            </span>
            <!--end:Label-->
        </label>
    </div>

    <div class="col-xl-6 col-md-12">
        <label class="d-flex flex-stack mb-5 cursor-pointer">
            <!--begin:Label-->
            <span class="d-flex align-items-center me-2">
                <!--begin:Icon-->
                <span class="symbol symbol-50px me-6">
                    <span class="symbol-label bg-light-success">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                        <span class="svg-icon svg-icon-1">
                            <i class="fa-duotone fa-phone" style="font-size: 1.5rem; color: #009ef7;"></i>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                </span>
                <!--end:Icon-->
                <!--begin:Info-->
                <span class="d-flex flex-column">
                    <span class="fw-bolder fs-6">No. Telepon</span>
                    <span class="fs-7 text-muted"><?= $telp === null || $telp === '' ? 'Belum diisi' : $telp ?></span>
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
                            <i class="fa-duotone fa-envelope" style="font-size: 1.5rem; color: #B0DC00;"></i>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                </span>
                <!--end:Icon-->
                <!--begin:Info-->
                <span class="d-flex flex-column">
                    <span class="fw-bolder fs-6">Email</span>
                    <span class="fs-7 text-muted"><?= $email === null || $email === '' ? 'Belum diisi' : $email ?></span>
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
                            <i class="fa-duotone fa-venus-mars" style="font-size: 1.5rem; color: #7239ea;"></i>
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
                    <span class="symbol-label bg-light-success">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                        <span class="symbol-label bg-light-warning">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                            <span class="svg-icon svg-icon-1">
                                <i class="fa-duotone fa-timeline" style="font-size: 1.5rem; color: #ffc700;"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                </span>
                <!--end:Icon-->
                <!--begin:Info-->
                <span class="d-flex flex-column">
                    <span class="fw-bolder fs-6">Tipe</span>
                    <span class="fs-7 text-muted"><?= $tipe ?></span>
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
                            <i class="fa-duotone fa-circle-dot" style="font-size: 1.5rem; color: #ec3528;"></i>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                </span>
                <!--end:Icon-->
                <!--begin:Info-->
                <span class="d-flex flex-column">
                    <span class="fw-bolder fs-6">Status</span>
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
    </div>
</div>