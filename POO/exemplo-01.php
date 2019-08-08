<?php

//Estrutura de uma Classe. Toda classe começa com Primeira Letra Maiuscula

class Pessoa {
	
	public $Nome;
	//Atributo. Atributo fora de métodos posso chamar $Normal, Atributo dentro de método só posso chamar por $this->Metodo
	
	public function Falar() { //Método: Função dentro de uma classe
		
		return "O meu nome é " . $this->Nome;
								//Representação do Objeto $this
		
	}
	
}

$Roberto = new Pessoa();
$Roberto->Nome = "Roberto";
//Estou definindo que o atributo $Nome terá a informação dentro das aspas
echo $Roberto->Falar();

///////////////////////



//Exemplo de Classe para Apagar um Arquivo e Rodar Função
class Apagar {
	
	public $Arquivo;
	
	public function Deletar() {
		
		$this->Arquivo = "teste.txt";
		
		unlink($this->Arquivo);
		
	}
	
}

$Arquivo = new Apagar();
$Arquivo->Deletar();
?>