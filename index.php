<?php
	session_start();
	if (isset($_SESSION["userData"])) {
		session_write_close();
	 	header("Location: main/home.php");
	 	exit();
	 }else{
	 	session_destroy();
	 } 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/index.css">
	<script type="text/javascript" src="JS/jquery-3.1.0.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$form = $('#login_form'); 
    		$form.find(':input[type="submit"]').prop('disabled', true); // disable submit btn
    		$form.find(':input').change(function() { // monitor all inputs for changes
	        	var disable = false;
	        	$form.find(':input').not('[type="submit"]').each(function(i, el) { // test all inputs for values
	            	if ($.trim(el.value) === '') {
	                	disable = true; // disable submit if any of them are still blank
	            	}
	        	});
       		$form.find(':input[type="submit"]').prop('disabled',disable);
    	});
    });
	</script>
	<meta charset="utf-8">
	<title>Login-Sistema de Generación de Presupuestos y Control de Proyectos</title>
</head>
<body>
	<?php
		if (isset($_GET["error"])){
	?>
		<div id="errorDiv">
		<?php
			if ($_GET["error"] == 1){

				echo "Error en la conexión, por favor intente mas tarde";

			}
	
			elseif ($_GET["error"] == 2 ){

				echo "Usuario o contraseña inválidos";
			}
			elseif ($_GET["error"] == 3) {
				echo "Usuario inexistente o sin permisos asignados, si en su caso es el segundo problema por favor ".
				"contacte con el Administrador del Sistema";
			}
		?>
		</div>
	<?php
		} 
	?>
	<form action="services/user/login.php" method="POST" id="login_form">
		<table>
			<tr><td><label for="username">Nombre de Usuario: </label><input type="text" name="username"/></td></tr>
			<tr><td><label for="pass">Contraseña: </label><input type="password" name="pass"/></td></tr>
			<tr><td><input type="submit" value="Ingresar"/></td></tr>
		</table>
	</form>
</body>
</html>