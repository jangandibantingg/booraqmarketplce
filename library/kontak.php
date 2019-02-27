<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <!--// Breadcrumb Area -->
    <main class="page-content">

        <!-- Contact Us Area -->
        <div class="contact-us-area ptb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="commentbox">
                            <h5>HUBUNGI KAMI</h5>
                            <form id="" action="" method="" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" placeholder="Masukan Nama" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" placeholder="Email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" placeholder="Email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <textarea rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-secondary" class="form-control"> Hubungi</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                    <div class="col-lg-5 pt-50 pt-lg-0">
                        <h2>CONTACT WITH US</h2>
                        <div class="contact-content">
                            <div class="single-content">
                                      <span class="single-content-icon">
                                          <i class="icon-location"></i>
                                      </span>
                                Jl. Mangga Dua No.76, Sukapura Dayoutkolot Bandung
                            </div>
                            <div class="single-content">
                                      <span class="single-content-icon">
                                          <i class="icon-phone"></i>
                                      </span>
                                <b>Call us:</b><br>
                                <a href="#">+880.2345.6789</a>
                            </div>
                            <div class="single-content">
                                      <span class="single-content-icon">
                                          <i class="icon-pricing"></i>
                                      </span>
                                <b>Fax: </b><br>
                                +(1234) 408 1234
                            </div>
                            <div class="single-content">
                                      <span class="single-content-icon">
                                          <i class="icon-mail"></i>
                                      </span>
                                <b>Email us:</b><br>
                                <a href="#">info@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Contact Us Area -->

        <!-- Google Map -->
        <div class="google-map-wrapper">
            <div class="google-map" id="google-map"></div>
        </div>
        <!--// Google Map -->


    </main>

    <?php
    include_once "partials/footer.php";
    ?>

</div>

<?php
include "partials/modal_login.php";
?>

<script src="assets/vendors/jquery/jquery.min.js"></script>
<script src="assets/vendors/popper.js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.min.js"></script>

<script src="assets/js/core.vendors.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>

