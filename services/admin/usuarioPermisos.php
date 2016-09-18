<?php
	require_once '../../DAO/UsuarioDAO.php';
	require_once '../../model/Usuario.php';

	$userDAO = new UsuarioDAO();
	if (isset($_POST["email"]) and is_null($userDAO->getError())) {
			$usuario = new Usuario();
			$usuario->setEmail($_POST["email"]);
			$usuario->setPerfil(isset($_POST["perfil"]) ? "" : $_POST["perfil"]);
			$usuario->setEstado(isset($_POST["estado"]) ? true : false);
			$res = $userDAO->actualizarPermisosUsuario($usuario);
			if ($res) {
				header("Location: ../../main/admin/users.php");
			}
	}
	
?>