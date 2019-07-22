<?php

$QualASuaIdade = 11;

$IdadeCrianca = 12;
$IdadeMaior = 18;
$IdadeIdoso = 65;

if ($QualASuaIdade < $IdadeCrianca) {
//O if() sempre deve vir no começo
	echo 'Criança';
	
}  else if ($QualASuaIdade < $IdadeMaior) {
//Else if () sempre deve vir após o primeiro IF
	
	echo 'Adolecente';
	
}  else if ($QualASuaIdade < $IdadeIdoso) {
//Explicação: Se $QualASuaIdade for menor que $IdadeIdoso, então irá exibir a palavra Adulto	
	echo 'Adulto';
}


else {
//Else só pode ter uma vez e sempre no final da instrução
	
	echo 'Idoso';
	
}

echo '<BR><BR>';

echo ($QualASuaIdade < $IdadeMaior) ? 'Menor de Idade':'Maior de Idade';
//Operador Ternario (o IF de uma linha só).

?>