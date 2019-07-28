<?php


function Ola($Texto){
//	Parâmetro na função como obrigatório precisa OBRIGATÓRIAMENTE estar a esquerda
	
	return "Olá $Texto!<br>"; //Interpolação de Variáveis
	//Irá exibir o parâmetro da função
}

echo Ola("mundo");
//Irá executar a função com o parâmetro definido. Lembrete: Os parâmetros sempre estarão dentro de ()

/////////////////
echo '<HR>';


function OlaNomes($Texto = "Você"){
//Deixo um parâmetro pré-definido, caso nenhum seja definido	
	return "Olá $Texto!<br>";
}

echo OlaNomes("Roberto");
//Informo que o parâmetro será "Roberto"
echo OlaNomes("");
//Informo que o parâmetro será um espaço vazio
echo OlaNomes();
//Não informo parâmetro nenhum


//////////////////
echo '<HR>';

function OlaPeriodo($Texto = "Você", $Periodo = "Bom Dia") {
//Parâmetros que não sejam pré-definidos se tornam obrigatório na execução da função, e sempre devem estar à esquerda.
	
	return "Olá $Texto, desejo $Periodo para você.<br><br>";
}

echo OlaPeriodo("Roberto","Bom Dia");
//"Roberto" irá corresponder ao parâmetro $Texto, e "Bom Dia" irá corresponder ao parâmetro $Periodo
echo OlaPeriodo("Nay", "Boa Noite");
echo OlaPeriodo();

?>