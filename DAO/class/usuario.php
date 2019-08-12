<?php

class Usuario {
	
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;
	
	public function getIdusuario() {
		return $this->idusuario;
	}
	
	public function setIdusuario($value) {
		$this->idusuario = $value;
	}
	
	public function getDeslogin() {
		return $this->deslogin;
	}
	
	public function setDeslogin($value) {
		$this->deslogin = $value;
	}
	
	public function getDessenha() {
		return $this->dessenha;
	}
	
	public function setDessenha($value) {
		$this->dessenha = $value;
	}
	
	public function getDtcadastro(){
		return $this->dtcadastro;
	}
	
	public function setDtcadastro($value) {
		$this->dtcadastro = $value;
	}
	
	public function loadById($id) {
		
		$sql = new SQL();
		
		$results = $sql->select("select * from tb_usuarios where idusuario = :ID", array(
			":ID"=>$id
		));
		
		if (count($results) > 0) {
			
			$this->setData($results[0]);
			
		}
		
	}
	
	//Recuperar a lista de usuários
	public static function getList() {
		$sql = new SQL();
		return $sql->select(" select * from tb_usuarios order by deslogin");
	}
	
	
	//Busca usuários conforme o parâmetro informado no index.php
	public static function search($login) {
		
		$sql = new SQL();
		return $sql->select("select * from tb_usuarios where deslogin like :SEARCH order by deslogin", array(
			':SEARCH'=>"%" . $login . "%"
		));
		
	}
	
	//Função para retornar login e senha se estiverem devidamente corretos
	public function login($login, $password) {
		
		$sql = new SQL();
		
		$results = $sql->select("select * from tb_usuarios where deslogin = :LOGIN and dessenha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		));
		
		if (count($results) > 0) {
			
			$this->setData($results[0]);
			
		}
		
		else {
			
			throw new Exception("Login ou Senha Inválido");
		}
		
	}
	
	
	public function setData($data) {
		
			$this->setIdusuario($data['idusuario']);
			$this->setDeslogin($data['deslogin']);
			$this->setDessenha($data['dessenha']);
			$this->setDtcadastro(new DateTime($data['dtcadastro']));
		
	}
	
	
	//Adicionar usuários com procedure
	public function insert() {
		$sql = new SQL();
		
		$results = $sql->select(" CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha()
		
		
		));
		
		if (count($results) > 0) {
			$this->setData($results[0]);
		}
		
	}
	
	
	public function update($login, $password) {
		
		$this->setDeslogin($login);
		$this->setDessenha($password);
		
		$sql = new SQL();
		
		$sql->query("update tb_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD where idusuario = :ID", array(
		':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha(),
			':ID'=>$this->getIdusuario()
		
		));
	}
	
	
	
	public function __construct($login ="", $password="") {
		$this->setDeslogin($login);
		$this->setDessenha($password);
	}
	
	
	
	//Função para exibir em texto o resultado das funções acima
	public function __toString() {
		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));
	}
	
}

?>