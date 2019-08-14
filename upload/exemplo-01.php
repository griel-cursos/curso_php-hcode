<form method="POST" enctype="multipart/form-data">

	<input type="file" name="fileUpload">
	<button type="submit">Enviar</button>	

</form>


<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
//Se o método que o formulário enviou for post
	
	$file = $_FILES["fileUpload"];
//Guardar Informações do Arquivo em $file. Uso o nome que dei ao campo "input"	
	
	if ($file["error"]) {
	//Se retornar algum erro no upload
		
		throw new Exception("Erro: " . $file["error"]);
		//Joga um erro na tela informando que houve um erro
	}
	
	$dirUploads = "uploads";
	//Vou definir a pasta onde vou enviar os arquivos
	
	if (!is_dir($dirUploads)) {
	//Se não existir a pasta que defini em $dirUploads, então...
		mkdir($dirUploads);
		//Criar uma pasta com o nome que defini em $dirUploads
	}
	
	if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {
	//Função para mover o arquivo. $file recebe o arquivo temporario, depois defino onde quero mover o arquivo	
		
		echo "Upload realizado com sucesso";
		
	} else {
		throw new Exception("Não foi possível realizar o upload");
	}
	
}


?>

