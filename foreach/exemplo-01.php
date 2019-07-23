<?php

$Meses = array(
	"Janeiro", 
	"Fevereiro", 
	"Março", 
	"Abril", 
	"Maio", 
	"Junho", 
	"Julho",
	"Agosto",
	"Setembro",
	"Outubro",
	"Novembro",
	"Dezembro"
	//Em uma Array, o último ítem não termina em virgula
);

foreach ($Meses as $Mes) {
//O foreach irá pegar uma variável com várias funções, e criar uma nova variável para cada conteúdo	
	
	echo "O mês é: " . $Mes . '<br>';
	
}

echo '<hr>';

foreach ($Meses as $Indice => $Mes) {
//O foreach irá criar um índice e criar uma nova variavel ($Mes) para cada conteúdo
	
	echo 'O índice é: ' . $Indice . '<br>';
	echo 'O mês é: ' . $Mes . '<br><br>';
	
};

?>