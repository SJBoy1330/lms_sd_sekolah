<style type="text/css">
    @media only screen and (max-width: 600px) {
        .form-container.sign-in-container {
            width: 100%;
        }

        form {
            padding: 0px 25px;
        }

        .overlay-panel.overlay-right {
            display: none;
        }
    }

    h5.title {
        font-weight: bold;
    }
</style>
<!-- push -->
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Selamat datang di website admin KlasQ</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Kami adalah tim Alpha berbakat yang membuat situs web ujian yang keren</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <button type="button" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span>Login Sekarang</span>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="<?= base_url(); ?>assets/img/hero-banner.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    <!-- ======= Values Section ======= -->
    <section class="features" id="features">
        <div class="container">

            <h2 class="h2 section-title">Penilaian KlasQ SD</h2>

            <p class="section-text">
                Penilaian mereka tentang aplikasi KlasQ SD
            </p>

            <ul class="features-list">

                <li class="features-item">

                    <figure class="features-item-banner">
                        <img src="<?= base_url(); ?>assets/img/image-1.png" alt="feature banner" style="animation: up-down 1.3s ease-in-out infinite alternate-reverse both;">
                    </figure>

                    <div class="feature-item-content">
                        <h3 class="h2 item-title">Pengguna Terdaftar</h3>

                        <p class="item-text">
                            Aplikasi KlasQ SD saat ini memiliki pengguna terdaftar sebanyak
                        </p>
                        <p class="item-text" style="font-weight: 600; font-size: 30px; color: #FF0000;">
                            1200 <i class="fa-solid fa-plus"></i> Siswa
                        </p>
                    </div>

                </li>

                <li class="features-item" style="margin-bottom: 50px;">

                    <figure class="features-item-banner">
                        <img src="<?= base_url(); ?>assets/img/image-2.png" alt="feature banner" style="animation: up-down 1s ease-in-out infinite alternate-reverse both;">
                    </figure>

                    <div class="feature-item-content">
                        <h3 class="h2 item-title">Telah Digunakan</h3>

                        <p class="item-text">
                            Aplikasi KlasQ SD saati ini telah digunakan oleh sekolah sekolah di Indonesia sebanyak
                        </p>
                        <p class="item-text" style="font-weight: 600; font-size: 30px; color: #FF0000;">
                            100 <i class="fa-solid fa-xmark"></i> digunakan
                        </p>
                    </div>

                </li>


            </ul>

            <ul class="features-list">

                <li class="features-item">

                    <figure class="features-item-banner">
                        <img src="<?= base_url(); ?>assets/img/image-3.png" alt="feature banner" style="animation: up-down 1.5s ease-in-out infinite alternate-reverse both;">
                    </figure>

                    <div class="feature-item-content">
                        <h3 class="h2 item-title">Sekolah Terdaftar</h3>

                        <p class="item-text">
                            Aplikasi KlasQ SD saat ini memiliki sekolah terdaftar sebanyak
                        </p>
                        <p class="item-text" style="font-weight: 600; font-size: 30px; color: #FF0000;">
                            200 <i class="fa-solid fa-plus"></i> Sekolah
                        </p>
                    </div>

                </li>

                <li class="features-item d-none">
                </li>


            </ul>

        </div>
    </section>
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq" style="background-image: url(<?= base_url(); ?><?= base_url(); ?>assets/img/bg-faq.png); background-size: cover; padding: 70px 0px; background: rgb(255,0,0);background: linear-gradient(184deg, rgba(255,0,0,1) 0%, rgba(235,156,151,1) 100%);">
        <div class="container" data-aos="fade-up">

            <div class="section-title mb-5">
                <h2 class="text-white">Pertanyaan yang Sering Diajukan</h2>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                        <i class="fa-duotone fa-circle-question icon-help"></i></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-1" class="collapsed">Bagaimana cara menggunakan aplikasi web admin KlasQ ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus quibusdam quisquam explicabo ut maiores libero non eius accusantium rerum impedit at molestias molestiae quaerat, hic nulla amet error facere itaque!
                            </p>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                        <i class="fa-duotone fa-circle-question icon-help"></i></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Bagaimana cara login aplikasi web admin KlasQ ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus quibusdam quisquam explicabo ut maiores libero non eius accusantium rerum impedit at molestias molestiae quaerat, hic nulla amet error facere itaque!
                            </p>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                        <i class="fa-duotone fa-circle-question icon-help"></i></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Mengapa harus menggunakan aplikasi web admin KlasQ ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus quibusdam quisquam explicabo ut maiores libero non eius accusantium rerum impedit at molestias molestiae quaerat, hic nulla amet error facere itaque!
                            </p>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                        <i class="fa-duotone fa-circle-question icon-help"></i></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Untuk apa harus menggunakan aplikasi web admin KlasQ ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus quibusdam quisquam explicabo ut maiores libero non eius accusantium rerum impedit at molestias molestiae quaerat, hic nulla amet error facere itaque!
                            </p>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                        <i class="fa-duotone fa-circle-question icon-help"></i></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Apakah harus menggunakan aplikasi web admin KlasQ ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus quibusdam quisquam explicabo ut maiores libero non eius accusantium rerum impedit at molestias molestiae quaerat, hic nulla amet error facere itaque!
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Testimoni</h2>
                <p>Apa yang mereka katakan tentang aplikasi KlasQ</p>
            </header>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="profile mb-3 mt-auto">
                                <div class="testimonial-img" style="background-image: url('<?= base_url() ?>assets/img/hipster.png'); background-size: cover; background-position: center;"></div>
                                <h3>Sidatata Al Jennar</h3>
                                <h4>Siswa</h4>
                            </div>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia voluptas
                                exercitationem, cumque eaque similique mollitia voluptatum quas optio doloremque
                                ex officiis consequuntur asperiores praesentium illo nisi blanditiis,
                                a architecto soluta.
                            </p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="profile mb-3 mt-auto">
                                <div class="testimonial-img" style="background-image: url('<?= base_url() ?>assets/img/hipster.png'); background-size: cover; background-position: center;"></div>
                                <h3>Sidatata Al Jennar</h3>
                                <h4>Siswa</h4>
                            </div>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia voluptas
                                exercitationem, cumque eaque similique mollitia voluptatum quas optio doloremque
                                ex officiis consequuntur asperiores praesentium illo nisi blanditiis,
                                a architecto soluta.
                            </p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="profile mb-3 mt-auto">
                                <div class="testimonial-img" style="background-image: url('<?= base_url() ?>assets/img/hipster.png'); background-size: cover; background-position: center;"></div>
                                <h3>Sidatata Al Jennar</h3>
                                <h4>Siswa</h4>
                            </div>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia voluptas
                                exercitationem, cumque eaque similique mollitia voluptatum quas optio doloremque
                                ex officiis consequuntur asperiores praesentium illo nisi blanditiis,
                                a architecto soluta.
                            </p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="profile mb-3 mt-auto">
                                <div class="testimonial-img" style="background-image: url('<?= base_url() ?>assets/img/hipster.png'); background-size: cover; background-position: center;"></div>
                                <h3>Sidatata Al Jennar</h3>
                                <h4>Siswa</h4>
                            </div>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia voluptas
                                exercitationem, cumque eaque similique mollitia voluptatum quas optio doloremque
                                ex officiis consequuntur asperiores praesentium illo nisi blanditiis,
                                a architecto soluta.
                            </p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="profile mb-3 mt-auto">
                                <div class="testimonial-img" style="background-image: url('<?= base_url() ?>assets/img/hipster.png'); background-size: cover; background-position: center;"></div>
                                <h3>Sidatata Al Jennar</h3>
                                <h4>Siswa</h4>
                            </div>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia voluptas
                                exercitationem, cumque eaque similique mollitia voluptatum quas optio doloremque
                                ex officiis consequuntur asperiores praesentium illo nisi blanditiis,
                                a architecto soluta.
                            </p>

                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- End Testimonials Section -->


