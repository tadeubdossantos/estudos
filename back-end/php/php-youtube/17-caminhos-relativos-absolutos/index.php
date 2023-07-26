<?php

	/*
	Caminho Relativo 
		→ Referência ao caminho atual do script em execução em relação aos arquivos que queremos fazer a insclusão
		→ Se baseia no caminho na qual a qual o nosso script atual estar localizado dentro do projeto

	Caminho Absoluto 
		→ Caminho completo de localização de um determiando script em um servidor
	*/

	//Exemplos de caminho absoluto completo
	$path1 = dirname(__FILE__);
	$path2 = __DIR__;
	echo '<pre>'.$path1.'</pre>';
	echo '<pre>'.$path2.'</pre>';

	//Exemplo de caminho absoluto até a pasta raiz do servidor
	$path3 = $_SERVER['DOCUMENT_ROOT'];
	$path4 = $_SERVER['SERVER_NOME'];
	
	echo '<pre>'.$path3.'</pre>';
	echo '<pre>'.$path4.'</pre>';



