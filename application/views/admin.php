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
					<h2>Profesyonel Çeviri</h2>
					<div class="separator line-separator">♦</div>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="section section-our-clients-freebie">
	<div class="container">
		<div class="title-area">
			<h2>Tercüme Dilleri</h2>
			<div class="separator separator-danger">∎</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Dil</th>
						<th scope="col">İçerik</th>
					</tr>
				</thead>
				<tbody>
					<?php if($language != 0){ ?>
					<?php for($i=0; $i<count($language); $i++){ ?>
					<tr>
						<th scope="row"><?php echo $i+1; ?></th>
						<td id="name<?php echo $language[$i]['id']; ?>"><?php echo $language[$i]['name']; ?></td>
						<td id="text<?php echo $language[$i]['id']; ?>"><?php echo $language[$i]['text']; ?></td>
						<p id="imgSrc<?php echo $language[$i]['id']; ?>" style="display: none"><?php echo $language[$i]['file']; ?></p>
						<td>

							<div class="row">
								<div class="col-lg-6">
									<input type="button" value="Düzenle" onclick="editLanguage('<?php echo $language[$i]['id']; ?>')" data-target="#language-edit" data-toggle="modal" >
								</div>
								<div class="col-lg-2">
									<form action="<?php echo base_url().'Admin/deleteLanguage/'.$language[$i]['id']; ?>">
										<input type="submit" onclick="return confirm('Silmek istediğinize emin misiniz');" value="Sil">
									</form>
								</div>
							</div>
						</td>
					</tr>
					<?php } } ?>
				</tbody>
				</table>
				<a href="#" class="btn btn-lg btn-neutral btn-icon btn-block" data-toggle="modal" data-target="#language-form">
					<span class="btn-inner--text">Dil Ekle</span>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="language-form" tabindex="-1" role="dialog" aria-labelledby="language-form" aria-hidden="true">
	<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
		<div class="contact">
			<div class="modal-body p-0">
				<div class="card bg-secondary shadow border-0">
					<form method="post" action="<?php echo base_url().'Admin/addLanguage'; ?>" enctype="multipart/form-data">
						<div class="col-lg-12">
							<input type="text" class="form-control input-group" name="name" placeholder="Dil Adı" required>
						</div>
						<div class="col-lg-12">
							<input type="text" class="form-control input-group" name="text" placeholder="Açıklama">
						</div>
						<div class="col-lg-12">
							<input type="file" name="file" class="form-control" size="20" accept="image/png, image/jpeg">
						</div>
						<div class="col-lg-12">
							<input type="submit" class="form-control" value="Ekle">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="language-edit" tabindex="-1" role="dialog" aria-labelledby="language-edit" aria-hidden="true">
	<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
		<div class="contact" style="height: 500px;">
			<div class="modal-body p-0">
				<div class="card bg-secondary shadow border-0">
					<form method="post" action="<?php echo base_url().'Admin/updateLanguage'; ?>" enctype="multipart/form-data">
						<input type="text" class="form-control input-group" name="id" id="id" required style="display: none">
						<div class="col-lg-12">
							<input type="text" class="form-control input-group" name="name" id="name" required>
						</div>
						<div class="col-lg-12">
							<input type="text" class="form-control input-group" name="text" id="text">
						</div>
						<div class="col-lg-12">
							<img alt="..." class="img-circle" width="200px" height="200px" src="" id="img">
							<input type="file" name="file" class="form-control" id="file" size="20" accept="image/png, image/jpeg">
						</div>
						<div class="col-lg-12">
							<input type="submit" class="form-control" value="Düzenle">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section section-our-clients-freebie">
	<div class="container">
		<div class="title-area">
			<h2>Tercüme Talepleri</h2>
			<div class="separator separator-danger">∎</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-9">
				<table class="table table-striped">
					<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Ad</th>
						<th scope="col">E-Posta</th>
						<th scope="col">Ek Açıklamalar</th>
					</tr>
					</thead>
					<tbody>
					<?php if($request != 0){ ?>
						<?php for($i=0; $i<count($request); $i++){ ?>
							<tr>
								<th scope="row"><?php echo $i+1; ?></th>
								<td><?php echo $request[$i]['name']; ?></td>
								<td><?php echo $request[$i]['email']; ?></td>
								<td><?php echo $request[$i]['annotation']; ?></td>
								<td>
									<div class="row">
										<?php if($request[$i]['file'] != ""){ ?>
											<div class="col-lg-6">
												<form action="<?php echo base_url().'uploads/request/'.$request[$i]['file']; ?>">
													<button type="submit">Dosyayı İndir</button>
												</form>
											</div>
										<?php } else{ echo '<div class="col-lg-6"></div>'; } ?>
										<div class="col-lg-2">
											<form action="<?php echo base_url().'Admin/deleteRequest/'.$request[$i]['id']; ?>">
												<input type="submit" onclick="return confirm('Silmek istediğinize emin misiniz');" value="Sil">
											</form>
										</div>
									</div>
								</td>
							</tr>
						<?php } } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('footer'); ?>

