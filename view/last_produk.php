<div class="section latest-products-area mtb-30">
    <div class="container">
        <div class="section-title">
            <h3>LATEST PRODUCTS </h3>
        </div>
        <div class="product-slider new-best-featured-slider slider-navigation-2">

          <?php
          $a=mysqli_query($con, "select * from produk order by id_produk asc limit 8 ");
          while ($r=mysqli_fetch_array($a)) {

            $idmenu=$r['id_produk'];
            $name=$r['nama_produk'];
            $weight=$r['berat'];

           ?>

            <div class="slider-item-col">
                <!-- Single Product -->

                <article class="product">
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
                <!--// Single Product -->
            </div>

            <?php
          }
             ?>

        </div>
    </div>
</div>
