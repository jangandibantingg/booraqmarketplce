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
        <div class="shop-page-area bg-white ptb-30">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 ">
                        <div class="widgets">

                            <div class="single-widget widget-categories">
                                <h5 class="widget-title">All Categories</h5>
                                <ul>
                                    <li><a href="detail.php">Cameras <span>20</span></a></li>
                                    <li><a href="detail.php">Audios <span>15</span></a></li>
                                    <li><a href="detail.php">Smartphones <span>12</span></a></li>
                                    <li><a href="detail.php">Tablets <span>45</span></a></li>
                                    <li><a href="detail.php">Laptops <span>21</span></a></li>
                                    <li><a href="detail.php">Accessories <span>78</span></a></li>
                                </ul>
                            </div>

                            <div class="widgetbox mt-30">
                                <div class="single-widget widget-filters">
                                    <h5 class="widget-title">Filter By Price</h5>
                                    <div class="widget-filter-inner">
                                        <div class="range-slider" data-range_min="0" data-range_max="1000"
                                             data-cur_min="300" data-cur_max="800">
                                            <div class="bar"></div>
                                            <span class="range-slider-leftgrip"></span>
                                            <span class="range-slider-rightgrip"></span>
                                        </div>
                                        <div class="single-widget-range-price">
                                            <b>Price: </b> $<span class="range-slider-leftlabel"></span> - $<span
                                                    class="range-slider-rightlabel"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-widget widget-color">
                                    <h5 class="widget-title">Select By Color</h5>
                                    <ul>

                                        <li>
                                            <input type="checkbox" name="checkbox1" id="checkbox1">
                                            <label for="checkbox1">Purple</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="shop-widget-color-purple"
                                                   id="shop-widget-color-purple">
                                            <label for="shop-widget-color-purple">Purple</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="shop-widget-color" id="shop-widget-color">
                                            <label for="shop-widget-color">Silver</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="shop-widget-color-black"
                                                   id="shop-widget-color-black">
                                            <label for="shop-widget-color-black">Black</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="shop-widget-color-lime"
                                                   id="shop-widget-color-lime">
                                            <label for="shop-widget-color-lime">Lime</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="shop-widget-color-violet"
                                                   id="shop-widget-color-violet">
                                            <label for="shop-widget-color-violet">Violet</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single-widget widget-manufacturer">
                                    <h5 class="widget-title">Brans</h5>
                                    <ul>
                                        <li>
                                            <input type="checkbox" name="checkboxbrand1" id="checkboxbrand1">
                                            <label for="checkboxbrand1">Dell</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="checkboxbrand2" id="checkboxbrand2" checked>
                                            <label for="checkboxbrand2">Dell</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="shop-widget-manufacturer-apple"
                                                   id="shop-widget-manufacturer-apple">
                                            <label for="shop-widget-manufacturer-apple">Apple</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="shop-widget-manufacturer-hp"
                                                   id="shop-widget-manufacturer-hp">
                                            <label for="shop-widget-manufacturer-hp">Hp</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="shop-widget-manufacturer-sony"
                                                   id="shop-widget-manufacturer-sony">
                                            <label for="shop-widget-manufacturer-sony">Sony</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recommended Product -->
                            <div class="single-widget widget-recommended-products mt-30">
                                <div class="section-title">
                                    <h3>RECOMMENDED</h3>
                                </div>
                                <div class="recommended-products-slider-2 slider-navigation-2 slider-navigation-2-m0">
                                    <div class="slider-item-col">
                                        <article class="product product-4">
                                            <div class="product-image">
                                                <a class="product-thumb" href="detail.php">
                                                    <img class="product-frontimage" src="assets/images/product/1.jpg"
                                                         alt="product image">
                                                    <img class="product-backimage" src="assets/images/product/1.jpg"
                                                         alt="product image">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-title"><a href="detail.php">SonicFuel
                                                        Wireless Over-Ear Headphones</a></h5>
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
                                        <article class="product product-4">
                                            <div class="product-image">
                                                <a class="product-thumb" href="detail.php">
                                                    <img class="product-frontimage" src="assets/images/product/3.jpg"
                                                         alt="product image">
                                                    <img class="product-backimage" src="assets/images/product/3.jpg"
                                                         alt="product image">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-title"><a href="detail.php">SonicFuel
                                                        Wireless Over-Ear Headphones</a></h5>
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
                                        <article class="product product-4">
                                            <div class="product-image">
                                                <a class="product-thumb" href="detail.php">
                                                    <img class="product-frontimage" src="assets/images/product/2.jpg"
                                                         alt="product image">
                                                    <img class="product-backimage" src="assets/images/product/2.jpg"
                                                         alt="product image">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-title"><a href="detail.php">SonicFuel
                                                        Wireless Over-Ear Headphones</a></h5>
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
                                        <article class="product product-4">
                                            <div class="product-image">
                                                <a class="product-thumb" href="detail.php">
                                                    <img class="product-frontimage" src="assets/images/product/4.jpg"
                                                         alt="product image">
                                                    <img class="product-backimage" src="assets/images/product/4.jpg"
                                                         alt="product image">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-title"><a href="detail.php">SonicFuel
                                                        Wireless Over-Ear Headphones</a></h5>
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
                                        <article class="product product-4">
                                            <div class="product-image">
                                                <a class="product-thumb" href="detail.php">
                                                    <img class="product-frontimage" src="assets/images/product/5.jpg"
                                                         alt="product image">
                                                    <img class="product-backimage" src="assets/images/product/5.jpg"
                                                         alt="product image">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-title"><a href="detail.php">SonicFuel
                                                        Wireless Over-Ear Headphones</a></h5>
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
                                        <article class="product product-4">
                                            <div class="product-image">
                                                <a class="product-thumb" href="detail.php">
                                                    <img class="product-frontimage" src="assets/images/product/6.jpg"
                                                         alt="product image">
                                                    <img class="product-backimage" src="assets/images/product/6.jpg"
                                                         alt="product image">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-title"><a href="detail.php">SonicFuel
                                                        Wireless Over-Ear Headphones</a></h5>
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

                                    </div>

                                    <div class="slider-item-col">
                                        <!-- Single Product -->
                                        <article class="product product-4">
                                            <div class="product-image">
                                                <a class="product-thumb" href="detail.php">
                                                    <img class="product-frontimage"
                                                         src="images/product/product-image-15.jpg"
                                                         alt="product image">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-title"><a href="detail.php">SonicFuel
                                                        Wireless Over-Ear Headphones</a></h5>
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

                                        <!-- Single Product -->
                                        <article class="product product-4">
                                            <div class="product-image">
                                                <a class="product-thumb" href="detail.php">
                                                    <img class="product-frontimage"
                                                         src="images/product/product-image-12.jpg"
                                                         alt="product image">
                                                    <img class="product-backimage"
                                                         src="images/product/product-image-13.jpg"
                                                         alt="product image">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-title"><a href="detail.php">SonicFuel
                                                        Wireless Over-Ear Headphones</a></h5>
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

                                        <!-- Single Product -->
                                        <article class="product product-4">
                                            <div class="product-image">
                                                <a class="product-thumb" href="detail.php">
                                                    <img class="product-frontimage"
                                                         src="images/product/product-image-10.jpg"
                                                         alt="product image">
                                                    <img class="product-backimage"
                                                         src="images/product/product-image-11.jpg"
                                                         alt="product image">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-title"><a href="detail.php">SonicFuel
                                                        Wireless Over-Ear Headphones</a></h5>
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
                                        <!-- Single Product -->
                                        <article class="product product-4">
                                            <div class="product-image">
                                                <a class="product-thumb" href="detail.php">
                                                    <img class="product-frontimage"
                                                         src="images/product/product-image-7.jpg"
                                                         alt="product image">
                                                    <img class="product-backimage"
                                                         src="images/product/product-image-8.jpg"
                                                         alt="product image">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-title"><a href="detail.php">SonicFuel
                                                        Wireless Over-Ear Headphones</a></h5>
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

                                        <!-- Single Product -->
                                        <article class="product product-4">
                                            <div class="product-image">
                                                <a class="product-thumb" href="detail.php">
                                                    <img class="product-frontimage"
                                                         src="images/product/product-image-4.jpg"
                                                         alt="product image">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-title"><a href="detail.php">SonicFuel
                                                        Wireless Over-Ear Headphones</a></h5>
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

                                        <!-- Single Product -->
                                        <article class="product product-4">
                                            <div class="product-image">
                                                <a class="product-thumb" href="detail.php">
                                                    <img class="product-frontimage"
                                                         src="images/product/product-image-5.jpg"
                                                         alt="product image">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-title"><a href="detail.php">SonicFuel
                                                        Wireless Over-Ear Headphones</a></h5>
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
                            <!--// Recommended Product -->

                            <div class="imgbanner mt-30">
                                <a href="detail.php">
                                    <img src="images/banner/banner-image-9.jpg" alt="banner">
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-9 ">

                        <div class="banner-area">
                            <div class="imgbanner imgbanner-2">
                                <a href="product-details.html">
                                    <img src="assets/images/banner/banner-image-20.jpg" alt="banner">
                                </a>
                            </div>
                        </div>

                        <div class="shop-filters mt-30">
                            <div class="shop-filters-viewmode">
                                <button class="is-active" data-view="grid"><i class="ion ion-ios-keypad"></i></button>
                                <button data-view="list"><i class="ion ion-ios-list"></i></button>
                            </div>
                            <span class="shop-filters-viewitemcount">There Are 12 Products</span>
                            <div class="shop-filters-sortby">
                                <b>Sort By:</b>
                                <div class="select-sortby">
                                    <button class="select-sortby-current">Relevance</button>
                                    <ul class="select-sortby-list dropdown-list">
                                        <li><a href="#">Relevance</a></li>
                                        <li><a href="#">Name, A-Z</a></li>
                                        <li><a href="#">Name, Z-A</a></li>
                                        <li><a href="#">Price, Hight-Low</a></li>
                                        <li><a href="#">Price, Low-High</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="shop-page-products">
                            <div class="row no-gutters">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/1.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/1.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/3.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/3.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/2.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/2.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/4.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/4.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/5.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/5.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/6.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/6.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/1.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/1.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/3.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/3.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/2.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/2.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/4.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/4.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/5.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/5.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/6.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/6.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/1.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/1.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/3.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/3.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/2.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/2.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/4.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/4.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/5.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/5.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                    <!-- Single Product -->
                                    <article class="product">
                                        <div class="product-image">
                                            <a class="product-thumb" href="detail.php">
                                                <img class="product-frontimage" src="assets/images/product/6.jpg"
                                                     alt="product image">
                                                <img class="product-backimage" src="assets/images/product/6.jpg"
                                                     alt="product image">
                                            </a>
                                            <ul class="product-actionbox">
                                                <li><a href="#"><i class="icon-cart"></i></a></li>

                                                <li><a href="#"><i class="icon-like"></i></a></li>
                                            </ul>
                                            <ul class="product-flags">

                                                <li class="flag-discount">-15%</li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-title"><a href="detail.php">SonicFuel
                                                    Wireless Over-Ear Headphones</a></h5>
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

                                                    <span class="price">Rp.500.000</span>
                                                </div>
                                            </div>
                                            <p class="product-content-description">Canon's first 4K UHD
                                                Camcorder, the GX10 has a compact and portable design that delivers
                                                outstanding video quality with remarkable detail. With a
                                                combination of incredible features and functionality, the GX10.</p>
                                        </div>
                                    </article>
                                    <!--// Single Product -->
                                </div>


                            </div>
                        </div>

                        <div class="cr-pagination pt-30">
                            <p>Showing 1-12 of 13 item(s)</p>
                            <ul>
                                <li><a href="detail.php"><i class="ion ion-ios-arrow-back"></i>
                                        Previous</a></li>
                                <li class="active"><a href="detail.php">1</a></li>
                                <li><a href="detail.php">2</a></li>
                                <li><a href="detail.php">Next <i class="ion ion-ios-arrow-forward"></i></a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--// Sp Page Area -->
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

