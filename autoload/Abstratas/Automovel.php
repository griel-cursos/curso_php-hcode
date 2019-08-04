<?php

interface Veiculo{
	
	public function Acelerar($Velocidade);
	
	public function Frenar($Velocidade);
	
	public function TrocarMarcha($Marcha);
	
}

abstract class Automovel implements Veiculo {
	//Classe Abstrata é igual a interface, porém na classe abstrata eu defino também o que cada método irá executar, de acordo com o que a interface solicitar.
	
	public function Acelerar($Velocidade) {
		
		echo "O veiculo acelerou até " . $Velocidade . "hm/h";
		
	}
	
	public function Frenar($Velocidade) {
		
		echo "O veiculo frenou até " . $Velocidade . "km/h";
		
	}
	
	public function TrocarMarcha($Marcha) {
		
		echo "O veiculo engatou a marcha " . $Marcha;
		
	}
	
	
}

?>