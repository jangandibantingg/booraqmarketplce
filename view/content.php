<?php

if ($page== 'profile'){
  include "view/cont.profile.php";
}elseif ($page == 'login' ) {
  include "view/cont.login.php";
}elseif ($page == 'register' ) {
  include "view/cont.register.php";
}elseif ($page == 'activation-code' ) {
  include "view/cont.activation-code.php";
}elseif ($page== 'alamat') {
  include "view/cont.alamat.php";
}elseif ($page== 'toko') {
  include "view/cont.toko.php";
}
elseif ($page== 'beranda') {
  include "view/beranda.php";
}elseif ($page== 'kelola-toko') {
  include "view/cont.kelola-toko.php";
}elseif ($page== 'tambah-produk') {
  include "view/cont.tambah-produk.php";
}elseif ($page== 'tambah-deskripsi') {
  include "view/cont.tambah-deskripsi.php";
}elseif ($page== 'produk') {
  include "view/cont.produk.php";
}elseif ($page== 'keranjang') {
  include "view/cont.keranjang.php";
}elseif ($page== 'penagihan') {
  include "view/cont.penagihan.php";
}
elseif ($page== 'bayar') {
  include "view/cont.bayar.php";
}
elseif ($page== 'admin') {
  include "view/cont.admin.php";
}elseif ($page== 'tentang-kami') {
  include "view/cont.tentang-kami.php";
}elseif ($page== 'premium-toko') {
  include "view/cont.premium-toko.php";
}elseif ($page== 'jadi-mitra') {
  include "view/cont.jadi-mitra.php";
}elseif ($page== 'article') {
  include "view/cont.article.php";
}elseif ($page== 'market-place') {
  include "view/cont.market-place.php";
}elseif ($page== 'info-sholat') {
  include "view/cont.info-sholat.php";
}

elseif ($page == null) {
include "view/beranda.php";
}
else {
  echo "  <h3 class='center'>dalam proses pengembangan</h3> ";
}
 ?>
