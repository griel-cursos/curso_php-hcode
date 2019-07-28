<?php


$a = 10;


function TrocaValor($a) {
//Parâmetros por Valor	
	
	$a = 50;
	
	return $a;
}
//O que acontece na função, fica na função: Defini que a variavel $a recebe o valor 50 dentro da função, independente do valor que a variável $a receber fora da função.

echo 'Chamando o valor que está na variável:' . $a;
echo '<br><br>';
echo 'Chamando o valor que está na função: ' . TrocaValor($a);
echo '<br><br>';

$b = 50;

function TrocaValor2(&$b) {
//& significa: PASSAGEM DE PARÂMETRO POR REFERÊNCIA. Ou seja, o que acontecer dentro da função, irá refletir na variável que estiver fora da função	
	
	$b += 50;
	
	return $b;
}

echo TrocaValor2($b);
echo '<br><br>';
echo TrocaValor2($b); //Cada vez que roda esta função, ela irá somar o valor definido na função ao valor da variavel fora da função também

?>