<!DOCTYPE html>
<html lang="en">
<head>
	<title>Material-Playground</title>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
		
	<!-- Roboto-Font -->
	<link rel="import" href="<?php echo base_url('assets/components/font-roboto/roboto.html'); ?>">

	<!-- Font-Awesome -->
	<link rel="import" href="<?php echo base_url('assets/components/font-awesome/awesome.html'); ?>">

	<!-- CSSs -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/forum.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
	
	<!-- Imports -->
	<link rel="import" href="<?php echo base_url('assets/components/core-imports/core-imports.html'); ?>">

</head>
<body unresolved>
<?php $this->load->view('forum/basepage_header'); ?>
<div class="container-fluid content">
	<section class="col-md-8 main">
		<section class="category"><h3 class="hidden">#</h3>
			<?php $this->load->view($main_view); ?>
		</section>
	</section>
	<div class="col-md-1"></div>
	<aside class="col-md-3 sidebar">
		<?php $this->load->view($sidebar) ?>
	</aside>
</div>
</core-header-panel>
	<!-- jQuery -->
	<script src="<?php echo base_url('assets/js/jquery-1.11.0.js') ?>"></script>

	<!-- Bootstrap Core -->
	<script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>

	<!-- Polymer -->
	<script src="<?php echo base_url('assets/components/platform/platform.js'); ?>"></script>
</body>
</html>