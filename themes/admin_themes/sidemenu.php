<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
            <!--begin::Logo-->
            <div class="aside-logo flex-column-auto py-13" id="kt_aside_logo">
                <a href="<?= base_url('dashboard') ?>">
                    <img alt="Logo" src="<?= base_url(); ?>assets/img/logo-1.png" class="h-50px" />
                </a>
            </div>
            <!--end::Logo-->
            <!--begin::Nav-->
            <div class="aside-menu flex-column-fluid pt-0 pb-7 py-lg-10" id="kt_aside_menu">
                <!--begin::Aside menu-->
                <div id="kt_aside_menu_wrapper" class="w-100 hover-scroll-overlay-y scroll-ps d-flex" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0">
                    <div id="kt_aside_menu" class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-400 menu-arrow-gray-400 fw-bold fs-6" data-kt-menu="true">
                        <?php foreach (get_menu_by_role()  as $menu) : ?>
                            <?php if ($menu['submenu'] === null) : ?>
                                <div class="menu-item py-3">
                                    <a class="menu-link <?= (set_active($this->uri->segment(1), $menu['url'], $this->uri->segment(2), array())) ?>" href="<?= base_url($menu['url']) ?>" title="<?= $menu['menu_name'] ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?= $menu['icon'] ?>
                                        </span>
                                    </a>
                                </div>
                            <?php else : ?>
                                <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-3">
                                    <span class="menu-link <?= (set_active($this->uri->segment(1), $menu['url'], $this->uri->segment(2), $menu['arr_sub'])) ?>" title="<?= $menu['menu_name'] ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <?= $menu['icon'] ?>
                                        </span>
                                    </span>
                                    <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                                        <div class="menu-item">
                                            <div class="menu-content">
                                                <span class="menu-section fs-5 fw-bolder ps-1 py-1"><?= $menu['menu_name'] ?></span>
                                            </div>
                                        </div>
                                        <?php foreach ($menu['submenu']  as $submenu) : ?>
                                            <div class="menu-item">
                                                <a class="menu-link  <?= (set_active($this->uri->segment(1), $submenu['url'], $this->uri->segment(2))) ?>" href="<?= base_url($submenu['url']) ?>" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                                    <span class="menu-icon">
                                                        <?= $submenu['icon'] ?>
                                                    </span>
                                                    <span class="menu-title"><?= $submenu['menu_name'] ?></span>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!--end::Aside menu-->
            </div>
            <!--end::Nav-->
            <!--begin::Footer-->
            <div class="aside-footer flex-column-auto pb-5 pb-lg-10" id="kt_aside_footer">
                <!--begin::Menu-->
                <div class="d-flex flex-center w-100 scroll-px">
                    <a href="<?= base_url('auth/logout'); ?>" type="button" class="btn btn-custom">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
                        <span class="svg-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="black" />
                                <path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="black" />
                                <path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Aside-->
        <div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
            <!--begin::Card-->
            <div class="card shadow-none rounded-0 w-100">
                <!--begin::Header-->
                <div class="card-header" id="kt_engage_demos_header">
                    <h3 class="card-title fw-bolder text-gray-700">Explore</h3>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6" id="kt_engage_demos_close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                    </div>
                </div>
                <!--end::Header-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Demos drawer-->
        <!--end::Engage drawers-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="svg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header tablet and mobile-->
            <div class="header-mobile py-3">
                <!--begin::Container-->
                <div class="container d-flex flex-stack">
                    <!--begin::Mobile logo-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="<?= base_url('dashboard') ?>">
                            <img alt="Logo" src="<?= base_url(); ?>assets/img/logo-1.png" class="h-35px" />
                        </a>
                    </div>
                    <!--end::Mobile logo-->
                    <!--begin::Aside toggle-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_aside_toggle">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                        <span class="svg-icon svg-icon-2x me-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Aside toggle-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header tablet and mobile-->
            <!--begin::Header-->
            <div id="kt_header" class="header py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{lg: '300px'}">
                <!--begin::Container-->
                <div class="header-container container-xxl">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
                        <?php if (isset($breadcrumb)) : ?>
                            <!--begin::Heading-->
                            <h1 class="d-flex flex-column text-dark fw-bolder my-1">
                                <span class="fs-1"><?= $breadcrumb['menu'] ?></span>
                            </h1>
                            <h4 class="text-gray-500">Halo selamat datang, Max Smith</h4>
                            <!--end::Heading-->
                            <?php if (isset($breadcrumb['sub'])) : ?>
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-line fw-bold fs-7 my-1">
                                    <?php foreach ($breadcrumb['sub'] as $bc) : ?>
                                        <li class="breadcrumb-item text-gray-600"><?= $bc; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <!--end::Breadcrumb-->
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <!--end::Page title=-->
                    <!--begin::Topbar-->
                    <div class="d-flex align-items-center flex-shrink-0">
                        <!--begin::Search-->
                        <div class="me-3 py-3 py-lg-0">
                            <!--begin::Search-->
                            <div id="kt_header_search" class="d-flex align-items-center w-lg-225px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                                <!--begin::Tablet and mobile search toggle-->
                                <div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
                                    <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-30px h-30px">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen004.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black" />
                                                <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>
                                <!--end::Tablet and mobile search toggle-->
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Search-->
                        <!--begin::Action-->
                        <div class="d-flex align-items-center py-3 py-lg-0">
                            <div class="me-3">
                                <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary bg-transparent w-30px h-30px w-lg-40px h-lg-40px position-relative" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="black" />
                                            <path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <span class="bullet bullet-dot bg-primary h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                                </div>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('<?= base_url(); ?>assets/media/misc/pattern-1.jpg')">
                                        <!--begin::Title-->

                                        <div class="d-flex justify-content-between align-items-center px-9 mt-10 mb-6">
                                            <h3 class="text-white fw-bold m-0 align-middle">Notifications
                                                <span class="fs-8 opacity-75 ps-3">24 reports</span>


                                            </h3>
                                            <div>
                                                <button class="btn btn-sm btn-icon btn-active-light-primary " data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <i class="fa-duotone fa-ellipsis fs-2"></i>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">

                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3 fs-8">Tandai semua dibaca</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3 fs-8">Hapus notifikasi</a>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>


                                        <!--end::Title-->
                                        <!--begin::Tabs-->
                                        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                            <li class="nav-item">
                                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Semua</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 " data-bs-toggle="tab" href="#kt_topbar_notifications_2">Tagihan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Chatting</a>
                                            </li>
                                        </ul>
                                        <!--end::Tabs-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Tab content-->
                                    <div class="tab-content">
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-325px my-5 px-8">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="black" />
                                                                        <path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Tagihan 1</a>
                                                            <div class="text-gray-400 fs-7">siswa 1</div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <div class="d-flex flex-column align-items-end ms-2">
                                                        <span class="text-muted fs-7 mb-1">kemarin</span>
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <div class="d-flex flex-stack py-4 ">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-45px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5 ">
                                                            <a class=" fs-5 fw-bolder text-gray-900 text-hover-primary mb-2" data-bs-toggle="tab" href="#kt_tab_pane_chat_1">Emmaaa</a>
                                                            <div class="fw-bold text-muted">Selamat pagi bu emma, ijin...</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Lat seen-->
                                                    <div class="d-flex flex-column align-items-end ms-2">
                                                        <span class="text-muted fs-7 mb-1">13.00</span>
                                                    </div>
                                                    <!--end::Lat seen-->
                                                </div>
                                                <div class="d-flex flex-stack py-4 ">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-45px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5 ">
                                                            <a class=" fs-5 fw-bolder text-gray-900 text-hover-primary mb-2" data-bs-toggle="tab" href="#kt_tab_pane_chat_1">Emmaaa</a>
                                                            <div class="fw-bold text-muted">Selamat pagi bu emma, ijin...</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Lat seen-->
                                                    <div class="d-flex flex-column align-items-end ms-2">
                                                        <span class="text-muted fs-7 mb-1">13.00</span>
                                                    </div>
                                                    <!--end::Lat seen-->
                                                </div>
                                                <!--end::Item-->

                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Tab panel-->
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade " id="kt_topbar_notifications_2" role="tabpanel">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-325px my-5 px-8">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="black" />
                                                                        <path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Tagihan 1</a>
                                                            <div class="text-gray-400 fs-7">siswa 1</div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <div class="d-flex flex-column align-items-end ms-2">
                                                        <span class="text-muted fs-7 mb-1">kemarin</span>
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Tab panel-->
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-325px my-5 px-8">
                                                <!--begin::Item-->

                                                <div class="d-flex flex-stack py-4 ">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-45px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5 ">
                                                            <a class=" fs-5 fw-bolder text-gray-900 text-hover-primary mb-2" data-bs-toggle="tab" href="#kt_tab_pane_chat_1">Emmaaa</a>
                                                            <div class="fw-bold text-muted">Selamat pagi bu emma, ijin...</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Lat seen-->
                                                    <div class="d-flex flex-column align-items-end ms-2">
                                                        <span class="text-muted fs-7 mb-1">13.00</span>
                                                    </div>
                                                    <!--end::Lat seen-->
                                                </div>
                                                <div class="d-flex flex-stack py-4 ">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-45px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5 ">
                                                            <a class=" fs-5 fw-bolder text-gray-900 text-hover-primary mb-2" data-bs-toggle="tab" href="#kt_tab_pane_chat_1">Emmaaa</a>
                                                            <div class="fw-bold text-muted">Selamat pagi bu emma, ijin...</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Lat seen-->
                                                    <div class="d-flex flex-column align-items-end ms-2">
                                                        <span class="text-muted fs-7 mb-1">13.00</span>
                                                    </div>
                                                    <!--end::Lat seen-->
                                                </div>

                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Tab panel-->
                                    </div>
                                    <!--end::Tab content-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <div class="me-3">
                                <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary bg-transparent w-30px h-30px w-lg-40px h-lg-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
                                            <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="<?= base_url(); ?>assets/media/avatars/150-26.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                                                    <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                                                </div>
                                                <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="<?= base_url('profile') ?>" class="menu-link px-5">Profile</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="<?= base_url('profile/ubah_password'); ?>" class="menu-link px-5">Ubah Kata Sandi</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="<?= base_url('auth/logout') ?>" class="menu-link px-5 question_alert" <?= alert_question('KONFIRMASI', 'Apakah anda akan keluar dari aplikasi KlasQ Staf ?', 'question') ?>>Keluar</a>
                                    </div>
                                </div>
                                <!--end::Menu-->
                            </div>
                            <a href="<?= base_url('chatting'); ?>" class="btn btn-primary">Pesan</a>
                        </div>
                        <!--end::Action-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->