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
                    <div class="page-options d-flex">
                        <a href="product-add.php" class="btn btn-primary mr-2">Tambah Produk</a>
                        <select class="form-control w-auto">
                            <option value="asc">Shorting</option>
                            <option value="asc">Newest</option>
                            <option value="desc">Oldest</option>
                        </select>
                        <div class="input-icon ml-2">
                          <span class="input-icon-addon">
                            <i class="icon-search"></i>
                          </span>
                            <input type="text" class="form-control w-10" placeholder="Cari Product">
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="card">
                        <table class="table card-table table-vcenter">
                            <thead>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>
                                    Nama Produk
                                </th>
                                <th>
                                    Harga
                                </th>
                                <th>
                                    Stok
                                </th>
                                <th>
                                    Berat
                                </th>
                                <th>
                                    Kategori
                                </th>
                                <th class="text-center">
                                    Aksi
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td><img src="../assets/images/product/1.jpg" alt="" class="h-8"></td>
                                <td>
                                    Apple iPhone 7 Plus 256GB Red Special Edition
                                </td>
                                <td class="text-primary">RP. 500.000</td>
                                <td>180</td>
                                <td >
                                    250 gram
                                </td>
                                <td >
                                    Pria/Baju
                                </td>
                                <td class="text-center"><a href="" class="btn btn-outline-secondary btn-sm">Delete</a>
                                    <a href="javascript:void(0)" class="btn btn-outline-secondary btn-sm">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="../assets/images/product/1.jpg" alt="" class="h-8"></td>
                                <td>
                                    Apple iPhone 7 Plus 256GB Red Special Edition
                                </td>
                                <td class="text-primary">RP. 500.000</td>
                                <td>180</td>
                                <td >
                                    250 gram
                                </td>
                                <td >
                                    Pria/Baju
                                </td>
                                <td class="text-center"><a href="" class="btn btn-outline-secondary btn-sm">Delete</a>
                                    <a href="javascript:void(0)" class="btn btn-outline-secondary btn-sm">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="../assets/images/product/1.jpg" alt="" class="h-8"></td>
                                <td>
                                    Apple iPhone 7 Plus 256GB Red Special Edition
                                </td>
                                <td class="text-primary">RP. 500.000</td>
                                <td>180</td>
                                <td >
                                    250 gram
                                </td>
                                <td >
                                    Pria/Baju
                                </td>
                                <td class="text-center"><a href="" class="btn btn-outline-secondary btn-sm">Delete</a>
                                    <a href="javascript:void(0)" class="btn btn-outline-secondary btn-sm">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="../assets/images/product/1.jpg" alt="" class="h-8"></td>
                                <td>
                                    Apple iPhone 7 Plus 256GB Red Special Edition
                                </td>
                                <td class="text-primary">RP. 500.000</td>
                                <td>180</td>
                                <td >
                                    250 gram
                                </td>
                                <td >
                                    Pria/Baju
                                </td>
                                <td class="text-center"><a href="" class="btn btn-outline-secondary btn-sm">Delete</a>
                                    <a href="javascript:void(0)" class="btn btn-outline-secondary btn-sm">Edit</a>
                                </td>
                            </tr>
                            </tbody></table>
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

