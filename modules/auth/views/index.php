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
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Selamat datang di website ujian KlasQ</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Kami adalah tim Alpha berbakat yang membuat situs web ujian yang keren</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <!-- <button class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Login Sekarang</span>
                <i class="bi bi-arrow-right"></i>
              </button> -->
                        <button type="button" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span>Login Sekarang</span>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="<?= base_url(); ?>assets/img/banner-vektor.png" class="img-fluid" alt="" width="500">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Penilaian KlasQ</h2>
                <p>Penilaian mereka tentang aplikasi KlasQ</p>
            </header>

            <div class="row">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="box">
                        <img src="<?= base_url(); ?>assets/img/item-1.png" class="img-fluid" alt="">
                        <h3>Pengguna terdaftar</h3>
                        <h5 class="title"><?= $jumlah_siswa; ?> + Siswa</h5>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <img src="<?= base_url(); ?>assets/img/item-2.png" class="img-fluid" alt="">
                        <h3>Telah digunakan sebanyak</h3>
                        <h5 class="title"><?= $jumlah_paket; ?> x digunakan</h5>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="box">
                        <img src="<?= base_url(); ?>assets/img/item-3.png" class="img-fluid" alt="">
                        <h3>Sekolah terdaftar</h3>
                        <h5 class="title"><?= $jumlah_sekolah ?> + Sekolah</h5>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Values Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq" style="background-image: url(<?= base_url(); ?><?= base_url(); ?>assets/img/bg-faq.png); background-size: cover;">
        <div class="container" data-aos="fade-up">

            <div class="section-title mb-5">
                <h2>Pertanyaan yang Sering Diajukan</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-1" class="collapsed">Bagaimana cara memasak nasi<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
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
                            <div class="profile mt-auto">
                                <div class="testimonial-img" style="background-image: url('<?= $gambar; ?>'); background-size: cover; background-position: center;"></div>
                                <h3>Sidatata Al Jennar</h3>
                                <h4>Siswa</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
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
                            <div class="profile mt-auto">
                                <div class="testimonial-img" style="background-image: url('<?= $gambar; ?>'); background-size: cover; background-position: center;"></div>
                                <h3>Sidatata Al Jennar</h3>
                                <h4>Siswa</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
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
                            <div class="profile mt-auto">
                                <div class="testimonial-img" style="background-image: url('<?= $gambar; ?>'); background-size: cover; background-position: center;"></div>
                                <h3>Sidatata Al Jennar</h3>
                                <h4>Siswa</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
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
                            <div class="profile mt-auto">
                                <div class="testimonial-img" style="background-image: url('<?= $gambar; ?>'); background-size: cover; background-position: center;"></div>
                                <h3>Sidatata Al Jennar</h3>
                                <h4>Siswa</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
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
                            <div class="profile mt-auto">
                                <div class="testimonial-img" style="background-image: url('<?= $gambar; ?>'); background-size: cover; background-position: center;"></div>
                                <h3>Sidatata Al Jennar</h3>
                                <h4>Siswa</h4>
                            </div>
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
        <div class="modal-content" style="border-radius: 20px; background-image: url(<?= base_url(); ?>assets/img/bg-login.png); background-size:cover;">
            <div class="modal-header" style="border-bottom:none;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-modal" id="container">
                    <!-- <div class="form-container sign-up-container">
              <form action="#">
                <div class="box text-center">
                  <h3 style="font-size: 24px; color: #012970; font-weight: 700;">Login KlasQ</h3>
                  <p>Masukkan id sekolah, nis dan password untuk bisa mengakses</p>
                </div>
                <div class="row gy-4" style="margin-bottom: 85px;">

                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" placeholder="Kode Sekolah" autocomplete="off">
                      <label class="ms-2 mb-3">Email</label>
                    </div>

                    <div class="text-center">
                      <button type="button" class="btn btn-flex flex-center btn-default btn-lg mb-3 button-masuk"><span class="indicator-label">Reset kata sandi</span></button>
                    </div>
    
                  </div>
              </form>
            </div> -->

                    <div class="form-container sign-in-container">
                        <form id="form_login" class="php-email-form">
                            <div class="box text-center">
                                <h3 style="font-size: 24px; color: #012970; font-weight: 700;">Login KlasQ</h3>
                                <p>Masukkan id sekolah, nis dan password untuk bisa mengakses</p>
                            </div>
                            <div class="row gy-4">

                                <div class="form-floating mb-3" id="req_kode_sekolah">
                                    <input type="email" class="form-control" name="kode_sekolah" id="kode_sekolah" placeholder="Kode Sekolah" autocomplete="off">
                                    <label for="kode_sekolah" class="ms-2 mb-3">Kode Sekolah</label>
                                </div>

                                <div class="form-floating mb-3" id="req_nis">
                                    <input type="email" class="form-control" name="nis" id="nis" placeholder="NIS Sekolah" autocomplete="off">
                                    <label for="nis" class="ms-2 mb-3">NIS Sekolah</label>
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
                                    <button type="button" id="btn_login" class="btn btn-flex flex-center btn-default btn-lg mb-3 button-masuk"><span class="indicator-label">Masuk</span></button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="overlay-container">
                        <div class="overlay">
                            <!-- <div class="overlay-panel overlay-left">
                  <div class="box">
                    <img src="<?= base_url(); ?>assets/img/login-vektor.png" class="img-fluid" alt="" style="border-radius: 20px;">
                    <button class="ghost" id="signIn">Login</button>
                  </div>
                </div> -->
                            <div class="overlay-panel overlay-right">
                                <div class="box">
                                    <img src="<?= base_url('<?= base_url(); ?>assets/img/login-vektor.png') ?>" class="img-fluid" alt="" style="border-radius: 20px;">
                                    <!-- <button class="ghost" id="signUp">Lupa kata sandi</button> -->
                                </div>
                            </div>
                        </div>
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