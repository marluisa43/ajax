$(function(){
	$("#btn_inventario").click( function(){
		$.ajax({
				url:"generar_inventario.php",
				dataType:"html",
				success: function(respuesta){
					$("#tb_inventario").html(respuesta);
				}
		});
	});

});