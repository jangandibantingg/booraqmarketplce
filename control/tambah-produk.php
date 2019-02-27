<?php
session_start();
include 'fungsi_thumb.php';
include 'connect.php';
error_reporting(0);
// var_dump($_POST);

$lokasi_file    = $_FILES['fupload']['tmp_name'];
$tipe_file      = $_FILES['fupload']['type'];
$nama_file      = $_FILES['fupload']['name'];
$acak           = rand(1,99);
$nama_file_unik = $acak.$nama_file;
$size= $_FILES['fupload']['size'];
$ukuran_max_foto=1000000; // Dalam bytes

if ($_POST['nama_produk'] == '') {
  // code..
  echo "nama produk harus diisi";
}elseif (empty($lokasi_file)){
echo "masukan gambar";
  // echo "<script type='text/javascript'>
  //   $('.info').notify('masukan gambar', 'warn');
  // </script>";
}elseif (!($tipe_file =="image/jpeg" OR
           $tipe_file =="image/jpg" OR
           $tipe_file=="image/gif" OR
           $tipe_file=="image/png" OR
           $tipe_file=="image/wbmp" )){
             //
             // echo "<script type='text/javascript'>
             //   $('.info').notify('gambar harus bertipe *.JPG', 'success');
             // </script>";
             echo "gambar harus bertipe .JPG";
}elseif($size > $ukuran_max_foto){
      echo "<script>window.alert('Upload gagal! Ukuran Foto Anda $size bytes lebih dari $ukuran_max_foto bytes, Terlalu Besar! Silahkan dikurangi');window.location=('?page=profile&act=tambah-produk')</script>";
}else{
function antiinjection($data){
$filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
return $filter_sql;
}

// $produk_seo      = seo_title($_POST['nama_produk']);

// Apabila ada gambar yang diupload
if (!empty($lokasi_file)){
// Cek file type
if (($tipe_file =="image/jpeg" OR
      $tipe_file=="image/gif" OR
      $tipe_file=="image/png" OR
      $tipe_file=="image/wbmp" )){
      UploadImage($nama_file_unik);
      $_SESSION['gambar'] = $nama_file_unik;
      $_SESSION['nama_produk']=$_POST['nama_produk'];

}

echo "<script>window.alert('tambah deskripsi');window.location=('./?page=profile&act=tambah-deskripsi')</script>";



}
}


 ?>
 <hr>
