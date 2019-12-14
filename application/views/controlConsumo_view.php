<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Control de consumo</title>
	<link rel="stylesheet" href="<?= base_url(); ?>css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="<?= base_url() ?>css/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<?php $this->load->view('menu_view.php') ?>

	<div class="dashboard">
		<div class="title">
			<span>Control de consumo de insumos por laboratorio</span>
			<hr>
		</div>

		<div class="medidas">
			<!-- Grafico / tabla aqui -->
			<iframe src="" height="1000" width="100%"></iframe> 
		</div>
	</div>
</div>

</body>
</html>