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
<?= form_open_multipart('updateProfile/'.$profil['id_akun']) ?>
<div class="row">

<div class="col-sm-6">
        <div class="form-group">
            <label for="Nama">Nama Lengkap</label>
            <input class="form-control" name="nama" id="Nama" value="<?= esc($profil['nama_lengkap'])?>">
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="Alamat">Alamat Pengguna <b>(Contoh :  Jl. Jawa No.2 Sidoarjo. 62162)</b></label>
            <input class="form-control" name="alamat" id="Alamat" value="<?= esc($profil['alamat'])?>">
            <p class="text-danger"><?= isset($errors['alamat']) == isset($errors['alamat']) ? validation_show_error('alamat') : '' ?></p>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="Jabatan">Jabatan</label>
            <input class="form-control" name="jabatan" id="Jabatan" value="<?= esc($profil['jabatan'])?>">
            <p class="text-danger"><?= isset($errors['jabatan']) == isset($errors['jabatan']) ? validation_show_error('jabatan') : '' ?></p>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="Email-Pengguna">Email</label>
            <input class="form-control" name="email-Pengguna" id="Email-Pengguna" type="email" value="<?= esc($profil['email'])?>">
            <p class="text-danger"><?= isset($errors['email-Pengguna']) == isset($errors['email-Pengguna']) ? validation_show_error('email-Pengguna') : '' ?></p>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="Telp-Pengguna">Telepon Pengguna</label>
            <input class="form-control" name="telp-Pengguna" id="Telp-Pengguna" type="tel" value="<?= esc($profil['telepon'])?>">
            <p class="text-danger"><?= isset($errors['telp-Pengguna']) == isset($errors['telp-Pengguna']) ? validation_show_error('telp-Pengguna') : '' ?></p>
        </div>
    </div>
    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="Level">Level Pengguna</label>
            <input class="form-control" name="level" id="Level" value="<?= esc($profil['level'])?>" readonly style="cursor: not-allowed">
	        </select>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="password">Masukkan Password Anda</label>
            <input class="form-control" name="password" id="password" type="password" required>
        </div>
    </div>

</div>
<br>
<button type="submit" class="btn btn-primary">SIMPAN</button>
<a href="<?= base_url('Dashboard') ?>" class="btn btn-success tbl-kembali" style="width: auto;">KEMBALI KE DASHBOARD</a>
<a href="<?= base_url('editPassword') ?>" class="btn btn-danger" style="width: auto;">GANTI PASSWORD</a>
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

    <?php
    $tipe = session()->getFlashdata('pesan');
    if ($tipe == 'GAGAL') : ?>
        Swal.fire({
        icon: 'error',
        title: 'Password Anda Salah!',
        text: 'Tidak Dapat Memperbarui Informasi Akun',
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
            confirmButtonText: 'KEMBALI KE DASHBOARD',
            cancelButtonText: 'BATAL'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href1;
            }
        })
    })

</script>