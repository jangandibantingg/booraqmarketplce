<?php


if (file_exists("view/cont.$page.php")) {
      require "view/cont.$page.php";
  }
  elseif(empty($page)) {
    require "view/cont.beranda.php";
  }else {
    require "comingsoon.php";
  }




 ?>
