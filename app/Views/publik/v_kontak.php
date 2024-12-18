<header id="headerHome" class="fixed-top px-4 px-lg-5 py-3 w-100 header-home shown shadow-lg">

    <nav class="d-flex justify-content-between align-items-center">

        <figure class="m-0 p-0">
            <a href="#" title="CV Bumi Sejahtera Nusantara">
                <img src="<?= base_url() ?>/img/logo.png" width="100" alt="CV Bumi Sejahtera Nusantara">
            </a>
        </figure>

        <ul class="p-0 m-0 d-none d-md-flex">
            <div class="me-3">
                <a href="<?= base_url() ?>" title="Beranda" class="fs-5 text-decoration-none url-hover">Beranda</a>
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
                <a href="#" title="Kontak Kami" class="fs-5 text-decoration-none url-hover">Kontak</a>
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
                <a href="<?= base_url() ?>" title="Beranda" class="text-decoration-none link-dark hover-utama fw-bold">Beranda</a>
            </li>
            <li class="list-group-item ps-2">
                <a href="<?= base_url('tentang') ?>" title="Tentang" class="text-decoration-none link-dark hover-utama fw-bold">Tentang</a>
            </li>
            <li class="list-group-item ps-2">
                <a href="<?= base_url('produk') ?>" title="Produk" class="text-decoration-none link-dark hover-utama fw-bold">Produk</a>
            </li>
            <li class="list-group-item ps-2">
                <a href="#" title="Kontak" class="text-decoration-none link-dark hover-utama fw-bold">Kontak</a>
            </li>
        </ul>
    </div>
</div>
<main class="main" role="main">

    <!-- CONTACT -->
    <section class="information px-4 px-lg-5 py-5 bg-white shadow-sm mt-5">

        <div class="row row-cols-1 row-cols-lg-2 mt-3">

            <div class="col">
                <div class="m-0 pb-5 pb-lg-0">

                    <div class="d-flex justify-content-start mb-5">
                        <div>
                            <h2 data-aos="fade-up" data-aos-duration="3000" class="fw-bold mb-3">Kontak Kami</h2>
                            <div class="underbar ms-0"></div>
                        </div>
                    </div>
                    <p data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300" class="mb-2 fw-bold">Email :</p>
                    <p data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300" class="mb-3">sales@bumisejahteranusantara.com</p>
                    <p data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500" class="mb-2 fw-bold">Kontak :</p>
                    <p data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500" class="mb-1">Telepon : +62 821-9951-2424 (Whatsapp)</p>
                    <a data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500" href="https://api.whatsapp.com/send/?phone=6282199512424&text=Halo%20min" target="_blank" class="btn btn-success">Chat Sekarang!</a>
                </div>
            </div>

            <div class="col">

                <div>
                    <div class="d-flex justify-content-start mb-5">
                        <div>
                            <h2 data-aos="fade-up" data-aos-duration="3000" class="fw-bold mb-3">Alamat</h2>
                            <div class="underbar ms-0"></div>
                        </div>
                    </div>
                    <p data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300" class="mb-2">Perumahan Amartha Safira Cluster Bagarry Blok-B 8 No.8 Sepande, Kecamatan Candi, Kabupaten Sidoarjo, Jawa Timur Indonesia</p>

                </div>

                <section class="rounded google-map overflow-hidden shadow-sm p-0" style="min-height: 350px; height: calc(100% - 372px);">
                    <iframe data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.0651559789226!2d112.69123649999999!3d-7.4580443999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e100375ea221%3A0xfb99682b017902bb!2sCV.%20Bumi%20Sejahtera%20Nusantara!5e0!3m2!1sid!2sid!4v1704287531523!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>
            </div>

        </div>
    </section>
    <!-- CONTACT -->
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

    AOS.init();

</script>