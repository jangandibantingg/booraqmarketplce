
<?php $r=mysqli_fetch_array(mysqli_query($con, "select * from article where id_article='$_GET[id]'")) ?>
<div class="respond-form" id="respond">

    <form id="loginform" action="control/post-article.php" class="form-gray-fields" enctype="multipart/form-data">

        <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label class="upper" for="comment"><i class="fa fa-book"></i> judul article</label>

                <input type="text" class="form-control" name="judul" placeholder="isi judul article" value="<?php echo "$r[judul]"; ?>">
              </div>
                <div class="form-group">
                    <label class="upper" for="comment"><i class="fa fa-book"></i> isi artikel</label>
                    <span id='info' class="info"></span>
                    <textarea class="form-control required" name="isi" rows="9" placeholder="Enter article" id="comment" aria-required="true"><?php echo "$r[isi]"; ?>
                    </textarea>
                </div>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo "$r[id_article]"; ?>">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group text-center">
                    <button class="btn" id="submit">Submit artickle</button>
                </div>
            </div>
        </div>
    </form>
</div>
