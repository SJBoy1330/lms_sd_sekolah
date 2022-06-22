<!--begin::Modal header-->
<div class="modal-header">
    <!--begin::Modal title-->
    <h2 class="fw-bolder">Tambah Kelas</h2>
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
        <div class="col-xl-4 col-md-12">
            <div class="d-flex flex-column mb-8 fv-row">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="required">Tahun Ajaran</span>
                </label>
                <!--end::Label-->
                <div class="position-relative d-flex align-items-center">
                    <div style="width:100vw;">
                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih">
                            <option></option>
                            <?php foreach ($tahun_ajaran as $ta) : ?>
                                <option value="<?= $ta->id_tahun_ajaran ?>"><?= $ta->nama ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12">
            <div class="d-flex flex-column mb-8 fv-row">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="required">Tingkat</span>
                </label>
                <!--end::Label-->
                <div class="position-relative d-flex align-items-center">
                    <div style="width:100vw;">
                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih">
                            <option></option>
                            <?php foreach ($tingkat as $t) : ?>
                                <option value="<?= $t->id_tingkat ?>"><?= $t->nama ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12">
            <div class="d-flex flex-column mb-8 fv-row">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="required">Wali Kelas</span>
                </label>
                <!--end::Label-->
                <div class="position-relative d-flex align-items-center">
                    <div style="width:100vw;">
                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih">
                            <option></option>
                            <?php foreach ($staf as $s) : ?>
                                <?php if ($s->tipe === '3') : ?>
                                    <option value="<?= $s->id_staf ?>"><?= $s->nama ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="required">Nama Kelas</span>
                </label>
                <div class="position-relative d-flex align-items-center">
                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                        <i class="fa-duotone fa-screen-users" style="font-size: 1.3rem;"></i>
                    </span>
                    <input class="form-control form-control-solid ps-12" placeholder="Masukkan nama kelas" />
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="form-label">Pilih Siswa</label>
                <input class="form-control form-control-solid" placeholder="Pilih siswa" id="kt_tagify_users" />
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