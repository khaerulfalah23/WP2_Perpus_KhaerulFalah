<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Pustaka-Booking | <?= $judul; ?></title>
	<link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/'); ?>logo-pb.png">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>user/css/bootstrap.css">
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container" style="padding: 0 40px;">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="<?= base_url('home'); ?>">Home</a>
                    <a class="nav-item nav-link" href="<?= base_url('home'); ?>">Profile Saya</a>
                    <a class="nav-item nav-link" href="autentifikasi/logout">Logout</a>
                    <a class="nav-item nav-link" href="autentifikasi/logout">Selamat Datang <b><?= $user['nama']; ?></b></a>
                </div>
            </div>
        </div>
    </nav>