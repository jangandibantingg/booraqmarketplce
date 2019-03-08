<div class="trending-products-area ptb-30">
    <div class="container">
        <div class="section-title">
            <h3>TRENDING PRODUCTS</h3>
            <ul class="nav" id="trandingTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="trandingtab-1" data-toggle="tab" href="#trandingtab-area1"
                       role="tab"
                       aria-controls="bstab1-area1" aria-selected="true">BUSANA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="trandingtab-2" data-toggle="tab" href="#trandingtab-area2"
                       role="tab"
                       aria-selected="false">KERAJINAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="trandingtab-3" data-toggle="tab" href="#trandingtab-area3"
                       role="tab"
                       aria-controls="bstab1-area3"
                       aria-selected="false">KECANTIKAN</a>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="tranding-tab-content">
            <div class="tab-pane fade show active" id="trandingtab-area1" role="tabpanel"
                 aria-labelledby="trandingtab-area1">
                <div class="product-slider trending-products-slider slider-navigation-2">
                    <!-- <div class="slider-item-col"> -->
                        <!-- Single Product -->


                                  <?php
                                  $no=1;
                                  $a=mysqli_query($con, "select * from produk where id_kategori_produk='1' order by id_produk asc limit 20 ");
                                  while ($r=mysqli_fetch_array($a)) {

                                    $idmenu=$r['id_produk'];
                                    $name=$r['nama_produk'];
                                    $weight=$r['berat'];
                                    if ($no == 1 || $no == 3 ) {
                                      $div= '<div class="slider-item-col">';
                                      $enddiv= '';
                                    }else{
                                      $div= '';
                                      $enddiv= '</div>';
                                    }

                                   ?>

                        <?php echo "$div"; ?>
                        <article class="product product-3">
                            <div class="product-image">
                              <a class="product-thumb" href="./?page=produk&id=<?php echo "$r[id_produk]"; ?>">
                                  <img class="product-frontimage" src="library/foto_produk/small_<?php echo "$r[gambar]"; ?>"
                                       alt="product image">
                                  <img class="product-backimage" src="library/foto_produk/small_<?php echo "$r[gambar]"; ?>"
                                       alt="product image">
                              </a>
                              <ul class="product-actionbox">

                                  <!-- <input type="hidden" name="page" id="page<?php echo $idmenu; ?>" class="form-control" value="<?php echo "$page"; ?>" /> -->
                                  <input type="hidden" name="quantity" id="quantity<?php echo $idmenu; ?>" class="form-control" value="1" />
                                  <input type="hidden" name="hidden_name" id="name<?php echo $idmenu; ?>" value="<?php echo $name; ?>" />
                                  <input type="hidden" name="hidden_email" id="email<?php echo $idmenu; ?>" value="<?php echo $_SESSION['user_session']; ?>" />
                                  <input type="hidden" name="hidden_weight" id="weight<?php echo $idmenu; ?>" value="<?php echo $weight; ?>" />
                                  <input type="hidden" name="hidden_id_menu" id="id_menu<?php echo $idmenu; ?>" value="<?php echo $r["id_produk"]; ?>" />
                                  <input type="hidden" name="hidden_price" id="price<?php echo $idmenu; ?>" value="<?php echo $r["harga"]; ?>" />
                                  <!-- <input type="button" name="add_to_cart" id="<?php echo $idmenu; ?>" class="text-white btn btn-outline-info  form-control add_to_cart" value="+" /> -->
                                  <!-- <li><a href="#">aa</a></li> -->

                                  <li>
                                    <input type="button" name="add_to_cart" id="<?php echo $idmenu; ?>" class="text-white btn btn-outline-info  form-control add_to_cart" value="+" />

                                   </li>

                                  <!-- <li><a href="#"><i class="icon-like"></i></a></li> -->
                              </ul>
                                <?php if ($r['diskon'] != 0 ){ ?>
                                  <ul class="product-flags">

                                      <li class="flag-discount"><?php echo "$r[diskon]"; ?>%</li>
                                  </ul>
                                  <?php } ?>
                            </div>
                            <div class="product-content">
                                <h5 class="product-title">
                                  <a href="./?page=produk&id=<?php echo "$r[id_produk]"; ?>">
                                  <?php echo "$r[nama_produk]"; ?></a></h5>

                                <div class="product-pricebox">
                                    <div class="pricebox">
                                      <?php if ($r['diskon'] != 0 ) {

                                        $oldprice=$r['harga'];
                                        $price =$oldprice-($oldprice*$r['diskon']/100);
                                        echo "
                                        <del class='oldprice'>Rp. ".number_format($oldprice)."</del>
                                        <span class='price'>Rp. ".number_format($price)."</span>
                                        ";
                                      }else {
                                        echo "<span class='price'>Rp ".number_format($r['harga'])."</span>";
                                      } ?>

                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php echo $enddiv; ?>

                        <!--// Single Product -->

                        <!-- Single Product -->


                        <?php
                        $no++;
                      }
                         ?>
                        <!--// Single Product -->













                </div>
            </div>
            <div class="tab-pane fade show active" id="trandingtab-area2" role="tabpanel"
                 aria-labelledby="trandingtab-area2">
                <div class="product-slider trending-products-slider slider-navigation-2">
                    <!-- <div class="slider-item-col"> -->
                        <!-- Single Product -->


                                  <?php
                                  $no=1;
                                  $a=mysqli_query($con, "select * from produk where id_kategori_produk='2' order by id_produk asc limit 20 ");

                                  while ($r=mysqli_fetch_array($a)) {

                                    $idmenu=$r['id_produk'];
                                    $name=$r['nama_produk'];
                                    $weight=$r['berat'];

                                    if ($no == 1 || $no == 3 ) {
                                      $div = '<div class="slider-item-col '.$no.'">';
                                      $enddiv= '</div>';
                                    }
                                   ?>

                        <?php echo "$div"; ?>
                        <article class="product product-3">
                            <div class="product-image">
                              <a class="product-thumb" href="./?page=produk&id=<?php echo "$r[id_produk]"; ?>">
                                  <img class="product-frontimage" src="library/foto_produk/small_<?php echo "$r[gambar]"; ?>"
                                       alt="product image">
                                  <img class="product-backimage" src="library/foto_produk/small_<?php echo "$r[gambar]"; ?>"
                                       alt="product image">
                              </a>
                              <ul class="product-actionbox">

                                  <!-- <input type="hidden" name="page" id="page<?php echo $idmenu; ?>" class="form-control" value="<?php echo "$page"; ?>" /> -->
                                  <input type="hidden" name="quantity" id="quantity<?php echo $idmenu; ?>" class="form-control" value="1" />
                                  <input type="hidden" name="hidden_name" id="name<?php echo $idmenu; ?>" value="<?php echo $name; ?>" />
                                  <input type="hidden" name="hidden_email" id="email<?php echo $idmenu; ?>" value="<?php echo $_SESSION['user_session']; ?>" />
                                  <input type="hidden" name="hidden_weight" id="weight<?php echo $idmenu; ?>" value="<?php echo $weight; ?>" />
                                  <input type="hidden" name="hidden_id_menu" id="id_menu<?php echo $idmenu; ?>" value="<?php echo $r["id_produk"]; ?>" />
                                  <input type="hidden" name="hidden_price" id="price<?php echo $idmenu; ?>" value="<?php echo $r["harga"]; ?>" />
                                  <!-- <input type="button" name="add_to_cart" id="<?php echo $idmenu; ?>" class="text-white btn btn-outline-info  form-control add_to_cart" value="+" /> -->
                                  <!-- <li><a href="#">aa</a></li> -->

                                  <li>
                                    <input type="button" name="add_to_cart" id="<?php echo $idmenu; ?>" class="text-white btn btn-outline-info  form-control add_to_cart" value="+" />
                                   </li>

                                  <!-- <li><a href="#"><i class="icon-like"></i></a></li> -->
                              </ul>
                                <?php if ($r['diskon'] != 0 ){ ?>
                                  <ul class="product-flags">

                                      <li class="flag-discount"><?php echo "$r[diskon]"; ?>%</li>
                                  </ul>
                                  <?php } ?>
                            </div>
                            <div class="product-content">
                                <h5 class="product-title">
                                  <a href="./?page=produk&id=<?php echo "$r[id_produk]"; ?>">
                                  <?php echo "$r[nama_produk] $no"; ?></a></h5>

                                <div class="product-pricebox">
                                    <div class="pricebox">
                                      <?php if ($r['diskon'] != 0 ) {

                                        $oldprice=$r['harga'];
                                        $price =$oldprice-($oldprice*$r['diskon']/100);
                                        echo "
                                        <del class='oldprice'>Rp. ".number_format($oldprice)."</del>
                                        <span class='price'>Rp. ".number_format($price)."</span>
                                        ";
                                      }else {
                                        echo "<span class='price'>Rp ".number_format($r['harga'])."</span>";
                                      } ?>

                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php echo $enddiv; ?>

                        <!--// Single Product -->

                        <!-- Single Product -->


                        <?php
                        $no++;
                      }
                         ?>
                        <!--// Single Product -->













                </div>
            </div>
            <div class="tab-pane fade show active" id="trandingtab-area3" role="tabpanel"
                 aria-labelledby="trandingtab-area3">
                <div class="product-slider trending-products-slider slider-navigation-2">
                    <!-- <div class="slider-item-col"> -->
                        <!-- Single Product -->


                                  <?php
                                  $no=1;
                                  $a=mysqli_query($con, "select * from produk where id_kategori_produk='3' order by id_produk asc limit 20 ");
                                  while ($r=mysqli_fetch_array($a)) {

                                    $idmenu=$r['id_produk'];
                                    $name=$r['nama_produk'];
                                    $weight=$r['berat'];
                                    if ($no == 1 || $no == 3 ) {
                                      $div= '<div class="slider-item-col '.$no.'">';
                                      $enddiv= '</div>';
                                    }

                                   ?>

                        <?php echo "$div"; ?>
                        <article class="product product-3">
                            <div class="product-image">
                              <a class="product-thumb" href="./?page=produk&id=<?php echo "$r[id_produk]"; ?>">
                                  <img class="product-frontimage" src="library/foto_produk/small_<?php echo "$r[gambar]"; ?>"
                                       alt="product image">
                                  <img class="product-backimage" src="library/foto_produk/small_<?php echo "$r[gambar]"; ?>"
                                       alt="product image">
                              </a>
                              <ul class="product-actionbox">

                                  <!-- <input type="hidden" name="page" id="page<?php echo $idmenu; ?>" class="form-control" value="<?php echo "$page"; ?>" /> -->
                                  <input type="hidden" name="quantity" id="quantity<?php echo $idmenu; ?>" class="form-control" value="1" />
                                  <input type="hidden" name="hidden_name" id="name<?php echo $idmenu; ?>" value="<?php echo $name; ?>" />
                                  <input type="hidden" name="hidden_email" id="email<?php echo $idmenu; ?>" value="<?php echo $_SESSION['user_session']; ?>" />
                                  <input type="hidden" name="hidden_weight" id="weight<?php echo $idmenu; ?>" value="<?php echo $weight; ?>" />
                                  <input type="hidden" name="hidden_id_menu" id="id_menu<?php echo $idmenu; ?>" value="<?php echo $r["id_produk"]; ?>" />
                                  <input type="hidden" name="hidden_price" id="price<?php echo $idmenu; ?>" value="<?php echo $r["harga"]; ?>" />
                                  <!-- <input type="button" name="add_to_cart" id="<?php echo $idmenu; ?>" class="text-white btn btn-outline-info  form-control add_to_cart" value="+" /> -->
                                  <!-- <li><a href="#">aa</a></li> -->

                                  <li>
                                    <input type="button" name="add_to_cart" id="<?php echo $idmenu; ?>" class="text-white btn btn-outline-info  form-control add_to_cart" value="+" />

                                   </li>

                                  <!-- <li><a href="#"><i class="icon-like"></i></a></li> -->
                              </ul>
                                <?php if ($r['diskon'] != 0 ){ ?>
                                  <ul class="product-flags">

                                      <li class="flag-discount"><?php echo "$r[diskon]"; ?>%</li>
                                  </ul>
                                  <?php } ?>
                            </div>
                            <div class="product-content">
                                <h5 class="product-title">
                                  <a href="./?page=produk&id=<?php echo "$r[id_produk]"; ?>">
                                  <?php echo "$r[nama_produk] $no"; ?></a></h5>

                                <div class="product-pricebox">
                                    <div class="pricebox">
                                      <?php if ($r['diskon'] != 0 ) {

                                        $oldprice=$r['harga'];
                                        $price =$oldprice-($oldprice*$r['diskon']/100);
                                        echo "
                                        <del class='oldprice'>Rp. ".number_format($oldprice)."</del>
                                        <span class='price'>Rp. ".number_format($price)."</span>
                                        ";
                                      }else {
                                        echo "<span class='price'>Rp ".number_format($r['harga'])."</span>";
                                      } ?>

                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php echo $enddiv; ?>

                        <!--// Single Product -->

                        <!-- Single Product -->


                        <?php
                        $no++;
                      }
                         ?>
                        <!--// Single Product -->













                </div>
            </div>
        </div>
    </div>
</div>
