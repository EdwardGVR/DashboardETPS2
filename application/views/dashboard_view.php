<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="<?= base_url(); ?>css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="css/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<?php $this->load->view('header_view.php') ?>
	<?php $this->load->view('menu_view.php') ?>

	<div class="dashboard">
		<div class="title">
			<span>Dashboard</span>
			<hr>
		</div>

		<div class="medidas">
			<table>
					<tr>
						<td class="medida">Medida</td>
						<td>Valor actual</td>
						<td>Valor esperado</td>
						<td>Cumplimiento</td>
						<td class="indicador">Indicador</td>
						<td class="detalles">Detalles</td>
					</tr>
				<tr>
					<td class="medida">{{Valor medida 1}}</td>
					<td>{{Valor actual}}</td>
					<td>{{Valor esperado}}</td>
					<td>{{Porcentaje%}}</td>
					<td class="indicador"><i class="fa fa-arrow-up"></i></td>
					<td class="detalles"><a href="#"><i class="fa fa-eye"></i></a></td>
				</tr>
				<tr>
					<td class="medida">{{Valor medida 2}}</td>
					<td>{{Valor actual}}</td>
					<td>{{Valor esperado}}</td>
					<td>{{Porcentaje%}}</td>
					<td class="indicador"><i class="fa fa-arrow-down"></i></td>
					<td class="detalles"><a href="#"><i class="fa fa-eye"></i></a></td>
				</tr>
				<tr>
					<td class="medida">{{Valor medida 3}}</td>
					<td>{{Valor actual}}</td>
					<td>{{Valor esperado}}</td>
					<td>{{Porcentaje%}}</td>
					<td class="indicador"><i class="fa fa-arrows-alt-h"></i></td>					
					<td class="detalles"><a href="#"><i class="fa fa-eye"></i></a></td>
				</tr>
				<tr>
					<td class="medida">{{Valor medida 4}}</td>
					<td>{{Valor actual}}</td>
					<td>{{Valor esperado}}</td>
					<td>{{Porcentaje%}}</td>
					<td class="indicador"><i class="fa fa-arrow-up"></i></td>
					<td class="detalles"><a href="#"><i class="fa fa-eye"></i></a></td>
				</tr>
				<tr>
					<td class="medida">{{Valor medida 5}}</td>
					<td>{{Valor actual}}</td>
					<td>{{Valor esperado}}</td>
					<td>{{Porcentaje%}}</td>
					<td class="indicador"><i class="fa fa-arrow-down"></i></td>
					<td class="detalles"><a href="#"><i class="fa fa-eye"></i></a></td>
				</tr>
			</table>
		</div>
	</div>
</div>

</body>
</html>