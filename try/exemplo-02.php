<?php

//função que irá ter um erro propositalmente
function TrataNome($name) {
	
	if (!$name)	 {
		
		throw new Exception ("Nennhum nome foi informado", 1);
	}
	
	echo ucfirst($name) . "<br>";
	
}
//Tentará executar alguma função
try {
	
	TrataNome("Roberto");
	TrataNome("");
//Se der erro, será exibido para o usuário de forma amigável	
} catch(Exception $e) {
	
	echo $e->getMessage() . "<br>";
	
} finally { //E por fim irá rodar a ultima função
	
	echo "Executou o bloco Try";
	
}

?>