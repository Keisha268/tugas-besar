<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tugas Besar Web = Sign In</title>

    <link rel="stylesheet" href="<?= base_url('css/nucleo-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/nucleo-svg.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/argon-dashboard.css?v=2.0.4') ?>">
</head>

<body class="bg-gray-100">

    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-100 d-flex justify-content-center align-items-center">
                <div class="col-lg-4 col-md-6 col-10">

                    <div class="card">
                        <div class="card-header text-center pb-0">
                            <h4 class="font-weight-bolder">Sign In</h4>
                            <p class="mb-0">Masukkan username dan password</p>
                        </div>

                        <div class="card-body">

                            <?php if(session()->getFlashdata('error')): ?>
                                <div class="alert alert-danger text-white">
                                    <?= session()->getFlashdata('error') ?>
                                </div>
                            <?php endif ?>

                            <form action="<?= base_url('login/process') ?>" method="post">

                                <?= csrf_field() ?>

                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                                </div>

                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-primary w-100 mt-3">Login</button>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <script src="<?= base_url('js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('js/core/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('js/plugins/smooth-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('js/argon-dashboard.min.js?v=2.0.4') ?>"></script>

</body>

</html>
