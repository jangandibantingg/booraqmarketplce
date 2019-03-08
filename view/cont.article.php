

 <main class="page-content">
        <div class="blog-area ptb-30">
            <div class="container">
                <div class="row">
                  <?php

                  if (!empty($_GET['hal'])) {
                    $hal=$_GET['hal'];

                   ?>
                   <?php $r=mysqli_fetch_array(mysqli_query($con, "select * from article where judul_seo='$hal'")) ?>
                    <div class="col-lg-9">
                        <div class="blog-details">
                            <article class="blogitem2">
                                <div class="blogitem2-image">
                                    <img src="library/assets/images/blog/blog4.jpg" alt="blog image">
                                </div>
                                <div class="blogitem2-content">
                                    <h2><?php echo "$r[judul]"; ?></h2>
                                    <div class="blogitem2-meta">
                                        <!-- <span>Posted By <a href="">Admin</a></span> -->
                                        <span><?php echo tanggal_indo($r['date']); ?></span>
                                        <span><a href="">article</a></span>
                                    </div>
                                    <?php echo "$r[isi]"; ?>
                                </div>
                            </article>
                            <div class="blog-details-footer">
                                <div class="blog-details-tags">
                                    <h5>Tags: </h5>
                                    <ul>
                                        <li><a href="">Lifestyle</a></li>
                                        <li><a href="">Branding</a></li>
                                        <li><a href="">Fashion</a></li>
                                    </ul>
                                </div>
                                <div class="blog-details-share">
                                    <h5>Share: </h5>
                                    <ul>
                                        <li><a href="#"><i class="ion ion-logo-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion ion-logo-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion ion-logo-youtube"></i></a></li>
                                        <li><a href="#"><i class="ion ion-logo-google"></i></a></li>
                                        <li><a href="#"><i class="ion ion-logo-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-detals-comment">
                                <div class="commentlist mt-30">
                                <!--  -->
                                <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://booraq-id-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


                                </div>


                            </div>
                        </div>
                    </div>
                  <?php }else{ ?>
                    <div class="col-lg-9 ">
                      <div class="blogs-wrapper">
                          <div class="row">

                    <!-- Single Blog -->
                    <?php
                    $u=mysqli_query($con, "select * from article where status='fleksibel' limit 10 ");
                    while ($r=mysqli_fetch_array($u)) {
                      ?>

                    <div class="col-lg-6 col-md-6 col-12">
                        <article class="blogitem2">
                            <div class="blogitem2-image">
                                <a href="./?page=article&hal=<?php echo "$r[judul_seo]"; ?>">
                                    <img src="library/assets/images/blog/blog1.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blogitem2-content">
                                <h4><a href="./?page=article&hal=<?php echo "$r[judul_seo]"; ?>"><?php echo "$r[judul]"; ?></a></h4>
                                <div class="blogitem2-meta">
                                    <span>Posted By <a href="./?page=article&hal=<?php echo "$r[judul_seo]"; ?>l">Admin</a></span>
                                    <span>Jul 11TH, 2018</span>
                                    <span><a href="./?page=article&hal=<?php echo "$r[judul_seo]"; ?>l">Fashion</a></span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industrys standard dummy
                                    text ever since the 1500s, when an unknown printer took a
                                    galley of type and scrambled it to make a type specimen book.</p>
                                <a href="./?page=article&hal=<?php echo "$r[judul_seo]"; ?>" class="readmore">Continue Reading...</a>
                            </div>
                        </article>
                    </div>
                  <?php } ?>
                    <!--// Single Blog -->    <!-- Single Blog -->

                        <!--// Single Blog -->

                      </div>
                                                <div class="cr-pagination pt-30">
                                                    <ul>
                                                        <li><a href="shop-rightsidebar.html"><i class="ion ion-ios-arrow-back"></i>
                                                                Previous</a></li>
                                                        <li class="active"><a href="shop-rightsidebar.html">1</a></li>
                                                        <li><a href="shop-rightsidebar.html">2</a></li>
                                                        <li><a href="shop-rightsidebar.html">Next <i class="ion ion-ios-arrow-forward"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>



                  <?php } ?>
                    <!-- Blog Widgets -->
                    <div class="col-lg-3">
                        <div class="blog-widgets">

                            <!-- Single Widget -->
                            <div class="single-widget widget-search">
                                <form class="widget-search-form" action="#">
                                    <input type="text" placeholder="Search...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <div class="single-widget widget-categories">
                                <h3 class="widget-title">CATEGORIES</h3>
                                <ul>
                                    <li><a href="">Lifestyle</a></li>
                                    <li><a href="">Photography</a></li>
                                    <li><a href="">Portfolio</a></li>
                                    <li><a href="">Branding</a></li>
                                    <li><a href="">Electronics</a></li>
                                    <li><a href="">Fashion</a></li>
                                </ul>
                            </div>
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <div class="single-widget widget-recentblogs">
                                <h3 class="widget-title">RECENT BLOGS</h3>
                                <ul>

                                  <?php
                                  $u=mysqli_query($con, "select * from article where status='fleksibel' limit 4 ");
                                  while ($r=mysqli_fetch_array($u)) {
                                    ?>

                                    <li>
                                        <a href="./?page=article&hal=<?php echo "$r[judul_seo]"; ?>" class="image">
                                            <img src="library/assets/images/blog/blog1.jpg" alt="blog image">
                                        </a>
                                        <h6><a href="./?page=article&hal=<?php echo "$r[judul_seo]"; ?>"><?php echo "$r[judul]"; ?></a></h6>
                                        <span>Posted By <a href="./?page=article&hal=<?php echo "$r[judul_seo]"; ?>l">Admin</a></span>
                                    </li>
                                    <?php
                                    }
                                     ?>
                                </ul>
                            </div>
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <!-- <div class="single-widget widget-banner">
                                <div class="imgbanner">
                                    <a href="">
                                        <img src="library/assets/images/banner/banner-image-9.jpg" alt="banner">
                                    </a>
                                </div>
                            </div> -->
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <div class="single-widget widget-tags">
                                <h3 class="widget-title">TAGS</h3>
                                <ul>
                                    <li><a href="">Audio</a></li>
                                    <li><a href="">Video</a></li>
                                    <li><a href="">Media</a></li>
                                    <li><a href="">Music</a></li>
                                    <li><a href="">Lifestyle</a></li>
                                    <li><a href="">Branding</a></li>
                                    <li><a href="">Fashion</a></li>
                                </ul>
                            </div>
                            <!--// Single Widget -->

                        </div>
                    </div>
                    <!--// Blog Widgets -->

                </div>
            </div>
        </div>
    </main>
