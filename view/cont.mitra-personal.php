<?php
  if(!empty($_SESSION['user_session'])){

?>
<main class="page-content">

    <div class="container mtb-30">
        <div class="card">
            <div class="card-body ">
                <form  method="post" id="upload_image" enctype="multipart/form-data" >
                    <!-- Step 1 -->
                    <h6> <i class="icon-user"></i> Data Personal</h6>
                    <hr>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstName1">Nama Depan :</label>
                                    <input type="text" id="firstName1"  value="<?php echo "$member[nama_depan]"; ?>" name="nama_depan" readonly></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastName1">Nama Belakang :</label>
                                    <input type="text"  id="lastName1" name="nama_belakang" value="<?php echo "$member[nama_belakang]"; ?>" readonly></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailAddress1">Email :</label>
                                    <input type="email"  id="emailAddress1" name="email" value="<?php echo "$member[email]"; ?>" readonly></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="namatoko">Nama Toko :</label>
                                    <input type="text"  name="nama_toko"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="namatoko">No handphone :</label>
                                    <input type="text"  name="no_hp" value="<?php echo "$member[no_hp]"; ?>" readonly></div>
                            </div>

                        </div>


                        <div class="row">

                          <div class="col-md-12">
                            <div class="input-group mb-3">
                             <div class="input-group-prepend">
                               <span class="input-group-text" id="basic-addon3">https://booraq.id/toko/</span>
                             </div>
                             <input type="text" name="url" class="form-control" id="basic-url" aria-describedby="basic-addon3" />
                            </div>
                          </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="username">KTP :</label>
                                    <input type="file" id="input-file-now" class="dropify" name="no_ktp">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="username">NPWP :</label>
                                    <input type="file" id="input-file-now" class="dropify" name="no_npwp">
                                </div>
                            </div>
                        </div>

                    </section>

                    <h6> <i class="icon-directions"></i> Alamat</h6>
                    <hr>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="int1">lokasi toko :</label>
                                    <select class="chosen " name="city_id">

                                      <?php $kota=mysqli_fetch_array(mysqli_query($con, "select city_name from city where city_id='$r[id_kota]'")) ?>
                                      <!-- <option value="<?php echo "$r[id_kota]"; ?>"> <?php echo "".$kota['city_name'].""; ?></option> -->

                                      <option value="">- pilih lokasi toko anda - </option>
                                      <?php
                                      $a=mysqli_query($con, "select * from city ");
                                        while ($r=mysqli_fetch_array($a)) {
                                          // code...
                                          echo "<option value='$r[city_id]'>$r[city_name]</optin>";
                                        }
                                       ?>

                                    </select>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Kode Post :</label>
                                    <input type="text" name="kodepost" />
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat :</label>
                                    <textarea rows="5" name="aLamat"></textarea>
                                </div>

                            </div>
                        </div>
                    </section>
                    <button id="postsubmit" class="btn btn-info" name="button"> Submit </button>
                </form>
                <label for="" id="info" class="info"></label>
                <label for="" id="preview" class="info"></label>
            </div>
        </div>

    </div>

</main>
<script>
$(document).ready(function(){
    $('#upload_image').on('postsubmit', function(event){
     event.preventDefault();
     $.ajax({
      url:"buat-toko.html",
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
<?php
}else {
  echo '
   <main class="page-content">

       <div class="container mtb-30">
   <center> <h5> <img src="https://img.icons8.com/ios-glyphs/48/000000/add-user-male.png"> Untuk menjadi Mitra anda harus register terlebih dahulu</h5> <center>
       </div>
     </main> ';
  include 'view/cont.register.php';
}
 ?>
