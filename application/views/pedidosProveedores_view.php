<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pedidos a Proveedores</title>
	<link rel="stylesheet" href="<?= base_url(); ?>css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="<?= base_url() ?>css/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<?php $this->load->view('menu_view.php') ?>

	<div class="dashboard">
		<div class="title">
			<span>Pedidos a Proveedores</span>
			<hr>
		</div>

		<div class="medidas">
			<iframe src="https://app.powerbi.com/view?r=eyJrIjoiMzExNTg2MTMtYzU1OC00MTgzLTk5MGQtZTU5ZDQwMDk0NzZhIiwidCI6IjYzNmZlM2M0LTBlZmYtNGY3Ny1hZTk1LTBkNDdiMjhhZWRiYyIsImMiOjR9" height="1000" width="100%"></iframe> 
		</div>
	</div>
</div>

</body>
</html>