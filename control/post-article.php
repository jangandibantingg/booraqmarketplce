<?php
session_start();
include 'connect.php';
error_reporting(0);

$isi=$_POST['isi'];
$judul=$_POST['judul'];

function seo_title($s) {
    $c = array (' ');
    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d

    $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $s;
}

$judul_seo=seo_title($judul);

if ($_GET['act'] == 'post') {

  if($isi == '                    ' ){
      echo "
      <script type='text/javascript'>
        $('.info').notify('submit button sekali lagi', 'warn');
      </script>
      ";
  }else{
    mysqli_query($con," insert article (judul,judul_seo,isi,date) values ('$judul','$judul_seo','$isi','$date')  ");
    echo "
    <script type='text/javascript'>
      $('.info').notify('artikel berhasil ditambah', 'success');
    </script>
    ";
  }

}else {
$id=$_POST['id'];
if (  !empty ( $id && $isi && $judul ) ) {
  mysqli_query($con," update article set judul='$judul', isi='$isi' where id_article='$id' ");
  // echo "<script type='text/javascript'> window.location.href = './?page=kelola-toko&hal=produk' </script>";
?>

<script type="text/javascript">
  $('.info').notify("artikel berhasil di update", "success");
</script>

<?php
}else {

  ?>
<script type="text/javascript">
  $('.info').notify("data belum lengkap", "warn");
</script>

<?php
}
}
 ?>
