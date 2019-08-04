<?php

abstract class Animal {
	
	public function Falar() {
		
		return "Som";
	}
	
	public function Mover() {
		
		return "Anda";
		
	}
	
}

//O Polimorfismo permite alterar um método com o mesmo nome de uma classe herdada. Neste exemplo a classe abstrata "Animal" define um método para "Falar" mas a classe "Cachorro" altera o método Falar para outro conteúdo
class Cachorro extends Animal {
	
	public function Falar() {
		
		return "Late";
		
	}
	
}

class Gato extends Animal {
	
	public function Falar() {
		
		return "Mia";
	}
	
	public function Mover() {
		return "Corre";
	}
}

class Passaro extends Animal {
	
	public function Falar() {
		
		return "Canta";
	}
	
	public function Mover() {
		return "Voa e " . parent::Mover();
	//Define um valor e chama da clase herdada (extends Animal) o método com o mesmo nome e o que ele faz na classe Pai
	}
	
}

$Pluto = new Cachorro();

echo $Pluto->Falar() . "<br>";

echo $Pluto->Mover() . "<br>";

echo "<hr>";

$Garfield = new Gato();

echo $Garfield->Falar() . "<br>";

echo $Garfield->Mover() . "<br>";

echo "<hr>";

$Ave = new Passaro();

echo $Ave->Falar() . "<br>";

echo $Ave->Mover() . "<br>";
?>