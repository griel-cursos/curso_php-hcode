<?php

//Estrutura de uma Classe. Toda classe começa com Primeira Letra Maiuscula

class Pessoa {
	
	public $Nome;
	//Criando o atributo
	
	public function Falar() {
		//Criando o método publico, que é semelhante à uma função
		
		return "O meu nome é " . $this->Nome;
								 //Representação da classe instanciada, ou seja, o nosso objeto
		
	}
	
}

$Roberto = new Pessoa();
//Criei um objeto instanciando a classe Pessoa()

$Roberto->Nome = "Roberto Griel Filho";
//Quero referenciar um atributo que está dentro da Classe

echo $Roberto->Falar();
//Quero executar o método Falar() com o que for retornado




?>