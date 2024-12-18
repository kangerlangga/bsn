    <header id="headerHome" class="px-4 px-lg-5 py-3 w-100 header-home">

        <nav class="d-flex justify-content-between align-items-center">

            <figure class="m-0 p-0">
                <a href="#" title="CV Bumi Sejahtera Nusantara">
                    <img src="<?= base_url() ?>/img/logo.png" width="100" alt="CV Bumi Sejahtera Nusantara">
                </a>
            </figure>

            <ul class="p-0 m-0 d-none d-md-flex">
                <div class="me-3">
                    <a href="#" title="Beranda" class="fs-5 text-decoration-none url-hover">Beranda</a>
                    <div class="url-hover-bar"><span></span></div>
                </div>
                <div class="me-3">
                    <a href="<?= base_url('tentang') ?>" title="Tentang" class="fs-5 text-decoration-none url-hover">Tentang</a>
                    <div class="url-hover-bar"><span></span></div>
                </div>
                <div class="me-3">
                    <a href="<?= base_url('produk') ?>" title="Produk" class="fs-5 text-decoration-none url-hover">Produk</a>
                    <div class="url-hover-bar"><span></span></div>
                </div>
                <div>
                    <a href="<?= base_url('kontak') ?>" title="Kontak Kami" class="fs-5 text-decoration-none url-hover">Kontak</a>
                    <div class="url-hover-bar"><span></span></div>
                </div>
            </ul>

            <div class="d-block d-md-none">
                <button type="button" class="btn menu-button btn-link border border-2 rounded border-utama text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#menuCanvas">
                    <svg class="icon icon-align-left text-utama fs-2" xmlns="https://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                        <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                        <use xlink:href="#icon-align-left"></use>
                    </svg>
                </button>
            </div>

        </nav>

    </header>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="menuCanvas" aria-labelledby="menuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold text-utama" id="menuLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item ps-2">
                    <a href="#" title="Beranda" class="text-decoration-none link-dark hover-utama fw-bold">Beranda</a>
                </li>
                <li class="list-group-item ps-2">
                    <a href="<?= base_url('tentang') ?>" title="Tentang" class="text-decoration-none link-dark hover-utama fw-bold">Tentang</a>
                </li>
                <li class="list-group-item ps-2">
                    <a href="<?= base_url('produk') ?>" title="Produk" class="text-decoration-none link-dark hover-utama fw-bold">Produk</a>
                </li>
                <li class="list-group-item ps-2">
                    <a href="<?= base_url('kontak') ?>" title="Kontak" class="text-decoration-none link-dark hover-utama fw-bold">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
    <main class="main" role="main">


        <!-- HERO -->
        <section id="hero" class="hero mb-5">

            <div id="carouselHomepage" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">


                    <div class="carousel-item position-relative d-flex align-items-center active">

                        <div class="hero-text px-4 px-lg-5">
                            <h1 data-aos="fade-down" data-aos-duration="3000" class="fw-bold mb-4" style="color:#fbb437; font-size: calc(1.375rem + 2vw);filter: drop-shadow(4px 6px 8px #000000);">CV. Bumi Sejahtera Nusantara</h1>
                            <h2 data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease" class="text-white fw-bold fs-3" style="filter: drop-shadow(4px 6px 8px #000000);">Kompeten dan Profesional</h2>
                            <p data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease" data-aos-delay="700" class="text-white mb-4 fs-5" style="filter: drop-shadow(4px 6px 8px #000000);">Membangun dan menjaga kerjasama yang profesional, unggul, dan kompeten</p>
                            <div class="d-flex">
                                <a data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease" data-aos-delay="1700" href="<?= base_url('kontak') ?>" class="btn px-3 py-2 px-lg-4 btn-danger text-white me-3">Kontak</a>
                                <a data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease" data-aos-delay="2000" href="<?= base_url('tentang') ?>" class="btn px-3 py-2 px-lg-4 btn-outline-light">Tentang Kami</a>
                            </div>
                        </div>

                        <img class="lazyloader w-100 h-100 hero-image d-block" src="<?= base_url() ?>/img/1.jpg" data-src="img/1.jpg" alt="Kompeten dan Profesional">
                    </div>


                    <div class="carousel-item position-relative d-flex align-items-center ">

                        <div class="hero-text px-4 px-lg-5">
                            <h1 class="fw-bold mb-4" style="color:#fbb437; font-size: calc(1.375rem + 2vw);filter: drop-shadow(4px 6px 8px #000000);">CV. Bumi Sejahtera Nusantara</h1>
                            <h2 class="text-white fw-bold fs-3" style="filter: drop-shadow(4px 6px 8px #000000);">Konsistensi Tumbuh dan Berkembang</h2>
                            <p class="text-white mb-4 fs-5" style="filter: drop-shadow(4px 6px 8px #000000);">Berkomitmen untuk selalu tumbuh dan berkembang secara konsisten serta memberikan pelayanan yang prima</p>
                            <div class="d-flex">
                                <a href="<?= base_url('kontak') ?>" class="btn px-3 py-2 px-lg-4 btn-danger text-white me-3">Kontak</a>
                                <a href="<?= base_url('tentang') ?>" class="btn px-3 py-2 px-lg-4 btn-outline-light">Tentang Kami</a>
                            </div>
                        </div>

                        <img class="lazyloader w-100 h-100 hero-image d-block" src="<?= base_url() ?>/img/2.jpg" data-src="img/2.jpg" alt="Konsistensi Tumbuh dan Berkembang">
                    </div>


                    <div class="carousel-item position-relative d-flex align-items-center ">

                        <div class="hero-text px-4 px-lg-5">
                            <h1 class="fw-bold mb-4" style="color:#fbb437; font-size: calc(1.375rem + 2vw);filter: drop-shadow(4px 6px 8px #000000);">CV. Bumi Sejahtera Nusantara</h1>
                            <h2 class="text-white fw-bold fs-3" style="filter: drop-shadow(4px 6px 8px #000000);">Berkomitmen Terhadap Hasil dan Kualitas</h2>
                            <p class="text-white mb-4 fs-5" style="filter: drop-shadow(4px 6px 8px #000000);">Mengutamakan pencapaian kualitas kerja yang sesuai harapan dan kebutuhan mitra</p>
                            <div class="d-flex">
                                <a href="<?= base_url('kontak') ?>" class="btn px-3 py-2 px-lg-4 btn-danger text-white me-3">Kontak</a>
                                <a href="<?= base_url('tentang') ?>" class="btn px-3 py-2 px-lg-4 btn-outline-light">Tentang Kami</a>
                            </div>
                        </div>

                        <img class="lazyloader w-100 h-100 hero-image d-block" src="<?= base_url() ?>/img/3.jpg" data-src="img/3.jpg" alt="Berkomitmen Terhadap Hasil dan Kualitas">
                    </div>


                </div>
            </div>

        </section>
        <!-- HERO -->

        <!-- COMPANY PROFILE -->
        <section class="compro pb-5 px-4 px-lg-5 py-2 shadow-sm">

            <div class="d-flex w-100 mb-5">
                <div>
                    <h2 data-aos="fade-right" data-aos-duration="3000" class="fw-bold mb-3">CV Bumi Sejahtera Nusantara</h2>
                    <div class="underbar m-0 me-auto"></div>
                </div>
            </div>

            <div class="d-flex">

                <div class="w-100">
                    <p data-aos="fade-up" data-aos-duration="3000">Perusahaan kontraktor yang berkomitmen untuk selalu aktif dalam pembangunan nasional yang utamanya bergerak di bidang konstruksi bangunan gedung dan sipil, persiapan lahan, serta penyelesaian bangunan.</p>
                    <p data-aos="fade-up" data-aos-duration="3000">Kami memiliki visi untuk menjadi perusahaan yang terpercaya dalam industri jasa konstruksi yang menekankan pada perkembangan berkesinambungan.</p>

                    <div class="row row-cols-1 row-cols-lg-2 g-3 mb-5">

                        <div class="col">
                            <div class="d-flex align-items-start" data-aos="fade-up" data-aos-duration="3000">
                                <svg class="icon me-2 text-utama" xmlns="https://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-352a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" />
                                </svg>
                                <p class="mb-0">Membangun dan menjaga kerjasama yang profesional, unggul, dan kompeten.</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="d-flex align-items-start" data-aos="fade-up" data-aos-duration="3000">
                                <svg class="icon me-2 text-utama" xmlns="https://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-352a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" />
                                </svg>
                                <p class="mb-0">Memaksimalkan penerapan manajemen resiko, SDM, dan informasi yang efektif dan efisien.</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="d-flex align-items-start" data-aos="fade-up" data-aos-duration="3000">
                                <svg class="icon me-2 text-utama" xmlns="https://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-352a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" />
                                </svg>
                                <p class="mb-0">Mengutamakan pencapaian kualitas kerja yang sesuai harapan dan kebutuhan mitra.</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="d-flex align-items-start" data-aos="fade-up" data-aos-duration="3000">
                                <svg class="icon me-2 text-utama" xmlns="https://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-352a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" />
                                </svg>
                                <p class="mb-0">Melakukan pengembangan terus menerus untuk meningkatkan optimalitas kerja dan nilai pelayanan.</p>
                            </div>
                        </div>

                    </div>

                    <div data-aos="fade-up" data-aos-duration="3000">
                        <a href="<?= base_url('tentang') ?>" class="btn px-3 py-2 px-lg-4 btn-danger shadow-sm text-white">Lihat Selengkapnya</a>
                    </div>

                </div>

                <figure class="m-0 d-none d-xl-flex w-100 ps-4 justify-content-end">
                    <img data-aos="flip-left" data-aos-duration="3000" src="<?= base_url() ?>/img/company.png" alt="CV Bumi Sejahtera Nusantara">
                </figure>

            </div>

        </section>
        <!-- COMPANY PROFILE -->

        <!-- BIDANG USAHA -->
        <section class="bidang-usaha px-4 px-lg-5 py-5 bg-white shadow-sm">

            <div class="d-flex justify-content-center mb-5">
                <div>
                    <h2 data-aos="fade-up" data-aos-duration="3000" class="fw-bold mb-3">Bidang Usaha</h2>
                    <div class="underbar"></div>
                </div>
            </div>


            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

                <div data-aos="fade-up" data-aos-duration="3000" data-aos-easing="ease" class="col">
                    <figure class="mb-3 mx-0 overflow-hidden rounded">
                        <img onload="" class="w-100 lazy" src="<?= base_url() ?>/img/lazyholder.jpg" data-src="<?= base_url() ?>/img/general-trading.jpg" alt="General Trading">
                    </figure>
                    <h4 class="fs-5 fw-bold text-utama bidang-usaha-title text-center">General Trading</h4>
                    <p class="mb-0 text-center">Fokus pada perdagangan umum mencerminkan kemampuan perusahaan untuk menjual dan memasarkan berbagai produk kepada berbagai jenis pelanggan.</p>
                </div>

                <div data-aos="fade-up" data-aos-duration="3000" data-aos-easing="ease" data-aos-delay="500" class="col">
                    <figure class="mb-3 mx-0 overflow-hidden rounded">
                        <img class="w-100 lazy" src="<?= base_url() ?>/img/lazyholder.jpg" data-src="<?= base_url() ?>/img/contractor.jpg" alt="Contractor">
                    </figure>
                    <h4 class="fs-5 fw-bold text-utama bidang-usaha-title text-center">Contractor</h4>
                    <p class="mb-0 text-center">Perusahaan ini berperan sebagai kontraktor dalam proyek-proyek pembangunan dan konstruksi.</p>
                </div>

                <div data-aos="fade-up" data-aos-duration="3000" data-aos-easing="ease" data-aos-delay="1000" class="col">
                    <figure class="mb-3 mx-0 overflow-hidden rounded">
                        <img class="w-100 lazy" src="<?= base_url() ?>/img/lazyholder.jpg" data-src="<?= base_url() ?>/img/supplier.jpg" alt="Supplier">
                    </figure>
                    <h4 class="fs-5 fw-bold text-utama bidang-usaha-title text-center">Supplier</h4>
                    <p class="mb-0 text-center">Sebagai pemasok berbagai barang dan produk kepada bisnis atau individu lainnya. Ini bisa termasuk bahan baku, peralatan, perlengkapan, dan komponen lain yang dibutuhkan oleh klien atau pelanggan.</p>
                </div>

            </div>

        </section>
        <!-- BIDANG USAHA -->

    </main>
    <!-- Footer -->
		<footer class="text-white" style="background-color:#282b8c;">
			<div class="container">
				<div class="row pt-3">
					<div class="col text-center">
						<p>&copy; <?= date("Y")?> : <b>CV. Bumi Sejahtera Nusantara</b> - All Rights Reserved</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer -->

        <!-- JS -->	
		<script src="js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha256-xLI5SjD6DkojxrMIVBNT4ghypv12Xtj7cOa0AgKd6wA=" crossorigin="anonymous"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js" integrity="sha256-sO6HPavoXo796Zp/bq6ts4qHOoEqfydXEXSX5NojP48=" crossorigin="anonymous"></script>
        <!-- JS -->
	
	<script type="text/javascript">

		var lazyLoadInstance;
		
		$(window).on('load', function() {
			$('#preloader').fadeOut(3000, 'linear');

			lazyLoadInstance = new LazyLoad({
  				threshold: 600
			});

			let allManualLoad = $('.lazyloader');
			$(allManualLoad).each(function(n, item) {
				$(item).attr('src', $(item).attr('data-src'));
			});
		});
        
        $(document).ready(function() {

            $(window).on('scroll', function (e) {
                let top = window.pageYOffset || document.documentElement.scrollTop;
                let nav = $('#headerHome');

                if (top !== 0) {
                    nav.addClass('shown shadow-lg');
                } else {
                    nav.removeClass('shown shadow-lg');
                }
            });
        });

		AOS.init();

	</script>