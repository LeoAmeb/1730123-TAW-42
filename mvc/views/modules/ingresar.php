<h1>INGRESAR</h1>
	<form method="post">
		<input type="text" placeholder="Usuario" name="usuarioIngreso">
		<input type="text" placeholder="Password" name="passwordIngreso">
		<input type="submit" value="Enviar">
	</form>
<?php
	$ingreso = new MvcController();
	$ingreso->ingresoUsuarioController();

	if(isset($_GET["action"])){
		if($_GET["action"]=="fallo"){
			echo "Fallo al ingresar";
		}
	}
?>