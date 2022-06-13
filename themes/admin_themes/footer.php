    <!--begin::Footer-->
    <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
        <!--begin::Container-->
        <div class="container-xxl d-flex flex-column flex-md-row flex-stack">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
                <span class="text-gray-400 fw-bold me-1">Created by</span>
                <a href="https://keenthemes.com" target="_blank" class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Menu-->
            <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                <li class="menu-item">
                    <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                </li>
                <li class="menu-item">
                    <a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
                </li>
                <li class="menu-item">
                    <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                </li>
            </ul>
            <!--end::Menu-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "<?= base_url(); ?>assets/";
        var BASE_URL = baseUrl = '<?= base_url(); ?>';
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?= base_url(); ?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url(); ?>assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="<?= base_url(); ?>assets/plugins/custom/leaflet/leaflet.bundle.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="<?= base_url(); ?>assets/js/custom/modals/select-location.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom/widgets.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom/apps/chat/chat.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom/apps/chatgrup/chat.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom/modals/upgrade-plan.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom/modals/create-app.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom/modals/users-search.js"></script>

    <script src="<?= base_url(); ?>assets/js/custom/modals/users-searchgrup.js"></script>

    <!--end::Page Custom Javascript-->

    <!-- File Upload -->
    <script src="<?= base_url(); ?>assets/js/custom/apps/file-manager/list.js"></script>

    <!-- daterangepicker -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/daterangepicker/js/moment.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/daterangepicker/js/daterangepicker.js"></script>

    <!-- jQuery and Bootstrap scripts -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/clockpicker/bootstrap.min.js"></script>

    <!-- ClockPicker script -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/clockpicker/bootstrap-clockpicker.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/clockpicker/demo-clockpicker.js"></script>

    <!-- DateRangePicker script -->

    <!-- select2 -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/select2/js/select2.min.js"></script>



    <script type="text/javascript" src="<?= base_url(); ?>assets/js/global.js"></script>

    <?php
    if ($js_add) {
        foreach ($js_add as $js) {
            echo $js;
        }
    }
    ?>


    <!--end::Javascript-->
    </body>
    <!--end::Body-->

    </html>