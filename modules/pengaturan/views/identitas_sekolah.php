<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
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
					</div>
					<!--end::Search-->
				</div>
				<!--begin::Card title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar">
					<!--begin::Toolbar-->
					<?php if (is_operator() || is_admin()) : ?>
						<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
							<!--end::Export-->
							<!--begin::Add user-->
							<button type="button" class="btn btn-light-success" data-bs-toggle="modal" data-bs-target="#modalUbahPengaturan">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon svg-icon-2">
									<i class="fa-duotone fa-pen-to-square fs-5"></i>
								</span>
								<!--end::Svg Icon-->Ubah Pengaturan
							</button>
							<!--end::Add user-->
						</div>
					<?php endif; ?>
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body py-4">
				<!--begin::Container-->
				<div class="container-xxl" id="kt_content_container">
					<!--begin::Row-->
					<div class="row g-5 g-xl-8">
						<!--begin::Col-->
						<div class="col-xl-12">
							<!--begin::Misc Widget 1-->
							<div class="row mb-5 mb-xl-8 g-5 g-xl-8">
								<!--begin::Col-->
								<div class="col-xl-3 col-md-12">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
											<span class="mt-2 mb-5" style="width: 39px; height: 39px;">
												<i class="fa-solid fa-code" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">Kode Sekolah</span>
											<span class="fs-5 fw-medium"><?= $data_sekolah->sekolah->kode_sekolah ?></span>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-3 col-md-12">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
											<span class="mt-2 mb-5" style="width: 39px; height: 39px;">
												<i class="fa-duotone fa-school" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">Nama Sekolah</span>
											<span class="fs-5 fw-medium"><?= $data_sekolah->sekolah->nama_sekolah ?></span>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-3 col-md-12">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
											<span class="mt-2 mb-5" style="width: 39px; height: 39px;">
												<i class="fa-duotone fa-phone-office" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">Telp. Sekolah</span>
											<span class="fs-4 fw-medium"><?= $data_sekolah->sekolah->telp_sekolah ?></span>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-3 col-md-12">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs025.svg-->
											<span class="mt-2 mb-5" style="width: 39px; height: 39px;">
												<i class="fa-duotone fa-headset" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">Telp. Admin</span>
											<span class="fs-5 fw-medium"><?= $data_sekolah->sekolah->telp_admin ?></span>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="wrapper-cols2">
									<div class="col-xl-4 col-md-12 cards1">
										<!--begin::Card-->
										<div class="card shadow-sm identitas-sekolah">
											<!--begin::Link-->
											<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
												<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
												<span class="mt-2 mb-5" style="width: 39px; height: 39px;">
													<i class="fa-duotone fa-map-location" style="font-size: 3rem;"></i>
												</span>
												<!--end::Svg Icon-->
												<span class="fs-4 fw-bolder mb-1">Alamat Sekolah</span>
												<span class="fs-5 fw-medium"><?= $data_sekolah->sekolah->alamat ?></span>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-3 col-md-12 cards1">
										<!--begin::Card-->
										<div class="card shadow-sm justify-content-center align-items-center identitas-sekolah">
											<img src="<?= $data_sekolah->sekolah->logo ?>" class="mt-7" width="115" alt="">
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-4 col-md-12 cards1">
										<!--begin::Card-->
										<div class="card shadow-sm identitas-sekolah">
											<!--begin::Link-->
											<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs038.svg-->
												<span class="mt-2 mb-5" style="width: 39px; height: 39px;">
													<i class="fa-duotone fa-money-from-bracket" style="font-size: 3rem;"></i>
												</span>
												<!--end::Svg Icon-->
												<span class="fs-4 fw-bolder mb-1">Telp Keuangan</span>
												<span class="fs-4 fw-medium"><?= $data_sekolah->sekolah->telp_keuangan ?></span>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Card-->
									</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-3 col-md-12">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
											<span class="mt-2 mb-5" style="width: 39px; height: 39px;">
												<i class="fa-duotone fa-envelope" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">Email Sekolah</span>
											<span class="fs-5 fw-medium"><?= $data_sekolah->sekolah->email ?></span>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-3 col-md-12">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
											<span class="mt-2 mb-5" style="width: 39px; height: 39px;">
												<i class="fa-duotone fa-school" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">NPSN Sekolah</span>
											<span class="fs-4 fw-medium"><?= $data_sekolah->sekolah->npsn ?></span>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-3 col-md-12">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
											<span class="mt-2 mb-5" style="width: 39px; height: 39px;">
												<i class="fa-duotone fa-chalkboard-user" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">Jumlah Staf</span>
											<span class="fs-4 fw-medium"><?= $data_sekolah->jumlah->staf ?> Staf</span>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-3 col-md-12">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs025.svg-->
											<span class="mt-2 mb-5" style="width: 39px; height: 39px;">
												<i class="fa-duotone fa-graduation-cap" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">Jumlah Siswa</span>
											<span class="fs-4 fw-medium"><?= $data_sekolah->jumlah->siswa ?> Siswa</span>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Misc Widget 1-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Card-->
	</div>
	<!--end::Container-->
</div>

