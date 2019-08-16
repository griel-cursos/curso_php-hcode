<?php

//Nomes temporários para as pastas
$dir1 = "folder_01";
$dir2 = "folder_02";

//Se não houver os diretórios, então criá-los
if (!is_dir($dir1)) {
	
	mkdir($dir1);
}

if (!is_dir($dir2)) {
	
	mkdir($dir2);
}
//Se não houver os diretórios, então criá-los

//Nome temporário para um arquivo
$filename = "readme.txt";

//Se não existir o arquivo, então...
if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {
	//Criar um arquivo
	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");
	//Escrever no arquivo
	fwrite($file, date("Y-m-d"));
	//Fechar o arquivo
	fclose($file);
	
}

rename(
	$dir1 . DIRECTORY_SEPARATOR . $filename, //Origem do Arquivo
	$dir2 . DIRECTORY_SEPARATOR . $filename //Destino do Arquivo
);

echo "Arquivo movido com sucesso";

?>