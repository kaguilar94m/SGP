<?php
	require_once '../../model/Usuario.php';
	require_once '../../DAO/UsuarioDAO.php';

	header('Content-Type: application/json');

	$userDAO = new UsuarioDAO();
	if (is_null($userDAO->getError())) {
		$users = $userDAO->getUsuarios();

		if(is_array($users)){
			$res = array();
			foreach ($users as $user) {
				$res[] = $user->jsonSerialize();
			}
			echo json_encode(array('data'=>$res), JSON_PRETTY_PRINT);
		}
	}

?>