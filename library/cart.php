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

    <main class="page-content">

        <!-- Spping Cart Area -->
        <div class="cart-page-area ptb-30 bg-white">
            <div class="container">

                <!-- Cart Products -->
                <div class="cart-table table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="cart-column-image" scope="col">IMAGE</th>
                            <th class="cart-column-productname" scope="col">PRODUCT</th>
                            <th class="cart-column-price" scope="col">PRICE</th>
                            <th class="cart-column-quantity" scope="col">QUANTITY</th>
                            <th class="cart-column-total" scope="col">TOTAL</th>
                            <th class="cart-column-remove" scope="col">REMOVE</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>
                                <a href="detail.php" class="product-image">
                                    <img src="assets/images/product/1.jpg" alt="product image">
                                </a>
                            </td>
                            <td>
                                <a href=detail.html" class="product-title">SonicFuel
                                    Wireless Headphones</a>
                            </td>
                            <td>$75.00</td>
                            <td>
                                <div class="quantity-select">
                                    <input type="text" value="1">
                                    <div class="inc qtybutton">+<i class="ion ion-ios-arrow-up"></i></div>
                                    <div class="dec qtybutton">-<i class="ion ion-ios-arrow-down"></i></div>
                                    <div class="dec qtybutton">-</div>
                                    <div class="inc qtybutton">+</div>
                                </div>
                            </td>
                            <td>
                                <span class="total-price">$75.00</span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-grey"><i class="ion ion-ios-close"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="detail.php" class="product-image">
                                    <img src="assets/images/product/2.jpg" alt="product image">
                                </a>
                            </td>
                            <td>
                                <a href="detail.php" class="product-title">
                                    Wireless Over-Ear Headphones</a>
                            </td>
                            <td>$75.00</td>
                            <td>
                                <div class="quantity-select">
                                    <input type="text" value="1">
                                    <div class="inc qtybutton">+<i class="ion ion-ios-arrow-up"></i></div>
                                    <div class="dec qtybutton">-<i class="ion ion-ios-arrow-down"></i></div>
                                    <div class="dec qtybutton">-</div>
                                    <div class="inc qtybutton">+</div>
                                </div>
                            </td>
                            <td>
                                <span class="total-price">$75.00</span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-grey"><i class="ion ion-ios-close"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="detail.php" class="product-image">
                                    <img src="assets/images/product/1.jpg" alt="product image">
                                </a>
                            </td>
                            <td>
                                <a href="detail.php" class="product-title">Over-Ear
                                    Headphones SonicFuel</a>
                            </td>
                            <td>$75.00</td>
                            <td>
                                <div class="quantity-select">
                                    <input type="text" value="1">
                                    <div class="inc qtybutton">+<i class="ion ion-ios-arrow-up"></i></div>
                                    <div class="dec qtybutton">-<i class="ion ion-ios-arrow-down"></i></div>
                                    <div class="dec qtybutton">-</div>
                                    <div class="inc qtybutton">+</div>
                                </div>
                            </td>
                            <td>
                                <span class="total-price">$75.00</span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-grey"><i class="ion ion-ios-close"></i></button>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <!--// Cart Products -->

                <!-- Cart Content -->
                <div class="cart-content">
                    <div class="row justify-content-between">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="cart-content-left">
                                <div class="ho-buttongroup">
                                    <a href="#" class="btn btn-outline-primary">
                                        <span>Update Keranjang</span>
                                    </a>
                                    <a href="category.php" class="btn btn-primary">
                                        <span>Continue Spping</span>
                                    </a>
                                </div>
                                <div class="cart-content-coupon">
                                    <h6>COUPON</h6>
                                    <p>Enter your coupon code if you have one.</p>
                                    <form action="#" class="coupon-form">
                                        <input type="text" placeholder="Masukan Kode">
                                        <button class="btn btn-outline-secondary">
                                            <span>Gunakan</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="cart-content-right">
                                <h4>SUBTOTAL</h4>
                                <h6>Rp. 1.000.000</h6>
                                <a href="#" class="btn btn-secondary">
                                    <span>Checkout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Cart Content -->

            </div>
        </div>
        <!--// Spping Cart Area -->

        <!-- Related Product Area -->
        <div class="section related-product-area pb-30">
            <div class="container">
                <div class="section-title">
                    <h3>RELATED PRODUCTS</h3>
                </div>
                <div class="product-slider new-best-featured-slider slider-navigation-2">
                    <div class="slider-item-col">

                        <article class="product">
                            <div class="product-image">
                                <a class="product-thumb" href="detail.php">
                                    <img class="product-frontimage" src="assets/images/product/1.jpg"
                                         alt="product image">
                                    <img class="product-backimage" src="images/product/product-image-22.jpg"
                                         alt="product image">
                                </a>
                                <ul class="product-actionbox">
                                    <li><a href="#"><i class="icon-cart"></i></a></li>
                                    <li><a href="#"><i class="icon-like"></i></a></li>
                                </ul>
                                <ul class="product-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h5 class="product-title"><a href="product-details.html"></a></h5>
                                <div class="product-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="product-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>
                    <div class="slider-item-col">

                        <article class="product">
                            <div class="product-image">
                                <a class="product-thumb" href="detail.php">
                                    <img class="product-frontimage" src="assets/images/product/3.jpg"
                                         alt="product image">
                                    <img class="product-backimage" src="images/product/product-image-22.jpg"
                                         alt="product image">
                                </a>
                                <ul class="product-actionbox">
                                    <li><a href="#"><i class="icon-cart"></i></a></li>
                                    <li><a href="#"><i class="icon-like"></i></a></li>
                                </ul>
                                <ul class="product-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h5 class="product-title"><a href="product-details.html"></a></h5>
                                <div class="product-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="product-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>
                    <div class="slider-item-col">

                        <article class="product">
                            <div class="product-image">
                                <a class="product-thumb" href="detail.php">
                                    <img class="product-frontimage" src="assets/images/product/2.jpg"
                                         alt="product image">
                                    <img class="product-backimage" src="images/product/product-image-22.jpg"
                                         alt="product image">
                                </a>
                                <ul class="product-actionbox">
                                    <li><a href="#"><i class="icon-cart"></i></a></li>
                                    <li><a href="#"><i class="icon-like"></i></a></li>
                                </ul>
                                <ul class="product-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h5 class="product-title"><a href="product-details.html"></a></h5>
                                <div class="product-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="product-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>
                    <div class="slider-item-col">

                        <article class="product">
                            <div class="product-image">
                                <a class="product-thumb" href="detail.php">
                                    <img class="product-frontimage" src="assets/images/product/4.jpg"
                                         alt="product image">
                                    <img class="product-backimage" src="images/product/product-image-22.jpg"
                                         alt="product image">
                                </a>
                                <ul class="product-actionbox">
                                    <li><a href="#"><i class="icon-cart"></i></a></li>
                                    <li><a href="#"><i class="icon-like"></i></a></li>
                                </ul>
                                <ul class="product-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h5 class="product-title"><a href="product-details.html"></a></h5>
                                <div class="product-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="product-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>
                    <div class="slider-item-col">

                        <article class="product">
                            <div class="product-image">
                                <a class="product-thumb" href="detail.php">
                                    <img class="product-frontimage" src="assets/images/product/5.jpg"
                                         alt="product image">
                                    <img class="product-backimage" src="images/product/product-image-22.jpg"
                                         alt="product image">
                                </a>
                                <ul class="product-actionbox">
                                    <li><a href="#"><i class="icon-cart"></i></a></li>
                                    <li><a href="#"><i class="icon-like"></i></a></li>
                                </ul>
                                <ul class="product-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h5 class="product-title"><a href="product-details.html"></a></h5>
                                <div class="product-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="product-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>
                    <div class="slider-item-col">

                        <article class="product">
                            <div class="product-image">
                                <a class="product-thumb" href="detail.php">
                                    <img class="product-frontimage" src="assets/images/product/6.jpg"
                                         alt="product image">
                                    <img class="product-backimage" src="images/product/product-image-22.jpg"
                                         alt="product image">
                                </a>
                                <ul class="product-actionbox">
                                    <li><a href="#"><i class="icon-cart"></i></a></li>
                                    <li><a href="#"><i class="icon-like"></i></a></li>
                                </ul>
                                <ul class="product-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h5 class="product-title"><a href="product-details.html"></a></h5>
                                <div class="product-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="product-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>
                </div>


            </div>
        </div>
        <!--// Related Product Area -->


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

