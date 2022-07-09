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
<div class="modal-body scroll-y mx-5 mx-xl-8 mb-7">
    <!--begin::Form-->
    <form class="form" id="formTambahEditHariLibur" action="<?= $url_action ?>" method="post">
        <!--begin::Input group-->
        <div class="fv-row mb-10" id="req_tanggal">
            <!--begin::Label-->
            <label class="fs-6 fw-bold form-label mb-2">Tanggal</label>
            <!--end::Label-->
            <div class="position-relative d-flex align-items-center">
                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                    <i class="fa-duotone fa-calendar" style="font-size: 1.3rem;"></i>
                </span>
                <input class="form-control form-control-solid ps-12" name="tanggal" placeholder="Tanggal" />
            </div>
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10" id="req_keterangan">
            <!--begin::Label-->
            <label class="required fs-6 fw-bold form-label mb-2">Keterangan</label>
            <!--end::Label-->
            <textarea class="form-control form-control-solid" name="keterangan" id="keterangan" cols="30" rows="5"><?= $data_hari_libur->keterangan ?></textarea>
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="row mb-4">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary" onclick="submit_form(this, '#formTambahEditHariLibur', 0)" id="btn_submitTambahEditHariLibur">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-2">
                        <i class="fa-duotone fa-floppy-disk" style="font-size: 1.3rem;"></i>
                    </span>
                    <!--end::Svg Icon-->Simpan
                </button>
                <!--end::Add user-->
            </div>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
    <?php if ($data_hari_libur) : ?>
        <script>
            let start = '<?= $data_hari_libur->tanggal_mulai ?>';
            let end = '<?= $data_hari_libur->tanggal_sampai ?>';
            $(function() {
                $('input[name="tanggal"]').daterangepicker({
                    timePicker: true,
                    startDate: moment(start).startOf('hour'),
                    endDate: moment(end).startOf('hour').add(32, 'hour'),
                    locale: {
                        format: 'M/DD hh:mm'
                    }
                });
            });
        </script>
    <?php else : ?>
        <script>
            $(function() {
                $('input[name="tanggal"]').daterangepicker({
                    timePicker: true,
                    startDate: moment().startOf('hour'),
                    endDate: moment().startOf('hour').add(32, 'hour'),
                    locale: {
                        format: 'M/DD hh:mm'
                    }
                });
            });
        </script>
    <?php endif ?>
</div>
<!--end::Modal body-->