<?php

$image = imagecreatefromjpeg("certificado.jpg");

$TitleColor = imagecolorallocate($image, 0, 0, 0);
$Gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 120, "CERTIFICADO", $TitleColor);
imagestring($image, 5, 440, 350, "Roberto Filho", $TitleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em ") . date("d/m/Y"), $TitleColor);
//Parâmetros: Imagem a Ser Editada, Tamanho da Fonte, Eixo X, Eixo Y, Frase para Exibir, Cor (Ou variável da cor)

header("Content-Type: image/jpeg");
imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg", 10); //Cria um arquivo fisicamente. 
//Parâmetros: Imagem, nome do arquivo, qualidade de 0 a 100
imagedestroy($image);

?>