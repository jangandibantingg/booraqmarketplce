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

            <img src="assets/images/vector/cart.png" alt="" >

            <div class="mt-30">
                <h2>TERIMA KASIH</h2>
                <H6> Sudah Berbelanja di  BOORAQ.id</H6>
                <hr>
                <p>Kami selalu berusaha agar pesanan anda sampai secepanya, karena pesanan anda mungkin datang secara terpisah
                    <br> dalam waktu yang berbeda</p>

                <a class="btn btn-outline-secondary"><i class="mdi icon-arrow-back"></i>Kembali Ke Home</a>

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
