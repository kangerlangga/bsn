<div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-uppercase mb-0 font-weight-bold text-gray-800">
                            <span class="text-success">PRODUK TERSEDIA</span>
                            </div>
                            <div class="text-lg font-weight-bold text-dark mb-1"><?= $stoktersedia[0]['jmltersedia'] ?> Produk</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-square-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-uppercase mb-0 font-weight-bold text-gray-800">
                            <span class="text-danger">PRODUK KOSONG</span>
                            </div>
                            <div class="text-lg font-weight-bold text-dark mb-1"><?= $stokkosong[0]['jmlkosong'] ?> Produk</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-square-xmark fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-uppercase mb-0 font-weight-bold text-gray-800">
                            <span class="text-info">JUMLAH PRODUK</span>
                            </div>
                            <div class="text-lg font-weight-bold text-dark mb-1"><?= $jmlproduk[0]['jmlproduk'] ?> Produk</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-boxes-stacked fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

    <?php
    $tipe = session()->getFlashdata('type');
    if ( $tipe == 'success') : ?>
        Swal.fire({
        icon: '<?= $tipe; ?>',
        title: '<?= session()->getFlashdata('pesan'); ?>',
        showConfirmButton: false,
        timer: 5000
        })
    <?php endif ?>

    <?php
    $psn = session()->getFlashdata('pesan');
    if ( $psn == 'Anda Berhasil Login!') : ?>
        Swal.fire({
        icon: '<?=session()->getFlashdata('type'); ?>',
        title: '<?= session()->getFlashdata('pesan'); ?>',
        text: 'Disarankan Membuka Halaman Administrasi Dengan Komputer atau Laptop!',
        })
    <?php endif ?>
    </script>