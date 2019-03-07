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


        <div class="modal fade" id="withdrawModal" tabindex="-1" role="dialog" aria-labelledby="modalwithdrawLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Cairkan Dana</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">



                        <form action="#" name="loginform">
                            <div class="form-group">
                                <label >Total Dan</label>
                                <input type="text" name="lastname" value="Rp.10.000.00" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label >Jumlah di Cairkan</label>
                                <input type="text" name="lastname" placeholder="Masukan Julah Dana Dicairkan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <input type="text" name="lastname" placeholder="Masukan Password Booraq anda" class="form-control">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-secondary btn-block">Cairkan Dana</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="bankModal" tabindex="-1" role="dialog" aria-labelledby="bankLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Tambahkan Bank</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">

                        <form action="#" name="loginform">
                            <div class="form-group">
                                <label >Total Dan</label>
                                <select type="text" >
                                    <option>Pilih Bank</option>
                                    <option>Bank Rakyat Indonsia</option>
                                    <option>Bank Mandiri</option>
                                    <option>Bank BNI</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Pemilik Bank</label>
                                <input type="text" name="name" placeholder="Masukan Nama Pemilik Rekening" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Nomor Rekening</label>
                                <input type="text" name="no_rek" placeholder="Masukan Nomor Rekening" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <input type="text" name="lastname" placeholder="Masukan Password Booraq anda" class="form-control">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-secondary btn-block">GANTI/TAMBAHKAN BANK</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="page-wrapper">
            <div class="container ">
                <div class="page-header">
                    <h1 class="page-title">
                        Payment
                    </h1>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <span>Saldo</span>
                                <h3>Rp. 8.000.000</h3>
                                <a class="btn btn-sm btn-secondary" id="btnWithdrawPayment">CAIRKAN DANA</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3>Bank Rakyat Indonesia</h3>
                                <span class="d-block">12644545454454</span>
                                <span class="d-block mb-5">Syukur Mei Rahmat Zai</span>
                                <a class="btn btn-sm btn-secondary" id="btnBank">GANTI REKENING</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5>Mutasi</h5>
                                <table class="table card-table table-vcenter">
                                    <thead>
                                    <tr>
                                        <th class="w-10">
                                            No
                                        </th>
                                        <th class="w-60">
                                            Tanggal
                                        </th>

                                        <th class="w-25">
                                            Status
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <div>Dana Masuk Penjualan Sukses dengan No. Order <a href="#" class="text-primary">#BRQ1231413</a></div>
                                            <div class="fw-600">Total Harga: Rp.500.000</div>
                                            <div class="small text-muted">
                                                tanggal: Mar 2, 2018
                                            </div>
                                        </td>

                                        <td><span class="badge badge-success">Sukses</span></td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <div>Pencarian Dana</div>
                                            <div class="fw-600">Total Dicairkan: Rp.500.000</div>
                                            <div class="small text-muted">
                                                tanggal: Mar 2, 2018
                                            </div>
                                        </td>

                                        <td><span class="badge badge-danger">Gagal</span></td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <div>Pencarian Dana</div>
                                            <div class="fw-600">Total Dicairkan: Rp.500.000</div>
                                            <div class="small text-muted">
                                                tanggal: Mar 2, 2018
                                            </div>
                                        </td>

                                        <td><span class="badge badge-warning">Pending</span></td>
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

<script src="../assets/vendors/jquery/jquery.min.js"></script>
<script src="../assets/vendors/popper.js/popper.js"></script>
<script src="../assets/vendors/bootstrap/bootstrap.min.js"></script>

<script src="../assets/js/dashboard.js"></script>
</body>
</html>

