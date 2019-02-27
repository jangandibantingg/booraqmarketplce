<?php
if ($_GET['dell']) {
  mysqli_query($con, "delete from produk where id_produk='$_GET[dell]'");

}
$a=mysqli_query($con, "select * from produk where email='$_SESSION[user_session]' ");
if (mysqli_num_rows($a) == 0) {
  echo "<center><h3>Tidak ada Produk</h3>";
  echo "<a href='?page=profile&act=tambah-produk' class='btn btn-primary'><i class='mdi mdi-folder-plus'></i> tambah produk</a></center>";
}else{


 ?>

 <h4>Daftar Produck</h4>

 <div class="product-slider new-best-featured-slider slider-navigation-2">

   <?php
   $a=mysqli_query($con, "select * from produk order by id_produk asc limit 8 ");
   while ($r=mysqli_fetch_array($a)) {


    ?>

     <div class="slider-item-col">
         <!-- Single Product -->

         <article class="product">
             <div class="product-image">
                 <a class="product-thumb" href="./?page=produk&id=<?php echo "$r[id_produk]"; ?>">
                     <img class="product-frontimage" src="library/foto_produk/<?php echo "$r[gambar]"; ?>"
                          alt="product image">
                     <img class="product-backimage" src="library/foto_produk/<?php echo "$r[gambar]"; ?>"
                          alt="product image">
                 </a>
                 <ul class="product-actionbox">
                     <li><a href="?page=profile&act=edit-produk&id=<?php echo "$r[id_produk]"; ?>"><i class="mdi mdi-pencil"></i></a></li>

                     <li><a href="?page=profile&act=daftar-produk&dell=<?php echo "$r[id_produk]"; ?>"><i class="mdi mdi-delete"></i></a></li>
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

<?php
}
 ?>
