<?php

$images = scandir("images");
//scandir retorna o que tiver dentro da pasta em um array

$data = array();

foreach ($images as $img) {
	//images é o array e img é um item do array
	
	if (!in_array($img, array(".", ".."))) {
		//in_array busca em array (onde estou procurand, o que estou procurando)
		//Essa linha ignora as posições iniciais que exibem somente . e ..
		
		$filename = "images" . DIRECTORY_SEPARATOR . $img;
		
		$info = pathinfo($filename);
		
		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
							// 					Recuperar o timestamp da modificação do arquivo
		$info["url"] = "http://localhost/cursophp/DIR/" . str_replace("\\", "/", $filename);
											//Sempre que for precisar informar a \, precisa colocar duas \\
		
		array_push($data, $info);
		//Adiciona no array $data, todas as informações que veio recuperada do $info
		
	}
	
}



echo "<br><br>";

echo json_encode($data);

?>