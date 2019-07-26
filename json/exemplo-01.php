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

echo json_encode($Pessoas);
//Transforma um Array em JSON


?>