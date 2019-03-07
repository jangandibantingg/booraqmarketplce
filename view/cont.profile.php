<?php
if ($member['level'] == 1) {
  echo "<script type='text/javascript'> window.location.href = './admin.aspx' </script>";
}
if (empty($_SESSION['user_session'])) {
  echo "<script type='text/javascript'> window.location.href = './login.aspx' </script>";

}
 ?>



 <!--  -->
 <!--  -->

 <main class="page-content ptb-30 ">
     <div class="container">
         <div class="profile-setting card">
             <div class="card-header">
                 <ul class="nav card-header-tabs">
                     <li class="nav-item"> <a class="nav-link " href="profile.aspx"> <i class='icon-user'></i> Profile Saya</a></li>
                     <li class="nav-item"> <a class="nav-link " href="?page=profile&act=alamat-pengiriman"> <i class='mdi mdi-home'></i> alamat pengiriman</a> </li>
                     <?php
                     $c=mysqli_query($con, "select * from toko where email='$_SESSION[user_session]'");
                     $numb=mysqli_num_rows($c);
                     if ($numb > 0) {
                       echo "<li class='nav-item'><a href='./seller/' target='_blank'> <i class='mdi mdi-store'></i> backoffice seller </a></li>";

                       // echo "<li class='nav-item'><a href='./?page=profile&act=daftar-produk'> <i class='mdi mdi-store'></i> daftar produk</a></li>";
                       // echo "<li class='nav-item'><a href='./?page=profile&act=tambah-produk'> <i class='mdi mdi-store'></i> tambah produk</a></li>";
                       // echo "<li class='nav-item'><a href='./?page=profile&act=diskusi-produk'> <i class='mdi mdi-store'></i> diskusi produk</a></li>";
                       // echo "<li class='nav-item'><a href='./?page=profile&act=review-produk'> <i class='mdi mdi-store'></i> review produk</a></li>";
                     }else {
                       echo "<li class='nav-item'><a href='./jadi-mitra.aspx'> <i class='mdi mdi-store'></i> Jadi Mitra</a></li>";
                     }
                     echo '
                          <li> <hr> </li>
                          <li>
                           <a href="logout.html" title=""><i class="mdi mdi-logout"></i> Logout</a>
                          </li>';

                      ?>
                 </ul>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-md-3 mb-5">
                         <div class="well">
                             <img id="img-profile" class="imgprofile"
                                  src="https://ecs7.tokopedia.net/img/cache/300/user-1/2019/2/15/967610/967610_c81e5db5-f941-4df1-9606-daadedd70fc6.jpg"
                             >

                             <div class="btn btn-grey btn-block mt-5">Pilih Foto</div>
                             <div class="mt-5">
                                 <small class="text-muted">
                                     Besar file: maksimum 10.000.000 bytes (10 Megabytes)<br>
                                     Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG
                                 </small>
                             </div>

                         </div>
                         <a class="btn btn-outline-secondary btn-block mt-3" id="btnPassword"><i class="mdi mdi-key"></i> Ganti Password</a>

                     </div>
                     <div class="col-md-9">
                       <?php
                       if ($_GET['act'] == 'edit-profile' || empty($_GET['act'])) {
                         if ($_POST ) {
                           // code...
                           mysqli_query($con, "update user set nama_depan='$_POST[nama_depan]',
                                                               nama_belakang='$_POST[nama_belakang]',
                                                               id_kota='$_POST[kota]',
                                                               alamat='$_POST[alamat]',
                                                               no_hp='$_POST[no_hp]'
                                                         where email='$_SESSION[user_session]' ");

                         }
                           $r=mysqli_fetch_array(mysqli_query($con, "select * from user where email='$_SESSION[user_session]'"));
                        ?>
                        <div class="line"></div>

                       <h3>BIODATA DIRI</h3>
                       <form method="post" action="" enctype="multipart/form-data" >
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4">nama depan</label>
                                   <input class="form-control" id="inputEmail4" value="<?php echo "$r[nama_depan]"; ?>" name="nama_depan" placeholder="nama depan" type="text" >
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="inputPassword4">nama belakang</label>
                                   <input class="form-control" name="nama_belakang"value="<?php echo "$r[nama_belakang]"; ?>" name="nama_belakang" placeholder="Password" type="text">
                               </div>
                           </div>
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
                                   <select class="chosen " name="kota">

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
                               <label for="inputAddress2">alamat Jelas</label>

                               <textarea class="form-control" name="alamat" rows="8" cols="80" placeholder="jalan soekarno no.36"><?php echo "$member[alamat]"; ?></textarea>
                           </div>
                           <div class="form-group">
                               <div class="form-check">
                                   <input class="form-check-input" id="gridCheck" type="checkbox">
                                   <label class="form-check-label" for="gridCheck">isi sebagai alamat pengiriman</label>
                               </div>
                           </div>
                           <button type="submit" class="btn btn-info">simpan</button>
                       </form>


                       <?php
                       }elseif ($_GET['act'] == 'edit-toko') {
                         include 'view/act.edit-toko.php';
                       }elseif ($_GET['act'] == 'daftar-produk') {
                         include 'view/act.daftar-produk.php';
                       }elseif ($_GET['act'] == 'tambah-produk') {
                         include 'view/act.tambah-produk.php';
                       }elseif ($_GET['act'] == 'edit-produk') {
                         include 'view/act.edit-produk.php';
                       }elseif ($_GET['act'] == 'tambah-deskripsi') {
                         include 'view/act.tambah-deskripsi.php';
                       }else{
                         echo '<center><h4>C O M I N G S O O N</h4></h4>';
                       }


                        ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </main>
