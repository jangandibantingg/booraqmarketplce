<!-- Topbar -->
     <div id="topbar" class="topbar-transparent topbar-fullwidth dark d-none d-xl-block d-lg-block">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <ul class="top-menu">
                         <li><a href="#">Jual Beli Online Aman dan Nyaman</a></li>

                     </ul>
                 </div>
                 <div class="col-md-6 d-none d-sm-block">
                     <div class="social-icons social-icons-colored-hover">
                         <ul>


                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- end: Topbar -->


<header id="header" class="header-transparent dark">
    <div id="header-wrap">
        <div class="container"> <!--Logo-->
            <div id="logo">
                <a href="#" class="logo" data-dark-logo="library/images/logo-dark.png"> <img src="library/images/logo.png" alt="Polo Logo"> </a>
            </div>
            <!--End: Logo-->

             <!--Top Search Form-->
            <div id="top-search">
                <form action="search-results-page.html" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="cari produk di booraq &quot;Enter&quot;">
                </form>
            </div>
            <!--end: Top Search Form-->

            <!--Header Extras-->
            <div class="header-extras">
                <ul>
                    <li>
                        <!--top search-->
                        <a id="top-search-trigger" href="#" class="toggle-item">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-times"></i>
                        </a>
                        <!--end: top search-->
                    </li>
                    <li class="d-none d-sm-block">
                        <!--shopping cart-->
                        <div id="shopping-cart">
                            <a href="keranjang.aspx">
                                <!-- <span class="shopping-cart-items">8</span> -->

                                <i class="fa fa-shopping-cart"></i></a>
                        </div>
                        <!--end: shopping cart-->
                    </li></ul>
            </div>
            <!--end: Header Extras-->
                                <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger">
                <button class="lines-button x"> <span class="lines"></span> </button>
            </div>
            <!--end: Navigation Resposnive Trigger-->

<!--Navigation-->
            <?php include 'view/menu.php'; ?>
            <!--END: NAVIGATION-->
        </div>
    </div>
</header>
