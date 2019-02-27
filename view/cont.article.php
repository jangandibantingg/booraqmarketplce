<main class="page-content">
  <div class="container">
<?php

if (!empty($_GET['hal'])) {
  $hal=$_GET['hal'];

 ?>
 <?php $r=mysqli_fetch_array(mysqli_query($con, "select * from article where judul_seo='$hal'")) ?>


       <h1><?php echo "$r[judul]"; ?></h1>
       <hr>
 <?php echo "$r[isi]"; ?>



<?php
}else {


 ?>

 <?php
 include_once "library/partials/home_blog.php";
 include_once "library/partials/home_media_islamic.php";

 ?>

<?php
}
?>
</div>
</main>