<?php if (is_operator() || is_admin()) : ?>
	<div class="modal fade" id="modalUbahPengaturan" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-850px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header">
					<!--begin::Modal title-->
					<h2 class="fw-bolder">Ubah Pengaturan Sekolah</h2>
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
					<form id="formTambahEditSekolah" action="<?= base_url('func_pengaturan/edit_data_sekolah') ?>" method="post">
						<div class="row">
							<div class="col-12">
								<div class="d-flex flex-column mb-8 fv-row" id="req_nama_sekolah">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-bold mb-2">
										<span class="required">Nama Sekolah</span>
									</label>
									<!--end::Label-->
									<div class="position-relative d-flex align-items-center">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
										<span class="svg-icon svg-icon-2 position-absolute mx-4">
											<i class="fa-duotone fa-school" style="font-size: 1.3rem;"></i>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12" placeholder="Masukkan Nama Sekolah" value="<?= $data_sekolah->sekolah->nama_sekolah ?>" name="nama_sekolah" />
										<!--end::Datepicker-->
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="d-flex flex-column mb-8 fv-row" id="req_telp_sekolah">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-bold mb-2">
										<span>Telepon Sekolah</span>
									</label>
									<!--end::Label-->
									<div class="position-relative d-flex align-items-center">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
										<span class="svg-icon svg-icon-2 position-absolute mx-4">
											<i class="fa-duotone fa-phone-office" style="font-size: 1.3rem;"></i>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12" placeholder="Masukkan Telepon Sekolah" value="<?= $data_sekolah->sekolah->telp_sekolah ?>" name="telp_sekolah" />
										<!--end::Datepicker-->
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="d-flex flex-column mb-8 fv-row" id="req_telp_admin">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-bold mb-2">
										<span>Telepon Admin</span>
									</label>
									<!--end::Label-->
									<div class="position-relative d-flex align-items-center">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
										<span class="svg-icon svg-icon-2 position-absolute mx-4">
											<i class="fa-duotone fa-headset" style="font-size: 1.3rem;"></i>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12" placeholder="Masukkan Telepon Admin" value="<?= $data_sekolah->sekolah->telp_admin ?>" name="telp_admin" />
										<!--end::Datepicker-->
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="d-flex flex-column mb-8 fv-row" id="req_alamat">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-bold mb-2">
										<span>Alamat Sekolah</span>
									</label>
									<!--end::Label-->
									<div class="position-relative d-flex align-items-center">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
										<span class="svg-icon svg-icon-2 position-absolute mx-4">
											<i class="fa-duotone fa-map-location" style="font-size: 1.3rem;"></i>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12" placeholder="Masukkan Alamat Sekolah" value="<?= $data_sekolah->sekolah->alamat ?>" name="alamat" />
										<!--end::Datepicker-->
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="d-flex flex-column mb-8 fv-row" id="req_telp_keuangan">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-bold mb-2">
										<span>Telp. Keuangan Sekolah</span>
									</label>
									<!--end::Label-->
									<div class="position-relative d-flex align-items-center">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
										<span class="svg-icon svg-icon-2 position-absolute mx-4">
											<i class="fa-duotone fa-money-from-bracket" style="font-size: 1.3rem;"></i>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12" placeholder="Masukkan Telp. Keuangan Sekolah keuangan" value="<?= $data_sekolah->sekolah->telp_keuangan ?>" name="telp_keuangan" />
										<!--end::Datepicker-->
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="d-flex flex-column mb-8 fv-row" id="req_email">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-bold mb-2">
										<span class="required">Email Sekolah</span>
									</label>
									<!--end::Label-->
									<div class="position-relative d-flex align-items-center">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
										<span class="svg-icon svg-icon-2 position-absolute mx-4">
											<i class="fa-duotone fa-envelope" style="font-size: 1.3rem;"></i>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12" placeholder="Masukkan Email Sekolah" value="<?= $data_sekolah->sekolah->email ?>" name="email" />
										<!--end::Datepicker-->
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="d-flex flex-column mb-8 fv-row" id="req_npsn">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-bold mb-2">
										<span class="required">NPSN Sekolah</span>
									</label>
									<!--end::Label-->
									<div class="position-relative d-flex align-items-center">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
										<span class="svg-icon svg-icon-2 position-absolute mx-4">
											<i class="fa-duotone fa-envelope" style="font-size: 1.3rem;"></i>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12" placeholder="Masukkan NPSN Sekolah" value="<?= $data_sekolah->sekolah->npsn ?>" name="npsn" />
										<!--end::Datepicker-->
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="d-flex flex-column mb-8 fv-row" id="req_latitude">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-bold mb-2">
										<span>Latitude Sekolah</span>
									</label>
									<!--end::Label-->
									<div class="position-relative d-flex align-items-center">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
										<span class="svg-icon svg-icon-2 position-absolute mx-4">
											<i class="fa-light fa-map-pin" style="font-size: 1.3rem;"></i>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12" placeholder="Masukkan Latitude Sekolah" value="<?= $data_sekolah->sekolah->kode_sekolah ?>" name="latitude" />
										<!--end::Datepicker-->
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="d-flex flex-column mb-8 fv-row" id="req_logitude">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-bold mb-2">
										<span>Logitude Sekolah</span>
									</label>
									<!--end::Label-->
									<div class="position-relative d-flex align-items-center">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
										<span class="svg-icon svg-icon-2 position-absolute mx-4">
											<i class="fa-duotone fa-map-pin" style="font-size: 1.3rem;"></i>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12" placeholder="Masukkan Logitude Sekolah" value="<?= $data_sekolah->sekolah->kode_sekolah ?>" name="logitude" />
										<!--end::Datepicker-->
									</div>
								</div>
							</div>
						</div>
					</form>
					<div class="row mb-4">
						<div class="d-flex justify-content-end">
							<button type="button" class="btn btn-primary" onclick="submit_form(this, '#formTambahEditSekolah', 0)" id="btn_submitTambahEditSekolah">
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
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
<?php endif; ?>