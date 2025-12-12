<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('img/apple-icon.png') ?>">
    <link rel="icon" type="image/png" href="<?= base_url('img/favicon.png') ?>">

    <title>Tugas Besar Web</title>

    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">


    <!-- CSS Argon Dashboard -->
    <link rel="stylesheet" href="<?= base_url('css/nucleo-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/nucleo-svg.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/argon-dashboard.css?v=2.0.4') ?>">


    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</head>

<body class="g-sidenav-show g-sidenav-pinned">

    <!-- SIDEBAR -->
    <?= $this->include('layout/admin/navbar') ?>

    <!-- MAIN CONTENT -->
    <main class="main-content position-relative border-radius-lg" style="margin-left:260px; padding:20px;">
        <?= $this->renderSection('content') ?>
    </main>


    <!-- CORE JS FILES -->
    <script src="<?= base_url('js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('js/core/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('js/plugins/smooth-scrollbar.min.js') ?>"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), { damping: '0.5' });
        }
    </script>

    <script src="<?= base_url('js/argon-dashboard.min.js?v=2.0.4') ?>"></script>

</body>

</html>
