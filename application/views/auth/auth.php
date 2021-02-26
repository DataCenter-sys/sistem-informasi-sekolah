<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= site_url('/assets/css/adminlte.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= site_url('/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- <script src="https://kit.fontawesome.com/bbbe98a2e4.js" crossorigin="anonymous"></script> -->
    <link rel="shortcut icon" href="<?= site_url('/assets/img/favicon.ico') ?>" type="image/x-icon">
    <title>Login</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR&family=Varela+Round&display=swap');

        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Varela Round', sans-serif;
        }
    </style>
</head>

<body>

    <!-- Navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="<?= site_url('/assets/img/logo.png') ?>" width="150">
                </a>
            </div>
        </nav>
    </header>

    <!-- Content -->
    <div class="container ">

        <div class="row py-6 mt-2 align-items-center">
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img class="img-fluid mb-3 d-none d-md-block" src="<?= site_url('/assets/img/hero.png') ?>" alt="">
                <p class="alert alert-danger text-center">Buat yang sudah mendaftar namun belum aktif silahkan datang ke data center</p>
            </div>

            <div class="col-md-6 col-lg-6 ml-auto">
                <h3 class="text-primary mb-4">Please Login</h3>
                <?= $this->session->flashdata('massage'); ?>
                <form action="<?= site_url('auth/login') ?>" method="post">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fas fa-user text-muted"></i>
                            </span>
                        </div>
                        <input class="form-control border-left-0 border-md" type="text" name="username" id="Username" placeholder="Username" required>
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fas fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input class="form-control border-left-0 border-md" type="password" name="password" id="Password" placeholder="Password" required>
                    </div>
                    <button class="btn btn-md btn-outline-primary" type="submit">Login Now</button>
                </form>
                <div class="mt-4">
                    <p>Belum ada akun ?
                        <a href="<?= site_url('register') ?>">Register</a>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <script src="<?= site_url('/plugins/jquery/jquery.js') ?>"></script>
    <script src="<?= site_url('/plugins/bootstrap/js/bootstrap.js'); ?>"></script>
</body>

</html>