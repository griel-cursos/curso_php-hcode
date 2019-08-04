<?php

//Interface ira obrigar que todas as classes que implementem a interface tenha os métodos e atributos que foram designados dentro da interface, senão o código não funciona.
interface Veiculo{
	
	public function Acelerar($Velocidade);
	
	public function Frenar($Velocidade);
	
	public function TrocarMarcha($Marcha);
	
}

class Civic implements Veiculo/*, OutraInterface*/ {
	
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

$Carro = new Civic();

//Chamando o método (função) TrocarMarca
$Carro->TrocarMarcha(1);

?>