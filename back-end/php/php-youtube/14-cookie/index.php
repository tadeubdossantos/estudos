<?php

	/* Cookie 
		→ Um arquivo criado pelo servidor no computador do usuário para armazenar algumas informações
		→ Um simples arquivo de texto que pode ser vizuliado pelo navegador
		→ Usado em sites de campanhas de marketing
		→ Sintaxe: setcookie(nome da cookie,valor a ser gravado,tempo em timestamp);
		→ Dica: não use cookies para gravar login e senha, uma vez que fica armazenado no computador do usuário
	*/

	//Criando cookies com validade de 1 dia (24 horas)
	setcookie('user','Tadeu', time()+3600);
	setcookie('email','tadeu@gmail.com', time()+3600);
	setcookie('ultima-pesquisa','tenis adidas', time()+3600); 
	
	//Dados dos cookies
	var_dump($_COOKIE);
	
	//Cancelar um cookie
	setcookie('email','tadeu@gmail.com', time()-3600);

	//Acessar um valor de cookie
	echo '<pre>Cookie de usuário: '.$_COOKIE['user'].'</pre>';

	