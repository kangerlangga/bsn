<a href="tambahProduk" class="btn btn-success mb-3">Tambah Produk</a>
<div class="row">
    <div class="col-12 table-responsive">
        <table class="table table-bordered pt-3" id="tabel-produk">
        <colgroup>
            <col span="1" style="width: 5%;">
            <col span="1" style="width: 25%;">
            <col span="1" style="width: 20%;">
            <col span="1" style="width: 20%;">
            <col span="1" style="width: 15%;">
            <col span="1" style="width: 15%;">
        </colgroup>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Jenis Produk</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomer = 1; 
                foreach ($Produk as $key => $value) { ?>
                    <tr>
                        <td><?= $nomer++ ?></td>
                        <td><center><img src="<?= esc(base_url('img/Produk/'.$value['gambar_produk']))?>" width="95%"></center></td>
                        <td><?= esc($value['nama_produk']) ?></td>
                        <td><?= esc($value['jenis_produk']) ?></td>
                        <td><?= esc($value['status_produk']) ?></td>
                        <td>
                            <a href="<?= base_url('editProduk/'.$value['id_produk'])?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="<?= base_url('hapusProduk/'.$value['id_produk'])?>" class="btn btn-danger tbl-hapus"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    let table = new DataTable('#tabel-produk');

    $(document).on('click','.tbl-hapus',function(e) {

        //Hentikan aksi default
        e.preventDefault();
        const href1 = $(this).attr('href');

        Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Data Ini Akan Dihapus Secara Permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#fd7e14',
        confirmButtonText: 'HAPUS DATA',
        cancelButtonText: 'BATAL'
        }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href1;
        }
        })
    })

    <?php
    $tipe = session()->getFlashdata('type');
    if ( $tipe == 'success') : ?>
        Swal.fire({
        icon: '<?= $tipe; ?>',
        title: '<?= session()->getFlashdata('pesan'); ?>',
        showConfirmButton: false,
        timer: 3000
        })
    <?php endif ?>
</script>