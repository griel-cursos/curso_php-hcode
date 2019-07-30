<?php

$dt = new DateTime();
		//Criando Objeto a partir de uma Classe()

$Periodo = new DateInterval("P15D");
echo 'Documentação para a classe DateInterval: <a href="https://www.php.net/manual/pt_BR/class.dateinterval.php">Manual PHP</a>';

echo '<br><br>';

echo $dt->format("d/m/Y H:i:s");

echo '<br><br>';

$dt->add($Periodo);
	//Adicionando o método add()

echo $dt->format("d/m/Y H:i:s");
	//dt é uma Instancia da Classe. Para acessar o método usa o comando ->
?>