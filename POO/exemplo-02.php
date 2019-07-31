<?php

//Funções Gets e Setrs

class Carro {
	
	private $Modelo;
	//Atributo privado
	private $Motor;
	//Atributo privado
	private $Ano;
	//Atributo privado
	
	
	public function getModelo() {
		//pegarNOME-METODO, pegar o valor do Atributo
	
		return $this -> Modelo;
		//Representa o objeto
	
	}
	
	public function setModelo($Modelo) {
		
		$this -> Modelo = $Modelo;
		//Este -> Objeto = Recebe $Variavel
		
	}
	
	public function getMotor():float {
		
		return $this -> Motor;
	}
	
	public function setMotor($Motor) {
		
		$this -> Motor = $Motor;
	}
	
	public function getAno():int {
		
		
		return $this -> Ano;
	}
	
	public function setAno($Ano) {
		
		$this -> Ano = $Ano;
	}
	
	public function Exibir() {
		
		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);
		
	}
}

$Gol = new Carro();
$Gol->setModelo("Gol GT");
$Gol->setMotor("1.6");
$Gol->setAno("2019");


var_dump($Gol->Exibir());



?>