<?php

$DiaDaSemana = 8; //date("w");
//Comando date("w") retorna em número qual o dia da semana

switch ($DiaDaSemana) {
//Utilizado quando já sei qual as informações que tenho para comparar	
		
	case 0:
		echo 'Domingo';
		break;
		
	case 1:
		echo 'Segunda-Feira';
		break;
		
	case 2:
		echo 'Terça-Feira';
		break;
		
	case 3:
		echo 'Quarta-Feira';
		break;
		
	case 4:
		echo 'Quinta-Feira';
		break;
		
	case 5:
		echo 'Sexta-Feira';
		break;
		
	case 6:
		echo 'Sábado';
		break;
	
	default:
	//Resultado padrão se nenhuma informação for válida
		echo 'Data Inválida';
		break;
	
}

?>