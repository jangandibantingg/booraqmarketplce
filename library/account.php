<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">


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


    <main class="page-content ptb-30 ">
        <div class="container">
            <div class="profile-setting card">
                <div class="card-header">
                    <ul class="nav card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile-tab-content"
                               role="tab" aria-controls="profile" aria-selected="true">Profile Saya</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="address-tab" data-toggle="tab" href="#address-tab-content" role="tab"
                               aria-controls="address" aria-selected="false">Alamat Pengiriman</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-5">
                            <div class="well">
                                <img id="img-profile" class="imgprofile"
                                     src="https://ecs7.tokopedia.net/img/cache/300/user-1/2019/2/15/967610/967610_c81e5db5-f941-4df1-9606-daadedd70fc6.jpg"
                                >
                                <div class="btn btn-grey btn-block mt-5">Pilih Foto</div>
                                <div class="mt-5">
                                    <small class="text-muted">
                                        Besar file: maksimum 10.000.000 bytes (10 Megabytes)<br>
                                        Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG
                                    </small>
                                </div>

                            </div>
                            <a class="btn btn-outline-secondary btn-block mt-3" id="btnPassword"><i class="mdi mdi-key"></i> Ganti Password</a>

                        </div>
                        <div class="col-md-9">

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="profile-tab-content" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                    <h3 class="card-title">Edit Profile</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Depan</label>
                                                <input type="text" class="form-control" value="Creative Code Inc.">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username"
                                                       value="michael23">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select class="form-control ">
                                                    <option value="#">Pira</option>
                                                    <option value="#">Wanita</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telepon</label>
                                                <input type="email" class="form-control" placeholder="phone"
                                                       value="081215161452">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" placeholder="Masukan Email"
                                                       value="syukurzay@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="username"
                                                       value="syukurzay">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control" placeholder="Password"
                                                       value="Melbourne, Australia">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button class="btn btn-primary">Simpan</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="address-tab-content" role="tabpanel"
                                     aria-labelledby="address-tab">
                                    <div class="col-12">
                                        <button class="btn btn-primary" id="btnAddress">
                                            Tambahkan Alamat
                                        </button>
                                        <div class="table-responsive">
                                            <table class="table ">
                                                <thead>
                                                <tr>

                                                    <th colspan="2">Penerima</th>
                                                    <th>Alamat Pengiriman</th>
                                                    <th colspan="2">Daerah pengiriman</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <td>
                                                        <input type="radio" value="1" class="form-control" checked> <label ></label>
                                                    </td>

                                                    <td>
                                                        <span class="d-block">Syukur Mei Rahmat Zai</span>
                                                        <span class="d-block fw-600">081215161452</span>
                                                    </td>
                                                    <td>
                                                        <address>Kosan Lentera No 76
                                                            <span class="d-block fw-600">
                                                                  Jl. Mangga Dua No.76, Sukapura
                                                              </span>
                                                        </address>
                                                    </td>
                                                    <td>
                                                        <address>

                                                            <span class="d-block"> Jawa Barat, Kab. Bandung,</span>
                                                            <span class="d-block">Dayoutkolot 40267</span>
                                                            <span class="d-block">Indonesia</span>

                                                        </address>
                                                    </td>

                                                    <td>
                                                        <a href="" class="btn btn-grey btn-sm">Edit</a>
                                                        <a href="" class="btn btn-grey btn-sm">Delete</a>

                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" value="1"> <label ></label>
                                                    </td>

                                                    <td>
                                                        <span class="d-block">Syukur Mei Rahmat Zai</span>
                                                        <span class="d-block fw-600">081215161452</span>
                                                    </td>
                                                    <td>
                                                        <address>Kosan Lentera No 76
                                                            <span class="d-block fw-600">
                                                                  Jl. Mangga Dua No.76, Sukapura
                                                              </span>
                                                        </address>
                                                    </td>
                                                    <td>
                                                        <address>

                                                            <span class="d-block"> Jawa Barat, Kab. Bandung,</span>
                                                            <span class="d-block">Dayoutkolot 40267</span>
                                                            <span class="d-block">Indonesia</span>

                                                        </address>
                                                    </td>
                                                    <td>
                                                        <a href="" class="btn btn-grey btn-sm">Edit</a>
                                                        <a href="" class="btn btn-grey btn-sm">Delete</a>

                                                    </td>

                                                </tr>
                                                </tbody>
                                            </table>


                                        </div>
                                    </div>

                                </div>

                            </div>

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
include "partials/modal_ganti_password.php";
include "partials/modal_alamat.php";
?>
<script src="assets/vendors/jquery/jquery.min.js"></script>
<script src="assets/vendors/popper.js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.min.js"></script>

<script src="assets/js/core.vendors.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>

