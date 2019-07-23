<?php

$Condicao = True;
//Determina a condição da variavel como verdadeira

while ($Condicao) {
//Enquanto a variavel for verdadeira, irá executar a função	

	$numero = rand(1 , 10);
	//Criará um número aleatório de 1 a 10
	
	if ($numero === 3) {
	//Se o número sorteado for 3...	
		
		echo 'Número Três!!';
		$Condicao = false;
		//Irá informar que sorteou o número três e definirá a condição como falsa
	}
	
	echo $numero . ' ';
	//Enquanto isso, irá exibir os numeros aleatórios que não sejam tres
}

?>