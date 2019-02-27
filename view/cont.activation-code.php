
<main class="page-content">

		<div class="container mtb-30">
				<div class="row justify-content-center">
						<div class="col-md-6 ">
								<div class="card">
										<div class="card-body">
  <div class="panel-body"><h3>Kode aktivasi</h3>
					<form id="loginform" action="activation.html" method="post">
					<div class="form-group">
						<label class="sr-only"></label>
						<input type="text" name="code" placeholder="masukan kode aktivasi" value="<?php echo $_SESSION['kodeactivation']; ?>" class="form-control">

					</div>
						<button class="btn btn-primary" id="submit">submit</button>

						<p id="info"></p>
				</form>
			</div>
	</div>
</div>
</div>

</div>


</main>
