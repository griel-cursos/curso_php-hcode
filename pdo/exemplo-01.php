<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

$stmt = $conn->prepare("select * from tb_usuarios order by deslogin");

$stmt->execute();

$resultados = $stmt->fetchALL(PDO::FETCH_ASSOC);

foreach ($resultados as $coluna) {
	
	foreach ($coluna as $chave => $valor) {
		
		echo "<b>" . $chave . "</b>" . $valor . "<br>";
	}
	
	echo "<hr>";
}


?>