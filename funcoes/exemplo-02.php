<?php

function Salario() {
	return 946.00;
	//Retorna somente o número
}

echo "José Recebeu 3 salários: " . (salario()*3);
//                                           ^= irá pegar o valor definido na função e multiplicar por três

?>