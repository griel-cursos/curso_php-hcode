<?php

$file = fopen("log.txt", "a+"); //Variavel agora do tipo resourse, porque faze referência à um arquivo externo
//w = write | + = Zera o arquivo

fwrite($file, date("Y-m-d H:i:s") . "\r\n");
//\r\n pula a linha

fclose($file);
//Finaliza a edição do arquivo

echo "Arquivo criado com sucesso";

?>