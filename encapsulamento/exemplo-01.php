<?php

//

class Pessoa {
	
	
	public $Nome = "Roberto";
	//Atributo Publico
	
	protected $Idade = 30;
	//Atributo Protegido. Somente "quem" está dentro da classe ou quem herda
	
	private $Senha = "123456";
	//Atributo Privado. Classes que herdam não conseguem acessar.
	
	
	public function VerDados(){
		
		echo $this->Nome . "<br>";
		
		echo $this->Idade . "<br>";
		
		echo $this->Senha . "<br>";
		
	}
	
}

$Objeto = new Pessoa();

//echo $Objeto->Senha . "<br>";

$Objeto->VerDados(); //Exibir quem está dentro da classe

?>