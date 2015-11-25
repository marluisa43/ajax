<?php require_once('css/main.css'); ?>

<br>
<table class="table table-striped">
	<tr>
		<th>Referencia</th>
		<th>Nombre</th>
		<th>Marca</th>
		<th>Precio</th>
		<th>Stock</th>
	</tr>
	
	<?php 
		$conexion=new mysqli('localhost','root','','tienda');
		$inventario=$conexion->query("select * from productos");
		while($registro=$inventario -> fetch_object()){
			echo '<tr>';
				echo '<td>'.$registro->referencia.'</td>';
				echo '<td>'.$registro->nombre.'</td>';
				echo '<td>'.$registro->marca.'</td>';
				echo '<td>'.$registro->precio.'</td>';
				echo '<td>'.$registro->stock.'</td>';
			echo '</tr>';
		}

		$conexion->close();	
	?>	
</table>

