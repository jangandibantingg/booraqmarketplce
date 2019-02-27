
<section id="header" class="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Welcome to Booraq, the best muslim ecommerce</p>
                </div><!-- /.col-md-4 -->

                <div class="col-md-8">
                    <ul class="flat-unstyled">
                        <li class="account">
                            <a href="#" title="">Traking Order</a>
                        </li>
                        <li>
                            <a href="#" title="">Helped</a>
                        </li>
                        <li>
                            <a href="#" title="">FAQ</a>

                        </li>
                    </ul><!-- /.flat-unstyled -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="logo" class="logo">
                        <a href="index.php" title="" class="logo-text">
                            <img src="library/assets/images/logo/logo.png" alt="">
                        </a>
                    </div><!-- /#logo -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-6">
                    <div class="top-search">
                        <form action="#" class="header-searchbox">
                          <?php $k=mysqli_query($con, "select * from kategori order by id_kategori");
                              echo '<select class="select-searchcategory">
                              <option value="">All categories</option>
                              ';
                            while ($kategori=mysqli_fetch_array($k)) {
                            echo '<option value="'.$kategori["nama_kategori"].'">'.$kategori["nama_kategori"].'</option>';
                            }
                            echo '</select>';
                            ?>

                            <input type="text" placeholder="cari barang yang anda butuhkan">
                            <button type="submit"><i class="icon-search"></i></button>
                        </form>
                    </div><!-- /.top-search -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-3">
                    <div class="header-icons-menu">
                        <div class="inner-box">
                            <a href="#" title="">
                                <div class="icon-account">
                                    <img src="library/assets/images/icons/user.png" alt="">

                                </div>
                            </a>
                            <div class="dropdown-box dropdown-account">
                                <div class="dropdown-header">
                                    Selamat Datang
                                </div>
                                <ul >
                                  <?php
                                      if (empty($_SESSION['user_session'])) {
                                        echo '
                                        <li>
                                            <a href="#" id="btnLogin">Masuk</a>
                                        </li>
                                        <li>
                                            <a href="register.aspx" title="">Daftar</a>
                                        </li>

                                        ';
                                      }else {
                                        echo '
                                        <li>
                                            <a href="profile.aspx" title="">My Account</a>
                                        </li>
                                        <li>
                                             <a href="#" title="">Chat <span >2</span></a>
                                         </li>
                                         <li>
                                             <a href="#" title="">Order </a>
                                         </li>


                                        ';



                                   ?>

                                    <?php
                                    $c=mysqli_query($con, "select * from toko where email='$_SESSION[user_session]'");
                                    $numb=mysqli_num_rows($c);
                                    if ($numb > 0) {
                                      echo " <li> <hr> <small>kelola toko</small> </li>";
                                      echo "<li><a href='./?page=profile&act=daftar-produk'> <i class='mdi mdi-store'></i> daftar produk</a></li>";
                                      echo "<li><a href='./?page=profile&act=tambah-produk'> <i class='mdi mdi-store'></i> tambah produk</a></li>";
                                      echo "<li><a href='./?page=profile&act=diskusi-produk'> <i class='mdi mdi-store'></i> diskusi produk</a></li>";
                                      echo "<li><a href='./?page=profile&act=review-produk'> <i class='mdi mdi-store'></i> review produk</a></li>";
                                    }else {
                                      echo "<li><a href='./?page=profile&act=edit-toko'> <i class='mdi mdi-store'></i> Buat Toko</a></li>";
                                    }
                                    echo '
                                         <li> <hr> </li>
                                         <li>
                                          <a href="logout.html" title="">Logout</a>
                                         </li>';
                                  }
                                     ?>


                                </ul><!-- /.unstyled -->
                            </div>


                        </div>
                        <div class="inner-box">
                            <ul class="menu-compare-wishlist">

                                <li class="wishlist">
                                    <a href="wishlist.php" title="">
                                        <img src="library/assets/images/icons/wishlist.png" alt="">
                                    </a>
                                </li>
                            </ul><!-- /.menu-compare-wishlist -->
                        </div><!-- /.inner-box -->
                        <div class="inner-box" >
                            <a href="keranjang.aspx" title="">
                                <div class="icon-mini-cart">
                                    <img src="library/assets/images/icons/cart.png" alt="">
                                    <span class="badge"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span>
                                </div>
                            </a>

                        </div><!-- /.inner-box -->
                    </div><!-- /.header-icons-menu -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-middle -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="nav-wrap">
                        <div id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li><a href="beranda.aspx" title="">BERANDA</a></li>
                                <li><a href="tentang-kami.aspx" title="">TENTANG KAMI</a></li>
                                <li><a href="market-place.aspx" title="">MARKET PLACE</a></li>
                                <li><a href="article.aspx" title="">ARTIKEL</a></li>
                                <!-- <li><a href="blog.php" title="">HASANA ISLAM</a></li> -->
                                <li><a href="ifo-sholat.aspx" title="">INFO SHOLAT</a></li>
                            </ul><!-- /.menu -->
                        </div><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->
                    <div class="join-partner">
                        <a href="jadi-mitra.aspx" title="">JADI MITRA</a>
                    </div><!-- /.today-deal -->
                    <div class="btn-menu">
                        <span></span>
                    </div><!-- //mobile menu button -->
                </div><!-- /.col-md-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-bottom -->
</section>
