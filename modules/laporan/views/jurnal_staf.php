<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="container mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Tanggal</label>
                            <input class="form-select form-select-solid form-select-sm" type="text" name="tanggal" value="" />
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Staf</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                <option></option>
                                <option value="1">Aku</option>
                                <option value="2">kamu</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-4 align-self-end" style="padding:5px;">
                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container">
                <div class="card shadow-sm" id="card">

                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="col-12 d-flex mb-5">
                                <a href="" class="me-3">
                                    <img src="<?= base_url(); ?>assets/img/xls.png" alt="" width="35">
                                </a>
                                <a href="">
                                    <img src="<?= base_url(); ?>assets/img/pdf.png" alt="" width="35">
                                </a>
                            </div>
                            <table class="table table-bordered gs-7 gy-4 gx-5 no-footer" id="kt_table_jadwal" style="border:0.5pt solid #C0C0C0;vertical-align:middle;">
                                <thead class="fw-bolder bg-light">
                                    <!--begin::Table row-->
                                    <tr role="row" style="border:0.5pt solid #C0C0C0;vertical-align:middle;">
                                        <th class="text-center text-uppercase">NO</th>
                                        <th class="text-center text-uppercase">Tanggal</th>
                                        <th class="text-center text-uppercase">Staf</th>
                                        <th class="text-center text-uppercase">Tugas</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <tbody>
                                    <tr style="border:0.5pt solid #C0C0C0;vertical-align:middle;">
                                        <td class="text-center">1</td>
                                        <td class="text-center" nowrap>25-04-2022</td>
                                        <td class="text-center" nowrap>Romadhoni</td>
                                        <td class="text-left">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>