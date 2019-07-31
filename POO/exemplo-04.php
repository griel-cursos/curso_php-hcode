<?php

class Endereco {
	
	private $Logradouro;	
	private $Numero;
	private $Cidade;
	
	public function __construct($a, $b, $c){
		//Criando um método mágico
		
		$this->Logradouro = $a;
		//Representação da classe instanciada, ou seja, o nosso objeto
		$this->Numero = $b;
		//Representação da classe instanciada, ou seja, o nosso objeto
		$this->Cidade = $c;
		//Representação da classe instanciada, ou seja, o nosso objeto
		
	}
	
	public function __destruct(){
		//Destroi um método mágico
		
		//var_dump("Destruir");
		
	}
	
	public function __toString(){
		
		return $this -> Logradouro . ", " . $this->Numero . ", " . $this->Cidade;
	}
	
}

$MeuEndereco = new Endereco("Rua Manoel Alves Filho", "876", "Nova Serrana");


echo $MeuEndereco;

?>