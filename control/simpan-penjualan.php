<?php
$act=$_GET['pros'];

if ($act == 'penjualan') {
  include 'connect.php';
  mysqli_query($con, "update orders set cashier='Y' where cashier='N' and transaksi='penjualan' ");
  echo "<script>window.location.href='../?page=$act&act=success'</script>";


}

 ?>
