<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="container mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Tahun</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                <option></option>
                                <option value="1">2021</option>
                                <option value="2">2022</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Bulan</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                <option></option>
                                <option value="1">maret</option>
                                <option value="2">april</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Staf</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                <option></option>
                                <option value="1">Aku</option>
                                <option value="2">kamu</option>
                            </select>
                        </div>
                        <div class="col-md-4 offset-md-8 offset-xl-8 d-flex justify-content-end" style="padding:5px;">
                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="row my-3">
                    <div class="col-12 mb-3">
                        <div class="export-box d-flex">
                            <a href="" class="me-3">
                                <img src="<?= base_url(); ?>assets/img/xls.png" alt="" width="35">
                            </a>
                            <a href="">
                                <img src="<?= base_url(); ?>assets/img/pdf.png" alt="" width="35">
                            </a>
                        </div>
                        <div class="row mt-3">
                            <div class="col-auto">
                                <p class="m-0 fw-bolder">Tahun</p>
                                <p class="m-0 fw-bolder">Bulan</p>
                                <p class="m-0 fw-bolder">Staf</p>
                            </div>
                            <div class="col-auto">
                                <p class="m-0 fw-bold">:</p>
                                <p class="m-0 fw-bold">:</p>
                                <p class="m-0 fw-bold">:</p>
                            </div>
                            <div class="col-auto">
                                <p class="m-0">2022</p>
                                <p class="m-0">Maret</p>
                                <p class="m-0">Saka Dana Asmara</p>    
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered gs-7 gy-4 gx-5 no-footer">
                            <thead class="bg-light">
                                <tr class="fw-bolder text-white text-uppercase gs-0 align-middle text-center">
                                    <th rowspan="2" class="text-center bg-danger text-uppercase border border-white">NO</th>
                                    <th rowspan="2" class="text-center bg-danger text-uppercase border border-white">Tanggal</th>
                                    <th colspan="3" class="text-center bg-danger text-uppercase border border-white">HADIR</th>
                                    <th colspan="3" class="text-center bg-danger text-uppercase border border-white">PULANG</th>
                                    <th rowspan="2" class="text-center bg-danger text-uppercase border border-white">JUMLAH JAM KERJA</th>
                                    <th rowspan="2" class="text-center bg-danger text-uppercase border border-white">JUMLAH JAM HADIR</th>
                                </tr>
                                <tr class="fw-bolder text-white text-uppercase gs-0 align-middle text-center">
                                    <th class="bg-danger text-uppercase border border-white">JADWAL</th>
                                    <th class="bg-danger text-uppercase border border-white text-center">SCAN HADIR</th>
                                    <th class="bg-danger text-uppercase border border-white">Terlambat</th>
                                    <th class="bg-danger text-uppercase border border-white">JADWAL</th>
                                    <th class="bg-danger text-uppercase border border-white text-center">SCAN PULANG</th>
                                    <th class="bg-danger text-uppercase border border-white text-center">Pulang Cepat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-row-bordered text-center">
                                    <td class="bg-light text-uppercase border border-white">1</td>
                                    <td class="bg-light text-uppercase border border-white">2022-04-01</td>
                                    <td class="bg-light text-uppercase border border-white">09:00:00</td>
                                    <td class="bg-light text-uppercase border border-white">10:22:06</td>
                                    <td class="bg-light text-uppercase border border-white">01 jam 22 menit</td>
                                    <td class="bg-light text-uppercase border border-white">17:00:00</td>
                                    <td class="bg-light text-uppercase border border-white">18:00:00</td>
                                    <td class="bg-light text-uppercase border border-white">01 jam 00 menit</td>
                                    <td class="bg-light text-uppercase border border-white">08 jam 00 menit</td>
                                    <td class="bg-light text-uppercase border border-white">2</td>
                                </tr>

                                <tr class="table-row-bordered text-center">
                                    <td class="bg-light text-uppercase border border-white">2</td>
                                    <td class="bg-light text-uppercase border border-white">2022-04-04</td>
                                    <td class="bg-light text-uppercase border border-white">08:00:00</td>
                                    <td class="bg-light text-uppercase border border-white">09:00:00</td>
                                    <td class="bg-light text-uppercase border border-white">01 jam 00 menit</td>
                                    <td class="bg-light text-uppercase border border-white">17:00:00</td>
                                    <td class="bg-light text-uppercase border border-white">18:00:00</td>
                                    <td class="bg-light text-uppercase border border-white">01 jam 00 menit</td>
                                    <td class="bg-light text-uppercase border border-white">08 jam 00 menit</td>
                                    <td class="bg-light text-uppercase border border-white">5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="box-info">
                    <h5>Keterangan</h5>
                    <div class="row">
                        <div class="col-auto">
                            <p class="m-0 fw-bolder">H</p>
                            <p class="m-0 fw-bolder">TH</p>
                            <p class="m-0 fw-bolder">P</p>
                            <p class="m-0 fw-bolder">PC</p>
                        </div>
                        <div class="col-auto">
                            <p class="m-0 fw-bold">:</p>
                            <p class="m-0 fw-bold">:</p>
                            <p class="m-0 fw-bold">:</p>
                            <p class="m-0 fw-bold">:</p>
                        </div>
                        <div class="col-auto">
                            <p class="m-0">Hadir</p>
                            <p class="m-0">Terlambat Hadir</p>
                            <p class="m-0">Pulang</p>
                            <p class="m-0">Pulang Cepat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>