<?php

$filename = "usuarios.csv";
//Defino que a variavel será o meu arquivo csv

if (file_exists($filename)) {
	//Se existir o arquivo da variável
	
	$file = fopen($filename, "r");
	//Defino que a variavel $file irá abrir o arquivo "r" para read-only
	
	$headers = explode(",", fgets($file));
	//fgets pega só a primeira linha do arquivo. Usando explode vou exibir um array com o separador do arquivo
	
	$data = array();
	//Defino que $data será um array()
	
	while($row = fgets($file)) {
	//Enquanto houver linhas($row) em $file
		
		$rowData = explode(",", $row);
		//Dados na rowData irá exibir o array com o separador de arquivo
		
		$linha = array();
		//Defino que $linha será um array()
		
		for ($i = 0; $i < count($headers); $i++) {
//O $i começará no índice 0; count irá contar quantos conteúdos vou ter; e vou somar de um em um ++			
			
			$linha[$headers[$i]] = $rowData[$i];
//$headers é o array, sendo $i o índice  que eu quero retornar, $rowData irá recuperar as linhas 
		}
		
		array_push($data, $linha);
		//Adicionando ao array pronto ($data) o conteúdo que tenho em $linha
		
	}
	
	fclose($file);
	//Fechar arquivo e remover da memória
	
	echo json_encode($data);
	//Transformo o resultado final em um json
}

?>