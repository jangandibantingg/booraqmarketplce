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


    <main class="page-content">
        <div class="about-area pt-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="about-image">
                            <img src="assets/images/banner/about-image.jpg" alt="Tentang Kami">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-content">
                            <h2>WHO’S<span>BOORAQ</span></h2>
                            <h5>FASHION DESIGN</h5>
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta
                                decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in
                                futurum.</p>
                            <h5>LONDON ADDRESS</h5>
                            <p>34 Parer Place via Musk Avenue Kelvin Grove, QLD, 4059</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

