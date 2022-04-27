<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    

<div class="container mb-4">
		<div class="card shodow-sm mb-4">

			<div class="card-body">
                    <div class="modal fade" id="modalTambahBab" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-850px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">Tambah Materi</h2>
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
                                        <div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Judul</span>
												</label>
												<div class="position-relative d-flex align-items-center">
													<span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                        <i class="fa-duotone fa-h1" style="font-size: 1.3rem;"></i>
													</span>
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan judul" />
												</div>
											</div>
										</div>
                                        <div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">File Dokumen</span>
												</label>
												<form class="form" action="none" id="kt_modal_upload_form">
                                                    <!--begin::Modal body-->
                                                    <div class="modal-body pt-10 pb-15 px-lg-17">
                                                        <!--begin::Input group-->
                                                        <div class="form-group">
                                                            <!--begin::Dropzone-->
                                                            <div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
                                                                <!--begin::Controls-->
                                                                <div class="dropzone-panel mb-4">
                                                                    <a class="dropzone-select btn btn-sm btn-primary me-2">Attach files</a>
                                                                    <a class="dropzone-upload btn btn-sm btn-light-primary me-2">Upload All</a>
                                                                    <a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
                                                                </div>
                                                                <!--end::Controls-->
                                                                <!--begin::Items-->
                                                                <div class="dropzone-items wm-200px">
                                                                    <div class="dropzone-item p-5" style="display:none">
                                                                        <!--begin::File-->
                                                                        <div class="dropzone-file">
                                                                            <div class="dropzone-filename text-dark" title="some_image_file_name.jpg">
                                                                                <span data-dz-name="">some_image_file_name.jpg</span>
                                                                                <strong>(
                                                                                <span data-dz-size="">340kb</span>)</strong>
                                                                            </div>
                                                                            <div class="dropzone-error mt-0" data-dz-errormessage=""></div>
                                                                        </div>
                                                                        <!--end::File-->
                                                                        <!--begin::Progress-->
                                                                        <div class="dropzone-progress">
                                                                            <div class="progress bg-light-primary">
                                                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Progress-->
                                                                        <!--begin::Toolbar-->
                                                                        <div class="dropzone-toolbar">
                                                                            <span class="dropzone-start">
                                                                                <i class="bi bi-play-fill fs-3"></i>
                                                                            </span>
                                                                            <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                                                <i class="bi bi-x fs-3"></i>
                                                                            </span>
                                                                            <span class="dropzone-delete" data-dz-remove="">
                                                                                <i class="bi bi-x fs-1"></i>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Toolbar-->
                                                                    </div>
                                                                </div>
                                                                <!--end::Items-->
                                                            </div>
                                                            <!--end::Dropzone-->
                                                            <!--begin::Hint-->
                                                            <span class="form-text fs-6 text-muted">Max file size is 1MB per file.</span>
                                                            <!--end::Hint-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                </form>
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

                        <div class="col-md-6 col-xl-6 align-self-end text-start">
                            <a href="<?= base_url('akademik/materi'); ?>" class="btn btn-secondary">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-arrow-left-long" style="font-size: 20px;"></i>
                            </span>
                            Kembali</a>
						</div>

                        <div class="col-md-6 col-xl-6 align-self-end text-end">
                            <button type="button" class="btn btn-light-success" data-bs-toggle="modal" data-bs-target="#modalTambahBab">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-plus"  style="font-size: 20px;"></i>
                            </span>
                            Materi Dokumen</button>
						</div>

					</div>

                    <div class="row d-flex justify-content-around align-items-center mt-8">
                        <div class="col-6">
                            <label class="form-label fw-bold">Bab</label>
                            <input type="text" class="form-control form-control-solid" value="Bab 1 Pelajaran 1" readonly>
                        </div>
                        <div class="col-6">
                            <label class="form-label fw-bold">Materi</label>
                            <input type="text" class="form-control form-control-solid" value="Materi 1 Bab 1 Pelajaran 1" readonly>
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
                                <th class="min-w-250px text-center">Judul</th>
                                <th class="min-w-250px text-center">File</th>
                                <th class="min-w-150px text-center">Ukuran</th>
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
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold fs-7 w-175px py-4" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Edit</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Hapus</a>
                                        </div>
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
                                        Dokumen Format Staf
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        <button type="button" class="btn btn-sm btn-light-warning" data-bs-toggle="modal" data-bs-target="#modalTambahBab">
                                        <span class="svg-icon svg-icon-2 me-0">
                                            <i class="fa-duotone fa-file-excel" style="font-size: 20px;"></i>
                                        </span>
                                        Download</button>
                                    </p>
                                </td>
                                <td>
                                    <p class="text-center">
                                        100 kB
                                    </p>
                                </td>
                            </tr>
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