</main><!-- End #main -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content" style="border-radius: 20px; background-image: url(<?= base_url(); ?>assets/img/banner-bg-2.png); background-size:cover;">
            <div class="modal-header" style="border-bottom:none;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- Login Siswa -->
                <div id="login_siswa" class="d-none" style="display : flex;justify-content:center;flex-direction : column;">
                    <button type="button" id="button_back_siswa" data-div="#login_siswa" onclick="back_to(this,'#container_cabang')" class="button-back-modal" style="position: absolute; top: -20px; left: 0; color: #EC3528;"><i class="fa-solid fa-arrow-left"></i>kembali</button>
                    <div class="container-modal d-flex">
                        <div class="form-container sign-in-container">
                            <form id="form_login_siswa" class="php-email-form" action="<?= base_url('func_auth/login_siswa') ?>">
                                <div class="box text-center">
                                    <h3 style="font-size: 24px; color: #012970; font-weight: 700;">Login KlasQ Siswa</h3>
                                    <p>Masukkan id sekolah, nis dan password untuk bisa mengakses</p>
                                </div>
                                <div class="row gy-4">

                                    <div class="form-floating mb-3" id="req_kode_sekolah">
                                        <input type="text" class="form-control" name="kode_sekolah" id="kode_sekolah" placeholder="Kode Sekolah" autocomplete="off">
                                        <label for="kode_sekolah" class="ms-2 mb-3">Kode Sekolah</label>
                                    </div>

                                    <div class="form-floating mb-3" id="req_username">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off">
                                        <label for="username" class="ms-2 mb-3">Username</label>
                                    </div>

                                    <div class="form-floating" id="req_password">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
                                        <label for="password" class="ms-2 mb-3">Password</label>
                                        <div class="input-group-append show-hide">
                                            <span class="input-group-text" onclick="password_show_hide();">
                                                <i class="bi bi-eye" id="show_eye"></i>
                                                <i class="bi bi-eye-slash d-none" id="hide_eye"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="button" onclick="submit_form(this, '#form_login_siswa')" id="button_login_siswa" class="btn btn-flex flex-center btn-default btn-lg mb-3 button-masuk"><span class="indicator-label">Masuk</span></button>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="overlay-container">
                            <div class="overlay">
                                <div class="overlay-panel overlay-right">
                                    <div class="box">
                                        <img src="<?= base_url('assets/img/login-siswa.png') ?>" class="img-fluid" alt="" style="border-radius: 20px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Login Staf -->
                <div id="login_staf" class="d-none" style="display : flex;justify-content:center;flex-direction : column;">
                    <button type="button" id="button_back_staf" data-div="#login_staf" onclick="back_to(this,'#container_cabang')" class="button-back-modal" style="position: absolute; top: -20px; left: 0; color: #EC3528;"><i class="fa-solid fa-arrow-left"></i>Kembali</button>
                    <div class="container-modal d-flex">
                        <div class="form-container sign-in-container">
                            <form id="form_login_staf" class="php-email-form" action="<?= base_url('func_auth/login_staf') ?>">
                                <div class="box text-center">
                                    <h3 style="font-size: 24px; color: #012970; font-weight: 700;">Login KlasQ Staf</h3>
                                    <p>Masukkan id sekolah, nis dan password untuk bisa mengakses</p>
                                </div>
                                <div class="row gy-4">

                                    <div class="form-floating mb-3" id="req_kode_sekolah">
                                        <input type="text" class="form-control" name="kode_sekolah" id="kode_sekolah" placeholder="Kode Sekolah" autocomplete="off">
                                        <label for="kode_sekolah" class="ms-2 mb-3">Kode Sekolah</label>
                                    </div>

                                    <div class="form-floating mb-3" id="req_username">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off">
                                        <label for="username" class="ms-2 mb-3">Username</label>
                                    </div>

                                    <div class="form-floating" id="req_password">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
                                        <label for="password" class="ms-2 mb-3">Password</label>
                                        <div class="input-group-append show-hide">
                                            <span class="input-group-text" onclick="password_show_hide();">
                                                <i class="bi bi-eye" id="show_eye"></i>
                                                <i class="bi bi-eye-slash d-none" id="hide_eye"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="button" onclick="submit_form(this, '#form_login_staf',1)" id="button_login_staf" class="btn btn-flex flex-center btn-default btn-lg mb-3 button-masuk"><span class="indicator-label">Masuk</span></button>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="overlay-container">
                            <div class="overlay">
                                <div class="overlay-panel overlay-right">
                                    <div class="box">
                                        <img src="<?= base_url('assets/img/login-staf.png') ?>" class="img-fluid" alt="" style="border-radius: 20px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Login Wali -->
                <div id="login_wali" class="d-none" style="display : flex;justify-content:center;flex-direction : column;">
                    <button type="button" id="button_back_wali" data-div="#login_wali" onclick="back_to(this,'#container_cabang')" class="button-back-modal" style="position: absolute; top: -20px; left: 0; color: #EC3528;"><i class="fa-solid fa-arrow-left"></i>kembali</button>
                    <div class="container-modal d-flex">
                        <div class="form-container sign-in-container">
                            <form id="form_login_wali" class="php-email-form" action="<?= base_url('func_auth/login_wali') ?>">
                                <div class="box text-center">
                                    <h3 style="font-size: 24px; color: #012970; font-weight: 700;">Login KlasQ Wali</h3>
                                    <p>Masukkan id sekolah, nis dan password untuk bisa mengakses</p>
                                </div>
                                <div class="row gy-4">

                                    <div class="form-floating mb-3" id="req_kode_sekolah">
                                        <input type="text" class="form-control" name="kode_sekolah" id="kode_sekolah" placeholder="Kode Sekolah" autocomplete="off">
                                        <label for="kode_sekolah" class="ms-2 mb-3">Kode Sekolah</label>
                                    </div>

                                    <div class="form-floating mb-3" id="req_username">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off">
                                        <label for="username" class="ms-2 mb-3">Username</label>
                                    </div>

                                    <div class="form-floating" id="req_password">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
                                        <label for="password" class="ms-2 mb-3">Password</label>
                                        <div class="input-group-append show-hide">
                                            <span class="input-group-text" onclick="password_show_hide();">
                                                <i class="bi bi-eye" id="show_eye"></i>
                                                <i class="bi bi-eye-slash d-none" id="hide_eye"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="button" onclick="submit_form(this, '#form_login_wali',2)" id="button_login_wali" class="btn btn-flex flex-center btn-default btn-lg mb-3 button-masuk"><span class="indicator-label">Masuk</span></button>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="overlay-container">
                            <div class="overlay">
                                <div class="overlay-panel overlay-right">
                                    <div class="box">
                                        <img src="<?= base_url('assets/img/login-wali.png') ?>" class="img-fluid" alt="" style="border-radius: 20px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-modal" id="container_cabang">
                    <div class="form">
                        <div id="form_login" class="php-email-form">
                            <div class="box text-center">
                                <h3 style="font-size: 24px; font-weight: 700;">Login KlasQ sebagai</h3>
                                <p>Pilih salah satu untuk mengakses web admin</p>
                            </div>
                            <div class="row gy-4">
                                <div onclick="get_login('#login_siswa')" class="col-4 card-akses mt-5">
                                    <div class="card siswa" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="image-placement-siswa"></div>
                                            <h5 class="card-title ms-3">
                                                Siswa
                                            </h5>
                                            <p class="card-text ms-3">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo atque.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div onclick="get_login('#login_staf')" class="col-4 card-akses mt-5">
                                    <div class="card staf" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="image-placement-staf"></div>
                                            <h5 class="card-title ms-3">
                                                Staf
                                            </h5>
                                            <p class="card-text ms-3">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo atque.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div onclick="get_login('#login_wali')" class="col-4 card-akses mt-5">
                                    <div class="card wali" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="image-placement-wali"></div>
                                            <h5 class="card-title ms-3">
                                                Wali
                                            </h5>
                                            <p class="card-text ms-3">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo atque.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </dvi>
                        </div>
                    </div>

                </div>
                <div class="modal-footer" style="border-top: none;">
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>