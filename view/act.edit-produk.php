
<?php
$editproduk=mysqli_fetch_array(mysqli_query($con, "SELECT * from produk where id_produk='$_GET[id]' and email='$_SESSION[user_session]'" ));
$b=mysqli_fetch_array(mysqli_query($con, "select * from kategori where id_kategori='$editproduk[id_kategori_produk]' " ));

$harga=$editproduk['harga'];
$kondisi=$editproduk['kondisi'];
$id_kategori=$b['id_kategori'];
$nama_kategori=$b['nama_kategori'];
$berat=$r['berat'];
$deskripsi=$r['deskripsi'];
?>

<h3><i class="mdi mdi-store"></i> <?php echo "$toko[nama_toko]"; ?></h3>
<hr>
<form method="post" id="loginform" action="edit-produk.html" enctype="multipart/form-data">

 <div class="form-row">
     <div class="form-group col-md-6">
         <label for="inputEmail4">Gambar</label>
       <img src="library/foto_produk/<?php echo "small_$editproduk[gambar]"; ?>"/>

     </div>
     <div class="form-group col-md-6">
         <label for="inputPassword4">nama Produk</label>
         <input class="form-control"  name="nama_produk" value="<?php echo "$editproduk[nama_produk]"; ?>" placeholder="nama Produk" type="text">
     </div>
 </div>
 <!--  -->
 <div class="form-row">
     <div class="form-group col-md-6">
         <label for="inputEmail4">kategori produk</label>
         <select class="form-control"  name="id_kategori">


              <?php
              ?>
              <option value="<?php echo "$id_kategori"; ?>"> <?php echo "$nama_kategori"; ?> </option>
              <option value="">- pilih kategori produk - </option>
              <?php
              $a=mysqli_query($con, "select * from kategori ");
                while ($editproduk=mysqli_fetch_array($a)) {
                  // code...
                  echo "<option value='$editproduk[id_kategori]'>$editproduk[nama_kategori]</optin>";
                }
               ?>

            </select>

     </div>
     <div class="form-group col-md-6">
         <label for="inputPassword4">harga </label>
         <input class="form-control"  name="harga" value="<?php echo $harga; ?>" placeholder="harga Produk" type="text">
     </div>
 </div>
 <!--  -->
 <div class="form-row">
     <div class="form-group col-md-6">
         <label for="inputEmail4">Kondisi</label>
         <select class="form-control"  name="kondisi">
           <option value="<?php echo "$editproduk[kondisi]"; ?>"><?php echo "$kondisi"; ?> </option>
           <option value="baru">-baru - </option>
              <option value="bekas">- bekas - </option>
            </select>
     </div>
     <div class="form-group col-md-6">
         <label for="inputPassword4">berat (KG)</label>

         <input class="form-control"  name="berat" value="<?php echo "$berat"; ?>" placeholder="berat" type="number">
         <input class="form-control"  name="id_toko" value="<?php echo "$toko[id_toko]"; ?>" placeholder="" type="hidden">
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
<div class="info">

</div>
