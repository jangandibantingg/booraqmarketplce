<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--    plugin tamban-->
    <link rel="stylesheet" href="../assets/vendors/dropzone/dropzone.min.css">

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

                <div class="row ">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Tambahkan Produk</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Produk</label>
                                        <input type="text" class="form-control" placeholder="Masukan Nama Produk" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <textarea rows="5" class="form-control" placeholder="Masukan Deskrip Produk" ></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Keyword</label>
                                        <input type="text" class="form-control" placeholder="Masukan Keyword" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Kategori</label>
                                        <select type="email" class="form-control" >
                                            <option>Kategori</option>
                                            <option>Baju</option>
                                            <option>Celana</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Sub Kategori</label>
                                        <select type="email" class="form-control" >
                                            <option>Sub Kategori</option>
                                            <option>Baju</option>
                                            <option>Celana</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Stok</label>
                                        <input type="text" class="form-control" placeholder="Masukan Jumlah Stok" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Harga</label>
                                        <input type="text" class="form-control" placeholder="Masukan Harga" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <form action="/file-upload" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
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

<script src="../assets/vendors/dropzone/dropzone.min.js"></script>


<script src="../assets/js/dashboard.js"></script>
</body>
</html>

