<!--begin::Modal header-->
<div class="modal-header">
    <!--begin::Modal title-->
    <h2 class="fw-bolder"><?= $modal_title ?></h2>
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
    <form id="formTambahEditJenisTugas" action="<?= $url_action ?>" method="post">
        <div class="row">
            <div class="col-!2">
                <div class="d-flex flex-column mb-8 fv-row" id="req_bidang_tugas">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Nama Bidang Tugas</span>
                    </label>
                    <!--end::Label-->
                    <div class="position-relative d-flex align-items-center">
                        <div style="width:100vw;">
                            <select class="form-select form-select-solid load_select" data-control="select2" data-placeholder="Semua" name="bidang_tugas">
                                <option></option>
                                <?php foreach ($data_bidang_tugas as $bidang_tugas) : ?>
                                    <option value="<?= $bidang_tugas->id_bidang_tugas ?>" <?= $data_jenis_tugas->id_bidang_tugas === $bidang_tugas->id_bidang_tugas ? 'selected' : '' ?>><?= $bidang_tugas->nama ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="d-flex flex-column mb-8 fv-row" id="req_nama">
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Nama Jenis Tugas Bidang Staf</span>
                    </label>
                    <div class="position-relative d-flex align-items-center">
                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                            <i class="fa-duotone fa-bars-progress" style="font-size: 1.3rem;"></i>
                        </span>
                        <input class="form-control form-control-solid ps-12" placeholder="Masukkan nama jenis tugas staf" name="nama" value="<?= $data_jenis_tugas->nama ?>" />
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row mb-4">
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary" onclick="submit_form(this, '#formTambahEditJenisTugas', 0)" id="btn_submitTambahEditJenisTugas">
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

<script>
    $('.load_select').select2({
        dropdownParent: $('.parent_drop_select')
    });
</script>