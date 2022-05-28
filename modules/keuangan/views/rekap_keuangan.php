<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    

    <div class="container mb-4">
		<div class="card shodow-sm mb-4">

			<div class="card-body">
				<form action="">
					<div class="row">

						<div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Tahun Ajaran:</label>
                            <div>
                                <select class="form-select form-select-sm form-select-solid" data-control="select2"  data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">2022</option>
                                    <option value="2">2021</option>
                                    <option value="2">2020</option>
                                    <option value="2">2019</option>
                                </select>
                            </div>
						</div>
						<div class="col-md-9 col-xl-9 align-self-end text-start" style="padding:5px; margin-top:7px;">
							<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampil</button>
						</div>

					</div>

				</form>

			</div>
		</div>
	</div>

    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card">
            <div class="card-body py-4">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5 DataTable no-footer" id="kt_table_users">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2">No</th>
                            <th class="min-w-50px text-center">Periode</th>
                            <th class="min-w-100px text-center">Tagihan</th>
                            <th class="min-w-125px text-center">Pembayaran</th>
                            <th class="min-w-125px text-center">Download</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="text-gray-600 fw-bold">
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Role=-->
                            <td>
                                <p class="text-center">1</p>
                            </td>
                            <!--end::Role=-->
                            <!--begin::Last login=-->
                            <td>
                                <p class="text-center">
                                    Juli 2021
                                </p>
                            </td>

                            <td>
                                <p class="text-center">
                                    Rp.0
                                </p>
                            </td>

                            <td>
                                <p class="text-center">
                                    Rp.0
                                </p>
                            </td>

                            <td>
                                <p class="text-center">
                                    <span class="badge bg-danger">Tidak ada transaksi</span>
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <!--begin::Role=-->
                            <td>
                                <p class="text-center">2</p>
                            </td>
                            <!--end::Role=-->
                            <!--begin::Last login=-->
                            <td>
                                <p class="text-center">
                                    Agustus 2021
                                </p>
                            </td>

                            <td>
                                <p class="text-center">
                                    Rp.100.000
                                </p>
                            </td>

                            <td>
                                <p class="text-center">
                                    Rp.200.000
                                </p>
                            </td>

                            <td>
                                <p class="text-center">
                                <button type="button" class="btn btn-sm btn-light-success">
                                <span class="svg-icon svg-icon-2 me-0">
                                    <i class="fa-duotone fa-file-excel" style="font-size: 20px;"></i>
                                </span>
                                Download Excel</button>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->