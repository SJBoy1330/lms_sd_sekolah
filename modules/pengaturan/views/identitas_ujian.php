
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
					<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
						<!--end::Export-->
						<!--begin::Add user-->
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUbahPengaturan">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
						<span class="svg-icon svg-icon-2">
							<i class="fa-duotone fa-pen-to-square fs-5"></i>
						</span>
						<!--end::Svg Icon-->Ubah Pengaturan</button>
						<!--end::Add user-->
					</div>
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
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Kode Sekolah</span>
												</label>
												<!--end::Label-->
												<div class="position-relative d-flex align-items-center">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
													<span class="svg-icon svg-icon-2 position-absolute mx-4">
														<i class="fa-solid fa-code" style="font-size: 1.3rem;"></i>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Datepicker-->
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan Kode Sekolah" />
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
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
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan nama sekolah" />
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Telepon Sekolah</span>
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
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan telepon sekolah" />
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Telepon Admin</span>
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
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan telepon admin" />
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Alamat Sekolah</span>
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
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan alamat sekolah" />
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Telp. Keuangan Sekolah</span>
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
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan nomor telepon keuangan" />
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
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
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan email sekolah" />
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
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
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan NPSN sekolah" />
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Latitude Sekolah</span>
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
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan NPSN sekolah" />
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
													<span class="required">Logitude Sekolah</span>
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
													<input class="form-control form-control-solid ps-12" placeholder="Masukkan NPSN sekolah" />
													<!--end::Datepicker-->
												</div>
											</div>
										</div>
									</div>
									<div class="row mb-4">
										<div class="d-flex justify-content-end">
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
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
								<div class="col-3">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
											<span class="mt-2 mb-5"style="width: 39px; height: 39px;">
												<i class="fa-solid fa-code" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">Kode Sekolah</span>
											<span class="fs-5 fw-medium">123</span>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-3">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
											<span class="mt-2 mb-5"style="width: 39px; height: 39px;">
												<i class="fa-duotone fa-school" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">Nama Sekolah</span>
											<span class="fs-5 fw-medium">SMK Negeri 4 Malang</span>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-3">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
											<span class="mt-2 mb-5"style="width: 39px; height: 39px;">
												<i class="fa-duotone fa-phone-office" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">Telp. Sekolah</span>
											<span class="fs-4 fw-medium">(0341) 321798</span>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-3">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs025.svg-->
											<span class="mt-2 mb-5"style="width: 39px; height: 39px;">
												<i class="fa-duotone fa-headset" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">Telp. Admin</span>
											<span class="fs-5 fw-medium">(0341) 353798</span>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="d-flex justify-content-between align-items-center">
									<div class="col-4">
										<!--begin::Card-->
										<div class="card shadow-sm identitas-sekolah">
											<!--begin::Link-->
											<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
												<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
												<span class="mt-2 mb-5"style="width: 39px; height: 39px;">
													<i class="fa-duotone fa-map-location" style="font-size: 3rem;"></i>
												</span>
												<!--end::Svg Icon-->
												<span class="fs-4 fw-bolder mb-1">Alamat Sekolah</span>
												<span class="fs-5 fw-medium">Jl. Tanimbar No.22, Kasin, Kec. Klojen, Kota Malang, Jawa Timur 65117</span>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-3">
										<!--begin::Card-->
										<div class="card shadow-sm d-flex-justify-content-center align-items-center identitas-sekolah">
											<img src="<?=base_url()?>assets/img/smkn4.png" class="mt-7" width="115"alt="">
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-4">
										<!--begin::Card-->
										<div class="card shadow-sm identitas-sekolah">
											<!--begin::Link-->
											<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs038.svg-->
												<span class="mt-2 mb-5"style="width: 39px; height: 39px;">
													<i class="fa-duotone fa-money-from-bracket" style="font-size: 3rem;"></i>
												</span>
												<!--end::Svg Icon-->
												<span class="fs-4 fw-bolder mb-1">Telp Keuangan</span>
												<span class="fs-4 fw-medium">(0341) 335798</span>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Card-->
									</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-3">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
											<span class="mt-2 mb-5"style="width: 39px; height: 39px;">
												<i class="fa-duotone fa-envelope" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">Email Sekolah</span>
											<span class="fs-5 fw-medium">smkn4@gmail.com</span>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-3">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
											<span class="mt-2 mb-5"style="width: 39px; height: 39px;">
												<i class="fa-duotone fa-school" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">NPSN Sekolah</span>
											<span class="fs-4 fw-medium">111 222 333</span>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-3">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
											<span class="mt-2 mb-5"style="width: 39px; height: 39px;">
												<i class="fa-light fa-map-pin" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">Latitude</span>
											<span class="fs-4 fw-medium">-7.7084159</span>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-3">
									<!--begin::Card-->
									<div class="card shadow-sm identitas-sekolah">
										<!--begin::Link-->
										<div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs025.svg-->
											<span class="mt-2 mb-5"style="width: 39px; height: 39px;">
												<i class="fa-duotone fa-map-pin" style="font-size: 3rem;"></i>
											</span>
											<!--end::Svg Icon-->
											<span class="fs-4 fw-bolder mb-1">Longitude</span>
											<span class="fs-4 fw-medium">112.4174668	</span>
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