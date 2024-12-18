<style>
    .form-group {
        margin-top: 17px;
    }
    .form-group input, select{
        margin-top: 3px;
    }
    .btn {
        width: 100px;
        margin-right: 5px;
    }
</style>

<?php $errors = validation_errors()?>
<?= form_open_multipart('updateProduk/'.$Produk['id_produk']) ?>
<div class="row">
<div class="col-sm-6">
        <div class="form-group">
            <label for="Nama">Nama Produk</label>
            <input class="form-control" name="namaProduk" id="Nama" value="<?= esc($Produk['nama_produk'])?>">
            <p class="text-danger"><?= isset($errors['namaProduk']) == isset($errors['namaProduk']) ? validation_show_error('namaProduk') : '' ?></p>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="Gambar">Gambar Produk (PNG, JPG, JPEG) <b>Maksimal 3 MB</b></label>
            <input class="form-control" name="gambar" id="Gambar" type="file" accept=".png, .jpg, .jpeg">
            <p class="text-danger"><?= isset($errors['gambar']) == isset($errors['gambar']) ? validation_show_error('gambar') : '' ?></p>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="Jenis">Jenis Produk</label>
            <input class="form-control" name="jenisProduk" id="Jenis" value="<?= esc($Produk['jenis_produk'])?>">
            <p class="text-danger"><?= isset($errors['jenisProduk']) == isset($errors['jenisProduk']) ? validation_show_error('jenisProduk') : '' ?></p>
        </div>
    </div>
    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="Status">Status Produk</label>
            <br>
            <select name='status' id='Status' class="form-control">
                <?php if ($Produk['status_produk'] == 'Tersedia') {
                    echo "
                    <option name='status' value='Tersedia' selected>Tersedia</option>
                    <option name='status' value='Kosong'>Kosong</option>";
                } elseif ($Produk['status_produk'] == 'Kosong') {
                    echo "
                    <option name='status' value='Tersedia'>Tersedia</option>
                    <option name='status' value='Kosong' selected>Kosong</option>";
                } 
                ?>
	        </select>
        </div>
    </div>

</div>
<br>
<button type="submit" class="btn btn-primary">SIMPAN</button>
<a href="<?= base_url('dataProduk') ?>" class="btn btn-success tbl-kembali">KEMBALI</a>
<?= form_close() ?>
<hr>

<script type="text/javascript">
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

    $(document).on('click','.tbl-kembali',function(e) {

    //Hentikan aksi default
    e.preventDefault();
    const href1 = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda Yakin?',
            text: "Perubahan Tidak Akan Disimpan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#198754',
            cancelButtonColor: '#fd7e14',
            confirmButtonText: 'KEMBALI',
            cancelButtonText: 'BATAL'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href1;
            }
        })
    })

</script>