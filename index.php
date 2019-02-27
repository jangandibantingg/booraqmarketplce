<?php
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
require_once "control/db.php";
require_once "control/User.php";
// require_once "control/uploadfile.php";
include 			"control/function.php";
include			 "control/connect.php";
// include "control/function.php";
// include 'control/curl_mail.php';
$pro=mysqli_fetch_array(mysqli_query($con, "select * from profile"));
//

//
$base = $_SERVER['REQUEST_URI'];
if (isset($_GET['page'])) {
  $page= $_GET['page'];
}

$user = new User($db);

if(!$user->isLoggedIn()){
      include "view/body.php";
}else {
	$member = $user->getuser($_SESSION['user_session']);
  $toko   = $user->gettoko($_SESSION['user_session']);
  include "view/body.php";
//
}

// include "view/body.php";

?>
