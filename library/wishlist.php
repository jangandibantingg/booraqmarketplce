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
        <div class="container">
            <div class="cart-table table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                    <tr>
                        <th class="cart-column-image" scope="col">IMAGE</th>
                        <th class="cart-column-productname" scope="col">PRODUCT</th>
                        <th class="cart-column-price" scope="col">PRICE</th>
                        <th class="cart-column-quantity" scope="col">QUANTITY</th>
                        <th class="cart-column-addtocart" scope="col">ADD TO CART</th>
                        <th class="cart-column-remove" scope="col">REMOVE</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>
                            <a href="category.php" class="product-image">
                                <img src="assets/images/product/1.jpg" alt="product image">
                            </a>
                        </td>
                        <td>
                            <a href="category.php" class="product-title">SonicFuel
                                Wireless Headphones</a>
                        </td>
                        <td>$75.00</td>
                        <td>
                            <div class="quantity-select">
                                <input type="text" value="1">
                                <div class="inc qtybutton">+<i class="ion ion-ios-arrow-up"></i></div>
                                <div class="dec qtybutton">-<i class="ion ion-ios-arrow-down"></i></div>
                                <div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                        </td>
                        <td>
                            <a href="#" class="btn btn-secondary">
                                <span>Add To Cart</span>
                            </a>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-grey"><i class="ion ion-ios-close"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="category.php" class="product-image">
                                <img src="assets/images/product/3.jpg" alt="product image">
                            </a>
                        </td>
                        <td>
                            <a href="category.php" class="product-title">
                                Wireless Over-Ear Headphones</a>
                        </td>
                        <td>$75.00</td>
                        <td>
                            <div class="quantity-select">
                                <input type="text" value="1">
                                <div class="inc qtybutton">+<i class="ion ion-ios-arrow-up"></i></div>
                                <div class="dec qtybutton">-<i class="ion ion-ios-arrow-down"></i></div>
                                <div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                        </td>
                        <td>
                            <a href="#" class="btn btn-secondary">
                                <span>Add To Cart</span>
                            </a>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-grey"><i class="ion ion-ios-close"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="category.php" class="product-image">
                                <img src="assets/images/product/2.jpg" alt="product image">
                            </a>
                        </td>
                        <td>
                            <a href="category.php" class="product-title">Over-Ear
                                Headphones SonicFuel</a>
                        </td>
                        <td>$75.00</td>
                        <td>
                            <div class="quantity-select">
                                <input type="text" value="1">
                                <div class="inc qtybutton">+<i class="ion ion-ios-arrow-up"></i></div>
                                <div class="dec qtybutton">-<i class="ion ion-ios-arrow-down"></i></div>
                                <div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                        </td>
                        <td>
                            <a href="#" class="btn btn-secondary">
                                <span>Add To Cart</span>
                            </a>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-grey"><i class="ion ion-ios-close"></i></button>
                        </td>
                    </tr>

                    </tbody>
                </table>
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

s