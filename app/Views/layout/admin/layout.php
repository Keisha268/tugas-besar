<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('img/apple-icon.png') ?>">
    <link rel="icon" type="image/png" href="<?= base_url('img/favicon.png') ?>">

    <title>Tugas Besar Web</title>

    <!-- Bootstrap CSS from CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">


    <!-- CSS Argon Dashboard -->
    <link rel="stylesheet" href="<?= base_url('css/nucleo-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/nucleo-svg.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/argon-dashboard.css?v=2.0.4') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">


    <!-- Font Awesome -->
    <!-- Font Awesome from CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="g-sidenav-show g-sidenav-pinned">

    <!-- SIDEBAR -->
    <?= $this->include('layout/admin/navbar') ?>

    <!-- MAIN CONTENT -->
    <main class="main-content position-relative border-radius-lg bg-primary" style="margin-left:260px; padding:20px;  min-height: 100vh;">
        <?= $this->renderSection('content') ?>
    </main>


    <!-- CORE JS FILES -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/perfect-scrollbar@1.5.5/dist/perfect-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/smooth-scrollbar@8.7.4/dist/smooth-scrollbar.js"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), { damping: '0.5' });
        }
    </script>

    <script src="<?= base_url('js/argon-dashboard.min.js?v=2.0.4') ?>"></script>

</body>

</html>
