<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="../assets/css/icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">

</head>
<body class="dashboard">

<div class="page">

    <?php
        include_once "../partials/header_dashboard.php";
    ?>

    <div class="page-main">

        <div class="my-3 my-md-5">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-title">
                        Produk Saya
                    </h1>

                </div>
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <a class=" active" href="#">Toko Saya</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">

                                    <div class="well">
                                        <img id="img-profile" class="imgprofile" src="https://ecs7.tokopedia.net/img/cache/300/user-1/2019/2/15/967610/967610_c81e5db5-f941-4df1-9606-daadedd70fc6.jpg" alt="Syukur Gaull">
                                        <div class="btn btn-grey btn-block mt-5">Pilih Foto</div>
                                        <div class="mt-5">
                                            <small class="text-muted">
                                                Besar file: maksimum 10.000.000 bytes (10 Megabytes)<br>
                                                Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG
                                            </small>
                                        </div>

                                    </div>
                                    <div class="btn btn-outline-secondary btn-block mt-3">Ganti Password</div>


                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h3 class="card-title">Edit Profile</h3>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label >Company</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="form-group">
                                                    <label >Username</label>
                                                    <input type="text" class="form-control" placeholder="Username" value="michael23">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group">
                                                    <label >Email address</label>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label >First Name</label>
                                                    <input type="text" class="form-control" placeholder="Company" value="Chet">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label >Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label >Address</label>
                                                    <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group">
                                                    <label >City</label>
                                                    <input type="text" class="form-control" placeholder="City" value="Melbourne">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="form-group">
                                                    <label >Postal Code</label>
                                                    <input type="number" class="form-control" placeholder="ZIP Code">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label >Country</label>
                                                    <select class="form-control custom-select">
                                                        <option value="">Germany</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label >About Me</label>
                                                    <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme You doubt I'll bother, reading into it I'll probably won't, left to my own devices
        But that's the diffe ence in our opinions.</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-primary">Simpan</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<script src="../assets/vendors/jquery/jquery.min.js"></script>
<script src="../assets/vendors/popper.js/popper.js"></script>
<script src="../assets/vendors/bootstrap/bootstrap.min.js"></script>

<script src="../assets/js/dashboard.js"></script>
</body>
</html>

