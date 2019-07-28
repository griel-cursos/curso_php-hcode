<?php

$Pessoa = array (
	'nome' => 'Roberto',
	'idade' => 30
);

foreach ($Pessoa as &$value) {
//Para cada $Pessoa, defina um $value
	
	if (gettype($value) === 'integer') $value += 10;
	
	echo $value . '<br>';
}

print_r($Pessoa);

?>