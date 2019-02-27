<!--  -->

<main class="page-content">

        <!-- Spping Cart Area -->
        <div class="cart-page-area ptb-30 bg-white">
            <div class="container">

                <!-- Cart Products -->
                <div class="cart-table table-responsive">
                  <div class="table-striped table-responsive" id="order_table">
                         <table class="table table-bordered">
                              <tr>
                                   <th width="40%">Product Name</th>
                                   <th width="10%">Quantity</th>
                                   <th width="20%">Price</th>
                                   <th width="15%">Total</th>
                                   <th width="5%">Action</th>
                              </tr>
                              <?php
                              if(!empty($_SESSION["shopping_cart"]))
                              {
                                   $total = 0;
                                   foreach($_SESSION["shopping_cart"] as $keys => $values)
                                   {
                              ?>
                              <tr>
                                   <td><?php echo $values["product_name"]; ?></td>
                                   <td><input type="text" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>
                                   <td align="right">Rp. <?php echo $values["product_price"]; ?></td>
                                   <td align="right">Rp. <?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>
                                   <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Remove</button></td>
                              </tr>
                              <?php
                                        $total = $total + ($values["product_quantity"] * $values["product_price"]);
                                   }
                              ?>
                              <tr>
                                   <td colspan="3" align="right">Total</td>
                                   <td align="right">Rp. <?php echo number_format($total, 2); ?></td>
                                   <td></td>
                              </tr>
                              <tr>
                                <td colspan="5">
                                </td>
                              </tr>
                              <tr>
                                   <td colspan="5" id="loginform" align="center">

                                        <form method="post" action="cartaction.html">
                                             <input type="submit" name="place_order" class="btn btn-warning" value="Place Order" />

                                        </form>
                                   </td>
                              </tr>
                              <?php
                              }
                              ?>
                         </table>
                    </div>

                </div>
                <!--// Cart Products -->

                <!-- Cart Content -->
                <div class="cart-content">
                    <div class="row justify-content-between">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="cart-content-left">
                                <div class="ho-buttongroup">
                                    <!-- <a href="#" class="btn btn-outline-primary">
                                        <span>Update Keranjang</span>
                                    </a> -->
                                    <a href="./beranda.aspx" class="btn btn-primary">
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
                                <!-- <h4>SUBTOTAL</h4>
                                <h6>Rp. 1.000.000</h6>
                                <a href="#" class="btn btn-secondary">
                                    <span>Checkout</span>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Cart Content -->

            </div>
        </div>
        <!--// Spping Cart Area -->

    <?php include "view/last_produk.php"; ?>


    </main>




<!--  -->
