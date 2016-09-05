<?php
	
	require '../conn.php';
	require '../../model/Usuario.php';

	$error = False;

	$conn = ConnectionFactory::getFactory("sgp_user", "56p_2016", "sgp_system")->getConnection();
	if ($conn->connect_errno) {
		$error = 1;
	}

	$username = $conn->real_escape_string($_POST["username"]);
	$password = $conn->real_escape_string($_POST["pass"]);

	$result = $conn->query('SELECT nombres, apellidos, username, password, nombrePerfil, email FROM usuario INNER JOIN'.' perfil ON usuario.perfil = perfil.idPerfil WHERE activo = 1 AND username = "'.$username.'"');
	
	if ($result and $result->num_rows > 0){

		$obj = $result->fetch_object();
		if(password_verify($password, $obj->password)){
			
			$user = new Usuario();
			
			$user->setNombres($obj->nombres);
			$user->setApellidos($obj->apellidos);
			$user->setUserName($obj->username);
			$user->setEncryptedPassword($obj->password);
			$user->setPerfil($obj->nombrePerfil);
			$user->setEmail($obj->email);
			$user->setEstado(True);

			session_start();
			$_SESSION["userData"] = $user;
			session_write_close();
			header("Location: ../../main/home.php");
			exit();
			
		}
		else{
			$error = 2;
		}
	}
	elseif($conn->errno){
		$error = 1;
	}
	else{
		$error = 3;
	}

	if($error){
		header("Location: ../../index.php?error=".$error);
	}


?>