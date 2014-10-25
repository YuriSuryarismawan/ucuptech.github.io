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
	<core-header-panel mode="waterfall-tall" tallClass="medium-tall" navigation flex>
	<core-toolbar class="core-header">
	<a href="./index.html" class="bottom brand"><h2>Project-Forum</h2></a>
</core-toolbar>
<div class="container-fluid content" layout vertical center>
	<section class="col-md-4 main">
		<?php $this->load->view($main_view); ?>
	</section>
</div>
<!-- jQuery -->
<script src="<?php echo base_url('assets/js/jquery-1.11.0.js') ?>"></script>

<!-- Bootstrap Core -->
<script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>

<!-- Polymer -->
<script src="<?php echo base_url('assets/components/platform/platform.js'); ?>"></script>
</body>
</html>