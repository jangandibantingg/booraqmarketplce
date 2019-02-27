
<div class="respond-form" id="respond">

    <form id="loginform" action="control/post-article.php?act=post" class="form-gray-fields" enctype="multipart/form-data">

        <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label class="upper" for="comment"><i class="fa fa-book"></i> judul article</label>

                <input type="text" class="form-control" name="judul" placeholder="isi judul article" value="">
              </div>
                <div class="form-group">
                    <label class="upper" for="comment"><i class="fa fa-book"></i> isi artikel</label>
                    <span id='info' class="info"></span>
                    <textarea class="form-control required" name="isi" rows="9" placeholder="Enter article" id="comment" aria-required="true">
                    </textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group text-center">
                    <button class="btn" id="submit">Submit artickle</button>
                </div>
            </div>
        </div>
    </form>
</div>
