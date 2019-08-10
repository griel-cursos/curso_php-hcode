<?php

class Carro {
	
	private $Modelo;
	private $Motor;
	private $Ano;
	//Atributos Privados
	
	
	public function getModelo() {
		
		return $this->Modelo;
		
	}
	
	public function setModelo($Modelo) {
		
		$this->Modelo = $Modelo;
		
	}
	
	public function getMotor() {
		
		return $this->Motor;
	}
	
	public function setMotor($Motor) {
		
		$this->Motor = $Motor;
	}
	
	public function getAno() {
		
		return $this->Ano;
	}
	
	public function setAno($Ano) {
		
		$this->Ano = $Ano;
	}
	
	public function Exibir() {
		
		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);
	}
	
}

$gol = new Carro();
$gol->setModelo("Ford Fusion");
$gol->setAno("2020");
$gol->setMotor("2.0 Turbo");
print_r($gol->Exibir());



?>