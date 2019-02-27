
<div class="latest-blog-area bg-white ptb-40">
    <div class="container">
        <div class="section-title">
            <h3>BLOG</h3>
            <ul class="nav" id="blogtabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="article_tab" data-toggle="tab" href="#article_area"
                       role="tab"
                       aria-controls="bstab1-area1" aria-selected="true">ARTICLE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="hasanah_tab" data-toggle="tab" href="#hasanah_islam_area" role="tab"
                       aria-controls="hasnah_tab"
                       aria-selected="false">Hasanah Islam</a>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="blog-tab-content">
            <div class="tab-pane fade show active" id="article_area" role="tabpanel" aria-labelledby="article_area">
                <div class="product-slider blogitem-slider slider-navigation-2">


                     <?php
                     $u=mysqli_query($con, "select * from article where status='fleksibel' limit 4 ");
                     while ($r=mysqli_fetch_array($u)) {
                       ?>
                    <div class="slider-item-col">
                        <!-- Single Blog -->
                        <article class="blogitem">
                            <div class="blogitem-thumb">
                                <a href="blog-detail.html">
                                    <img src="library/assets/images/blog/blog1.jpg" alt="blog item image">
                                </a>
                            </div>
                            <div class="blogitem-content">
                                <h4 class="blogitem-title"><a href="blog-detail.html"><?php echo "$r[judul]"; ?></a></h4>
                                <div class="blogitem-meta">
                                          <span class="blogitem-date"><i
                                                  class="ion ion-md-calendar"></i> July 11, 2018</span>
                                    <span class="blogitem-author"><a href="blog.html"><i
                                                class="ion ion-md-person"></i>By Admin</a></span>
                                </div>
                            </div>
                        </article>
                        <!--// Single Blog -->
                    </div>
                  <?php } ?>


                </div>
            </div>
            <div class="tab-pane fade" id="hasanah_islam_area" role="tabpanel"
                 aria-labelledby="hasanah_islam_tab_area">
                <div class="product-slider blogitem-slider slider-navigation-2">
                  <?php
                  $u=mysqli_query($con, "select * from article where status='fleksibel' limit 4 ");
                  while ($r=mysqli_fetch_array($u)) {
                    ?>
                 <div class="slider-item-col">
                     <!-- Single Blog -->
                     <article class="blogitem">
                         <div class="blogitem-thumb">
                             <a href="blog-detail.html">
                                 <img src="library/assets/images/blog/blog1.jpg" alt="blog item image">
                             </a>
                         </div>
                         <div class="blogitem-content">
                             <h4 class="blogitem-title"><a href="blog-detail.html"><?php echo "$r[judul]"; ?></a></h4>
                             <div class="blogitem-meta">
                                       <span class="blogitem-date"><i
                                               class="ion ion-md-calendar"></i> July 11, 2018</span>
                                 <span class="blogitem-author"><a href="blog.html"><i
                                             class="ion ion-md-person"></i>By Admin</a></span>
                             </div>
                         </div>
                     </article>
                     <!--// Single Blog -->
                 </div>
               <?php } ?>




                </div>
            </div>

        </div>
    </div>
</div>
