<?php

$AnoNascimento = 1989;
//Variavel de Ano de Nascimento

/*
	Exemplo de comentário de bloco
	
	Variaveis não podem começar com número ou ter caractere especial, exceto underline.
*/

$Nome1 = "Roberto";

$Sobrenome = "Griel Filho";

$NomeCompleto = $Nome1 . " " . $Sobrenome;
//						  ^- Concatenação com espaço

echo $NomeCompleto;

exit;

echo '<br>';

unset($Nome1);
//unset funciona para destruir uma variavel

if (isset($Nome1)) {
//if (isset()) faz uma verificação se a variavel existe.

echo $Nome1;
	
}


?>