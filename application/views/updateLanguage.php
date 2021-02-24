<form method="post" action="<?php echo base_url().'TestingGround/addLanguage'; ?>" enctype="multipart/form-data">
	<div class="col-lg-12">
		<input type="text" class="form-control input-group" name="name" value="<?php echo $language[0]['name']; ?>" required>
	</div>
	<div class="col-lg-12">
		<input type="text" class="form-control input-group" name="text" placeholder="Açıklama">
	</div>
	<div class="col-lg-12">
		<input type="file" name="file" class="form-control" size="20" />
	</div>
	<div class="col-lg-12">
		<input type="submit" class="form-control" value="Ekle">
	</div>
</form>
