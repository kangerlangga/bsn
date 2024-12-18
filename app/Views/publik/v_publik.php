<!DOCTYPE html>
<html lang="id">
<head>

    <!-- PRECONNECT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://unpkg.com">
    <link rel="preconnect" href="https://unpkg.com">
    <link rel="dns-prefetch" href="https://www.w3.org">
    <link rel="preconnect" href="https://www.w3.org">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <!-- SIMPLE META -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <meta name="google" content="notranslate">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index,follow">
    <meta name="author" content="CV Bumi Sejahtera Nusantara">
    <meta name="language" content="id">
    <meta name="geo.country" content="id">
    <meta name="geo.placename" content="Indonesia">

    <!-- WEBSITE META -->
    <title><?= $judul ?> | CV Bumi Sejahtera Nusantara</title>
    <meta name="description" content="CV. Bumi Sejahtera Nusantara merupakan sebuah perusahaan yang bergerak di bidang General Trading, Contractor dan Supplier.">
    <link rel="icon" type="image/png" href="<?= base_url() ?>/img/logo.png">

    <!-- CSS -->
    <link async rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
    <link async rel="stylesheet" href="<?= base_url() ?>/css/bootstrap.css">
    <link async rel="stylesheet" href="<?= base_url() ?>/css/public.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.css">

    <!-- Simple Light Box -->
    <script src="https://cdn.jsdelivr.net/npm/simplelightbox@2/dist/simple-lightbox.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/simplelightbox@2/dist/simple-lightbox.min.css" rel="stylesheet">

    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@latest/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@latest/dist/aos.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

    <style type="text/css">
        #preloader {
            width: 100%;
            height: 100%;
            min-width: 100vw;
            min-height: 100vh;
            background-color: #ffffff;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1500;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <div id="preloader"><img src="<?= base_url() ?>/img/preloader.gif" alt="preloader"></div>

    <?php if ($page) {
        echo view($page);
    } ?>
    
</body>
</html>