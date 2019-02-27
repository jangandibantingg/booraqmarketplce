<?php
date_default_timezone_set('Asia/Jakarta');
session_start();
include 'connect.php';
error_reporting(0);
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="library/assets/css/core.vendors.css">
    <link rel="stylesheet" href="library/assets/css/icons.css">
    <link rel="stylesheet" href="library/assets/css/app.css">

</head>
<body>
<div class="wrapper">

    <?php
        include_once "library/partials/header.php";
        include_once "library/partials/hero-slider.php";
    ?>


    <?php


    if(empty($_SESSION['user_session'])){
      echo "<script>window.location.href='./login.aspx'</script>";

    ?>

    <?php
  }

    elseif(isset($_POST["place_order"]))
    {

         $order_id = "";
         $_SESSION["order_id"] = $order_id;
         $order_details = "";
         foreach($_SESSION["shopping_cart"] as $keys => $values)
         {
              $id_produk  = $values['product_id'];
              $email      = $values['email'];
              $weight     = $values['weight'];
              $harga      = $values['product_price'];
              $qty        = $values['product_quantity'];


              $order_details .= "
              INSERT INTO order_produk(id_produk,email,weight,harga,tanggal,jam,status,qty)
              VALUES('$id_produk','$email','$weight','$harga','$date','$jam','N','$qty');
              ";
              echo "$order_details";
         }
         if(mysqli_multi_query($con, $order_details))
         {
              unset($_SESSION["shopping_cart"]);

              echo "<script>window.location.href='./penagihan.aspx'</script>";
         }
    }


    ?>

    <?php
        include_once "library/partials/footer.php";
    ?>


</div>

<?php
include "library/partials/modal_login.php";
?>
<script src="library/assets/vendors/jquery/jquery.min.js"></script>
<script src="library/assets/vendors/popper.js/popper.min.js"></script>
<script src="library/assets/vendors/bootstrap/bootstrap.min.js"></script>


<script src="library/assets/js/core.vendors.js"></script>
<script src="library/assets/js/app.js"></script>
<script type="text/javascript" src="ajax/signup.js"></script>
<script type="text/javascript" src="ajax/notify.min.js"></script>
<script type="text/javascript" src="ajax/cart.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

</body>
</html>
