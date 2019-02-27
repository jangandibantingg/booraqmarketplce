<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/core.vendors.css">
    <link rel="stylesheet" href="assets/css/icons.css">
    <link rel="stylesheet" href="assets/css/app.css">

</head>
<body>
<div class="wrapper">
    <div class="overlay"></div>

    <?php
    include_once "partials/header.php";
    include_once "partials/breadcrumb.php";
    ?>

    <main class="page-content">

        <div class="container mtb-30">
            <div class="row justify-content-center">
                <div class="col-md-6 ">
                    <div class="card">
                        <div class="card-body">
                            <form action="#">

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Nama Depan :</label>
                                            <input type="text" name="firstname" placeholder="Masukan Dama Depan" class="form-control">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Nama Belakang :</label>
                                            <input type="text" name="lastname" placeholder="Masukan Nama Belakang" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Email :</label>
                                            <input type="email" name="email" placeholder="Masukan Nama Email" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">No Hp :</label>
                                            <input type="email" name="email" placeholder="Masukan No Hp" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin :</label>
                                            <select class="form-control">
                                                <option>Jenis Kelamin</option>
                                                <option>Pria</option>
                                                <option>Wanita</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Tanggal Lahir :</label>
                                            <input type="date" name="date" placeholder="Masukan Tanggal Lahir" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Username :</label>
                                            <input type="text" name="text" placeholder="Masukan Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Password :</label>
                                            <input type="text" name="text" placeholder="Masukan Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-secondary btn-block">Daftar</button>
                                        </div>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </main>


    <?php
    include_once "partials/footer.php";
    ?>

</div>

<?php
include "partials/modal_login.php";
?>
<script src="assets/vendors/jquery/jquery.min.js"></script>
<script src="assets/vendors/popper.js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.min.js"></script>

<script src="assets/js/core.vendors.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>

