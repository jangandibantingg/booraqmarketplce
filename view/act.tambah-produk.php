<h3>Tambah Produk</h3>
   <form method="post" action="tambah-produk.html" id="upload_image" enctype="multipart/form-data">

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Upload Gambar Produk</label>
            <input type="file"  class="form-control" name="fupload" />

        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">nama Produk</label>
            <input class="form-control"  name="nama_produk" placeholder="nama Produk" type="text">
        </div>
    </div>

    <button id="submit" class="btn btn-primary">Upload</button>
</form>
   <div id="preview"></div>


<script>
$(document).ready(function(){
    $('#upload_image').on('submit', function(event){
     event.preventDefault();
     $.ajax({
      url:"tambah-produk.html",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(data){
        $('#preview').html(data);

      }
     })
    });
});
</script>
