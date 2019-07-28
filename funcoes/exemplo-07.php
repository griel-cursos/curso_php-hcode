<?php

function soma(int ... $valores) {
	//Informo que todos os meus $valores serão inteiros (Declaração de tipos escalares)
	
	return array_sum($valores);
	//array de soma
}

echo soma(2,2);
echo '<br>';
echo soma(25,33);
echo '<br>';
echo soma(1.5, 3.2);

?>