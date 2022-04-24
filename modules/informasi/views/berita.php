<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    

<div class="container mb-4">
		<div class="card shodow-sm mb-4">

			<div class="card-body">
                <div class="modal fade" id="modalTambahBerita" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-850px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">Tambah Berita</h2>
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
													<span class="required">Kategori</span>
												</label>
												<!--end::Label-->
												<div class="position-relative d-flex align-items-center">
													<div style="width:100vw;">
                                                        <select class="form-select form-select-solid" data-control="select2"  data-placeholder="Pilih Tingkat">
                                                            <option></option>
                                                            <option value="1">Berita</option>
                                                            <option value="2">Informasi</option>
                                                            <option value="2">Teknologi</option>
                                                        </select>
                                                    </div>
												</div>
											</div>
										</div>

                                        <div class="col-6">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Aktif</span>
												</label>
												<!--end::Label-->
												<div class="position-relative d-flex align-items-center">
													<div style="width:100vw;">
                                                        <select class="form-select form-select-solid" data-control="select2"  data-placeholder="Pilih Kelas">
                                                            <option></option>
                                                            <option value="1">Tidak Aktif</option>
                                                            <option value="2">Aktif</option>
                                                        </select>
                                                    </div>
												</div>
											</div>
										</div>

										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Judul</span>
												</label>
												<!--end::Label-->
												<div class="position-relative d-flex align-items-center">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
													<span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                        <i class="fa-duotone fa-h1" style="font-size: 1.3rem;"></i>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Datepicker-->
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan judul" />
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Tanggal</span>
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
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan tanggal" />
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Gambar</span>
												</label>
												<!--end::Label-->
												<div class="col-sm-10 col-12">
                                                    <div class="image-input image-input-outline " data-kt-image-input="true" style="background-image: url(<?=site_url('assets/img/no-image.jpg')?>)">
                                                                <!--begin::Image preview wrapper-->
                                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?=site_url('assets/img/no-image.jpg')?>)"></div>
                                                                <!--end::Image preview wrapper-->

                                                                <!--begin::Edit button-->
                                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="" data-bs-original-title="Tambah Gambar">
                                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                                    <!--begin::Inputs-->
                                                                    <input type="file" name="gambar" accept=".png, .jpg, .jpeg">
                                                                    <input type="hidden" name="foto_remove">
                                                                    <!--end::Inputs-->
                                                                </label>
                                                                <!--end::Edit button-->

                                                                <!--begin::Cancel button-->
                                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click" title="" data-bs-original-title="Batal">
                                                                    <i class="bi bi-x fs-2"></i>
                                                                </span>
                                                                <!--end::Cancel button-->

                                                                <!--begin::Remove button-->
                                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click" title="" data-bs-original-title="Hapus foto">
                                                                    <i class="bi bi-x fs-2"></i>
                                                                </span>
                                                                <!--end::Remove button-->
                                                            </div>
                                                    </div>
											</div>
										</div>
                                        <div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Keterangan</span>
												</label>
												<!--end::Label-->
												<div class="position-relative d-flex align-items-center">
													<textarea class="form-control form-control-solid" rows="3" placeholder="Keterangan"></textarea>
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
                                        <div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">

												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Detail</span>
												</label>

												<div class="position-relative d-flex align-items-center">
									
                                                <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">

                                                    <div id="kt_forms_widget_1_editor" class="py-6"></div>

                                                    <div class="separator"></div>

                                                    <div id="kt_forms_widget_1_editor_toolbar" class="ql-toolbar d-flex flex-stack py-2">
                                                        <div class="me-2">
                                                            <span class="ql-formats ql-size ms-0">
                                                                <select class="ql-size w-75px"></select>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-bold"></button>
                                                                <button class="ql-italic"></button>
                                                                <button class="ql-underline"></button>
                                                                <button class="ql-strike"></button>
                                                                <button class="ql-link"></button>
                                                                <button class="ql-clean"></button>
                                                            </span>
                                                        </div>
                                                    </div>
    
                                                </form>

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
                            <label class="form-label fw-bold">Kategori</label>
                            <div>
                                <select class="form-select form-select-sm form-select-solid" data-control="select2"  data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">Berita</option>
                                    <option value="2">Informasi</option>
                                    <option value="2">Teknologi</option>
                                </select>
                            </div>
						</div>
						<div class="col-md-3 col-xl-3 align-self-end text-start" style="padding:5px; margin-top:7px;">
							<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampil</button>
						</div>

                        <div class="col-md-6 col-xl-6 align-self-end text-end" style="padding:5px; margin-top:7px;">
                            <button type="button" class="btn btn-light-success" data-bs-toggle="modal" data-bs-target="#modalTambahBerita">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-plus"  style="font-size: 20px;"></i>
                            </span>
                            Berita</button>
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
                <div class="table-responsive">
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
                                <th class="min-w-125px text-center">Aksi</th>
                                <th class="min-w-100px text-center">No</th>
                                <th class="min-w-175px text-center">TGL Publikasi</th>
                                <th class="min-w-250px text-center">Judul</th>
                                <th class="min-w-175px text-center">Kategori</th>
                                <th class="min-w-175px text-center">Gambar</th>
                                <th class="min-w-175px text-center">Dibaca</th>
                                <th class="min-w-175px text-center">Aktif</th>
                                <th class="min-w-175px text-center">Penulis</th>
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
                                <td class="text-center">
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
                                        20-12-2021
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        Kuliah S3 di Inggris, Dosen UB Cerita Cepatnya Penularan Omicron
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        Berita
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        <img src="<?= base_url('assets/img/vektor-1.png')?>" width="100" class="img-responsive">
                                    </p>
                                </td>
                                
                                <td>
                                    <p class="text-center">
                                        119
                                    </p>
                                </td> 
                                
                                <td>
                                    <p class="text-center">
                                        Dipublikasikan
                                    </p>
                                </td> 

                                <td>
                                    <p class="text-center">
                                        Admin Sidoarjo
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
                                <td class="text-center">
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
                                    <p class="text-center mb-0">2</p>
                                </td>
                                <!--end::Role=-->
                                <!--begin::Last login=-->
                                <td>
                                    <p class="text-center">
                                        20-12-2021
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        Kemendikbud Dorong Siswa Jadi Agen Perubahan Pengelolaan Sampah
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        Berita
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        <img src="<?= base_url('assets/img/vektor-aturan.png')?>" width="100" class="img-responsive">
                                    </p>
                                </td>
                                
                                <td>
                                    <p class="text-center">
                                        35
                                    </p>
                                </td> 
                                
                                <td>
                                    <p class="text-center">
                                        Dipublikasikan
                                    </p>
                                </td> 

                                <td>
                                    <p class="text-center">
                                        Admin Sidoarjo
                                    </p>
                                </td>
                            </tr>
                            <!--end::Table row-->
                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->