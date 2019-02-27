<?php
mysqli_query($con, "update produk set dilihat=+1 where id_produk='$_GET[id]' ");

$p=mysqli_query($con, "select * from produk where id_produk='$_GET[id]'");

$r=mysqli_fetch_array($p);
$k=mysqli_fetch_array(mysqli_query($con, "select * from kategori where id_kategori='$r[id_kategori_produk]'"));
$t=mysqli_fetch_array(mysqli_query($con, "select * from toko where id_toko='$r[id_toko]'"));
$l=mysqli_fetch_array(mysqli_query($con, "select * from city where city_id='$t[city_id]'"));
$lu=mysqli_fetch_array(mysqli_query($con, "select * from city where city_id='$member[id_kota]'"));
$deskripsi=$r['deskripsi'];
$idmenu=$r['id_produk'];
 ?>



 <main class="page-content">

     <!-- Product Details Area -->
     <div class="product-details-area bg-white ptb-30">
         <div class="container">

             <div class="pdetails">
                 <div class="pdetails-images">
                     <div class="pdetails-largeimages pdetails-imagezoom">
                         <div class="pdetails-singleimage" data-src="library/foto_produk/<?php echo "$r[gambar]"; ?>">
                             <img src="library/foto_produk/<?php echo "$r[gambar]"; ?>" alt="<?php echo "$r[nama_produk]"; ?>">
                         </div>

                     </div>


                 </div>
                 <div class="pdetails-content">

                     <h3><?php echo "$r[nama_produk]"; ?></h3>

                     <div class="pdetails-pricebox">
                       <?php if ($r['diskon'] != 0 ) {

                         $oldprice=$r['harga'];
                         $price =$oldprice-($oldprice*$r['diskon']/100);
                         echo "
                         <del class='oldprice'>Rp. ".number_format($oldprice)."</del>
                         <span class='price'>Rp. ".number_format($price)."</span>
                         <span class='badge'>Save $r[diskon]%</span>

                         ";
                       }else {
                         echo "<span class='price'>Rp ".number_format($r['harga'])."</span>";
                       } ?>


                     </div>
                    <?php echo "$r[deskripsi]"; ?>
                     <div class="rattingbox">
                         <span class="active"><i class="ion ion-ios-star"></i></span>
                         <span class="active"><i class="ion ion-ios-star"></i></span>
                         <span class="active"><i class="ion ion-ios-star"></i></span>
                         <span class="active"><i class="ion ion-ios-star"></i></span>
                         <span class="active"><i class="ion ion-ios-star"></i></span>
                     </div>
                     <div class="pdetails-quantity">
                         <span>Qty :</span>
                         <div class="quantity-select">
                             <input name="quantity" id="quantity<?php echo $idmenu; ?>" class="form-control" value="1">
                             <div class="inc qtybutton">+<i class="ion ion-ios-arrow-up"></i></div>
                             <div class="dec qtybutton">-<i class="ion ion-ios-arrow-down"></i></div>
                         </div>
                     </div>
                     <!-- <div class="pdetails-color">
                         <span>Color :</span>
                         <ul>
                             <li class="red"><span></span></li>
                             <li class="green checked"><span></span></li>
                             <li class="blue"><span></span></li>
                             <li class="black"><span></span></li>
                         </ul>
                     </div> -->
                     <!-- <div class="pdetails-size">
                         <span>Size :</span>
                         <ul>
                             <li class="checked"><span>S</span></li>
                             <li><span>M</span></li>
                             <li><span>L</span></li>
                             <li><span>XL</span></li>
                             <li><span>XXL</span></li>
                         </ul>
                     </div> -->

                     <input type="hidden" name="hidden_name" id="name<?php echo $idmenu; ?>" value="<?php echo $name; ?>" />
                     <input type="hidden" name="hidden_id_menu" id="id_menu<?php echo $idmenu; ?>" value="<?php echo $r["id_produk"]; ?>" />
                     <input type="hidden" name="hidden_price" id="price<?php echo $idmenu; ?>" value="<?php echo $r["harga"]; ?>" />


                     <div class="pdetails-actions ">
                         <!-- <a href="#" class="btn btn-grey w-20"><i class="mdi mdi-cards-heart"></i></a> -->
                         <!-- <a href="#" class="btn btn-outline-secondary btn-block ">Beli Sekarang</a> -->
                         <input type="button" name="add_to_cart" id="<?php echo $idmenu; ?>" class="btn btn-outline-info  form-control add_to_cart" value=" tambahkan ke keranjang" />

                     </div>

                     <div class="pdetails-info ">
                         <div class="info-item">
                             <i class="mdi mdi-eye"></i>
                             <div>
                                 <span class="small text-muted d-block">Dilihat</span>
                                 <span class="fw-500"><?php echo "$r[dilihat]"; ?></span>
                             </div>
                         </div>
                         <div class="info-item">
                             <i class="mdi mdi-truck-check"></i>
                             <div>
                                 <span class="small text-muted d-block">Terkirim</span>
                                 <span class="fw-500"><?php echo "$r[Terkirim]"; ?></span>
                             </div>
                         </div>
                         <div class="info-item">
                             <i class="mdi mdi-eye"></i>
                             <div class="d-block">
                                 <span class="small text-muted d-block">Kondisi</span>
                                 <span class="fw-500"><?php echo "$r[kondisi]"; ?></span>
                             </div>
                         </div>
                         <div class="info-item">
                             <i class="mdi mdi-sale"></i>
                             <div>
                                 <span class="small text-muted d-block">Min Beli</span>
                                 <span class="fw-500">1</span>
                             </div>
                         </div>
                         <div class="info-item">
                             <i class="mdi mdi-eye"></i>
                             <div>
                                 <span class="small text-muted d-block">Asuransi</span>
                                 <span class="fw-500">Opsional</span>
                             </div>
                         </div>

                     </div>
                     <h5 class="mt-10">Estimasi ongkos kirim</h5>
                     <?php
                     $berat=$r['berat']*1000;

                      ?>
                    <form  id="loginform" action="cekongkir.html" method="post">
                      <table class="table table-bordered table-vcenter">
                         <tr>

                             <td>


                                 <div class="small text-muted">KOTA</div>
                                 <select class="destination " name="destination">


                                   <option value="">- pilih kota anda - </option>
                                   <?php
                                   $a=mysqli_query($con, "select * from city ");
                                     while ($r=mysqli_fetch_array($a)) {
                                       // code...
                                       echo "<option value='$r[city_id]'>$r[city_name]</optin>";
                                     }
                                    ?>

                                 </select>
                             </td>
                             <td><div class="small text-muted">KURIR</div>
                               <select class="service" name="service">
                                 <option value="">pilih kurir</option>
                                 <option value="jne">JNE</option>
                                 <option value="pos">POS</option>
                                 <option value="tiki">TIKI</option>
                               </select>
                             </td>
                             <td>
                                 <div class="small text-muted">Berat </div>
                                 <div class=""><?php echo "$berat"; ?>gr</div>
                             </td>

                               <input type="hidden" name="weight" value="<?php echo "$berat"; ?>">
                               <input type="hidden" name="origin" value="<?php echo "$l[city_id]"; ?>" placeholder="origin">

                                <td class="text-center">
                                   <button id="submit" class="btn btn-primary "> Hitung</button>
                               </td>



                         </tr>
                         <tr>
                           <td colspan="4"> <p class="info" id="info"></p> </td>
                         </tr>
                     </table>
                        </form>
                 </div>
                 <div class="pdetails-widget widgets ">
                     <div class="widget-seller  ">
                         <div class="seller-profile ">
                             <div class="mb-3">
                               <h4> <i class="mdi mdi-store"></i> </h4>
                                 <!-- <img src="assets/images/profile/profile.jpg" width="60" height="60"
                                      class="img-circle"> -->

                                 <div class="seller-name"><?php echo "$t[nama_toko]"; ?></div>
                                 <div><i class="icon-location"></i> <?php echo "$l[city_name]"; ?></div>
                                 <div><i class="mdi mdi-trophy-award text-warning"></i> Pelapak Premium</div>
                             </div>
                             <button class="btn btn-block btn-sm btn-primary"> Follow</button>
                             <button class="btn btn-block btn-sm btn-outline-primary"><i class="icon-chat"></i> Chat
                                 Penjual
                             </button>
                         </div>

                         <hr>
                         <div class="seller-body">
                             <div class="title">Transaksi Suksec</div>
                             <div class="description">98.44%</div>
                             <div class="title">Diskusi Dibalas</div>
                             <div class="description">100% (± 35 menit)</div>
                             <div class="title">Pesan Dibalas
                             </div>
                             <div class="description">97% (± 1 jam)</div>
                         </div>

                     </div>

                     <div class="widget-shipping-methods mt-30">
                         <h5>Dukungan Pengiriman</h5>
                         <ul>
                             <li>JNE</li>
                             <li>JNI</li>
                             <li>TIKI</li>
                             <li>Gojek</li>
                         </ul>

                     </div>

                 </div>
             </div>

             <div class="pdetails-allinfo">
                 <ul class="nav pdetails-allinfotab" id="product-details" role="tablist">
                     <li class="nav-item">
                         <a class="nav-link active show" id="product-details-area1-tab" data-toggle="tab"
                            href="#product-details-area1" role="tab" aria-controls="product-details-area1"
                            aria-selected="true">Informasi Produk</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" id="product-details-area2-tab" data-toggle="tab"
                            href="#product-details-area2" role="tab" aria-controls="product-details-area2"
                            aria-selected="false">Ulasan</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" id="product-details-area3-tab" data-toggle="tab"
                            href="#product-details-area3" role="tab" aria-controls="product-details-area3"
                            aria-selected="false">Diskusi Produk</a>
                     </li>
                 </ul>

                 <div class="tab-content" id="product-details-ontent">
                     <div class="tab-pane fade active show" id="product-details-area1" role="tabpanel"
                          aria-labelledby="product-details-area1-tab">
                         <div class="pdetails-description">
                             <?php echo "$deskripsi"; ?>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="product-details-area2" role="tabpanel"
                          aria-labelledby="product-details-area2-tab">
                         <div class="pdetails-moreinfo">
                             <a href="#">
                                 <img src="assets/images/others/product-author-logo.jpg" alt="brand logo">
                             </a>
                             <p><b>Reference:</b> demo_3</p>
                             <p><b>In Stock:</b> 1195 Items</p>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="product-details-area3" role="tabpanel"
                          aria-labelledby="product-details-area3-tab">
                         <div class="pdetails-reviews">
                             <div class="product-review">
                                 <div class="commentlist">
                                     <h5>1 REVIEW FOR AENEAN EU TRISTIQUE</h5>
                                     <div class="single-comment">
                                         <div class="single-comment-thumb">
                                             <img src="assets/images/profile/profile.png" alt="hastech logo">
                                         </div>
                                         <div class="single-comment-content">
                                             <div class="single-comment-content-top">
                                                 <h6>ADMIN – September 17, 2017</h6>
                                                 <div class="rattingbox">
                                                     <span class="active"><i class="ion ion-ios-star"></i></span>
                                                     <span class="active"><i class="ion ion-ios-star"></i></span>
                                                     <span class="active"><i class="ion ion-ios-star"></i></span>
                                                     <span class="active"><i class="ion ion-ios-star"></i></span>
                                                     <span class="active"><i class="ion ion-ios-star"></i></span>
                                                 </div>
                                             </div>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                 fringilla augue nec est tristique auctor. Donec non est at
                                                 libero vulputate rutrum.</p>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="commentbox mt-5">
                                     <h5>ADD A REVIEW</h5>
                                     <form action="#" class="form">
                                         <div class="form-inner">
                                             <div class="form-group">
                                                 <label>Your Rating</label>
                                                 <div class="rattingbox hover-action">
                                                     <span class="active"><i class="ion ion-ios-star"></i></span>
                                                     <span class="active"><i class="ion ion-ios-star"></i></span>
                                                     <span class="active"><i class="ion ion-ios-star"></i></span>
                                                     <span><i class="ion ion-ios-star"></i></span>
                                                     <span><i class="ion ion-ios-star"></i></span>
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <label>Your Review</label>
                                                 <textarea cols="5" rows="5" class="form-control"></textarea>
                                             </div>
                                             <div class="form-group">
                                                 <label>Name*</label>
                                                 <input type="text" id="name" name="name" class="form-control"
                                                        placeholder="Masukan Nama">
                                             </div>
                                             <div class="form-group">
                                                 <label>Email*</label>
                                                 <input name="email" id="email" class="form-control"
                                                        placeholder="Masukan Email">
                                             </div>
                                             <div class="single-input">
                                                 <button class="btn btn-primary" type="submit"><span>SUBMIT</span>
                                                 </button>
                                             </div>
                                         </div>
                                     </form>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>

             </div>


         </div>
     </div>
     <!--// Product Details Area -->

     <!-- Related Product Area -->
     <?php include "last_produk.php"; ?>
     <!--// Related Product Area -->


 </main>
