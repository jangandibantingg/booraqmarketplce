<section class="sidebar-right">
           <div class="container">
               <div class="row">
                   <div class="content col-lg-12">
                       <h4>article <small> <a href="./?page=admin&hal=add-article"> <i class="icon-file-plus"></i>tambah article</a> </small>  </h4>
                       <table class="table">
                           <thead>
                               <tr>
                                   <th scope="col">#</th>
                                   <th scope="col">Judul</th>
                                   <th scope="col">link</th>
                                   <th scope="col">action</th>
                               </tr>
                           </thead>
                           <tbody>
                             <?php
                             if (!empty($_GET['dell'])) {
                               mysqli_query($con, "delete from article where id_article='$_GET[dell]'");
                             }
                              $no=1;
                              $a=mysqli_query($con, "select * from article where status='fleksibel'");
                              while ($r=mysqli_fetch_array($a)) {
                              echo " <tr>
                                   <th scope='row'>$no</th>
                                   <td>$r[judul]</td>
                                   <td><a href='./?page=article&hal=$r[judul_seo]' target='_blank'><i class='icon-book-open1'></i> open</a></td>
                                   <td><a href='./?page=admin&hal=edit-article&id=$r[id_article]'> <i class='icon-edit1'></i></a> | <a href='./?page=admin&hal=article&dell=$r[id_article]'><i class='icon-trash-2'></i></a></td>
                               </tr>";
                               $no++;
                              }
                              ?>


                           </tbody>
                       </table>
</div></div></div></section>
