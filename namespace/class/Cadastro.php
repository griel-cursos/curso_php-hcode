<?php

class Cadastro {
	
	private $Nome;
	private $Email;
	private $Senha;
	
	public function getNome():string {
		//Função do PHP7: Defino que tipo de dado que eu quero que retorne da função. Neste caso ():string
		
		return $this->Nome;
	}
	
	public function getEmail():string {
		
		return $this->Email;
	}
	
	public function getSenha():string {
		
		return $this->Senha;
	}
	
	public function setNome($Nome) {
		
		$this->Nome = $Nome;
	}
	
	public function setEmail($Email) {
		
		$this->Email = $Email;
	}
	public function setSenha($Senha) {
		
		$this->Senha = $Senha;
	}
	
	public function __toString() {
		
		return json_encode(
			array(
				"nome"=>$this->getNome(),
				"email"=>$this->getEmail(),
				"senha"=>$this->getSenha()
			)
		);
		
	}
}

?>