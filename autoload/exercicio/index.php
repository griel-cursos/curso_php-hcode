<?php 

define("CLS_DIR", "Classe");

spl_autoload_register(
	function($NomeClasse) {
		if (file_exists(CLS_DIR . DIRECTORY_SEPARATOR . $NomeClasse . ".php") === true) {
			require_once(CLS_DIR . DIRECTORY_SEPARATOR . $NomeClasse . ".php");
		}
		else {
			throw new Exception("A classe não existe", 1);
			
		}
	}
);


$Txt = new HelloWorld();
$Txt->setTxt1("Olá");
$Txt->setTxt2("Mundo");
$Txt->Falar();

 ?>