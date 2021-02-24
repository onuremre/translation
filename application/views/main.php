<?php $this->load->view('header'); ?>

<div class="section section-header">
	<div class="parallax filter filter-color-red">
		<div class="image"
			 style="background-image: url('<?php echo base_url(); ?>assets/img/header-1.jpeg')">
		</div>
		<div class="container">
			<div class="content">
				<div class="title-area">
					<h1 class="title-modern">... Tercüme</h1>
					<h2>Probably the most stylish bootstrap template in the world!</h2>
						<div class="separator line-separator">♦</div>
				</div>
			</div>

		</div>
	</div>
</div>


<div class="section">
	<div class="container">
		<div class="row">
			<div class="title-area">
				<h2>Farkımız</h2>
				<div class="separator separator-danger">✻</div>
				<p class="description">Firma açıklaması, Firma açıklaması,Firma açıklaması,Firma açıklaması,Firma açıklaması,Firma açıklaması,Firma açıklaması,</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="info-icon">
					<div class="icon text-danger">
						<i class="pe-7s-medal"></i>
					</div>
					<h3>Kaliteli Hizmet</h3>
					<p class="description">Sektördeki deneyimimiz ile sizlere beklediğiniz hizmeti veriyoruz..</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="info-icon">
					<div class="icon text-danger">
						<i class="pe-7s-alarm"></i>
					</div>
					<h3>Hızlı Teslim</h3>
					<p class="description">Çeviri dosyalarınız, dilediğiniz zaman süresinde tarafınıza teslim edilir...</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="info-icon">
					<div class="icon text-danger">
						<i class="pe-7s-calculator"></i>
					</div>
					<h3>Uygun Fiyat</h3>
					<p class="description">Uygun fiyat garantimiz ile kaliteli hizmetin farkına varacaksınız...</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="info-icon">
					<div class="icon text-danger">
						<i class="pe-7s-like2"></i>
					</div>
					<h3>%100 Memnuniyet</h3>
					<p class="description">Müşteri memnuniyeti, firmamızın misyonunu oluşturmaktadır...</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section section-our-clients-freebie">
	<div class="container">
		<div class="title-area">
			<h2>Tercüme Hizmetlerimiz</h2>
			<div class="separator separator-danger">∎</div>
		</div>

		<ul class="nav nav-text" role="tablist">
			<?php if(isset($language)){ ?>
			<?php if($language != 0){ ?>
			<?php for($i=0; $i<count($language); $i++){ ?>
				<li <?php if($i == 0){ echo 'class="active"'; }?>>
				<a href="#language<?php echo $language[$i]['id']; ?>" role="tab" data-toggle="tab">
					<div class="image-clients">
						<img alt="..." class="img-circle" src="<?php echo base_url().'uploads/language/'.$language[$i]['file']; ?>">
					</div>
				</a>
			</li>
			<?php } } }?>
		</ul>

		<div class="tab-content">
			<?php if(isset($language)){ ?>
			<?php if($language != 0){ ?>
			<?php for($i=0; $i<count($language); $i++){ ?>
			<div class="tab-pane <?php if($i == 0){ echo 'active'; } ?>" id="language<?php echo $language[$i]['id']; ?>">
				<h5 class="subtitle text-gray"><?php echo $language[$i]['name']; ?></h5>
				<p class="description">
					<?php echo $language[$i]['text']; ?>
				</p>
			</div>
			<?php } } }?>
		</div>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="title-area">
				<h2>İletişim</h2>
				<div class="separator separator-danger">✻</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="contact">
					<form role="form" action="<?php echo base_url(); ?>Translation/addRequest" method="post" enctype="multipart/form-data">
						<div class="col-lg-8">
							<input type="text" class="form-control input-group" name="name" placeholder="Adınız" required>
						</div>
						<div class="col-lg-8">
							<input type="email" class="form-control input-group" name="email" placeholder="Mail Adresiniz" required>
						</div>
						<div class="col-lg-8">
							<input type="file" name="file" class="form-control" size="20" />
						</div>
						<div class="col-lg-10">
							<textarea placeholder="Ek Açıklamalar" class="form-control" name="annotation" style="resize: none"></textarea>
						</div>
						<div class="col-lg-4">
							<input type="submit" class="form-control">
						</div>
						<div class="col-lg-8">
							<?php if(isset($error)){?>
								<?php if($error == 1){ ?>
								<p style="color: red">İşlem başarısız. Lütfen iletişim adreslerimize başvurun.</p>
								<?php }else{ ?>
								<p style="color: green">İşlem başarılı.</p>
							<?php } }?>
						</div>
					</form>
				</div>

			</div>
			<div class="col-md-2"></div>
			<div class="col-md-3">
				<div class="info-icon">
					<div class="icon text-danger">
						<i class="pe-7s-call"></i>
					</div>
					<h3>Sizden Haber Bekliyoruz</h3>
					<p class="description">+90 000 000 00 00</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php if(isset($error)){echo $error;}?>
<?php $this->load->view('footer'); ?>

