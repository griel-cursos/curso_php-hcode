<?php

for (
	$Indice = 0; //Informo que minha variável de contagem começa com 0
	$Indice <= 10; //Se a variável for menor que 10, continuará fazendo a função
	$Indice++ //Informo que quero que minha variavel some, com operador incremental
	
//  ($i = 0; $i <= 10; $i++)
	
	) {
	
	echo $Indice . '<br>';
}
//Nesta função, para (for) cada vez que rodar, vai verificar se o indice que começou com zero está igual ou menor que 10, e então irá somar mais um numero, e exibir no echo o resultado

echo '<hr>';

for ($a = 0; $a < 1000; $a += 5){
	
	echo $a . '<br>';
}
//Irá exibir $a até 1000 somando de 5 em 5

echo '<hr>';

for ($b = 0; $b < 1000; $b += 5) {
	
	if ($b >= 200 && $b <= 800) continue;
	//Verifica se $b é maior ou igual a 200 e (&&) se $b é menor ou igual a 800, e então continua
	
	echo $b . '<br>';
	
}

echo '<hr>';

for ($c = 0; $c < 1000; $c += 5) {
	
	if ($c >= 200 && $c <= 800) continue;
	
	if ($c === 900) break;
	//Verifica se $c chegou em 900 e termina a função
	
	echo $c . '<br>';
	
}

?>