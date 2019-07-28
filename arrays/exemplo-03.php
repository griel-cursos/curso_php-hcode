<?php

$Pessoas = array();
//Definiu que $pessoas é um array

array_push($Pessoas, array(
//Adiciona um novo array dentro de uma array já definida	

	'nome' => 'Roberto',
	'idade' => '30'
	
));

array_push($Pessoas, array(

	'nome' => 'Nay',
	'idade' => '32'

));

print_r($Pessoas);
//Exibe o Array com o push do nome e idade

echo '<br><br>';

print_r($Pessoas[0]['nome']);
//Exibe o array do indice 0 e a posição 'nome'


?>