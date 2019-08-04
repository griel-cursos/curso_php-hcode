<?php

class Documento {
	
	private $Numero;
	
	public function getNumero() {
		
		return $this->Numero;
	}
	
	
	public function setNumero($n) {
		
		$this->Numero = $n;
		
	}
	
}

class CPF extends Documento {
	
	public function Validar():bool {
		
		$NumeroCPF = $this->getNumero();
		
		//Aqui vai a validação do CPF
		
		return true;
	}
	
}

$doc = new CPF();

$doc->setNumero("11255455-44");

var_dump($doc->Validar());

echo '<br>';

echo $doc->getNumero();

?>