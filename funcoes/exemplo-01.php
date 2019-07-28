<?php

function ola_subrotina() {
	echo 'Olá Mundo. Esta é uma subrotina<br>';	
}
//Exemplo de uma subrotina

ola_subrotina();


//

function ola() {
	return 'Olá Mundo. Esta é uma função<br>';
}

echo ola();
$Frase = ola();

echo 'Essa frase tem ' . strlen(ola()) . ' letras';

?>