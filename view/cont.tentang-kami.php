<?php $r=mysqli_fetch_array(mysqli_query($con, "select * from article where id_article='1'")) ?>
<main class="page-content">
       <div class="blog-area ptb-30">
           <div class="container">
               <div class="row">

      <h1><?php echo "$r[judul]"; ?></h1>
      <hr>
        <?php echo "$r[isi]"; ?>


      </div>
    </div>
</div>
</main>
