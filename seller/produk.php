<?php

if ($_GET['dell']) {
  $r=mysqli_fetch_array(mysqli_query($con, "select gambar from produk where id_produk='$_GET[dell]' "));
  unlink("../library/foto_produk/$r[gambar]");
  unlink("../library/foto_produk/small_$r[gambar]");
  mysqli_query($con, "delete from produk where id_produk='$_GET[dell]'");
}
 ?>
<div class="page-main">

        <div class="my-3 my-md-5">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-title">
                        Produk Saya
                    </h1>
                    <div class="page-options d-flex">
                        <a href="?page=tambah-produk" class="btn btn-primary mr-2">Tambah Produk</a>
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
                              <?php
                              $a=mysqli_query($con, "select * from produk order by id_produk asc limit 8 ");
                              while ($r=mysqli_fetch_array($a)) {
                              $k=mysqli_fetch_array(mysqli_query($con, "select * from Kategori where id_kategori='$r[id_kategori_produk]'"));

                               ?>
                            <tr>
                                <td><img  src="../library/foto_produk/<?php echo "$r[gambar]"; ?>" alt="" class="h-8"></td>
                                <td>
                                    <?php echo "$r[nama_produk]"; ?>
                                </td>
                                <td class="text-primary">Rp. <?php echo "".number_format($r['harga']).""; ?></td>
                                <td><?php echo "".number_format($r['stok']).""; ?></td>
                                <td >
                                    <?php echo "$r[berat]"; ?>
                                </td>
                                <td >
                                    <?php echo "$k[nama_kategori]"; ?>
                                </td>
                                <td class="text-center"><a href="./?page=produk&dell=<?php echo "$r[id_produk]"; ?>" class="btn btn-outline-secondary btn-sm">Delete</a>
                                    <a href="./?page=edit-produk&id=<?php echo "$r[id_produk]"; ?>" class="btn btn-outline-secondary btn-sm">Edit</a>
                                </td>
                            </tr>
                          <?php
                              }
                           ?>
                            </tbody></table>
                    </div>

                </div>

            </div>
        </div>
    </div>
