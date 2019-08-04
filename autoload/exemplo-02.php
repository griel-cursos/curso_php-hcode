<?php

//SPL: Standart PHP Library = Biblioteca de funções nativas do PHP para

function IncluirClasses($NomeClasse) {
	
	if (file_exists($NomeClasse . ".php") === true) {
		require_once($NomeClasse . ".php");
	}
}

spl_autoload_register("IncluirClasses");
//Registra mais de uma função no AutoLoad
spl_autoload_register(
	function($NomeClasse) {
		if (file_exists("Abstratas" . DIRECTORY_SEPARATOR . $NomeClasse . ".php") === true) {
		//Verifica se a pasta existe  Separador de Pasta do Sistema
			require_once("Abstratas" . DIRECTORY_SEPARATOR . $NomeClasse . ".php");
		}	
	}
);

$Carro = new DelRey();

$Carro->Acelerar(80);

?>