<!--begin::Content-->
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
                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                        <!--begin::Filter-->
                        <button type="button" class="btn btn-sm btn-light-success me-3" data-bs-toggle="modal" data-bs-target="#modalTambahHariLibur">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-2 me-0">
                            <i class="fa-solid fa-plus" style="font-size: 20px;"></i>
                        </span>
                        <!--end::Svg Icon-->Hari Libur</button>

                        <!--begin::Add user-->
                        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalLiburNasional">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                        <span class="svg-icon svg-icon-2">
                            <i class="fa-duotone fa-calendar-week" style="font-size: 18px;"></i>
                        </span>
                        <!--end::Svg Icon-->Libur Nasional</button>
                        <!--end::Add user-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Modal - Adjust Balance-->
                    <div class="modal fade" id="modalTambahHariLibur" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">Tambah Hari Libur</h2>
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
                                <div class="modal-body scroll-y mx-5 mx-xl-8 mb-7">
                                    <!--begin::Form-->
                                    <form id="kt_modal_export_users_form" class="form" action="#">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mb-2">Tanggal</label>
                                            <!--end::Label-->
                                            <div class="position-relative d-flex align-items-center">
                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                    <i class="fa-duotone fa-calendar" style="font-size: 1.3rem;"></i>
                                                </span>
                                                <input class="form-control form-control-solid ps-12" name="tanggal" placeholder="Tanggal" />
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-bold form-label mb-2">Keterangan</label>
                                            <!--end::Label-->
                                            <textarea class="form-control form-control-solid" name="keterangan" id="keterangan" cols="30" rows="5"></textarea>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
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
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Modal body-->
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
                                    
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center position-relative mb-4">
                                            <a href="#" class="btn btn-sm btn-light-success py-3"><i class="fa fa-plus"></i>Publish</a>
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

                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5 DataTable no-footer" id="kt_table_users">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="bg-light text-start text-muted fw-bolder fs-7 text-uppercase">
                                                <th class="w-10px ps-4 rounded-start">
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
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
                                                        <input class="form-check-input" type="checkbox" value="1" />
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
                                                        <input class="form-check-input" type="checkbox" value="1" />
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
                                                        <input class="form-check-input" type="checkbox" value="1" />
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
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - New Card-->
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
                            <th class="min-w-125px text-center">Aksi</th>
                            <th class="min-w-125px text-center">No</th>
                            <th class="min-w-125px text-center">Tanggal</th>
                            <th class="min-w-125px text-center">Keterangan</th>
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
                                    14-03-2022 s/d 14-03-2022
                                </p>
                            </td>
                            <!--end::Last login=-->
                            <!--begin::Joined-->
                            <td>
                                <p class="text-center">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </td>
                            <!--begin::Joined-->
                            <!--begin::Action=-->
                            <!--end::Action=-->
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
                                    14-03-2022 s/d 14-03-2022
                                </p>
                            </td>
                            <!--end::Last login=-->
                            <!--begin::Joined-->
                            <td>
                                <p class="text-center">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </td>
                            <!--begin::Joined-->
                            <!--begin::Action=-->
                            <!--end::Action=-->
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
                                    14-03-2022 s/d 14-03-2022
                                </p>
                            </td>
                            <!--end::Last login=-->
                            <!--begin::Joined-->
                            <td>
                                <p class="text-center">
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
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->