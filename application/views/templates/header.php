<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap-responsive.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/custom.css'); ?>">


	<title>Cloudapolis</title>
</head>
<body style="padding-top: 20px;">

<div class="container-narrow">
	<div class="masthead">
		<ul class="nav nav-pills pull-right">
			<li class="active">
				<a href="<?= base_url(); ?>">Home</a>
			</li>
			<li>
				<a href="#">Un Paseo</a>
			</li>
			<li>
				<?= anchor(base_url('index.php/paginas/about'), 'Acerca de' ); ?>
			</li>
			<li>
				<a href="#">Contact</a>
			</li>
			<li>
				<a href="#">Acceder</a>
			</li>
		</ul>
		<h3 class="muted">Cloudapolis</h3>
	</div>
	<hr/>