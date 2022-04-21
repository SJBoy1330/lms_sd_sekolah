<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    

<div class="container mb-4">
		<div class="card shodow-sm mb-4">

			<div class="card-body">

                <div class="d-flex justify-content-end mb-5">
                    <!--begin::Filter-->
                    <button type="button" class="btn btn-light-success" data-bs-toggle="modal" data-bs-target="#modalTambahTagihan">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                    <span class="svg-icon svg-icon-2 me-0">
                        <i class="fa-duotone fa-plus"  style="font-size: 20px;"></i>
                    </span>
                    <!--end::Svg Icon-->Tagihan</button>
                </div>
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
						<div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Kelas</label>
							<div>
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"  data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">X IPA 1</option>
                                    <option value="2">X IPA 2</option>
                                    <option value="2">X IPA 3</option>
                                    <option value="2">X IPA 4</option>
                                </select>
                            </div>
						</div>
						<div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Status Bayar</label>
							<div>
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"  data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">Lunas</option>
                                    <option value="2">Belum Lunas</option>
                                </select>
                            </div>
						</div>
						<div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Status Konfirmasi</label>
							<div>
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"  data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">Konfirmasi</option>
                                    <option value="2">Diterima</option>
                                    <option value="2">Ditolak</option>
                                </select>
                            </div>
						</div>
						<div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Bulan</label>
							<div>
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"  data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="2">Maret</option>
                                    <option value="2">April</option>
                                </select>
                            </div>

						</div>
						<div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Kategori Biaya</label>
							<div>
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"  data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">SPP Januari 2021</option>
                                    <option value="2">SPP Februari 2021</option>
                                    <option value="2">SPP Maret 2021</option>
                                    <option value="2">SPP April 2021</option>
                                </select>
                            </div>
						</div>
						<div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Metode Bayar</label>
							<div>
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"  data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">Tunai</option>
                                    <option value="2">Bank BNI</option>
                                    <option value="2">Bank BRI</option>
                                    <option value="2">Bank BCA</option>
                                </select>
                            </div>
						</div>

						<div class="col-md-3 col-xl-3 align-self-end text-end" style="padding:5px; margin-top:7px;">
							<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampil</button>
						</div>

					</div>

				</form>

			</div>
		</div>

        <div class="card shodow-sm">
			<div class="card-body">
				<div class="row d-flex justify-content-around align-items-center">
                    <div class="col-6">
                        <label class="form-label fw-bold">Lunas</label>
                        <input type="text" class="form-control form-control-solid" value="Rp. 2.150.000" readonly>
                    </div>
                    <div class="col-6">
                        <label class="form-label fw-bold">Belum Lunas</label>
                        <input type="text" class="form-control form-control-solid" value="Rp. 3.500.000" readonly>
                    </div>
                </div>
			</div>
		</div>
	</div>

    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Pencarian" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Filter-->
                        <button type="button" class="btn btn-light-success">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-2 me-0">
                            <i class="fa-duotone fa-file-excel" style="font-size: 20px;"></i>
                        </span>
                        <!--end::Svg Icon-->Download Excel</button>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5 DataTable no-footer" id="kt_table_users">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                </div>
                            </th>
                            <th class="min-w-50px text-center">Aksi</th>
                            <th class="min-w-100px text-center">No</th>
                            <th class="min-w-125px text-center">NIS</th>
                            <th class="min-w-125px text-center">Siswa</th>
                            <th class="min-w-125px text-center">Tgl Tahihan</th>
                            <th class="min-w-125px text-center">No Tahihan</th>
                            <th class="min-w-125px text-center">Kategori Tahihan</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="text-gray-600 fw-bold">
                        <!--begin::Table row-->
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::User=-->
                            <td class="d-flex align-items-center justify-content-center">
                                <button type="button" class="btn btn-icon btn-light-danger btn-sm fs-7" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="fa-duotone fa-bars fs-4"></i>
                                </button>
                                <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="<?= base_url('keuangan/tagihan_spp')?>" class="menu-link px-3">Lihat</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Hapus</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                            </td>
                            <!--end::User=-->
                            <!--begin::Role=-->
                            <td>
                                <p class="text-center mb-0">1</p>
                            </td>
                            <!--end::Role=-->
                            <!--begin::Last login=-->
                            <td>
                                <p class="text-center">
                                    10007
                                </p>
                            </td>

                            <td>
                                <p class="text-center">
                                    Saka Dana Asmara
                                </p>
                            </td>

                            <td>
                                <p class="text-center">
                                    13-04-2022
                                </p>
                            </td>

                            <td>
                                <p class="text-center">
                                    03/1239980
                                </p>
                            </td>
                            
                            <td>
                                <p class="text-center">
                                    SPP Januari 2021
                                </p>
                            </td>  
                        </tr>

                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::User=-->
                            <td class="d-flex align-items-center justify-content-center">
                                <button type="button" class="btn btn-icon btn-light-danger btn-sm fs-7" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="fa-duotone fa-bars fs-4"></i>
                                </button>
                                <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Lihat</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Hapus</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                            </td>
                            <!--end::User=-->
                            <!--begin::Role=-->
                            <td>
                                <p class="text-center mb-0">2</p>
                            </td>
                            <!--end::Role=-->
                            <!--begin::Last login=-->
                            <td>
                                <p class="text-center">
                                    10007
                                </p>
                            </td>

                            <td>
                                <p class="text-center">
                                    Saka Dana Asmara
                                </p>
                            </td>

                            <td>
                                <p class="text-center">
                                    13-04-2022
                                </p>
                            </td>

                            <td>
                                <p class="text-center">
                                    03/1239980
                                </p>
                            </td>
                            
                            <td>
                                <p class="text-center">
                                    SPP Januari 2021
                                </p>
                            </td>  
                        </tr>

                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::User=-->
                            <td class="d-flex align-items-center justify-content-center">
                                <button type="button" class="btn btn-icon btn-light-danger btn-sm fs-7" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="fa-duotone fa-bars fs-4"></i>
                                </button>
                                <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Lihat</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Hapus</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                            </td>
                            <!--end::User=-->
                            <!--begin::Role=-->
                            <td>
                                <p class="text-center mb-0">3</p>
                            </td>
                            <!--end::Role=-->
                            <!--begin::Last login=-->
                            <td>
                                <p class="text-center">
                                    10007
                                </p>
                            </td>

                            <td>
                                <p class="text-center">
                                    Saka Dana Asmara
                                </p>
                            </td>

                            <td>
                                <p class="text-center">
                                    13-04-2022
                                </p>
                            </td>

                            <td>
                                <p class="text-center">
                                    03/1239980
                                </p>
                            </td>
                            
                            <td>
                                <p class="text-center">
                                    SPP Januari 2021
                                </p>
                            </td>  
                        </tr>
                        <!--end::Table row-->
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