<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card fadein-bottom anim-4">
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
                    <div class="d-flex justify-content-between nowrap" data-kt-user-table-toolbar="base">
                        <button type="button" class=" btn btn-sm btn-light-danger me-2 px-4 text-nowrap liburbtn" id="deleteall" style="display: none;">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-trash" style="font-size: 18px;"></i>
                            </span>
                            Hapus</button>
                        <!--begin::Filter-->
                        <button type="button" class="btn btn-sm btn-light-success me-3 px-4 text-nowrap liburbtn btn-tambah-edit-modal-hari-libur" data-bs-toggle="modal" data-bs-target="#modalTambahHariLibur">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-solid fa-plus" style="font-size: 20px;"></i>
                            </span>
                            <!--end::Svg Icon-->Hari Libur
                        </button>

                        <!--begin::Add user-->
                        <button type="button" class="btn btn-sm btn-success px-4 text-nowrap liburbtn" data-bs-toggle="modal" data-bs-target="#modalLiburNasional">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fa-duotone fa-calendar-week" style="font-size: 18px;"></i>
                            </span>
                            <!--end::Svg Icon-->Libur Nasional
                        </button>
                        <!--end::Add user-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5 DataTable no-footer" id="kt_table_libur">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" name="maincheckbox" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_libur .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px text-center">Aksi</th>
                                <th class="min-w-125px text-center">No</th>
                                <th class="min-w-125px text-center">Tanggal</th>
                                <th class="min-w-200px text-center">Keterangan</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-bold">
                            <!--begin::Table row-->
                            <?php if ($data_hari_libur) : ?>
                                <?php foreach ($data_hari_libur as $i => $hari_libur) : ?>
                                    <tr class="anim-2" style="opacity: 0;">
                                        <!--begin::Checkbox-->
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input deletebox" type="checkbox" value="1" />
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
                                                    <a class="menu-link px-3 btn-tambah-edit-modal-hari-libur" data-bs-toggle="modal" data-bs-target="#modalTambahHariLibur" data-idhari_libur="<?= $hari_libur->id_hari_libur ?>">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a class="menu-link px-3 btn-hapus-hari-libur" data-kt-users-table-filter="delete_row" data-idhari_libur="<?= $hari_libur->id_hari_libur ?>">Hapus</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                        </td>
                                        <!--end::User=-->
                                        <!--begin::Role=-->
                                        <td>
                                            <p class="text-center mb-0"><?= $i + 1 ?></p>
                                        </td>
                                        <!--end::Role=-->
                                        <!--begin::Last login=-->
                                        <td>
                                            <p class="text-center">
                                                <?= $hari_libur->tanggal_mulai ?> s/d <?= $hari_libur->tanggal_sampai ?>
                                            </p>
                                        </td>
                                        <!--end::Last login=-->
                                        <!--begin::Joined-->
                                        <td>
                                            <p class="text-center">
                                                <?= $hari_libur->keterangan ?>
                                            </p>
                                        </td>
                                        <!--begin::Joined-->
                                        <!--begin::Action=-->
                                        <!--end::Action=-->
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="8">
                                        <center>Tidak ada data hari libur</center>
                                    </td>
                                </tr>
                            <?php endif; ?>
                            <!--end::Table row-->
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->

<!--begin::Modal - Adjust Balance-->
<div class="modal fade" id="modalTambahHariLibur" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content" id="content-edit-tambah-hari-libur">
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<div class="modal fade" id="modalLiburNasional" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Hari Libur Nasional</h2>
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
            <div class="modal-body scroll-y mx-3 my-2">

                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex align-items-center position-relative mb-4">
                        <a href="#" class="btn btn-sm btn-light-success py-3"><i class="fa fa-plus"></i>Publish</a>
                        <a href="#" class="btn btn-sm btn-light-danger mx-4 py-3" id="deleteall2" style="display: none;"><i class="fa fa-plus"></i>Hapus</a>
                    </div>

                    <div class="d-flex align-items-center position-relative mb-4 flex-end">
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                            </svg>
                        </span>
                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid form-control-sm w-200px ps-14" placeholder="Pencarian" />
                    </div>
                </div>

                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5 DataTable no-footer" id="kt_table_liburnasional">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="bg-light text-start text-muted fw-bolder fs-7 text-uppercase">
                                <th class="w-10px ps-4 rounded-start">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" name="maincheckbox2" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_liburnasional .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px text-center">No</th>
                                <th class="min-w-125px text-center">Tanggal</th>
                                <th class="min-w-125px text-center pe-4 rounded-end">Keterangan</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-bold">
                            <!--begin::Table row-->
                            <tr>
                                <!--begin::Checkbox-->
                                <td class="ps-4">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input deletebox2" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Role=-->
                                <td>
                                    <p class="text-center fw-normal fs-7 mb-0">1</p>
                                </td>
                                <!--end::Role=-->
                                <!--begin::Last login=-->
                                <td>
                                    <p class="text-center fw-normal fs-7 mb-0">
                                        14-03-2022 s/d 14-03-2022
                                    </p>
                                </td>
                                <!--end::Last login=-->
                                <!--begin::Joined-->
                                <td>
                                    <p class="text-center fw-normal fs-7">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </td>
                                <!--begin::Joined-->
                                <!--begin::Action=-->
                                <!--end::Action=-->
                            </tr>

                            <tr>
                                <!--begin::Checkbox-->
                                <td class="ps-4">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input deletebox2" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Role=-->
                                <td>
                                    <p class="text-center fw-normal fs-7 mb-0">2</p>
                                </td>
                                <!--end::Role=-->
                                <!--begin::Last login=-->
                                <td>
                                    <p class="text-center fw-normal fs-7 mb-0">
                                        14-03-2022 s/d 14-03-2022
                                    </p>
                                </td>
                                <!--end::Last login=-->
                                <!--begin::Joined-->
                                <td>
                                    <p class="text-center fw-normal fs-7">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </td>
                                <!--begin::Joined-->
                                <!--begin::Action=-->
                                <!--end::Action=-->
                            </tr>

                            <tr>
                                <!--begin::Checkbox-->
                                <td class="ps-4">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input deletebox2" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Role=-->
                                <td>
                                    <p class="text-center fw-normal fs-7 mb-0">3</p>
                                </td>
                                <!--end::Role=-->
                                <!--begin::Last login=-->
                                <td>
                                    <p class="text-center fw-normal fs-7 mb-0">
                                        14-03-2022 s/d 14-03-2022
                                    </p>
                                </td>
                                <!--end::Last login=-->
                                <!--begin::Joined-->
                                <td>
                                    <p class="text-center fw-normal fs-7">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </td>
                                <!--begin::Joined-->
                                <!--begin::Action=-->
                                <!--end::Action=-->
                            </tr>
                            <!--end::Table row-->
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>

            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Card-->