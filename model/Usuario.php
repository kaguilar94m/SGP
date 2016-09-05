<?php
	/**
	 * 
	 */
	 class Usuario 
	 {
	 	
	 	private $nombres;
	 	private $apellidos;
	 	private $userName;
	 	private $encryptedPassword;
	 	private $perfil;
	 	private $email;
	 	private $estado;

	 	public function getEncryptedPassword(){

	 		return $this->encryptedPassword;
	 	}

	 	public function setEncryptedPassword($encryptedPassword){
	 		
	 		$this->encryptedPassword = $encryptedPassword;
	 	}

	 	public function getNombres(){

	 		return $this->nombres;
	 	}

	 	public function setNombres($nombres){

	 		$this->nombres = $nombres;
	 	}

	 	public function getApellidos(){

	 		return $this->apellidos;
	 	}

	 	public function setApellidos($apellidos){

	 		$this->apellidos = $apellidos;
	 	}

	 	public function getUserName(){

	 		return $this->userName;
	 	}

	 	public function setUserName($userName){

	 		$this->userName = $userName;
	 	}

	 	public function getPerfil(){

	 		return $this->perfil;
	 	}

	 	public function setPerfil($perfil){

	 		$this->perfil = $perfil;
	 	}

	 	public function setEstado($estado){
	 		$this->estado = $estado;
	 	}

	 	public function getEstado(){
	 		return $this->estado;
	 	}

	 	public function setEmail($email){
	 		$this->email = $email;
	 	}

	 	public function getEmail(){
	 		return $this->email;
	 	}

	 } 
?>