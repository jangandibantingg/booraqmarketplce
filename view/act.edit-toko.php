<?php


if ($numb > 0) {
echo "<script type='text/javascript'> window.location.href = './?page=profile&act=kelola-toko' </script>";
}else{
  if(empty($_GET['hal'])){


 ?>
 <div class="line"></div>
 <h3>Anda belum terdaftar menjadi seller <small>daftar sekarang</small></h3>
 <a href="./?page=profile&act=edit-toko&hal=regular" class="btn btn-success"><i class="mdi mdi-store"></i> Buat toko regular</a>
 <a href="./?page=profile&act=edit-toko&hal=premium" class="btn btn-info"><i class="mdi mdi-store"></i> Buat toko premium</a>


<div class="line"></div>


                  <?php
                    }
                  if (!empty($_GET['hal'])){
                        echo "<h3><i class='fa fa-store'></i> Buat toko $_GET[hal]</h3>";

                   ?>     <form id="loginform" class="westeros-form" method="post" action="buat-toko.html" >

                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4">nama toko</label>
                                   <input class="form-control" id="inputEmail4" name="nama_toko" placeholder="nama toko" type="text" >
                               </div>
                               <div class="form-group col-md-6">
                                 <label for="basic-url">Your vanity URL</label>
<div class="input-group mb-3">
 <div class="input-group-prepend">
   <span class="input-group-text" id="basic-addon3">https://booraq.id/toko/</span>
 </div>
 <input type="text" name="url" class="form-control" id="basic-url" aria-describedby="basic-addon3" />
</div>

                               </div>
                           </div>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4">NO ktp</label>
                                   <input class="form-control" id="inputEmail4" name="no_ktp" placeholder="isi nomer ktp anda" type="text" >
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="inputPassword4">no npwp </label>
                                   <input class="form-control"  name="no_npwp" placeholder="isi no npwp anda" type="text">
                               </div>
                           </div>
                           <input type="hidden" name="jenis_toko" value="<?php echo "$_GET[hal]"; ?>">
                           <?php
                           if ($_GET['hal'] == 'premium') {
                             // code...

                            ?>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4">Siup/TDP</label>
                                   <input class="form-control" id="inputEmail4" name="no_bpom" placeholder="nomer siup/tdp" type="text" >
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="inputPassword4">SK kemenkuham</label>
                                   <input class="form-control"  name="sk" placeholder="isi no SK kemenkuham anda" type="text">
                               </div>
                           </div>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4">akta pendirian</label>
                                   <input class="form-control" id="inputEmail4" name="akta" placeholder="nomer akta pendirian" type="text" >
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="inputPassword4">Izin Usaha Industri</label>
                                   <input class="form-control"  name="izinusaha" placeholder="isi Izin Usaha Industri anda" type="text">
                               </div>
                           </div>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4">izin usaha mikro dan kecil</label>
                                   <input class="form-control" id="inputEmail4" name="izinmikro" placeholder="izin usaha mikro dan kecil" type="text" >
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="inputPassword4">HKI  <small>(semua jenis usaha)</small></label>
                                   <input class="form-control"  name="hki" placeholder="isi no HKI anda" type="text">
                               </div>
                           </div>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4">jenis usaha</label>
                                  <select class="fomm-control" name="jenis_usaha">
                                    <option value="">pilih jenis usaha</option>
                                    <option value="makanan&pangan">makanan dan pangan</option>
                                  </select>
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="inputPassword4">SKDU <small>(surat keterangan domisili usaha)</small></label>
                                   <input class="form-control"  name="skdu" placeholder="isi SKDU anda" type="text">
                               </div>
                           </div>
                           <div class="form-row">
                             <div class="form-group col-md-6">
                                 <label for="inputPassword4">PKP <small>(Penyuluha Jenis Pangan)</small></label>
                                 <input class="form-control"  name="pkp" placeholder="isi no PKP anda" type="text">
                             </div>
                               <div class="form-group col-md-6">
                                   <label for="inputPassword4">Halal MUI</label>
                                   <input class="form-control"  name="mui" placeholder="isi no Halal MUI anda" type="text">
                               </div>
                           </div>
                           <div class="form-row">
                             <div class="form-group col-md-6">
                                 <label for="inputPassword4">uji lab</label>
                                 <input class="form-control"  name="lab" placeholder="isi uji lab anda" type="text">
                             </div>
                               <div class="form-group col-md-6">
                                   <label for="inputPassword4">Sertifikat SNI</label>
                                   <input class="form-control"  name="sni" placeholder="isi no Sertifikat SNI anda" type="text">
                               </div>
                           </div>
                           <?php
                            }
                            ?>
                           <div class="form-group">
                               <label for="inputAddress">alamat email</label>
                               <input class="form-control" id="email" placeholder="" value="<?php echo "$_SESSION[user_session]"; ?>" type="email" readonly>
                           </div>
                           <div class="form-group">
                               <label for="inputAddress2">no handphone</label>
                               <input class="form-control" id="telpon" name="no_hp" value="<?php echo "$r[no_hp]"; ?>" placeholder="isi nomer hp anda" type="text">
                           </div>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label for="inputCity">Kota</label>
                                   <select class="chosen " name="city_id">

                                     <?php $kota=mysqli_fetch_array(mysqli_query($con, "select city_name from city where city_id='$r[id_kota]'")) ?>
                                     <option value="<?php echo "$r[id_kota]"; ?>"> <?php echo "".$kota['city_name'].""; ?></option>

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

                               <div class="form-group col-md-2">

                               </div>
                           </div>
                           <div class="form-group">
                               <label for="inputAddress2">alamat Toko/ domisili perusahaan lengkap anda</label>
                               <textarea class="form-control"name="alamat" rows="8" cols="80" ><?php echo "$r[alamat]"; ?></textarea>
                           </div>

                           <button id="submit" class="btn btn-primary">buat toko sekarang</button>
                       </form>
                       <div class="info" id="info">

                       </div>
<?php
}
}
?>
