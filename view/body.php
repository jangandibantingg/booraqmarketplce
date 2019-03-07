<!doctype html>
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

    <!--css dan js hanya untuk halaamn daftar personal dan terdaftar-->
    <link rel="stylesheet" href="library/assets/vendors/steps/jquery.steps.css">
    <link rel="stylesheet" href="library/assets/vendors/dropify/dropify.min.css">

</head>
<body>
<div class="wrapper">

    <?php
        include_once "library/partials/header.php";
        include_once "library/partials/hero-slider.php";
    ?>

    <?php include 'content.php'; ?>

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



<script src="library/assets/vendors/steps/jquery.steps.js"></script>
<script src="library/assets/vendors/dropify/dropify.min.js"></script>

 <script>
     $(document).ready(function () {
         // Basic
         $('.dropify').dropify();
     });
     $(".tab-wizard").steps({
         headerTag: "h6",
         bodyTag: "section",
         transitionEffect: "fade",
         titleTemplate: '<span class="step">#index#</span> #title#',
         labels: {
             finish: "DAFTAR MITRA"
         },
         onFinished: function (event, currentIndex) {
             swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
         }
     });
 </script>
</body>
</html>
