
<main class="page-content">

		<div class="container mtb-30">
				<div class="row justify-content-center">
						<div class="col-md-6 ">
								<div class="card">
										<div class="card-body">
											<form id="loginform" action="signup.html" method="post">


														<div class="row">

																<div class="col-md-6">
																		<div class="form-group">
																				<label >Nama Depan :</label>
																				<input type="text" name="nama_depan" placeholder="Masukan Dama Depan" class="form-control">
																		</div>

																</div>
																<div class="col-md-6">
																		<div class="form-group">
																				<label >Nama Belakang :</label>
																				<input type="text" name="nama_belakang" placeholder="Masukan Nama Belakang" class="form-control">
																		</div>
																</div>
																<div class="col-md-12">
																		<div class="form-group">
																				<label for="email">Email :</label>
																				<input type="email" name="email" placeholder="Masukan Nama Email" class="form-control">
																		</div>
																</div>

																<div class="col-md-12">
																		<div class="form-group">
																				<label for="email">No Hp :</label>
																				<input type="text" name="no_hp" placeholder="Masukan No Hp" class="form-control">
																		</div>
																</div>


		                                	<div class="col-md-6">
		                                   <label for="email">kota :</label>
		                                    <select class="chosen " name="kota">
		                                      <?php $kota=mysqli_fetch_array(mysqli_query($con, "select city_name from city where city_id='$r[id_kota]'")) ?>
		                                      <!-- <option value="<?php echo "$r[id_kota]"; ?>"> <?php echo "".$kota['city_name'].""; ?></option> -->

		                                      <option value="">- pilih kota anda - </option>
		                                      <?php
		                                      $a=mysqli_query($con, "select * from city ");
		                                        while ($r=mysqli_fetch_array($a)) {
		                                          // code...
		                                          echo "<option value='$r[city_id]'>$r[city_name]</optin>";
		                                        }
		                                       ?>

		                                    </select>
		                                </div>

																<div class="col-md-12">
																		<div class="form-group">
																				<label for="email">password :</label>
																				<input type="password" name="password" placeholder="Masukan password">
																		</div>
																</div>
																<div class="col-md-12">
																		<div class="form-group">
																				<label for="password">ulangi Password :</label>
																				<input type="password" name="repassword" placeholder="Masukan Password" class="form-control">
																		</div>
																</div>
																<div class="col-md-12">
																		<div class="form-group">
																				<button id="submit" class="btn btn-secondary btn-block">Daftar</button>

																				<p id="info" class="text-ceter"></p>
																		</div>
																</div>

												</form>
										</div>
								</div>
						</div>
				</div>

		</div>


</main>
