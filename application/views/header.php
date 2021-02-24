<!--

=========================================================
* Gaia Bootstrap Template - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/gaia-bootstrap-template
* Licensed under MIT (https://github.com/creativetimofficial/gaia-bootstrap-template/blob/master/LICENSE.md)
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/img/favicon.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>... Tercüme</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/gaia.css" rel="stylesheet"/>

	<!--     Fonts and icons     -->
	<link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
</head>

<body>
<?php if(!isset($mail)){ ?>
<nav class="navbar navbar-default navbar-transparent navbar-fixed-top " color-on-scroll="200">
	<!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
	<div class="container">
		<div class="navbar-header">
			<a href="<?php base_url(); ?>" class="navbar-brand">
				... Tercüme
			</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right navbar-uppercase">
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
</nav>
<?php }else{ ?>
<nav class="navbar navbar-default navbar-transparent navbar-fixed-top " color-on-scroll="200">
	<!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
	<div class="container">
		<div class="navbar-header">
			<a href="<?php echo base_url(); ?>" class="navbar-brand">
				... Tercüme
			</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right navbar-uppercase">

				<li>
					<a>Merhaba <?php echo $mail ?></a>
				</li>
				<li>
					<a href="<?php echo base_url().'Admin/logout';?>">Çıkış</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<?php } ?>
