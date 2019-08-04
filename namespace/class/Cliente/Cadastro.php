<?php

namespace Cliente;
//Chamando o que está dentro da pasta Cliente

class Cadastro extends \Cadastro {
	//Usando a \ ele volta na pasta raíz para procurar o arquivo e a classe
	
	public function RegistrarVenda() {
		
		echo "Foi Registrada uma Venda para o Cliente " . $this->getNome();
	}
	
}

?>