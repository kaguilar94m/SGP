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
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="lib/CSS/index.css">
		<link rel="stylesheet" href="lib/CSS/font-awesome.min.css">
	  	<link rel="stylesheet" href="lib/CSS/bootstrap.min.css">
	  	<link rel="stylesheet" href="lib/CSS/fonts.css">
	  	<link type="text/css" rel="stylesheet" href="lib/CSS/soft-admin.css"/>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!--[if lt IE 9]>
	   <script src="lib/js/html5shiv.js"></script>
	   <script src="lib/js/respond.min.js"></script>
	  <![endif]-->

		<meta charset="utf-8">
		<title>Login-Sistema de Generación de Presupuestos y Control de Proyectos</title>
	</head>
	<body>
	   		<div id="log-tbl">
	   			<div id="log-contain">
					<?php
						if (isset($_GET["error"])){
					?>
						 <div id="errorDiv" class="alert alert-danger alert-round alert-border alert-soft"><span class="icon icon-remove-sign"></span> <strong>Error:</strong>
					<?php
						if ($_GET["error"] == 1){

							echo "Problemas en la conexión, por favor intente mas tarde";
						}
						elseif ($_GET["error"] == 2 ){

							echo "Usuario o contraseña inválidos";
						}
						elseif ($_GET["error"] == 3) {
							echo "Usuario inexistente o sin permisos asignados, si en su caso es el segundo problema por ". 
							"favor contacte con el Administrador del Sistema";
						}
					?>
					</div>
				<?php
					} 
				?>
	    		<div id="login">
					<form id="login-form" class="form" action="services/user/login.php" method="POST">
	      				<div class="form-group">
	       					<label class="control-label" for="login-username">Nombre de Usuario</label>
	       					<div class="input-icon">
	        					<i class="icon icon-user"></i>
	        					<input class="form-control form-soft input-sm" type="text" name="username">
	       					</div>
	      				</div>
	      				<div class="form-group">
	       					<label class="control-label" for="login-password">Contraseña</label>
	       					<div class="input-icon">
	        					<i class="icon icon-lock"></i>
	        					<input class="form-control form-soft input-sm" type="password" name="pass">
	       					</div>
	      				</div>
	      				<div class="form-group">
	       					<button type="submit" id="login-btn" class="btn btn-primary btn-block btn-lg">Login&nbsp;&nbsp;&nbsp;<i class="fa fa-play"></i></button>
	      				</div>
	      			 </form>
				</div>
			</div>
	    </div>

		<script type="text/javascript" src="lib/JS/jquery-3.1.0.min.js"></script>
		<script type="text/javascript" src="lib/JS/bootstrap.min.js"></script>
		<script type="text/javascript" src="lib/JS/hogan.min.js" ></script>
		<script type="text/javascript" src="lib/JS/typeahead.min.js"></script>
		<script type="text/javascript" src="lib/JS/typeahead-example.js"></script>
		<script type="text/javascript" src="lib/JS/bootstrapValidator.js"></script>
		<script type="text/javascript">
		  $(document).ready(function() {
		   $('#login-form').bootstrapValidator({
		    fields: {
		     username: {
		      validators: {
		       notEmpty: {
		        message: 'Por favor ingrese el nombre de usuario'
		       }
		      }
		 	 },
		     pass: {
		      validators: {
		       notEmpty: {
		        message: 'Por favor ingrese la contraseña'
		       }
		      }
		     }
		    }
		   });
		  });
	  </script>
	</body>
</html>