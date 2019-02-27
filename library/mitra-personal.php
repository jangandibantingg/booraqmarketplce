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


    <!--css dan js hanya untuk halaamn daftar personal dan terdaftar-->
    <link rel="stylesheet" href="assets/vendors/steps/jquery.steps.css">
    <link rel="stylesheet" href="assets/vendors/dropify/dropify.min.css">






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
            <div class="card">
                <div class="card-body wizard-content">
                    <form action="#" class="tab-wizard wizard-circle">
                        <!-- Step 1 -->
                        <h6>Data Personal</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstName1">Nama Depan :</label>
                                        <input type="text" id="firstName1"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastName1">Nama Belakang :</label>
                                        <input type="text"  id="lastName1"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="emailAddress1">Email :</label>
                                        <input type="email"  id="emailAddress1"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username">Username :</label>
                                        <input type="text"  id="phoneNumber1"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="namatoko">Nama Toko :</label>
                                        <input type="text"  id="namatoko"></div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="namatoko">ALamat URL Toko :</label>
                                        <input type="text"  id="namatoko"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username">Alamat URL Toko :</label>
                                        <input type="text"  id="urltoko"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="username">KTP :</label>
                                        <input type="file" id="input-file-now" class="dropify">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="username">KTP :</label>
                                        <input type="file" id="input-file-now" class="dropify">
                                    </div>
                                </div>
                            </div>

                        </section>

                        <h6>Alamat</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="int1">Kota Asal For :</label>
                                        <select  id="kota" name="kota">
                                            <option value="Banquet">Kota Asal</option>
                                            <option value="Fund Raiser">Difficult</option>
                                            <option value="Dinner Party">Hard</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="int1">Kecamatan Asal :</label>
                                        <select id="kota" name="kota">
                                            <option value="Banquet">Kecamatan Asal</option>
                                            <option value="Fund Raiser">Difficult</option>
                                            <option value="Dinner Party">Hard</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label >Kode Post :</label>
                                        <input type="text" name="kodepost" />
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat :</label>
                                        <textarea rows="5" ></textarea>
                                    </div>

                                </div>
                            </div>
                        </section>

                    </form>
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

<script src="assets/vendors/steps/jquery.steps.js"></script>
<script src="assets/vendors/dropify/dropify.min.js"></script>

<script>
    $(document).ready(function () {
        // Basic
        $('.dropify').dropify();
    });
    $(".tab-wizard").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "DAFTAR MITRA"
        },
        onFinished: function (event, currentIndex) {
            swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
        }
    });
</script>

</body>
</html>

