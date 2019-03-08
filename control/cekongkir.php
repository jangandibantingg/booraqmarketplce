<?php
error_reporting(0);
$service=$_POST['service'];
$destination=$_POST['destination'];
$origin=$_POST['origin'];
$weight=$_POST['weight'];

// $a=mysqli_query($con, "select * from order_produk where id_produk='$id_produk' and session_id='$session_id'  ");


if (empty($service)) {
  echo '
  <script type="text/javascript">
    $.notify("Warning:anda belum memilih espedisi", "warn");
  </script>

  ';
}elseif (empty($destination)) {
  echo '
  <script type="text/javascript">
    $.notify("Warning:anda belum memilih destinasi tujuan pengiriman", "warn");
  </script>

  ';
}else{
$url="http://booraq.codercoffee.id/cost.php?destination=".$destination."&origin=".$origin."&weight=".$weight."&courier=$service";
$fileget=file_get_contents($url);
$code=json_decode($fileget,true);

$ongkir ="".$code['rajaongkir']['results'][0]['costs'][0]['cost'][0]['value']."";
if ($ongkir > 0) {
  echo "$ongkir";
}else {
  echo '
  <script type="text/javascript">
    $.notify("Warning:server sibuk", "warn");
  </script>


  ';

}
}
 ?>
