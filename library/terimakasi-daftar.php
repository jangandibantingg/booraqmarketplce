<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/core.vendors.css">
    <link rel="stylesheet" href="assets/css/icons.css">
    <link rel="stylesheet" href="assets/css/app.css">

</head>
<body>
<div class="wrapper">
    <div class="overlay"></div>

    <?php
    include_once "partials/header.php";
    include_once "partials/breadcrumb.php";
    ?>

    <main class="page-content ptb-30">

        <!-- Contact Us Area -->

        <div class="container text-center">

            <img src="assets/images/vector/email.png" alt="" >

            <div class="mt-30">
                <h3>TERIMA KASIH</h3>
                <H6> Telah medaftar sebagai seller / cutomer di BOORAQ.id</H6>
                <hr>
                <p>Alat email akun booraq anda harus diferifikasi. silahkan buka email anda lalu ikuti instruksi verifikasi pendaftaran</p>

                <button class="btn btn-outline-secondary"><i class="mdi icon-arrow-back"></i>Home</button>
                <button class="btn btn-outline-secondary"><i class="mdi mdi-email"></i>Kirim Ulang</button>
            </div>

        </div>


    </main>


    <?php
    include_once "partials/footer.php";
    ?>

</div>

<?php
include "partials/modal_login.php";
include "partials/modal_ganti_password.php";
?>

<script src="assets/vendors/jquery/jquery.min.js"></script>
<script src="assets/vendors/popper.js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.min.js"></script>

<script src="assets/js/core.vendors.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>

