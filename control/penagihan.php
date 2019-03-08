<?php
if(empty($_POST['service'])){
  echo "<script type='text/javascript'>
    $('.info').notify('pilih kurir terlebih dahulu untuk melanjutkan ke proses pembayaran', 'warn');
  </script>";

}else {



session_start();
include 'connect.php';
error_reporting(0);



$service=$_POST['service'];
$destination=$_POST['destination'];
$origin=$_POST['origin'];
$weight=$_POST['weight'];
$subtotalharga=$_POST['subtotalharga'];

// $a=mysqli_query($con, "select * from order_produk where id_produk='$id_produk' and session_id='$session_id'  ");
$url="http://booraq.codercoffee.id/cost.php?destination=".$destination."&origin=".$origin."&weight=". $weight ."&courier=$service";
$fileget=file_get_contents($url);
$code=json_decode($fileget,true);

$ongkir ="".$code['rajaongkir']['results'][0]['costs'][0]['cost'][0]['value']."";
$total=$ongkir+$subtotalharga;
$orderid=rand(0,100);
 ?>


<div class="table-responsive">
  <h4>Order Total</h4>
  <!-- <p><?php echo "$url"; ?></p> -->



  <table class="table">
    <tbody>
      <tr>
        <td class="cart-product-name">
          <strong>Order Subtotal</strong>
        </td>

        <td class="cart-product-name text-right">
          <span class="amount"><?php echo "".number_format($subtotalharga).""; ?></span>
        </td>
      </tr>
      <tr>
        <td class="cart-product-name">
          <strong>Ongkos Kirim</strong>
        </td>

        <td class="cart-product-name  text-right">
          <span class="amount"><?php echo "".number_format($ongkir).""; ?></span>
        </td>
      </tr>
      <tr>
        <td class="cart-product-name">
          <strong>Kode Voucher</strong>
        </td>

        <td class="cart-product-name  text-right">
          <span class="amount">0</span>
        </td>
      </tr>
      <tr>
        <td class="cart-product-name">
          <strong>Infaq</strong>
        </td>

        <td class="cart-product-name  text-right">
          <span class="amount">0</span>
        </td>
      </tr>
      <tr>
        <td class="cart-product-name">
          <strong>Total Pembayaran</strong>
        </td>

        <td class="cart-product-name text-right">
          <span class="amount color lead"><strong><?php echo "".number_format($total).""; ?></strong></span>
        </td>
      </tr>

      <tr>
        <td></td>
        <td class="cart-product-name text-right">

          <?php
          require_once(dirname(__FILE__) . '/Veritrans.php');

          //Set Your server key
          Veritrans_Config::$serverKey = "SB-Mid-server-QyGCZCBENqNhZX7OGp28BFN5";

          // Uncomment for production environment
          // Veritrans_Config::$isProduction = true;

          Veritrans_Config::$isSanitized = true;
          Veritrans_Config::$is3ds = true;

          $transaction = array(
              'transaction_details' => array(
                  'order_id' => "$orderid",
                  'gross_amount' => $total // no decimal allowed
                  )
              );

          $snapToken = Veritrans_Snap::getSnapToken($transaction);
          ?>
            <input type="hidden" name="totalbayar" value="<?php echo "$total"; ?>">
            <input type="hidden" name="ongkir" value="<?php echo "$ongkir"; ?>">
            <button id="pay-button" class="btn btn-outline-info" name="bayar">Bayar Sekarang</button>
            <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-ta7lwRsG6thITb6F"></script>
            <script type="text/javascript">
              document.getElementById('pay-button').onclick = function(){
                // SnapToken acquired from previous step
                snap.pay('<?=$snapToken?>', {
                  // Optional
                  onSuccess: function(result){
                    /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                  },
                  // Optional
                  onPending: function(result){
                    /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSO

                    N.stringify(result, null, 2);
                  },
                  // Optional
                  onError: function(result){
                    /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                  }
                });
              };
            </script>

        </td>
      </tr>
    </tbody>

  </table>

</div>
<?php
}
 ?>
