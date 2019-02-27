<div class="content col-lg-9">
    <!-- Blog -->
  <?php
    $hal=$_GET['hal'];
    if ($hal == 'tentang-kami') {
      include 'view/adm.tentangkami.php';
    }elseif ($hal == 'jadi-mitra') {
      include 'view/adm.jadimitra.php';

    }elseif ($hal == 'article') {
      include 'view/adm.article.php';

    }elseif ($hal == 'add-article') {
      include 'view/adm.add-article.php';

    }elseif ($hal == 'edit-article') {
      include 'view/adm.edit-article.php';
    }elseif ($hal == 'member') {
      include 'view/adm.member.php';
    }elseif ($hal == 'seller-regular') {
      include 'view/adm.seller-regular.php';
    }elseif ($hal == 'seller-premium') {
      include 'view/adm.seller-premium.php';
    }


    else {
      include 'view/adm.tentangkami.php';
    }
   ?>
</div>
