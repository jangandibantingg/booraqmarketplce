
<?php
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
require_once "../control/db.php";
require_once "../control/User.php";
// require_once "../control/uploadfile.php";
include 			"../control/function.php";
include			 "../control/connect.php";
// include "../control/function.php";
// include 'control/curl_mail.php';
$pro=mysqli_fetch_array(mysqli_query($con, "select * from profile"));
//

//
$base = $_SERVER['REQUEST_URI'];
if (isset($_GET['page'])) {
  $page= $_GET['page'];
}

$user = new User($db);
$member = $user->getuser($_SESSION['user_session']);
$toko   = $user->gettoko($_SESSION['user_session']);

if (empty($_SESSION['user_session'])) {
  echo "<script type='text/javascript'> window.location.href = '../login.aspx' </script>";

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="../library/assets/css/icons.css">
    <link rel="stylesheet" href="../library/assets/css/app.css">

</head>
<body class="dashboard">

<div class="page">

    <?php
        include_once "../library/partials/header_dashboard.php";
        if (file_exists("$page.php")) {
              require "$page.php";
          }
          elseif(empty($page)) {
            require "dashboard.php";
          }else {
            require "../view/comingsoon.php";
          }

    ?>




</div>

<script src="../library/assets/vendors/jquery/jquery.min.js"></script>
<script src="../library/assets/vendors/popper.js/popper.js"></script>
<script src="../library/assets/vendors/bootstrap/bootstrap.min.js"></script>
<script src="../library/assets/js/dashboard.js"></script>
<script type="text/javascript" src="../ajax/notify.min.js"></script>
<script type="text/javascript" src="../ajax/signup.js"></script>
</body>
</html>
