
    <div class="page-menu menu-outline style-1">
        <form class="" action="index.html" method="post">
          <div class="col-sm-4">


          <div class="form-group">

            <div class="form-group">
              <input type="cari" class="form-control"  aria-describedby="emailHelp" placeholder="cari produk yang anda inginkan">

            </div>

          </div>
          </div>
        </form>
    </div>
    <!-- end: Page Menu -->
 <!-- Content -->
    <section id="page-content">
        <div class="container">

            <!-- end: Portfolio Filter -->


            <h4>Produk terbaru</h4>

            <div id="portfolio" class="grid-layout portfolio-5-columns" data-margin="20">

              <?php
              $a=mysqli_query($con, "select * from produk order by id_produk asc limit 4 ");
              while ($r=mysqli_fetch_array($a)) {


               ?>

                <!-- portfolio item -->
                <div class="portfolio-item no-overlay pf-illustrations pf-media pf-icons pf-Media pf-graphics">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-slider">
                            <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay-timeout="1500">
                                <a href="./?page=produk&id=<?php echo "$r[id_produk]"; ?>"><img src="library/foto_produk/<?php echo "$r[gambar]"; ?>" alt=""></a>

                            </div>
                        </div>
                              <div class="portfolio-description">
                            <a href="./?page=produk&id=<?php echo "$r[id_produk]"; ?>">
                                <h3><?php echo "$r[nama_produk]"; ?></h3>
                                <span>IDR <?php  echo "".number_format($r['harga']).""; ?></span>
                                <!-- <p>deskripsi</p> -->
                            </a>

                            <a href="./?page=produk&id=<?php echo "$r[id_produk]"; ?>" class="btn btn-info"> beli </a>

                        </div>
                    </div>
                </div>
                <?php
              }
                 ?>


            </div>
            <h4>artikel terbaru</h4>

 <div id="blog" class="grid-layout post-4-columns m-b-30" data-item="post-item">

   <?php
   $u=mysqli_query($con, "select * from article where status='fleksibel' limit 4 ");
   while ($r=mysqli_fetch_array($u)) {


    ?>
   <div class="post-item border">
   <div class="post-item-wrap">
       <div class="post-image">
           <a href="#">
               <img alt="" src="library/images/blog/12.jpg">
           </a>

       </div>
       <div class="post-item-description">
           <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo tanggal_indo($r['date']); ?></span>
           <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
           <h2><a href="#"><?php echo "$r[judul]"; ?>
</a></h2>
           <!-- <p><?php echo substr($r['isi'], 0, 50) . '...'; ?></p> -->

           <a href="./?page=article&hal=<?php echo "$r[judul_seo]"; ?>" class="item-link">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>

       </div>
   </div>
</div>




        <!-- end: Post item-->

        <!-- Post item-->

        <!-- end: Post item-->


        <!-- Post item-->
        <?php
      }
         ?>
      </div>





                                               <h4>Produk Terlaris</h4>

                                               <div id="portfolio" class="grid-layout portfolio-5-columns" data-margin="20">

                                                 <?php
                                                 $a=mysqli_query($con, "select * from produk order by id_produk asc limit 4 ");
                                                 while ($r=mysqli_fetch_array($a)) {


                                                  ?>

                                                   <!-- portfolio item -->
                                                   <div class="portfolio-item no-overlay pf-illustrations pf-media pf-icons pf-Media pf-graphics">
                                                       <div class="portfolio-item-wrap">
                                                           <div class="portfolio-slider">
                                                               <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay-timeout="1500">
                                                                   <a href="./?page=produk&id=<?php echo "$r[id_produk]"; ?>"><img src="library/foto_produk/<?php echo "$r[gambar]"; ?>" alt=""></a>

                                                               </div>
                                                           </div>
                                                                 <div class="portfolio-description">
                                                               <a href="./?page=produk&id=<?php echo "$r[id_produk]"; ?>">
                                                                   <h3><?php echo "$r[nama_produk]"; ?></h3>
                                                                   <span>IDR <?php  echo "".number_format($r['harga']).""; ?></span>
                                                                   <p>deskripsi</p>
                                                               </a>

                                                               <a href="./?page=produk&id=<?php echo "$r[id_produk]"; ?>" class="btn btn-info"> beli </a>

                                                           </div>
                                                       </div>
                                                   </div>
                                                   <?php
                                                 }
                                                    ?>


                                               </div>

            <!-- end: Portfolio -->
        </div>
    </section>
    <section class="p-t-60">
               <div class="container">
                   <div class="heading heading-center">
                       <h2>Media islami</h2>
                       <!-- <span class="lead">Our awesome clients we've had the pleasure to work with! </span> -->
                   </div>
                   <div class="carousel" data-items="6" data-items-sm="4" data-items-xs="3" data-items-xxs="2" data-margin="20" data-arrows="false" data-autoplay="true" data-autoplay-timeout="3000" data-loop="true">
                       <div>
                           <a href="#"><img alt="" src="library/images/clients/1.png"> </a>
                       </div>
                       <div>
                           <a href="#"><img alt="" src="library/images/clients/2.png"> </a>
                       </div>
                       <div>
                           <a href="#"><img alt="" src="library/images/clients/3.png"> </a>
                       </div>
                       <div>
                           <a href="#"><img alt="" src="library/images/clients/4.png"> </a>
                       </div>
                       <div>
                           <a href="#"><img alt="" src="library/images/clients/5.png"> </a>
                       </div>
                       <div>
                           <a href="#"><img alt="" src="library/images/clients/6.png"> </a>
                       </div>
                       <div>
                           <a href="#"><img alt="" src="library/images/clients/7.png"> </a>
                       </div>
                       <div>
                           <a href="#"><img alt="" src="library/images/clients/8.png"> </a>
                       </div>
                       <div>
                           <a href="#"><img alt="" src="library/images/clients/9.png"> </a>
                       </div>
                   </div>
               </div>

           </section>
