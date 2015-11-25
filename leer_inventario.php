<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inventario</title>
	<meta charset="utf-8">
</head>
<body>
	<?php require_once('css/main.css'); ?>

		<h1 class="text-center"> Inventario </h1><br>

		<p class="text-center"><button id="btn_inventario" type="button" class="btn btn-primary btn-lg text-center"> Obtener el Inventario</button></p>
		<br>
		<div id="tb_inventario" class="table-responsive"> </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/obtener_inventario.js"></script>

</body>
</html>