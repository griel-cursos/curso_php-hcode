<?php

spl_autoload_register(
	function($NameClass) {
		
		var_dump($NameClass);
		
		$DirClass = "class";
		//Definir qual pasta estão os arquivos
		$FileName = $DirClass . DIRECTORY_SEPARATOR . $NameClass . ".php";
		//Definir o caminho do arquivo, com SEPARADOR DE DIRETORIO e extensão
		
		if (file_exists($FileName)) {
			//Se o arquivo existir
			require_once($FileName);
		}
	}
);


?>