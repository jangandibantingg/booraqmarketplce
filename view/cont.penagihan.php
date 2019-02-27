<main class="page-content">

        <!-- Spping Cart Area -->
        <div class="cart-page-area ptb-30 bg-white">
            <div class="container">

                <!-- Cart Products -->
                <div class="cart-table table-responsive">
                    <table class="table table-hover">

				 							<thead>
				 								<tr>

				 									<th class="cart-product-thumbnail">produk</th>
													<th class="cart-product-name">jumlah</th>
				 									<th class="cart-product-name">harga</th>


				 									<th class="cart-product-subtotal">Total</th>
				 								</tr>
				 							</thead>
				 							<tbody>
												<?php
												$session_id=session_id();

												$ko=mysqli_query($con, "select * from order_produk,produk where produk.id_produk=order_produk.id_produk and order_produk.email='$_SESSION[user_session]' ");

												while ($r=mysqli_fetch_array($ko)) {
												$lt=mysqli_fetch_array(mysqli_query($con, "select * from city where city_id='$r[origin]'" ));
												$k=mysqli_fetch_array(mysqli_query($con, "select * from city where city_id='$member[id_kota]'" ));
												$totalharga=$r['harga']*$r['qty'];
												$totalberat=$totalberat+$r['weight'];

												 ?>
				 								<tr>



																				<td class="cart-product-thumbnail">
																					<a href="#">
																						<img src="library/foto_produk/small_<?php echo "$r[gambar]";?>" alt="<?php echo "$r[nama_produk]"; ?>" height="50px">
																					</a>
																					<div class="cart-product-thumbnail-name"><?php echo "$r[nama_produk]"; ?></div>
																				</td>
													<td class="cart-product-subtotal">
														<span class="amount"><?php echo "$r[qty]"; ?></span>


																		 									<td class="cart-product-subtotal">
																		 										<span class="amount"><?php echo "".number_format($r['harga']).""; ?></span>
																		 									</td>




				 									<td class="cart-product-subtotal">
				 										<span class="amount"><?php echo "".number_format($totalharga).""; ?></span>
				 									</td>
				 								</tr>
												<?php
												$subtotalharga=$subtotalharga+$totalharga;
												$origin=$r['origin'];
											}
												 ?>

				 							</tbody>
				 						</table>
										   </div>

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
