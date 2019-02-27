<?php $r=mysqli_fetch_array(mysqli_query($con, "select * from article where id_article='2'")) ?>

<section id="page-content">
    <div class="container">
      <h1><?php echo "$r[judul]"; ?></h1>
      <hr>
<?php echo "$r[isi]"; ?>
    </div>
  </section>
