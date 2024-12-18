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
                <a href="<?= base_url() ?>" title="Beranda" class="text-decoration-none link-dark hover-utama fw-bold">Beranda</a>
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
    <!-- COMPANY PROFILE -->
    <section class="compro pb-5 px-4 px-lg-5 py-2 shadow-sm bg-white mt-5">

        <div class="d-flex justify-content-center mb-4 mt-5">
            <div>
                <h2 data-aos="fade-up" data-aos-duration="3000" class="fw-bold mb-3">Detail Produk</h2>
                <div class="underbar"></div>
            </div>
        </div>

        <div class="d-flex">
            <div class="text-center mx-auto d-block">
                <img data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500" src="<?= esc(base_url('img/Produk/'.$Produk['gambar_produk']))?>" class="rounded img-thumbnail shadow" width="500">
            </div>
        </div>

        <div class="d-flex">
            <div class="row mt-5 mb-3">
            <table class="table table-borderless">
                <col span="1" style="width: 35%;">
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 60%;">
                    <tbody>
                        <tr>
                            <td>Nama Produk</td>
                            <td>:</td>
                            <td><b><?= esc($Produk['nama_produk']);?></b></td>
                        </tr>
                        <tr>
                            <td>ID Produk</td>
                            <td>:</td>
                            <td><b><?= esc($Produk['id_produk']);?></b></td>
                        </tr>
                        <tr>
                            <td>Status Produk</td>
                            <td>:</td>
                            <td><b><?= esc($Produk['status_produk']);?></b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- COMPANY PROFILE -->
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