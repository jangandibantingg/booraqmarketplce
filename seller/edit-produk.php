<?php
  $r=mysqli_fetch_array(mysqli_query($con, "select * from produk where id_produk='$_GET[id]'"));
  $harga=$r['harga'];
  $berat=$r['berat'];
  $stok=$r['stok'];
  $kondisi=$r['kondisi'];
  $deskripsi=$r['deskripsi'];
 ?>
<div class="page-main">

      <div class="my-3 my-md-5">
          <div class="container">

              <div class="row ">
                  <div class="card">
                      <div class="card-body">
<h3><i class="fa fa-store"></i> <?php echo "$toko[nama_toko]"; ?></h3>
<hr>
<form method="post" id="loginform" action="../edit-produk.html" enctype="multipart/form-data">
<div class="info" id="info">

</div>
 <div class="form-row">
     <div class="form-group col-md-6">
         <label for="inputEmail4">Gambar</label>
       <img src="../library/foto_produk/<?php echo "small_$r[gambar]"; ?>"/>

     </div>
     <div class="form-group col-md-6">
         <label for="inputPassword4">Nama Produk</label>
         <input class="form-control"  name="nama_produk" value="<?php echo "$r[nama_produk]"; ?>" placeholder="nama Produk" type="text">
     </div>
 </div>
 <!--  -->
 <div class="form-row">
     <div class="form-group col-md-6">
         <label for="inputEmail4">kategori produk</label>
         <select class="form-control"  name="id_kategori">



              <option value="">- pilih kategori produk - </option>
              <?php
              $a=mysqli_query($con, "select * from kategori ");
                while ($r=mysqli_fetch_array($a)) {
                  // code...
                  echo "<option value='$r[id_kategori]'>$r[nama_kategori]</optin>";
                }
               ?>

            </select>

     </div>
     <div class="form-group col-md-6">
         <label for="inputPassword4">harga</label>

         <input class="form-control"  name="harga" value="<?php echo "$harga"; ?>" placeholder="nama Produk" type="number">
     </div>
 </div>
 <!--  -->
 <div class="form-row">
     <div class="form-group col-md-6">
         <label for="inputEmail4">Kondisi</label>
         <select class="form-control"  name="kondisi">
           <option value="<?php echo "$kondisi"; ?>"> <?php echo "$kondisi"; ?>  </option>
           <option value="baru"> baru  </option>
              <option value="bekas"> bekas  </option>
            </select>
     </div>
     <div class="form-group col-md-3">
         <label for="inputPassword4">Berat (gram)</label>

         <input class="form-control"  name="berat" value="<?php echo "$berat"; ?>" placeholder="berat" type="number">
         <input class="form-control"  name="id_toko" value="<?php echo "$toko[id_toko]"; ?>" placeholder="" type="hidden">
     </div>
     <div class="form-group col-md-3">
         <label for="inputPassword4">Stok </label>

         <input class="form-control"  name="stok" value="<?php echo "$stok"; ?>" placeholder="stok produk" type="number">

     </div>
 </div>
 <!--  -->
 <div class="form-row">
     <div class="form-group col-md-12">
         <label for="inputEmail4">Deskripsi produk</label>
       <textarea class="form-control" name="deskripsi" rows="8" cols="85"><?php echo "$deskripsi"; ?></textarea>
     </div>

 </div>


 <button id="submit" class="btn btn-primary">simpan</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
