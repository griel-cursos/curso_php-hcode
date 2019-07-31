<?php

class Pessoa {
	
	
	public $Nome = "Roberto";
	//Atributo Publico
	
	protected $Idade = 30;
	//Atributo Protegido
	
	private $Senha = "123456";
	//Atributo Privado
	
	
	public function VerDados(){
		
		echo $this->Nome . "<br>";
		
		echo $this->Idade . "<br>";
		
		echo $this->Senha . "<br>";
		
	}
	
}

class Programador extends Pessoa {
	//Classe Programador extende tudo o que houver na classe PEssoa, exceto o que for Private
	
	public function VerDados(){
		
		echo get_class($this) . "<br>";
		//Ver em qual classe está chamando os métodos 
		
		echo $this->Nome . "<br>";
		
		echo $this->Idade . "<br>";
		
		echo $this->Senha . "<br>";
		
	}
	
	
}

$Objeto = new Programador();
//Instanciei PRogramador na variavel Objeto

//echo $Objeto->Senha . "<br>";

$Objeto->VerDados();

?>