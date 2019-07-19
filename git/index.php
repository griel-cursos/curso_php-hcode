<?php

echo "Clonar repositorio Git: git clone LINK";
echo '<br><br>';
echo "Clonar repositório Git com nome: git clone LINK NOME";
echo '<br><br>';
echo "Criar repositório (comando para executar na pasta): git init";
echo '<br><br>';
echo "Adicionar arquivo ao git:";
echo '<ul>
		<li>Um arquivo: git add NOME</li>
		<li>Todos os arquivos: git add --all</li>
	  </ul>';
echo 'Confirmar a adição dos arquivos (commit): git commit -m "Mensagem"';
//Repositorio é um diretorio principal.
echo '<br><br>';
echo "Preparar arquivos para o site GitHub: git remote add origin LINK DO REPOSITÓRIO";
echo '<br><br>';
echo "Enviar arquivos para o site GitHub: git push origin master";
echo '<ul>
		<li>git: Comando do Git</li>
		<li>push: Comando para "empurrar" o arquivo</li>
		<li>origin: Enviar os arquivos da origem</li>
		<li>master: Pasta principal no repositório do Git</li>
	  </ul>';
echo "Baixar arquivos alterados remotamente: git pull origin master";
echo '<hr>';
echo "Fim da Aula de Git. Anotações para futuras referências";
?>