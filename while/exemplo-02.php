<?php

$Total = 150;
$Desconto = 0.9;

do {
//Executa pelo menos uma vez a função...	
	
	$Total *= $Desconto;
	
}

while ($Total > 100);
//...enquanto a informação não for igual a definida, neste caso o $Total ser maior que 100.

echo $Total;



?>