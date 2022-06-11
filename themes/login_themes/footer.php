<!-- ======= Footer ======= -->
<footer id="footer" class="footer position-fixed bottom-0" style="width: 100vw;">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>PT. Alphatech Indonesiana</span></strong>.
        </div>
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script>

    // Password Siswa 
    function password_show_hide() {

        var x = document.getElementById("password");

        var show_eye = document.getElementById("show_eye");

        var hide_eye = document.getElementById("hide_eye");

        hide_eye.classList.remove("d-none");

        if (x.type === "password") {

            x.type = "text";

            show_eye.style.display = "none";

            hide_eye.style.display = "block";

        } else {

            x.type = "password";

            show_eye.style.display = "block";

            hide_eye.style.display = "none";

        }

    }

    // Password Staf
    const togglePasswordSiswa = document.querySelector("#togglePasswordSiswa");
    const password_siswa = document.querySelector("#password_siswa");

    togglePasswordSiswa.addEventListener("click", function () {
    
    const type = password_siswa.getAttribute("type") === "password" ? "text" : "password";
    password_siswa.setAttribute("type", type);
        this.classList.toggle('bi-eye');
        this.classList.toggle('bi-eye-slash');
    });

    // Password Staf
    const togglePasswordStaf = document.querySelector("#togglePasswordStaf");
    const password_staf = document.querySelector("#password_staf");

    togglePasswordStaf.addEventListener("click", function () {
    
    const type = password_staf.getAttribute("type") === "password" ? "text" : "password";
    password_staf.setAttribute("type", type);
        this.classList.toggle('bi-eye');
        this.classList.toggle('bi-eye-slash');
    });

    // Password Wali
    const togglePasswordWali = document.querySelector("#togglePasswordWali");
    const password_wali = document.querySelector("#password_wali");

    togglePasswordWali.addEventListener("click", function () {
    
    const type = password_wali.getAttribute("type") === "password" ? "text" : "password";
    password_wali.setAttribute("type", type);
        this.classList.toggle('bi-eye');
        this.classList.toggle('bi-eye-slash');
    });
</script>

<!-- Vendor JS Files -->
<script type="text/javascript">
    var BASE_URL = baseUrl = '<?= base_url(); ?>';
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/purecounter/purecounter.js"></script>
<script src="<?= base_url(); ?>assets/vendor/aos/aos.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url('assets/js/alert/sweetalert2.all.min.js') ?>"></script>
<script src="<?= base_url('assets/js/alert/scriptalert.js') ?>"></script>

<!-- Template Main JS File -->
<script src="<?= base_url(); ?>assets/js/main.js"></script>
<script src="<?= base_url(); ?>assets/js/global.js"></script>


<?php
if (isset($js_add) && is_array($js_add)) {
    foreach ($js_add as $js) {
        echo $js;
    }
} else {
    echo (isset($js_add) && ($js_add != "") ? $js_add : "");
}

?>



</body>

</html>