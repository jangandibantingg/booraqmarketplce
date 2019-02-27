<?php $r=mysqli_fetch_array(mysqli_query($con, "select * from article where id_article='1'")) ?>
<div class="respond-form" id="respond">

    <form id="loginform" action="control/post-article.php" class="form-gray-fields" enctype="multipart/form-data">

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="upper" for="comment"><i class="fa fa-book"></i> Tentang kami</label>

                    <textarea class="form-control required" name="isi" rows="9" placeholder="Enter article" id="comment" aria-required="true">
                      <?php echo "$r[isi]"; ?>
                    </textarea>
                </div>
            </div>
        </div>
        <input type="hidden" name="id" value="1">
        <input type="hidden" name="judul" value="TENTANG KAMI">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group text-center">
                    <button class="btn" id="submit">Submit artickle</button>
                </div>
            </div>
        </div>
    </form>
      <span id='info' class="info"></span>
</div>
