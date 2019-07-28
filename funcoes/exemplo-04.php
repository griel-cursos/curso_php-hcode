<?php

function Ola() {
	
	$Argumentos = func_get_args();
	//Recupera em Array todos os argumentos que forem definidas à esta função ($Argumentos)
	
	return $Argumentos;
}

var_dump(Ola("Bom Dia", 10));
//Irá exibir o "Bom Dia" e o 10 em formato de Array

?>