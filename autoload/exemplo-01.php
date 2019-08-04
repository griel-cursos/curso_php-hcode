<?php

function __autoload($NomeClasse) {
	//Carrega todas as classes dentro de uma pasta
	
	var_dump($NomeClasse);
	
	require_once("$NomeClasse.php");
	
	
	
}

$Carro = new DelRey();

$Carro->Acelerar(80);

?>