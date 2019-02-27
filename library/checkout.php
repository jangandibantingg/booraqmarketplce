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

    <main class="page-content">


        <div class="checkout-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Alamat Kirim</h4>
                            </div>
                            <div class="card-body">
                                <div>Syukur Mei Rahmat Zai</div>
                                <div class="phone">081215161452</div>
                                <span>Jalan Mangga Dua, RT 6/RW 2 No 76, Sukapura Dayeuhkolot, Kab. Bandung, 40267</span>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-outline-info" id="btnAddress">Masukan Alamat</button>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Methode Pengiriman</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label> Kurir:</label>
                                    <select type="text" name="text" placeholder="Pilih Method Pengiriman">
                                        <option>JNE</option>
                                        <option>BOX</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label> Catatan</label>
                                    <textarea placeholder="Masukan catatan"></textarea>


                                </div>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Methode Pembayaran</h4>
                            </div>
                            <div class="card-body">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                    Bank Transfer
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                                beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                    Internet Banking
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                                beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ringkasan Belanja</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="checkout-table table-responsive">
                                        <table class="table">

                                            <tr>
                                                <th class="text-left">Total Harga</th>
                                                <td class="text-right">Rp. 500.000</td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Total Ongkos Kirim</th>
                                                <td class="text-right">Rp. 3000</td>
                                            </tr>
                                            <tr class="total-price">
                                                <th class="text-left">Total Pembayaran</th>
                                                <td class="text-right text-secondary">Rp. 600.000</td>
                                            </tr>

                                            <tfoot>

                                            </tfoot>
                                        </table>

                                        <div class="donasi">
                                            <input type="checkbox" name="donasi" id="donasi">
                                            <label for="donasi">Topup Donasi</label>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-secondary btn-block">Bayar</button>
                                        </div>
                                    </div>

                                </form>
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

