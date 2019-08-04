<?php

//Interface ira obrigar que todas as classes que implementem a interface tenha os métodos e atributos que foram designados dentro da interface, senão o código não funciona.
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

class DelRey extends Automovel {
	
	public $NomeCarro;
	
	public function Empurrar() {
		
		echo $this->NomeCarro;
		
	}
	
}

$Carro = new DelRey();
$Carro->NomeCarro = "Del Rey";
echo $Carro->NomeCarro . "<br>";
$Carro->Acelerar(200);

echo "<hr>";



?>