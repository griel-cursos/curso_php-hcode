<?php

$name = "images";
//Nome do diretório que quero criar

if (!is_dir($name)) {
	
	mkdir($name);
	//Comando para Criar uma Pasta
	
	echo "Diretório $name criado com sucesso.";
	
} else {
	
	rmdir($name);
	//Comando para Apagar uma Pasta
	
	echo "O diretório $name já existe mas acabou de ser removido";
	
}

?>