<?php
     require_once "db.php";
     require_once "User.php";
     $user = new User($db);
     if($_POST['password'] != $_POST['repassword']){
        echo "<div class='alert alert-danger alert-dismissible'>kata sandi yang anda masukan tidak sama </div> <br>";
     }
     elseif(isset($_POST['email']) && isset($_POST['password']) && $_POST['kota'] && $_POST['nama_depan'] && $_POST['nama_belakang'] && $_POST['no_hp']  ){
         $email     = $_POST['email'];
         $password  = $_POST['password'];
         $nama_depan= $_POST['nama_depan'];
         $nama_belakang= $_POST['nama_belakang'];
         $no_hp      = $_POST['no_hp'];
         $kota      = $_POST['kota'];

         if($user->register($email, $password, $nama_depan, $nama_belakang, $no_hp, $kota)){
             $true = $user->getLasttrue();
         }else{
             $error = $user->getLastError();
         }
     }else{
       echo "<div class='alert alert-danger alert-dismissible'>Please complete form registration </div> <br>";
     }

     if(isset($error)){
         echo "<div class='alert alert-danger alert-dismissible'>$error</div>";
     }elseif(isset($true)) {
         echo "<div class='alert alert-success alert-dismissible'>$true<div>";
     }
  ?>
