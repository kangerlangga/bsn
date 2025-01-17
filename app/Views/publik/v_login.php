<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judul ?> | CV Bumi Sejahtera Nusantara</title>
    <meta name="description" content="CV. Bumi Sejahtera Nusantara merupakan sebuah perusahaan yang bergerak di bidang General Trading, Contractor dan Supplier.">
    <link rel="icon" type="image/png" href="<?= base_url() ?>/img/logo.png">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- Source Sweet Alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

</head>
<body>
    <main class="container my-5">
    <div class="row">
        <section class="col-md-6 my-5 offset-md-3">

        <div class="card shadow p-5">
        <?php $errors = validation_errors()?>
        <?= form_open_multipart('verifikasi') ?>

            <h3 class="text-center mb-4 text-white" style="font-family: Roboto;">Login Admin</h3>
            <hr>

            <div class="form-group text-white">
                <label>Username</label>
                <input type="username" name="username" placeholder="Masukkan Username" class="form-control">
            </div>

            <label for="Password" class="text-white">Password</label>
            <div class="input-group mb-3">
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" aria-label="Enter Password" aria-describedby="basic-addon2">
                <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2"><i class="fa fa-eye" aria-hidden="true"></i>
                </span>
                </div>
            </div>

            <button class="btn btn-block btn-secondary rounded-pill mt-3">Login</button>

            <p class="mt-3 text-white">Belum Punya Akun ? <a href="#" class="text-white tbl-regis">Buat Akun</a></p>

            <?= form_close() ?>
        </div>
        </section>
    </div>
    </main>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        main .card {
        background-color: #3475;
        }

        body {
        background: url("<?= base_url() ?>/img/1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        }

        h3 {
        font-family: Times New Roman;
        font-weight: bold;
        }
        hr {
        border-bottom: solid white 1px;
        }

        .btn {
        background: #0D1241; 
        }

        .btn:hover {
        background: #000024; 
        }

        input {
        background-color: #3475 !important;
        color: white !important;
        }

        ::placeholder {
        color: white !important;
        }

        @media (max-width: 768px) {
            body {
                height:100vh;
            }
        }

    </style>
    <script type="text/javascript">
    <?php
    $tipe = session()->getFlashdata('pesan');
    if ((isset($errors['username']) == isset($errors['username']) ? validation_show_error('username') : '') || $tipe == 'GAGAL') : ?>
        Swal.fire({
        icon: 'error',
        title: 'Login Gagal!',
        text: 'Username atau Password Salah!',
        showConfirmButton: false,
        timer: 3000
        })
    <?php endif ?>

    $(document).ready(function () {
        $("#basic-addon2").click(function () {
            let passwordField = $("#password");
            let passwordFieldAttr = passwordField.attr("type");

            if (passwordFieldAttr == "password") {
            passwordField.attr("type", "text");
            $(this).html('<i class="fa fa-eye-slash" aria-hidden="true"></i>');
            } else {
            passwordField.attr("type", "password");
            $(this).html('<i class="fa fa-eye" aria-hidden="true"></i>');
            }
        });
    });

    $(document).on('click','.tbl-regis',function(e) {
        Swal.fire('Hubungi Administrator Untuk Membuat Akun!')
    })

</script>
</body>
</html>