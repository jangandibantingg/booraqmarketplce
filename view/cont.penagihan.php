<?php

  if ($_GET['dell']) {
    mysqli_query($con, "delete from order_produk where id_order='$_GET[dell]'");

  }
 ?>
<main class="page-content">

        <!-- Spping Cart Area -->
        <div class="cart-page-area ptb-30 bg-white">
            <div class="container">

                <!-- Cart Products -->

                  <?php
                  $session_id=session_id();
                  $ko=mysqli_query($con, "SELECT * from order_produk,produk,toko where toko.id_toko=produk.id_toko and produk.id_produk=order_produk.id_produk and order_produk.email='$_SESSION[user_session]' GROUP by toko.id_toko ");
                  while ($store=mysqli_fetch_array($ko)) {
                   ?>
                   <h5> <small>Penjual :</small> <i class="mdi mdi-store"></i> <?php echo "$store[nama_toko]"; ?> </h5>
                   <?php

                    ?>
                    <div class="cart-table table-responsive">
                    <table class="table table-responsive">


				 							<tbody>
												<?php
                        $produk=mysqli_query($con, "select * from order_produk,produk,toko where toko.id_toko=produk.id_toko and produk.id_produk=order_produk.id_produk and order_produk.email='$_SESSION[user_session]' and produk.id_toko='$store[id_toko]' ");
                        // echo "select * from order_produk,produk,toko where toko.id_toko=produk.id_toko and produk.id_produk=order_produk.id_produk and order_produk.email='$_SESSION[user_session]' and order_produk.id_toko='$store[id_toko]' ";
                          while ($r=mysqli_fetch_array($produk)) {

												$lt=mysqli_fetch_array(mysqli_query($con, "select * from city where city_id='$r[origin]'" ));
												$k=mysqli_fetch_array(mysqli_query($con, "select * from city where city_id='$member[id_kota]'" ));
												$totalharga=$r['harga']*$r['qty'];
												$totalberat=$totalberat+$r['weight'];

												 ?>
				 								<tr>


                                        <td> <a href="./?page=penagihan&dell=<?php echo "$r[id_order]"; ?>"> <i class="mdi mdi-delete text-danger"></i> </td>
																				<td class="cart-product-thumbnail">

																					<a href="#">
																						<img src="library/foto_produk/small_<?php echo "$r[gambar]";?>" alt="<?php echo "$r[nama_produk]"; ?>" height="50px">
																					</a>

																				</td>
                                        <td align="left" ><p align="left">
                                          <?php echo "$r[nama_produk]"; ?><br>
                                            <span class="text-danger" >Harga : <?php echo "".number_format($r['harga']).""; ?></span><br>
                                          <small>jumlah : <?php echo "$r[qty]"; ?></small><br>

                                            <span class="amount">Total :<?php echo "".number_format($totalharga).""; ?></span><br>
                                        </td>

                                        </p>

				 								</tr>
                      <?php
                       $subtotalharga=$subtotalharga+$totalharga;
                      }

                    ?>
				 							</tbody>
				 						</table>
										   </div>
                       <?php

                    }
                        ?>

											 <div class="cart-table table-responsive">
<hr>
				 						<h4>PESANAN AKAN DIKIRIM KE</h4>

				 					 <table class="table table-hover">
				 							<tbody>
				 								<tr>
				 									<td class="cart-product-name text-left">
				 										<strong>NAMA</strong>
				 									</td>

				 									<td class="cart-product-name text-right">
				 										<span class="amount"><?php echo "$member[nama_depan] $member[nama_belakang]"; ?></span>
				 									</td>
				 								</tr>
				 								<tr>
				 									<td class="cart-product-name  text-left">
				 										<strong>alamat pengiriman</strong>
				 									</td>

				 									<td class="cart-product-name  text-right">
				 										<span class="amount"><?php echo "$member[alamat]"; ?></span>
				 									</td>
				 								</tr>
				 								<tr>
				 									<td class="cart-product-name  text-left">
				 										<strong>kota</strong>
				 									</td>

				 									<td class="cart-product-name  text-right">
																<span class="amount"><?php echo "$k[city_name]"; ?></span>
				 									</td>
				 								</tr>
				 								<tr>
				 									<td class="cart-product-name  text-left">
				 										<strong>berat (kg)</strong>
				 									</td>

				 									<td class="cart-product-name text-right">
				 										<span class="amount color lead"><strong><?php echo "$totalberat"; ?></strong></span>
				 									</td>
				 								</tr>
											</tr>
											<tr>
												<td class="cart-product-name  text-left">
													<strong>Pilih Kurir</strong>
												</td>

												<td class="cart-product-name text-right">
													<form class="" id="loginform" action="penagihan.html" method="post">
													<select class="" name="service">
														<option value="">pilih kurir</option>
														<option value="jne">JNE</option>
														<option value="pos">POS</option>
														<option value="tiki">TIKI</option>



													</select>

													<input type="hidden" name="subtotalharga" value="<?php echo "$subtotalharga"; ?>">
													<input type="hidden" name="weight" value="<?php echo "$totalberat"; ?>">
													<input type="hidden" name="origin" value="1" placeholder="origin">
													<input type="hidden" name="destination" value="<?php echo "$member[id_kota]"; ?>">
												</td>
											</tr>
											<tr>
												<td></td>
												<td>

														<button id="submit" class="btn btn-outline-info icon-left float-right mt-3" ><span>Cek Ongkir</span></button>
												</td>
											</form>
											</tr>

				 							</tbody>

				 						</table>
											   </div>

									<div id="info" class="info">

									</div>



									            </div>
									        </div>
									        <!--// Related Product Area -->


									    </main>
