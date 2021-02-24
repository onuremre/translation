<?php $this->load->view('header'); ?>

<div class="section section-header">
	<div class="parallax filter filter-color-red">
		<div class="image"
			 style="background-image: url('<?php echo base_url(); ?>assets/img/header-1.jpeg')">
		</div>
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="form-group contact" style="background-color:#e78b90; opacity: 0.8; margin-top: 100px; height: 200px">
							<form action="<?php echo base_url().'Admin/login'; ?>" method="post">
								<div class="col-lg-8">
									<input type="email" name="mail" class="form-control input-group" placeholder="Mail Adresiniz" required style="background-color: #e78b90;">
								</div>
								<div class="col-lg-8">
									<input type="password" name="password" class="form-control input-group" placeholder="Şifre" required style="background-color: #e78b90;">
								</div>
								<div class="col-lg-5">
									<input type="submit" class="form-control" value="Giriş Yap" style="background-color: #e78b90">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php $this->load->view('footer'); ?>

