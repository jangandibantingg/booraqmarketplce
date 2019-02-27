<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <form action="signin.html" id=loginform"" name="loginform" method="post">
                    <div class="text-center ">
                        <img src="library/assets/images/profile/profile.png" alt="" width="60" height="60" class="img-circle mb-30">
                        <h4 >Masuk Akun Anda</h4>
                        <button class="btn  btn-primary btn-block "><i class="icon-facebook"></i> Masuk dengan Facebook</button>
                        <button class="btn btn-google btn-block"><i class="icon-google"></i> Masuk dengan Gooogle</button>
                        <div class="or">OR</div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Masukan Username/Email" class="form-control">
                    </div>
                    <div class="form-group">

                        <input type="password" name="password" placeholder="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <button id="submit" class="btn btn-secondary btn-block">Masuk</button>
                    </div>
                    <div id="info">

                    </div>
                    <div class="d-flex justify-content-between">
                        <div> Belum Punya Akun? <span class="text-primary">Daftar di sini</span></div>
                        <span class="text-primary"> Lupa Kata Sandi?</span>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
