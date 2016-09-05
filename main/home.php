<?php
	
	require '../model/Usuario.php';

	session_start();

	if (isset($_SESSION["userData"])){
		$userData = $_SESSION["userData"];

		session_write_close();
	}
	else{
		header("Location: ../index.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home-Sistema de Generación de Presupuestos y Control de Proyectos</title>
</head>
<body>
	<p><?= $userData->getUserName()  ?></p>
	<p><a href="../services/user/logout.php">Desconectar</a></p>
</body>
</html>