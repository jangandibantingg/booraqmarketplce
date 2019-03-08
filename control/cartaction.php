<?php
date_default_timezone_set('Asia/Jakarta');
session_start();
include 'connect.php';
error_reporting(0);
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
              // echo "$order_details";
         }
         if(mysqli_multi_query($con, $order_details))
         {
              unset($_SESSION["shopping_cart"]);
              echo "<script>window.location.href='./penagihan.aspx'</script>";
         }
    }


    ?>
<?php
include "library/partials/modal_login.php";
?>
