<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    

    <div class="container mb-4">
		<div class="card shodow-sm mb-4">

			<div class="card-body">
                <div class="modal fade" id="modalTambahTagihan" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-850px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">Tambah Tagihan</h2>
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
										<div class="col-6">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Tingkat</span>
												</label>
												<!--end::Label-->
												<div class="position-relative d-flex align-items-center">
													<div style="width:100vw;">
                                                        <select class="form-select form-select-solid" data-control="select2"  data-placeholder="Pilih Tingkat">
                                                            <option></option>
                                                            <option value="1">X</option>
                                                            <option value="2">XI</option>
                                                            <option value="2">XII</option>
                                                        </select>
                                                    </div>
												</div>
											</div>
										</div>

                                        <div class="col-6">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Kelas</span>
												</label>
												<!--end::Label-->
												<div class="position-relative d-flex align-items-center">
													<div style="width:100vw;">
                                                        <select class="form-select form-select-solid" data-control="select2"  data-placeholder="Pilih Kelas">
                                                            <option></option>
                                                            <option value="1">IPA 1</option>
                                                            <option value="2">IPA 2</option>
                                                            <option value="2">IPA 3</option>
                                                        </select>
                                                    </div>
												</div>
											</div>
										</div>

                                        <div class="col-6">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Siswa</span>
												</label>
												<!--end::Label-->
												<div class="position-relative d-flex align-items-center">
													<div style="width:100vw;">
                                                        <select class="form-select form-select-solid" data-control="select2"  data-placeholder="Semua Siswa">
                                                            <option></option>
                                                            <option value="1">X</option>
                                                            <option value="2">XI</option>
                                                            <option value="2">XII</option>
                                                        </select>
                                                    </div>
												</div>
											</div>
										</div>

                                        <div class="col-6">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Kategori Biaya</span>
												</label>
												<!--end::Label-->
												<div class="position-relative d-flex align-items-center">
													<div style="width:100vw;">
                                                        <select class="form-select form-select-solid" data-control="select2"  data-placeholder="Pilih Kategori">
                                                            <option></option>
                                                            <option value="1">SPP Juli 2021</option>
                                                            <option value="2">SPP Agustus 2021</option>
                                                            <option value="2">SPP September 2021</option>
                                                        </select>
                                                    </div>
												</div>
											</div>
										</div>

										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">No Tagihan</span>
												</label>
												<!--end::Label-->
												<div class="position-relative d-flex align-items-center">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
													<span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                        <i class="fa-duotone fa-hashtag" style="font-size: 1.3rem;"></i>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Datepicker-->
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan no tagihan" />
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Tanggal Tagihan</span>
												</label>
												<!--end::Label-->
												<div class="position-relative d-flex align-items-center">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
													<span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                        <i class="fa-duotone fa-calendar" style="font-size: 1.3rem;"></i>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Datepicker-->
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan tanggal tagihan" />
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Jumlah</span>
												</label>
												<!--end::Label-->
												<div class="position-relative d-flex align-items-center">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
													<span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                        <i class="fa-duotone fa-tags" style="font-size: 1.3rem;"></i>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Datepicker-->
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan jumlah" />
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Diskon</span>
												</label>
												<!--end::Label-->
												<div class="position-relative d-flex align-items-center">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
													<span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                        <i class="fa-duotone fa-percent" style="font-size: 1.3rem;"></i>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Datepicker-->
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan diskon" />
													<!--end::Datepicker-->
												</div>
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
											<!--end::Svg Icon-->Simpan</button>
											<!--end::Add user-->
										</div>
									</div>
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>

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
						<div class="col-md-9 col-xl-9 align-self-end text-end" style="padding:5px; margin-top:7px;">
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