<?php
session_start();
include 'connect.php';
error_reporting(0);
$id_produk=$_POST['id_produk'];
$id_toko=$_POST['id_toko'];
$qty=$_POST['qty'];
$harga=$_POST['harga'];
$espedisi=$_POST['espedisi'];
$service=$_POST['service'];
$destination=$_POST['destination'];
$weight=$_POST['weight']*$qty;
$session_id=session_id();
$a=mysqli_query($con, "select * from order_produk where id_produk='$id_produk' and session_id='$session_id'  ");

?>
<?php
if (mysqli_num_rows($a) > 0 ) {
  echo "<script type='text/javascript'>
    $('.info').notify('produk sudah ditambahkan ke keranjang', 'success');
  </script>";
  echo "<script type='text/javascript'> window.location.href = './keranjang.aspx' </script>";

} elseif (!empty($id_produk && $qty && $harga) ) {

  $t=mysqli_fetch_array(mysqli_query($con, "select * from toko where id_toko='$id_toko'"));
  $origin=mysqli_fetch_array(mysqli_query($con, "select * from city where city_id='$t[city_id]'"));


  						$url="http://booraq.codercoffee.id/cost.php?destination=".$destination."&origin=".$origin['city_id']."&weight=". $weight*100 ."&courier=$espedisi";
  						$fileget=file_get_contents($url);
  						$code=json_decode($fileget,true);
              // $epedisi ="".$code['rajaongkir']['results'][0]['code']."";
              // $service ="".$code['rajaongkir']['results'][0]['costs'][1]['service']."";
              $ongkir ="".$code['rajaongkir']['results'][0]['costs'][1]['cost'][0]['value']."";


  $a=mysqli_query($con, "insert into order_produk (session_id,id_produk, email, qty, harga, tanggal, jam, courier, service, weight, ongkir, destination, origin) values ('$session_id','$id_produk','$_SESSION[user_session]','$qty','$harga','$date','$jam','$espedisi','$service','$weight','$ongkir','$destination','$origin[city_id]')");
  echo "<script type='text/javascript'>
    $('.info').notify('produk berhasil dimasukan ke keranjang', 'success');
  </script>";
    echo "<script type='text/javascript'> window.location.href = './keranjang.aspx' </script>";

}
else {

  ?>
<script type="text/javascript">
  $('.info').notify("data belum lengkap", "warn");
</script>

<?php
}
 ?>
