<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Inversi&oacute;n Inicial</title>
	<link rel="stylesheet" href="<?= base_url(); ?>css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="<?= base_url() ?>css/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<?php $this->load->view('menu_view.php') ?>

	<div class="dashboard">
		<div class="title">
			<span>Inversi&oacute;n Inicial</span>
			<hr>
		</div>

		<div class="medidas">
			<!-- Grafico / tabla aqui -->
		</div>
	</div>
</div>

</body>
</html>