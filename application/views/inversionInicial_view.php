<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Control insumos</title>
	<link rel="stylesheet" href="<?= base_url(); ?>css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="<?= base_url() ?>css/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<?php $this->load->view('menu_view.php') ?>

	<div class="dashboard">
		<div class="title">
			<span>Control insumos</span>
			<hr>
		</div>

		<div class="medidas">
			<!-- Grafico / tabla aqui -->
			<iframe src="https://app.powerbi.com/view?r=eyJrIjoiYzU3MDEwZGMtN2Q1ZS00NzNlLTg5YWItOWE4MjRlNmY3M2NjIiwidCI6IjYzNmZlM2M0LTBlZmYtNGY3Ny1hZTk1LTBkNDdiMjhhZWRiYyIsImMiOjR9" height="1000" width="100%"></iframe> 
		</div>
	</div>
</div>

</body>
</html>